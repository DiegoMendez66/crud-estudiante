<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/estudiantes', [App\http\Controllers\EstudianteController::class, 'index'])->name('index');

Route::get('/estudiantes/crear', [App\http\Controllers\EstudianteController::class, 'getCrear'])->name('crear');

Route::post('/estudiantes/crear', [App\http\Controllers\EstudianteController::class, 'postCrear'])->name('grabar');

Route::resource('estudiantes', EstudianteController::class);

require __DIR__.'/auth.php';


