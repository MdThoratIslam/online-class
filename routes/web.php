<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LocaleController;

use Illuminate\Http\Request;
use App\Models\District;
Route::get('/', function () {return view('frontend.pages.home.index');})->name('/');
Route::post('/locale', LocaleController::class)->name('locale.change');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function()
{
    Route::resource('roles',    RoleController::class);
    //need permission to resource route
    Route::get('permissions', [RoleController::class, 'getPermissions'])->name('permissions');
    Route::resource('users',    UserController::class);
});

Route::post('/get-district', function (Request $request)
{
    $division_id = $request->division_id;
    $districts = get_district(null,$division_id);
    return response()->json($districts);
})->name('get.district');

Route::post('/get-police_station',function (Request $request)
{
    $district_id = $request->district_id;
    $police_stations = get_police_station(null,$district_id);
    return response()->json($police_stations);
})->name('get.police_station');



Route::post('/get-post_office', function (Request $request)
{
    $police_station_id = $request->police_station_id;
    $post_offices = get_post_office(null,$police_station_id);
    return response()->json($post_offices);
})->name('get.post_office');
