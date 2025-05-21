<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;


class MenuServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap services.
   */
  public function boot(): void
  {

    View::composer('*', function ($view) {

      $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
      $verticalMenuData = json_decode($verticalMenuJson, true); // เปลี่ยนตรงนี้

      $userRole = Session::get('position', 'guest');

      $menuList = $verticalMenuData['menu'] ?? []; // ป้องกัน error ถ้าไม่มี key menu

      // // ✅ กรองเฉพาะเมนูที่ตรงกับ position เท่านั้น
      // $filteredMenu = collect($menuList)->filter(function ($item) use ($userRole) {
      //   // ต้องมี key 'position' และ userRole ต้องอยู่ใน array นั้น
      //   return isset($item['position']) && in_array($userRole, $item['position']);
      // })->map(function ($item) use ($userRole) {
      //   // กรอง submenu เฉพาะที่มี position ตรงกันเท่านั้น
      //   if (isset($item['submenu'])) {
      //     $item['submenu'] = collect($item['submenu'])->filter(function ($sub) use ($userRole) {
      //       return isset($sub['position']) && in_array($userRole, $sub['position']);
      //     })->values()->all();
      //   }
      //   return $item;
      // })->values()->all();

      $filteredMenu = collect($menuList)->filter(function ($item) use ($userRole) {
        // กรองเมนูที่มี key 'position' เท่านั้น
        if (!isset($item['position'])) {
          return false; // ไม่เอาเมนูที่ไม่มี position กำหนด
        }

        // Admin ต้องเช็คว่า position ของเมนูมี 'Admin' หรืออื่นๆ รวมถึงตำแหน่งอื่น ๆ
        // โดยถ้า user เป็น Admin เราจะให้ดูเมนูที่ position มี 'Admin' หรืออื่นๆ ก็ได้ (คือไม่ต้องเช็คว่า userRole อยู่ใน position หรือเปล่า)
        // แต่เราต้องเช็คว่า userRole อยู่ใน position จริง ๆ (คือ Admin เห็นทุกเมนูที่มี position กำหนด)

        // ถ้าเป็น Admin ให้ดูเมนูที่มี position กำหนดไว้ (คือ return true เพราะ filter แล้วเอาเมนูที่มี position เท่านั้น)
        // แต่ถ้า userRole != Admin ให้ดูเฉพาะเมนูที่ userRole อยู่ใน position
        if ($userRole === 'Admin') {
          // เมนูนี้มี position แสดงว่าให้ Admin เห็น
          return true;
        } else {
          // สำหรับ user ทั่วไป ให้ตรวจสอบว่า userRole อยู่ใน position หรือไม่
          return in_array($userRole, $item['position']);
        }
      })->map(function ($item) use ($userRole) {
        if (isset($item['submenu'])) {
          $item['submenu'] = collect($item['submenu'])->filter(function ($sub) use ($userRole) {
            if (!isset($sub['position'])) {
              return false; // ไม่เอา submenu ที่ไม่มี position
            }

            if ($userRole === 'Admin') {
              return true; // Admin เห็น submenu ที่มี position
            } else {
              return in_array($userRole, $sub['position']);
            }
          })->values()->all();
        }
        return $item;
      })->values()->all();


      // dd(json_decode(json_encode(['menu' => $filteredMenu])));
      $view->with('menuData', json_decode(json_encode(['menu' => $filteredMenu])));

    });
  }


  private function filterMenuByRole($menuItems, $position)
  {
    $filtered = [];

    foreach ($menuItems as $item) {
      // ตรวจสอบ position
      if (isset($item->position)) {
        if (in_array($position, $item->position)) {
          // debug
          // \Log::info("Include menu: " . $item->name . " for role: " . $position);
          // ถ้ามี submenu ให้กรองซ้ำและแปลงเป็น object
          if (isset($item->submenu)) {
            $item->submenu = $this->filterMenuByRole($item->submenu, $position);
            // แปลงเป็น object
            $item->submenu = json_decode(json_encode($item->submenu));
          }
          $filtered[] = $item;
        }
      } else {
        // ถ้าไม่มี position กำกับ ให้แสดงเมนูนี้
        if (isset($item->submenu)) {
          $item->submenu = $this->filterMenuByRole($item->submenu, $position);
          $item->submenu = json_decode(json_encode($item->submenu));
        }
        $filtered[] = $item;
      }
    }

    \Log::info('Filtered menu count: ' . count($filtered));

    // แปลง filtered array เป็น object ก่อน return (ถ้าต้องการ)
    return $filtered;
  }



  private function arrayToObject($array)
  {
    return json_decode(json_encode($array));
  }

}
