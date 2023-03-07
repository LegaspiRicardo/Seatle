<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

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


//Seccion privada
Route::view('/alumnos', 'privado.alumno.index')->name('alumnos');
Route::view('/tutores', 'privado.tutor.index')->name('tutores');
Route::view('/profesores', 'privado.profesor.index')->name('profesores');
Route::view('/niveles', 'privado.nivel.index')->name('niveles');
Route::view('/panel-control', 'privado.dashboard.index')->name('panel-control');
Route::view('/inicioSesion', 'privado.sesion.sign-in')->name('inicioSesion');

Route::resource('/alumnos-Seattle', AlumnoController::class);
Route::resource('/tutores', TutorController::class);
Route::resource('/niveless', NivelController::class);

//Sitio Web
Route::view('/EscuelaNatacionSeattle', 'website.index')->name('EscuelaNatacionSeattle');
Route::view('/galeria', 'website/galeria')->name('galeria');
Route::view('/terapia-rehabilitacion', 'website/terapia')->name('terapia-rehabilitacion');
Route::view('/contacto', 'website/contacto')->name('contacto');
Route::view('/eventos', 'website/eventos')->name('eventos');
Route::view('/ubicacion', 'website/ubicacion')->name('ubicacion');
Route::view('/servicios', 'website/servicios')->name('servicios');
Route::view('/clasesInfantiles', 'website/clases-ninos')->name('clases-ninos');
Route::view('/clasesAdultos', 'website/clases-adulto')->name('clases-adultos');



