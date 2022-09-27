<?php

use App\Http\Controllers\InsightController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/virtual-resources', [PlatformController::class, 'index']);
Route::get('/member', [MemberController::class, 'index']);

//Pendiente clasificar miembros


//DB Routes
Route::get('insight/create', [InsightController::class, 'create']);

Route::get('/insight/{id}', [InsightController::class, 'show_one']);