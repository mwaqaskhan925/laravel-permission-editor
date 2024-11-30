<?php
use Mwaqaskhan925\LaravelPermissionEditor\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Mwaqaskhan925\LaravelPermissionEditor\Http\Controllers\PermissionController;

Route::resource('roles', RoleController::class)->middleware("spatie-permission");
Route::resource('permissions', PermissionController::class);