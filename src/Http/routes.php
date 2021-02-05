<?php

use Dcat\Admin\PermissionPlus\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::resource('auth/roles', Controllers\PermissionPlusController::class);
