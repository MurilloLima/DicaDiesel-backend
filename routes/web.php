<?php

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


//dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'Panel\Dashboard\HomeController@index')->name('dashboard.index');

    //clientes
    Route::get('clientes/', 'Panel\Dashboard\ClientController@index')->name('client.index');

    //marcas
    Route::get('marcas/', 'Panel\Dashboard\MarcaController@index')->name('marca.index');
    Route::get('marca/create/', 'Panel\Dashboard\MarcaController@create')->name('marca.create');
    Route::post('marca/store/', 'Panel\Dashboard\MarcaController@store')->name('marca.store');
    Route::get('marca/edit/{id}', 'Panel\Dashboard\MarcaController@edit')->name('marca.edit');
    Route::post('marca/update/{id}', 'Panel\Dashboard\MarcaController@update')->name('marca.update');
    Route::get('marca/delete/{id}', 'Panel\Dashboard\MarcaController@delete')->name('marca.delete');

    //modelos
    Route::get('modelos/', 'Panel\Dashboard\ModeloController@index')->name('modelo.index');
    Route::get('modelo/create/', 'Panel\Dashboard\ModeloController@create')->name('modelo.create');
    Route::post('modelo/store/', 'Panel\Dashboard\ModeloController@store')->name('modelo.store');
    Route::get('modelo/edit/{id}', 'Panel\Dashboard\ModeloController@edit')->name('modelo.edit');
    Route::post('modelo/update/{id}', 'Panel\Dashboard\ModeloController@update')->name('modelo.update');
    Route::get('modelo/delete/{id}', 'Panel\Dashboard\ModeloController@delete')->name('modelo.delete');

    //Manual
    Route::get('modelo/manual/{id}', 'Panel\Dashboard\IndiceController@index')->name('modelo.indice.index');
    Route::get('modelo/manual/create/', 'Panel\Dashboard\IndiceController@create')->name('modelo.indice.create');
    Route::post('modelo/manual/store/', 'Panel\Dashboard\IndiceController@store')->name('modelo.indice.store');
    Route::post('modelo/manual/udpate/{id}', 'Panel\Dashboard\IndiceController@update')->name('modelo.indice.update');
    Route::get('modelo/manual/delete/{id}', 'Panel\Dashboard\IndiceController@delete')->name('modelo.indice.delete');



});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
