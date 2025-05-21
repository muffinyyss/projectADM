<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array<class-string, class-string>
   */
  protected $policies = [
    // 'App\Models\Model' => 'App\Policies\ModelPolicy',
  ];

  /**
   * Bootstrap any authentication / authorization services.
   */
  public function boot(): void
  {
    $this->registerPolicies();

    // Gate::define('view-sale-menu', function () {
    //   $site = session('site');
    //   $position = session('position');
    //   $allowedPositions = ['Sales Representative', 'Senior Sales']; // เพิ่มตำแหน่งที่อนุญาต

    //   return $site === 'spcg' && in_array($position, $allowedPositions);
    // });

    // Gate::define('view-admin-menu', function () {
    //   return session('position') === 'Admin';
    // });

    Gate::define('view-sale-menu', function () {
      $site = session('site');
      $position = session('position');

      $allowedPositions = ['Sales Representative', 'Senior Sales', 'Admin'];
      // รองรับทั้ง string และ array
      $positions = is_string($position) ? explode(',', $position) : (array) $position;

      return $site === 'spcg' && collect($positions)->intersect($allowedPositions)->isNotEmpty();
    });

    Gate::define('view-admin-menu', function () {
      $position = session('position');
      $positions = is_string($position) ? explode(',', $position) : (array) $position;

      return in_array('Admin', $positions);
    });



  }
}
