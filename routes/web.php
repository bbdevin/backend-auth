<?php

use App\Http\Controllers\Api\SocialLoginController;
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
    return view('welcome');
})->name('welcome');


Route::get('api/auth/{provider}/redirect', [SocialLoginController::class, 'redirectToProvider'])
    ->name('auth.socialite.redirect');

Route::get('api/auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback'])
    ->name('auth.socialite.callback');
