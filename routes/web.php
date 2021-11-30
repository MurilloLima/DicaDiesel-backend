<?php

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
});
//routes admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'Panel\Admin\HomeController@index')->name('admin.index');

    //iveco
    Route::get('iveco/', 'Panel\Admin\IvecoController@index')->name('iveco.index');
    Route::get('iveco/result/', 'Panel\Admin\IvecoController@result')->name('iveco.result');

    //mercedes
    Route::get('mercedes-benz/', 'Panel\Admin\MercedesController@index')->name('mercedes.index');

    //scania
    Route::get('scania/', 'Panel\Admin\ScaniaController@index')->name('scania.index');

    //volvo
    Route::get('volvo/', 'Panel\Admin\VolvoController@index')->name('volvo.index');

    // user
    Route::get('usuario/senha/', 'Panel\Admin\User\PasswordController@index')->name('user.password');
    Route::post('usuario/senha/update/', 'Panel\Admin\User\PasswordController@update')->name('user.password.update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
