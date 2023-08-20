<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MaestroController;
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


require __DIR__.'/auth.php';
 



Route::post('/login', 'Auth\LoginController@store')->name('login');



//Seccion privada
Route::view('/alumnos-Seattle', 'privado.alumno.index')->name('alumnos-Seattle');
Route::view('/tutores-Seattle', 'privado.tutor.index')->name('tutores-Seattle');
Route::view('/profesores-Seattle', 'privado.profesor.index')->name('profesores-Seattle');
Route::view('/niveles-Seattle', 'privado.nivel.index')->name('niveles-Seattle');
Route::view('/panel-control', 'privado.dashboard.index')->name('panel-control')->middleware(['auth']);
Route::view('/inicioSesion', 'privado.sesion.sign-in')->name('inicioSesion');

Route::resource('/alumnos', AlumnoController::class)->middleware(['auth']);
Route::resource('/tutores', TutorController::class)->middleware(['auth']);
Route::resource('/niveles', NivelController::class)->middleware(['auth']);
Route::resource('/profesores', MaestroController::class)->middleware(['auth']);





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



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');