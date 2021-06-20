<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DrunkardController;
use App\Http\Controllers\DrunkardsWebController;

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
Route::get('/', [DrunkardsWebController::class, 'showList'])->name('drunkards');

// 酔っぱらい登録画面を表示
Route::get('/drunkard/create', [DrunkardsWebController::class, 'showCreate'])->name('create');

// 酔っぱらい登録
Route::post('/drunkard/store', [DrunkardsWebController::class, 'exeStore'])->name('store');

// 酔っぱらい詳細画面を表示
Route::get('/drunkard/{id}', [DrunkardsWebController::class, 'showDetail'])->name('show');

// 酔っぱらい編集画面を表示
Route::get('/drunkard/edit/{id}', [DrunkardsWebController::class, 'showEdit'])->name('edit');

// 酔っぱらい更新
Route::post('/drunkard/update', [DrunkardsWebController::class, 'exeUpdate'])->name('update');

// 酔っぱらい削除
Route::post('/drunkard/delete/{id}', [DrunkardsWebController::class, 'exeDelete'])->name('delete');

// 酔っぱらい一覧取得
Route::get('/get',[DrunkardController::class, 'get']);