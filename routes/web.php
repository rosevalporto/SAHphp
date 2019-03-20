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

	// Route::get('/Principal', function () { //pagina depois do login 
	//     return view('principal');
	// });

	Route::get('/Principal',function () { //pagina depois da Qualidade
	    return view('principal');
	});
	Route::get('/Qualidade', function () { //pagina depois da Qualidade
	    return view('qualidade');
	});

	Route::get('/Estatistica', function () { //pagina depois da estatistica
	return view ('estatistica'); 
	});

 	Route::get('/Consulta', function () { //pagina depois do login 
   return view('consulta');
  	});

 	Route::get('/Consulta/Doador','controllerDoador@consulta');

	Route::get('/Consulta/Paciente','controllerPaciente@consulta');

	Route::get('/Consulta/Doacao','controllerDoacao@consulta');

?>