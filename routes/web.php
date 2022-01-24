<?php

use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\EditController;


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
    return view('auth.login');
});

Route::get('reglaravel', function(){
    return view('register');
});

Route::get('home', function(){
    return view('pages.home');
});

Route::get('cod', function(){
    return view('pages.cod');
});

Route::get('dota', function(){
    return view('pages.dota');
});

Route::get('egame', function(){
    return view('pages.egame');
});

Route::get('entrafest', function(){
    return view('pages.entrafest');
});

Route::get('lol', function(){
    return view('pages.lol');
});

Route::get('ml', function(){
    return view('pages.ml');
});

Route::get('valo', function(){
    return view('pages.valo');
});

Route::get('profile', function(){
    return view('profile.profile');
});

Route::get('profile', [EditController::class, 'Profile'])-> name('profile');

Route::post('edit_profile', [EditController::class, 'editData']);

Route::get('edit-profile', [EditController::class, 'EditProfile']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('store_image/fetch_image/{id}', 'EditController@index');