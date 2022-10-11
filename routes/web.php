<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
Route::get('/', [IndexController::class, 'index']);
Route::get('/About', [IndexController::class, 'About']);
Route::get('/blog', [IndexController::class, 'blog']);
Route::get('/quiz', [IndexController::class, 'quiz']);
Route::get('/courses', [IndexController::class, 'courses']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/login', [IndexController::class, 'login']);
Route::get('/register', [IndexController::class, 'register']);
Route::get('/verify', [IndexController::class, 'login']);


Route::get('/{id}', function () {
    return view('index.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
