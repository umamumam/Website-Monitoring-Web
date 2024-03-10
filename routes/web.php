<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControler;
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\ExcelImportController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthControler::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    
});
Route::resource('/layanandaninfos', \App\Http\Controllers\LayanandaninfosController::class);
Route::resource('/kecamatans', \App\Http\Controllers\KecamatansController::class);
Route::resource('/kelurahans', \App\Http\Controllers\KelurahansController::class);
Route::resource('/opdpemkots', \App\Http\Controllers\OpdpemkotsController::class);
Route::resource('/sds', \App\Http\Controllers\SdsController::class);
Route::resource('/smps', \App\Http\Controllers\SmpsController::class);
Route::resource('/hehes', \App\Http\Controllers\HehesController::class);
Route::resource('/datawebs', \App\Http\Controllers\DatawebsController::class);
Route::resource('/dataweb1s', \App\Http\Controllers\Dataweb1sController::class);
Route::view('/upload_excel', 'upload_excel');
Route::post('/import_excel', [ExcelImportController::class, 'import'])->name('import.excel');
Route::resource('/monitorings', \App\Http\Controllers\MonitoringsController::class);
Route::resource('/monitoringsistems', \App\Http\Controllers\MonitoringsistemsController::class);
Route::resource('/kategoriwebs', \App\Http\Controllers\KategoriwebsController::class);
Route::resource('/feedback1s', \App\Http\Controllers\Feedback1sController::class);
Route::resource('/manajemenproyeks', \App\Http\Controllers\ManajemenproyeksController::class);