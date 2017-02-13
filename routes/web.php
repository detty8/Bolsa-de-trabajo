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
Auth::routes();



//Perfiles

Route::post('/perfil/edit/{id}', 'PerfilController@editUser');

//Ofertas

Route::get('/ofertas/{id}','OfertasController@getOferta');
Route::get('/ofertas/{curso}','OfertasController@getOfertasCurso');
Route::post('/ofertas/create','OfertasController@postOferta');
Route::delete('/ofertas/delete/{id}','OfertasController@deleteOferta');

//RUTAS DE LOS PERFILES
Route::get('/perfil/alumno', 'PerfilController@perfilAlumno');
Route::get('/perfil/empresa', 'PerfilController@perfilEmpresa');
Route::get('/perfil/responsable', 'PerfilController@perfilResponsable');


//User
//Route::delete('/user/delete/{id}','UsersController@deleteUser');

Route::get('/', 'OfertasController@chooseHomeUser');

    Route::group(['middleware' => 'tipoUsuario:alumno'], function(){
    Route::get('/alumno', 'OfertasController@getOfertasAlumno');
    Route::post('/perfil', 'PerfilController@editAlumno');
    Route::post('/perfil', 'PerfilController@editAlumno');


});

    Route::group(['middleware' => 'tipoUsuario:empresa'], function(){
    Route::get('/empresa', 'OfertasController@getOfertasEmpresa');
    Route::post('/empresa', 'OfertasController@newOferta');

    Route::get('/empresa/nuevaOferta', function () {
    return view('empresa.crearOferta');
});
    Route::post('/perfil', 'PerfilController@editEmpresa');
    Route::post('/perfil', 'PerfilController@editEmpresa');


});


Route::group(['middleware' => 'tipoUsuario:empresa'], function(){
    Route::get('/perfil', 'PerfilController@getPerfilEmpresa');
  //  Route::get('/', 'OfertasController@getOfertasEmpresa');


});

Route::group(['middleware' => 'tipoUsuario:responsable'], function(){
    Route::get('/perfil', 'PerfilController@getPerfilResponsable');
  //  Route::get('/', 'OfertasController@getOfertasResponsable');


});
