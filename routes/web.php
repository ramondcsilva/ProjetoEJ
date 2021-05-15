<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\FederationController;
use App\Http\Controllers\AuthController;

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

Route::get('/enterprise/list/loged', [EnterpriseController::class, 'indexLoged'])->middleware('auth');
Route::post('/enterprise/list/loged', [EnterpriseController::class, 'selectValueLoged'])->name('/enterprise/list/loged')->middleware('auth');

Route::get('/enterprise/list', [EnterpriseController::class, 'index']);
Route::post('/enterprise/list', [EnterpriseController::class, 'selectValue'])->name('/enterprise/list');

Route::get('/federation', [FederationController::class, 'create'])->middleware('auth');
Route::post('/federation/new', [FederationController::class, 'store'])->middleware('auth');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/auth', [AuthController::class, 'login'])->name('/login/auth');
Route::get('/home', [AuthController::class, 'dashboard'])->name('homeLoged')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');