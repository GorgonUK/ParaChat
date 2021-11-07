<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use Illuminate\http\Response;
use App\Events\ChatTrigger;

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

        // Retrieve a piece of data from the session...
        $value = session('key');

        // Specifying a default value...
        $value = session('key', 'default');
    
        // Store a piece of data in the session...
        session(['key' => 'value']);

    return view('home');
});

Route::get('/chat', function () {
    //dd($request);
    if (session("hasUsername")) {
        return view('chat');
    }
    return redirect()->back();
});
//get ip
//Route::get('/', 'App\Http\Controllers\HomeController@getIp')->name('ip');
Route::post('ajaxRequest', 'App\Http\Controllers\HomeController@ajaxRequestPost')->name('ajaxRequest');
// Route::post('ajaxRequest', [HomeController::class, 'ajaxRequest']);

Route::post('/send-message', function (Request $request) {
    event(new ChatTrigger(
        $request->input('username'),
        $request->input('message')
    ));
});


