<?php

use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    $allMessages = Message::all();
    return view('welcome', compact('allMessages'));
})->name('welcome');

Route::name('user.')->group(function(){

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('welcome'));
        }
        return view('login');
    })->name('login');
});

Route::get('/registration', function(){
    if(Auth::check()){
        return redirect(route('welcomeп'));
    }
    return view('registration');
})->name('registration');

Route::get('/logout', function(){
    Auth::logout();
    return redirect(route('welcome'));
})->name('logout');

Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

Route::name('comment.')->group(function(){
    Route::post('/comment/create', [\App\Http\Controllers\CommentController::class, 'create'])->name('create');
    Route::post('/comment/delete');
});