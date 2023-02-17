<?php


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
/*
Route::get('/', function () {
    return view('login');
});
*/

Auth::routes();
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/connexion', [App\Http\Controllers\Auth\LoginController::class, 'checklogin'])->name('connexion');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('/login', [App\Http\Controllers\Auth\RegisterController::class, 'login'])->name('login');

Route::get('/profil', [App\Http\Controllers\Frontend\FrontendController::class, 'profil'])->name('profil');