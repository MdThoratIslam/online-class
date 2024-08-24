<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {return view('frontend.welcome');});

Auth::routes();
Route::get('/home', [
    HomeController::class, 'index'
])->name('home');

Route::group(['middleware' => ['auth']], function()
{
    Route::resource('roles',    RoleController::class);
    //need permission to resource route
    Route::get('permissions', [RoleController::class, 'getPermissions'])->name('permissions');
    Route::resource('users',    UserController::class);
});
