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

Route::get('/home', function(){

    return view('layouts.principal');
});

Route::get('/correcto' , function(){

    return view('correcto');

});


//FORMULARIO DE CONTACTO

Route::get('/contact', 'ContactController@show')->name('Contacta con nosotros');
Route::post('/contact',  'ContactController@mailToAdmin');

//LISTADO DE LOS PRODUCTOS

Route::get('/productos','productController@mostrarMarcas')->name('Catálogo');
Route::get('/productos/{marca}','productController@mostrarCategorias');
Route::get('/productos/{marca}/{modelo}', 'productController@mostrarProductos');

Route::get('admin', 'Auth\LoginController@showLoginForm')->name('Admin Panel');
Route::post('admin', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/adminpanel', 'Auth\loginController@adminpanel');


Auth::routes();

Route::get('/adminpanel', 'HomeController@index')->name('Panel de administrador');

Route::group(['middleware' => 'auth'], function () {

// Rutas de las altas en el catálogo

//Altas

Route::get('/alta_marca','adminPanelController@marcasAltaForm');
Route::post('/alta_marca','adminPanelController@altaMarcas');


Route::get('/alta_modelo', 'adminPanelController@modelosAltaForm');
Route::post('/alta_modelo', 'adminPanelController@altaModelos');

//Bajas

Route::get('/borrar_marca', 'adminPanelController@marcasBajaForm');
Route::post('/borrar_marca', 'adminPanelController@borrarMarcas');

});