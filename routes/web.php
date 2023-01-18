<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\authcontroller;
use Illuminate\Support\Facades\Route;
use App\Mail\MyTestEmail;

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
    return redirect('index');
});
Route::get('dem', function () {
    return view('users');
});
Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('postupload',[authcontroller::class,'post']);
    Route::get('index',[authcontroller::class,'index']);
    Route::post('submitcomment',[authcontroller::class,'submitcomment']);
    Route::get('showcomment',[authcontroller::class,'showcomment']);
    Route::get('pro',[authcontroller::class,'profile']);
    Route::get('delete/{id}',[authcontroller::class,'delete']);
    Route::get('favt/{id}',[authcontroller::class,'favt']);
    Route::get('AddToFav',[authcontroller::class,'AddToFav']);
    Route::get('AddToFavrt/{id}',[authcontroller::class,'AddToFavrt']);
    Route::get('view/{id}',[authcontroller::class,'view']);
    Route::get('trend',[authcontroller::class,'trend']);
    Route::get('upload',[authcontroller::class,'upload']);
    Route::get('demo/{id}',[authcontroller::class,'demo']);
    Route::get('follower/{id}',[authcontroller::class,'follower']);
    Route::get('fetchdata',[authcontroller::class,'fetchdata']);
    Route::get('Updatefollower/{id}',[authcontroller::class,'Updatefollower']);
});

require __DIR__.'/auth.php';
