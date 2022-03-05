<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;
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



Auth::routes();

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});


Route::post('follow/{user}',[\App\Http\Controllers\FollowsController::class,'store']);
Route::get('/', [PostsController::class,'index']);
Route::get('/p/create',[PostsController::class, 'create']);
Route::post('/p',[PostsController::class, 'store']);
Route::get('/p/{post}',[PostsController::class, 'show']);


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
