<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\FederationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('home.home');
})->name('/');

Route::get('/enterprise', [EnterpriseController::class, 'create'])->middleware('auth');
Route::post('/enterprise/new', [EnterpriseController::class, 'store'])->middleware('auth');

Route::get('/services', [AuthController::class, 'servicesView'])->name('services');;

Route::get('/enterprise/list', [EnterpriseController::class, 'index']);
Route::post('/enterprise/list', [EnterpriseController::class, 'selectValue'])->name('/enterprise/list');
Route::post('/enterprise/list/unique', [EnterpriseController::class, 'listUnique'])->name('/enterprise/list/unique');

Route::get('/federation', [FederationController::class, 'create'])->middleware('auth');
Route::post('/federation/new', [FederationController::class, 'store'])->middleware('auth');

Route::get('/home/login', [AuthController::class, 'showLogin'])->name('home.login');
Route::post('/login/auth', [AuthController::class, 'login'])->name('/login/auth');
Route::get('/home', [AuthController::class, 'dashboard'])->name('homeLoged')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Auth::routes();