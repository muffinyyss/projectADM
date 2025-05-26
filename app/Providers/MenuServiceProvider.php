<?php

namespace App\Providers;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Services\MenuService;

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
  // public function boot(): void
  // {

  //   View::composer('*', function ($view) {

  //     $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
  //     $verticalMenuData = json_decode($verticalMenuJson, true);

  //     $userRole = Session::get('position', 'guest');

  //     $menuList = $verticalMenuData['menu'] ?? []; // ป้องกัน error ถ้าไม่มี key menu

  //     $filteredMenu = collect($menuList)->filter(function ($item) use ($userRole) {
  //       // กรองเมนูที่มี key 'position' เท่านั้น
  //       if (!isset($item['position'])) {
  //         return false; // ไม่เอาเมนูที่ไม่มี position กำหนด
  //       }

  //       if ($userRole === 'Admin') {
  //         // เมนูนี้มี position แสดงว่าให้ Admin เห็น
  //         return true;
  //       } else {
  //         // สำหรับ user ทั่วไป ให้ตรวจสอบว่า userRole อยู่ใน position หรือไม่
  //         return in_array($userRole, $item['position']);
  //       }
  //     })->map(function ($item) use ($userRole) {
  //       if (isset($item['submenu'])) {
  //         $item['submenu'] = collect($item['submenu'])->filter(function ($sub) use ($userRole) {
  //           if (!isset($sub['position'])) {
  //             return false; // ไม่เอา submenu ที่ไม่มี position
  //           }

  //           if ($userRole === 'Admin') {
  //             return true; // Admin เห็น submenu ที่มี position
  //           } else {
  //             return in_array($userRole, $sub['position']);
  //           }
  //         })->values()->all();
  //       }
  //       return $item;
  //     })->values()->all();


  //     // dd(json_decode(json_encode(['menu' => $filteredMenu])));
  //     $view->with('menuData', json_decode(json_encode(['menu' => $filteredMenu])));

  //   });
  // }

  public function boot(): void
  {
    View::composer('*', function ($view) {

      $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
      $verticalMenuData = json_decode($verticalMenuJson, true);

      $userRole = Session::get('position', 'guest');

      $menuList = $verticalMenuData['menu'] ?? []; // ป้องกัน error ถ้าไม่มี key menu

      $filteredMenu = collect($menuList)->filter(function ($item) use ($userRole) {
        // กรองเมนูที่มี key 'position' เท่านั้น
        if (!isset($item['position'])) {
          return false; // ไม่เอาเมนูที่ไม่มี position กำหนด
        }

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

      // ✅ เพิ่มเฉพาะตรงนี้ — ไม่ยุ่งกับโค้ดเดิมเลย

      $variables = [
        'fullname_th' => Session::get('fullname_th', 'Guest User'),
        'username' => Session::get('username', 'guest'),
      ];

      $replaceMenuVariables = function (array $menu) use (&$replaceMenuVariables, $variables) {
        foreach ($menu as &$item) {
          if (isset($item['url'])) {
            foreach ($variables as $key => $value) {
              $item['url'] = str_replace('{{ ' . $key . ' }}', urlencode($value), $item['url']);
            }
          }

          if (isset($item['submenu'])) {
            $item['submenu'] = $replaceMenuVariables($item['submenu']);
          }
        }
        return $menu;
      };

      // เรียกใช้ฟังก์ชันเพื่อแทนค่าตัวแปร
      $filteredMenu = $replaceMenuVariables($filteredMenu);

      // ✅ ส่งไปยัง view ตามเดิม
      $view->with('menuData', json_decode(json_encode(['menu' => $filteredMenu])));
    });
  }



  // public function boot(): void
  // {
  //   View::composer('*', function ($view) {
  //     $menuData = AuthController::getMenuJson();
  //     $view->with('menuData', $menuData);
  //   });
  // }

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
