# Laravel Permission Editor

This is a package that gives a very simple visual UI for managing roles/permissions for [Spatie Laravel Permission]() package.

## How to Use

1. Make sure to install the spatie/laravel-permission package first and configure it
2. Run `composer require laraveldaily/laravel-permission-editor`
3. Run `php artisan vendor:publish --provider="Mwaqaskhan925\LaravelPermissionEditor\PermissionEditorServiceProvider"` to publish the Assets and Config
4. Launch `/permission-editor/roles` in your browser

**Notice**: you may want to secure the routes by adding extra middleware like `auth`, you can do it in the published `config/permission-editor.php` file.
