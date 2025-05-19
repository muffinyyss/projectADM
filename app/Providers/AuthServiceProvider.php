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

    Gate::define('view-sale-menu', function () {
      $site = session('site');
      $role = session('role');
      return $site === 'esm' && $role === 'sale';
    });

    Gate::define('view-admin-menu', function () {
      return session('role') === 'admin';
    });
  }
}
