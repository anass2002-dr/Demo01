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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name("home.home");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");
Route::get('/service', [HomeController::class, 'service'])->name("home.service");
Route::get('/login', [HomeController::class, 'login'])->name("home.login");
Route::post('/login_post', [HomeController::class, 'login_post'])->name("home.login_post");
Route::get('/register', [HomeController::class, 'register'])->name("home.register");
Route::post('/register_post', [HomeController::class, 'register_post'])->name("home.register_post");
