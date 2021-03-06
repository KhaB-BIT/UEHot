<?php

use App\Http\Controllers\AddPostPageController;
use App\Http\Controllers\User\LoginPageController;
use App\Http\Controllers\RegisterPageController;
use App\Http\Controllers\NamePageController;
use App\Http\Controllers\User\HomePageController;
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
    return view('MainPage.index');
});
