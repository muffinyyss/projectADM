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

      $userRole = Session::get('roles', 'guest');

      $menuList = $verticalMenuData['menu'] ?? []; // ป้องกัน error ถ้าไม่มี key menu

      // ✅ กรองเฉพาะเมนูที่ตรงกับ roles เท่านั้น
      $filteredMenu = collect($menuList)->filter(function ($item) use ($userRole) {
        // ต้องมี key 'roles' และ userRole ต้องอยู่ใน array นั้น
        return isset($item['roles']) && in_array($userRole, $item['roles']);
      })->map(function ($item) use ($userRole) {
        // กรอง submenu เฉพาะที่มี roles ตรงกันเท่านั้น
        if (isset($item['submenu'])) {
          $item['submenu'] = collect($item['submenu'])->filter(function ($sub) use ($userRole) {
            return isset($sub['roles']) && in_array($userRole, $sub['roles']);
          })->values()->all();
        }
        return $item;
      })->values()->all();

      // dd(json_decode(json_encode(['menu' => $filteredMenu])));
      $view->with('menuData', json_decode(json_encode(['menu' => $filteredMenu])));

    });
  }


  private function filterMenuByRole($menuItems, $roles)
  {
    $filtered = [];

    foreach ($menuItems as $item) {
      // ตรวจสอบ roles
      if (isset($item->roles)) {
        if (in_array($roles, $item->roles)) {
          // debug
          // \Log::info("Include menu: " . $item->name . " for role: " . $roles);
          // ถ้ามี submenu ให้กรองซ้ำและแปลงเป็น object
          if (isset($item->submenu)) {
            $item->submenu = $this->filterMenuByRole($item->submenu, $roles);
            // แปลงเป็น object
            $item->submenu = json_decode(json_encode($item->submenu));
          }
          $filtered[] = $item;
        }
      } else {
        // ถ้าไม่มี roles กำกับ ให้แสดงเมนูนี้
        if (isset($item->submenu)) {
          $item->submenu = $this->filterMenuByRole($item->submenu, $roles);
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
