<?php

use App\Http\Controllers\ShowroomController;
use App\Models\Showroom;
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
    return view('home', [
        'title' => 'Home'
    ]);
});


Route::get('/add', function () {
    return view('add', [
        'title' => 'AddCar'
    ]);
});

Route::get('/list', function () {
    return view('list', [
        'title' => 'MyItem'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register'
    ]);
});

Route::post('add', [ShowroomController::class, 'addCar'])->name('addcar.post');
Route::get('list', [ShowroomController::class, 'index'])->name('showCar');   