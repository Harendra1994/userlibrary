<?php
use Library\UserRolePermission\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users/{user}/assign-role', [UserController::class, 'assignRole']);
