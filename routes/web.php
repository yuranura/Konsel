<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Choice1Controller;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\Soal1Controller;
// use App\Http\Controllers\Soal2Controller;
// use App\Http\Controllers\Soal3Controller;
// use App\Http\Controllers\Soal4Controller;
// use App\Http\Controllers\Soal5Controller;
use App\Http\Controllers\ProfilpsikologController;
// use App\Http\Controllers\Soal6Controller;
// use App\Http\Controllers\Soal7Controller;
// use App\Http\Controllers\Soal8Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AddUserController;
use App\Http\Controllers\user_test_jawaban;

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
    return view('landing');
})->middleware('guest');

Route::get('/about', function() {
    return view ('about');
})->name('about');


Route::get('/dashboard', function () {
    return view('dashboard.main');
});

Route::get('/soal', function () {
    return view('dashboard.soal');
});

Route::get('/psikolog', function () {
    return view('dashboard.psikolog');
});

Route::get('/addsoal', function () {
    return view('dashboard.addsoal');
});

Route::get('/tes', function () {
    return view('dashboard.tes');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/choice1', [Choice1Controller::class, 'index'])->name('choice1');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/soal1', [Soal1Controller::class, 'soal1'])->name('soal1');
Route::get('/soal2', [Soal1Controller::class, 'soal2'])->name('soal2');
Route::get('/soal3', [Soal1Controller::class, 'soal3'])->name('soal3');
Route::get('/soal4', [Soal1Controller::class, 'soal4'])->name('soal4');
Route::get('/soal5', [Soal1Controller::class, 'soal5'])->name('soal5');
Route::get('/soal6', [Soal1Controller::class, 'soal6'])->name('soal6');
Route::get('/soal7', [Soal1Controller::class, 'soal7'])->name('soal7');
Route::get('/soal8', [Soal1Controller::class, 'soal8'])->name('soal8');
Route::get('/soal9', [Soal1Controller::class, 'soal9'])->name('soal9');
Route::get('/soal10', [Soal1Controller::class, 'soal10'])->name('soal10');
Route::get('/soal11', [Soal1Controller::class, 'soal11'])->name('soal11');
Route::get('/soalgambar1', [Soal1Controller::class, 'soalgambar1'])->name('soalgambar1');
Route::get('/soalgambar2', [Soal1Controller::class, 'soalgambar2'])->name('soalgambar2');
Route::get('/soalgambar3', [Soal1Controller::class, 'soalgambar3'])->name('soalgambar3');
Route::get('/soalgambar4', [Soal1Controller::class, 'soalgambar4'])->name('soalgambar4');
Route::get('/soalgambar5', [Soal1Controller::class, 'soalgambar5'])->name('soalgambar5');
Route::get('/soalgambar6', [Soal1Controller::class, 'soalgambar6'])->name('soalgambar6');
Route::get('/soalgambar7', [Soal1Controller::class, 'soalgambar7'])->name('soalgambar7');
Route::get('/soalgambar8', [Soal1Controller::class, 'soalgambar8'])->name('soalgambar8');
Route::get('/profilpsikolog', [ProfilpsikologController::class, 'index'])->name('profilpsikolog');
// Route::resource('/pertanyaan1', \App\Http\Controllers\PertanyaanController::class);
Route::get('/pertanyaan/{test_id}',  [\App\Http\Controllers\PertanyaanController::class, 'index'])->name('pertanyaan')->middleware('auth');
Route::post('/pertanyaan/{test_id}',  [\App\Http\Controllers\PertanyaanController::class, 'saveSession'])->name('save.jawaban')->middleware('auth');
Route::get('/detail-tes', [App\Http\Controllers\user_test_jawaban::class, 'index'])->name('detail-tes');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::post('/adduser', [App\Http\Controllers\UserController::class, 'store'])->name('adduser');
Route::delete('/hapusakun/{id}', [App\Http\Controllers\UserController::class, 'hapusAkun'])->name('hapusAkun');
Route::put('/putuser/{id}', [App\Http\Controllers\UserController::class, 'editAkun'])->name('editAkun');
Route::get('/soal', [App\Http\Controllers\PaketSoalController::class, 'index'])->name('soal');
Route::post('/addsoal', [App\Http\Controllers\PaketSoalController::class, 'store'])->name('addsoal');
Route::delete('/deletesoal/{id}', [App\Http\Controllers\PaketSoalController::class, 'hapusSoal'])->name('hapusSoal');
Route::get('/addsoal{id}', [App\Http\Controllers\PaketSoalController::class, 'viewSoal'])->name('viewSoal');
Route::put('/putsoal/{id}', [App\Http\Controllers\PaketSoalController::class, 'editSoal'])->name('editSoal');
Route::post('/addpertanyaan/{id}', [App\Http\Controllers\PaketSoalController::class, 'addPertanyaan'])->name('addpertanyaan');
Route::delete('/deletepertanyaan', [App\Http\Controllers\PaketSoalController::class, 'hapusPertanyaan'])->name('hapusPertanyaan');
Route::put('/putpertanyaan/{id}', [App\Http\Controllers\PaketSoalController::class, 'editPertanyaan'])->name('editpertanyaan');
Route::get('/psikolog', [App\Http\Controllers\PsikologController::class, 'index'])->name('psikolog');
Route::post('/addpsikolog', [App\Http\Controllers\PsikologController::class, 'store'])->name('addpsikolog');
Route::delete('/deletepsikolog/{id}', [App\Http\Controllers\PsikologController::class, 'hapusPsikolog'])->name('hapusPsikolog');
Route::put('/putpsikolog/{id}', [App\Http\Controllers\PsikologController::class, 'editPsikolog'])->name('editPsikolog');
Route::post('/addgambar/{id}', [App\Http\Controllers\PsikologController::class, 'inputGambar'])->name('inputGambar');
