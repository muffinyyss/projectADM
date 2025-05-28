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

  public function boot(): void
  {
    View::composer('*', function ($view) {

      $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
      $verticalMenuData = json_decode($verticalMenuJson, true);

      $userRole = Session::get('position', 'guest');
      $fullname = Session::get('fullname_th', 'Guest');
      $fullname_en = Session::get('fullname_en', 'Guest');
      $fullnameFormatted = '"เดือนนี้","' . 'คุณ' . $fullname . '"';
      $variables = [
        'fullname_th' => $fullnameFormatted,
        'username' => Session::get('username', 'guest'),
      ];

      $menuList = $verticalMenuData['menu'] ?? [];

      // ฟังก์ชันสำหรับแทนค่าตัวแปรใน URL
      $replaceMenuVariables = function (array $menu) use (&$replaceMenuVariables, $variables) {
        foreach ($menu as &$item) {
          if (isset($item['url'])) {
            foreach ($variables as $key => $value) {
              $item['url'] = str_replace('{' . $key . '}', $value, $item['url']);
            }
          }

          if (isset($item['submenu'])) {
            $item['submenu'] = $replaceMenuVariables($item['submenu']);
          }
        }
        return $menu;
      };

      // กรองเมนูตามตำแหน่ง
      $filteredMenu = collect($menuList)->filter(function ($item) use ($userRole, $fullname_en) {

        // เช็คตำแหน่งเมนูหลักก่อน
        $hasPosition = isset($item['position']) && ($userRole === 'Admin' || in_array($userRole, $item['position']));

        // เช็ค submenu ว่ามี user อยู่ใน submenu ใดไหม
        $hasUserInSubmenu = false;
        if (isset($item['submenu'])) {
          foreach ($item['submenu'] as $sub) {
            if (isset($sub['users']) && is_array($sub['users']) && in_array($fullname_en, $sub['users'])) {
              $hasUserInSubmenu = true;
              break;
            }
          }
        }

        return $hasPosition || $hasUserInSubmenu;
      })->map(function ($item) use ($userRole, $fullname_en) {
        // กรอง submenu ตามตำแหน่งและ users
        if (isset($item['submenu'])) {
          $item['submenu'] = collect($item['submenu'])->filter(function ($sub) use ($userRole, $fullname_en) {
            // ตำแหน่งผ่านหรือ admin
            $positionOk = isset($sub['position']) && ($userRole === 'Admin' || in_array($userRole, $sub['position']));
            // ชื่อผู้ใช้อยู่ใน users ของ submenu
            $userOk = isset($sub['users']) && is_array($sub['users']) && in_array($fullname_en, $sub['users']);

            return $positionOk || $userOk;
          })->values()->all();
        }
        return $item;
      })->values()->all();


      // 🔁 แทนค่าตัวแปรใน URL เช่น {fullname_th}
      $filteredMenu = $replaceMenuVariables($filteredMenu);
      // dd(json_decode(json_encode(['menu' => $filteredMenu])));
      // ตรวจสอบผลลัพธ์ (ลบออกเมื่อเสร็จ)
      // dd($filteredMenu);

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

    // \Log::info('Filtered menu count: ' . count($filtered));

    // แปลง filtered array เป็น object ก่อน return (ถ้าต้องการ)
    return $filtered;
  }



  private function arrayToObject($array)
  {
    return json_decode(json_encode($array));
  }

}
