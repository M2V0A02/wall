<?php
namespace App;
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

Route::get('/', [\App\Http\Controllers\Controller::class, 'welcome'])->name('welcome');

Route::name('user.')->group(function(){
    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
    Route::get('/registration', [\App\Http\Controllers\RegisterController::class, 'registration'])->name('registration');
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'postLogin']);
});

Route::name('comment.')->group(function(){
    Route::post('/comment/create', [\App\Http\Controllers\CommentController::class, 'create'])->name('create');
    Route::post('/comment/delete', [\App\Http\Controllers\CommentController::class, 'delete'])->name('delete');
});