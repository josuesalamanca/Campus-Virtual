<?php

use App\Http\Controllers\InsightController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// view routes

Route::get('/', [PagesController::class,'index']);
Route::get('/virtual-resources', [PagesController::class,'virtualResorces']);
Route::get('/insights-list', [PagesController::class,'insightList']);
Route::get('/member/{id}', [PagesController::class,'member']);

//admin
Route::get('/home', [PagesController::class,'admin']);
Route::get('/admin/create', [PagesController::class,'adminCreate']);
Route::view('/register-admin','auth.register');
Route::view('/login-admin','auth.login');

Route::resource('/admin/insights', InsightController::class);
Route::resource('/admin/platforms', PlatformController::class);
Route::resource('/admin/members', MemberController::class);
//Pendiente clasificar miembros


//DB Routes
//Route::get('insight/create', [InsightController::class, 'create']);

 Route::get('/insight/{id}', [InsightController::class, 'get_one']);

Auth::routes();



