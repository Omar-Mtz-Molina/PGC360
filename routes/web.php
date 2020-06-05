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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('login.index');
});

Route::post('ingresar', 'LoginController@ingresar');

Route::get('home', 'LoginController@home')->name('home');

Route::get('/inicio', function (){
if (session()->has('tipo')) {
    $tipo = session('tipo');
	if($tipo==1){
    	return view('vendedor.home');
	}
	if($tipo==15){
    	return view('ventasexpress.home');
	}
}else{
	return view('login.inicio');
}
});

Route::get('getVendedor', 'VendedorController@getVendedor');

Route::get('logout', 'LoginController@logout');

Route::get('pedido', 'PedidosController@index');

