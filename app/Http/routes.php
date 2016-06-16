<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'DatosController@welcome');
Route::get('pdf', function(){

$pdf=PDF::loadView('vista');
return $pdf->download('archivo.pdf');
});


//para los usuarios
Route::group(['prefix'=> 'admin'],function(){

	Route::resource('users', 'UserController');//tomar los metodos de un controlador y lo obtine como ruta
	Route::get('users/{id}/destroy',[//ruta para eliminar

			'uses'=>'UserController@destroy',
			'as'=>'admin.users.destroy'
		]);


	Route::resource('divices','DiviceController');

	
	Route::get('divices/{id}/destroy',[//ruta para eliminar

			'uses'=>'DiviceController@destroy',
			'as'=>'admin.divices.destroy'
		]);

	Route::resource('datos','DatosController');

	Route::resource('sensores','SensoresController');
	Route::resource('graficas','GraficasController');


});



Route::auth();

Route::get('/home', 'HomeController@index');
