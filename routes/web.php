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
Route::group(['middleware' => ['guest']], function(){
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('showlogin');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
});

Route::group(['middleware' => ['auth']], function(){
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/main', function () {
        return view('contenido/contenido');
    })->name('main');

    Route::group(['middleware' => ['Almacenero']], function(){
        Route::get('/categorias', 'CategoriaController@index')->name('index');
        Route::post('/categoria/registrar', 'CategoriaController@store')->name('registrar');
        Route::put('/categoria/actualizar', 'CategoriaController@update')->name('actualizar');
        Route::put('/categoria/desactivar', 'CategoriaController@desactivar')->name('desactivar');
        Route::put('/categoria/activar', 'CategoriaController@activar')->name('activar');
        Route::get('/categoria/selectCategoria', 'CategoriaController@selectCategoria')->name('categorias');
        
        Route::get('/articulo', 'ArticuloController@index')->name('index');
        Route::post('/articulo/registrar', 'ArticuloController@store')->name('registrar');
        Route::put('/articulo/actualizar', 'ArticuloController@update')->name('actualizar');
        Route::put('/articulo/desactivar', 'ArticuloController@desactivar')->name('desactivar');
        Route::put('/articulo/activar', 'ArticuloController@activar')->name('activar');
        
        Route::get('/proveedor', 'ProveedorController@index')->name('index');
        Route::post('/proveedor/registrar', 'ProveedorController@store')->name('registrar');
        Route::put('/proveedor/actualizar', 'ProveedorController@update')->name('actualizar');
    
    });

    Route::group(['middleware' => ['Vendedor']], function(){
        Route::get('/cliente', 'ClienteController@index')->name('index');
        Route::post('/cliente/registrar', 'ClienteController@store')->name('registrar');
        Route::put('/cliente/actualizar', 'ClienteController@update')->name('actualizar');
    });
 
    Route::group(['middleware' => ['Administrador']], function(){
        Route::get('/rol', 'RollController@index')->name('index');
        Route::get('/rol/selectRol', 'RollController@selectRol')->name('selectRol');
    
        Route::get('/user', 'UserController@index')->name('index');
        Route::post('/user/registrar', 'UserController@store')->name('registrar');
        Route::put('/user/actualizar', 'UserController@update')->name('actualizar');
        Route::put('/user/desactivar', 'UserController@desactivar')->name('desactivar');
        Route::put('/user/activar', 'UserController@activar')->name('activar');

        Route::get('/categorias', 'CategoriaController@index')->name('index');
        Route::post('/categoria/registrar', 'CategoriaController@store')->name('registrar');
        Route::put('/categoria/actualizar', 'CategoriaController@update')->name('actualizar');
        Route::put('/categoria/desactivar', 'CategoriaController@desactivar')->name('desactivar');
        Route::put('/categoria/activar', 'CategoriaController@activar')->name('activar');
        Route::get('/categoria/selectCategoria', 'CategoriaController@selectCategoria')->name('categorias');
        
        Route::get('/articulo', 'ArticuloController@index')->name('index');
        Route::post('/articulo/registrar', 'ArticuloController@store')->name('registrar');
        Route::put('/articulo/actualizar', 'ArticuloController@update')->name('actualizar');
        Route::put('/articulo/desactivar', 'ArticuloController@desactivar')->name('desactivar');
        Route::put('/articulo/activar', 'ArticuloController@activar')->name('activar');
        
        Route::get('/proveedor', 'ProveedorController@index')->name('index');
        Route::post('/proveedor/registrar', 'ProveedorController@store')->name('registrar');
        Route::put('/proveedor/actualizar', 'ProveedorController@update')->name('actualizar');

        Route::get('/cliente', 'ClienteController@index')->name('index');
        Route::post('/cliente/registrar', 'ClienteController@store')->name('registrar');
        Route::put('/cliente/actualizar', 'ClienteController@update')->name('actualizar');
        Route::delete('/cliente/actualizar', 'ClienteController@update')->name('actualizar');
    });
   

});


// Auth::routes();


