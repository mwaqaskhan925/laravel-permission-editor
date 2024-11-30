<?php

namespace Mwaqaskhan925\LaravelPermissionEditor;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Mwaqaskhan925\LaravelPermissionEditor\Commands\MakeTaskCommand;
use Mwaqaskhan925\LaravelPermissionEditor\Http\Middleware\SpatiePermissionMiddleware;

class PermissionEditorServiceProvider extends ServiceProvider
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
        //
      
            Route::prefix('permission-editor')
                ->as('permission-editor.')
                ->middleware(config('permission-editor.middleware', ['web', 'spatie-permission']))
                ->group(function () {
                    $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
                });
                $this->loadViewsFrom(__DIR__ . '/../resources/views', 'permission-editor');
                if ($this->app->runningInConsole()) {
                    $this->publishes([
                        __DIR__.'/../resources/assets' => public_path('permission-editor'),
                    ], 'permission-editor-assets');
                }

                $router = $this->app->make(Router::class);
                $router->aliasMiddleware('spatie-permission', SpatiePermissionMiddleware::class);

                $this->publishes([
                    __DIR__.'/../config/permission-editor.php' => config_path('permission-editor.php'),
                ], 'permission-editor-config');

                if ($this->app->runningInConsole()) {
                    $this->publishes(...); // assets and config
         
                    // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
                    $this->publishes([
                        __DIR__ . '/../database/migrations/2024_11_30_122328_create_tasks_table.php' =>
                        database_path('migrations/' . date('Y_m_d_His', time()) . '_create_tasks_table.php'),
         
                        // More migration files here
                    ], 'migrations');

                    $this->commands([
                        MakeTaskCommand::class,
                    ]);
                }
            
    }
}
