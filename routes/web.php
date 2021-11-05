<?php
use App\Http\Controllers\HomeController; 
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/chat', function () {
    return view('chat');
});
Route::get('ajaxRequest', [HomeController::class, 'ajaxRequest']);
Route::post('ajaxRequest', 'App\Http\Controllers\HomeController@ajaxRequestPost')->name('ajaxRequest.post');
// Route::post('ajaxRequest', [HomeController::class, 'ajaxRequest']);


