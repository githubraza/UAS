<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/signup', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/signup/users', [UserController::class, 'sign_up']);
Route::post('/login/users', [UserController::class, 'log_in']);

Route::group(['middleware'=>['auth']], function(){
    Route::get('/home', [BookController::class, 'index']);
    Route::get('/logout', function () {
        Session::flush();
        Session::forget('user');
        Auth::logout();
        return view('logout');
    });

    Route::get('/book/{title}', [BookController::class, 'getBookDetail']);
    Route::get('/book/{title}/rent', [UserController::class, 'add_to_order']);
    Route::get('/cart', [UserController::class, 'get_order_data']);
    Route::get('/delete/{id}',[UserController::class, 'delete_order']);
    Route::get('/checkout', [UserController::class, 'submit_rent']);

    Route::get('/profile', function(){
        return view('profile');
    });
    Route::post('/profile/update', [UserController::class, 'update_profile']);
    Route::group(['middleware'=>['admin']], function(){
        Route::get('/account/maintenance', [AdminController::class, 'index']);
        Route::get('/delete/user/{id}', [AdminController::class, 'delete_user']);
        Route::get('/account/maintenance/{id}', [AdminController::class, 'update_index']);
        Route::put('/account/maintenance/{id}/update', [AdminController::class, 'update']);
    });

});
