<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DrunkardController;

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

// 酔っぱらい一覧画面を表示
Route::get('/', 'DrunkardsWebController@showList')->name('drunkards');

// Route::get('/get', 'DrunkardController@get');
Route::get('/get',[DrunkardController::class, 'get']);