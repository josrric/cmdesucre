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

/* RUTAS PUBLICAS
==========================================*/
Route::group(['prefix' => '/'], function(){

	Route::get('', function () {
    	return view('main');
	});

	Route::group(['prefix' => 'inf.institucional/'], function(){

		Route::get('historia', ['as' => 'inf.institucional.historia',function() {
			return view('historia');
		}]);

		Route::get('mision-y-vision', ['as' => 'inf.institucional.misionyvision', function() {
			return view('misionyvision');
		}]);

		Route::get('objetivos', ['as' => 'inf.institucional.objetivos', function() {
			return view('objetivos');
		}]);
	});

	Route::group(['prefix' => 'comisiones-permanentes/'], function(){

		Route::get('contraloria-presupuesto', ['as' => 'contraloria.presupuesto', function() {
			return view('comisionespermanentes.contraloriapresupuesto');
		}]);
		Route::get('asuntos-legislativos', ['as' => 'asuntoslegislativos', function() {
			return view('comisionespermanentes.asuntoslegislativos');
		}]);
		Route::get('transporte-vialidad-y-comunicaciones', ['as' => 'transporte.vialidad', function() {
			return view('comisionespermanentes.transportevialidad');
		}]);
		Route::get('ejido-terreno-municipales', ['as' => 'ejido.terreno', function() {
			return view('comisionespermanentes.ejidoterreno');
		}]);
		Route::get('arquitectura-urbanismo-y-construccion', ['as' => 'arquitectura.urbanismo', function() {
			return view('comisionespermanentes.arquitecturaurbanismo');
		}]);
		Route::get('servicios-publicos-salud-y-ambiente', ['as' => 'serviciospublicos.salud', function() {
			return view('comisionespermanentes.serviciospublicossalud');
		}]);
		Route::get('participacion-comunitaria', ['as' => 'participacioncomunitaria', function() {
			return view('comisionespermanentes.participacioncomunitaria');
		}]);
		Route::get('infraestructura-educacion-y-cultura', ['as' => 'infraestructura.educacion', function() {
			return view('comisionespermanentes.infraestructuraeducacion');
		}]);
		Route::get('deporte-recreacion-y-turismo', ['as' => 'deporte.recreacion', function() {
			return view('comisionespermanentes.deporterecreacion');
		}]);
		Route::get('ordinaria-y-especial', ['as' => 'ordinaria.especial', function() {
			return view('comisionespermanentes.ordinariaespecial');
		}]);
	});
	
	Route::get('ordenanzas',['as' => 'ordenanzas',function() {
		return view('ordenanza');
	}]);
});

/* RUTAS DE ADMINISTRADOR
==========================================*/
Route::group([ 'prefix' => 'admin'], function(){

	Route::get('', function(){
		return view('admin.index');
	});

	Route::get('access', ['as' => 'acceso', function() {
		return view('admin.plantilla.main');
	}]);

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy'
		]);

	Route::resource('publicaciones', 'PublicacionsController');
	Route::resource('ordenanza', 'OrdenanzasController');
});
