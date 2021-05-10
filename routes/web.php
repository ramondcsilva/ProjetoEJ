<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\FederationController;
use App\Http\Controllers\UserController;

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
});

Route::get('/enterprise', [EnterpriseController::class, 'create']);
Route::post('/enterprise/new', [EnterpriseController::class, 'store']);
Route::get('/enterprise/list', [EnterpriseController::class, 'index']);
//Route::post('selectValue')->uses('Enterprise@Controller@meuMetodo')->name('minharota');

Route::get('/federation', [FederationController::class, 'create']);
Route::post('/federation/new', [FederationController::class, 'store']);

Route::get('/login', [UserController::class, 'index']);
//Route::get('/homeLogin', [FederationController::class, 'index']);