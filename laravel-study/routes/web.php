<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hello-world',fn()=>'hello-world');

Route::get('hello-w',fn()=>view('hello_world'));

Route::get('hello',fn()=>view('hello',['name'=>'数井','course'=>'プログラミング']));

Route::get('/' ,fn()=>view('index'));

Route::get('curriculum',fn()=>view('curriculum'));

// 世界の時間
Route::get('/world-time',[UtilityController::class,'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class,'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall',[GameController::class,'monty']);

Route::get('/form',[RequestSampleController::class,'form']);

Route::get('/query-strings',[RequestSampleController::class,'queryStrings']);

Route::get('/users/{id}',[RequestSampleController::class,'profile']);

Route::get('/productsArchive/{category}/{year}',[RequestSampleController::class,'productsArchive']);

Route::post('/login',[RequestSampleController::class,'login'])->name('login');

Route::get('/login',[RequestSampleController::class,'loginForm']);

Route::resource('/event',EventController::class)->only(['create','store']);