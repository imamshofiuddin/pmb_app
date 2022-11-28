<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Controllers\Middleware as ControllersMiddleware;
use Illuminate\Support\Facades\Auth;
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

// Route::group(['middleware' => ['auth', 'cekrole:student']], function(){
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

Auth::routes();

Route::group(['middleware'=>['auth','cekrole:admin,student']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['middleware'=>['auth','cekrole:admin']], function(){
    Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
    Route::post('/confirmPayment', [App\Http\Controllers\PaymentController::class, 'confirmPayment'])->name('confirmPayment');
    Route::get('/ranking', [App\Http\Controllers\RankingController::class, 'index'])->name('ranking');
});

Route::group(['middleware'=>['auth','cekrole:student']], function(){
    Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'sendPay'])->name('pay');
    Route::post('/submitData', [App\Http\Controllers\DataSiswaController::class, 'store'])->name('submitData');

    Route::group(['middleware'=>['hasDashboard']], function(){
        Route::get('/profile',[App\Http\Controllers\DashboardSiswaController::class, 'profile'])->name('profile');
        Route::get('/pilih_prodi',[App\Http\Controllers\DashboardSiswaController::class, 'pilih_prodi'])->name('pilih_prodi');
        Route::post('/submit_prodi',[App\Http\Controllers\DashboardSiswaController::class, 'submitProdi'])->name('submitProdi');
        Route::post('/hapus_prodi',[App\Http\Controllers\DashboardSiswaController::class, 'hapusProdi'])->name('hapusProdi');
        Route::get('/finalisasi',[App\Http\Controllers\DashboardSiswaController::class, 'finalisasi'])->name('finalisasi');
        Route::post('/finalisasi_data', [DashboardSiswaController::class, 'finalisasiData'])->name('finalisasi_data');
        Route::get('/pdf-download/{id}', [App\Http\Controllers\PdfController::class, 'pdfGenerate'])->name('pdf-download');
        Route::get('/show/{id}', [App\Http\Controllers\DashboardSiswaController::class, 'show'])->name('showSiswa');
        Route::post('/update/{id}', [App\Http\Controllers\DashboardSiswaController::class, 'update'])->name('updateDataSiswa');
    });
});


Route::get('/exam', [ExamController::class, 'index'])->name('exam');
Route::post('/cek_peserta', [ExamController::class, 'cekPeserta'])->name('cek_peserta');
Route::group(['middleware' =>['hasExam']], function(){
    Route::get('/rule_exam', [ExamController::class, 'ruleExam'])->name('rule_exam');
    Route::get('/start_exam', [ExamController::class, 'startExam'])->name('start_exam');
    Route::post('/submit_exam', [ExamController::class, 'submitExam'])->name('submit_exam');
});

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::post('/cek_hasil', [PengumumanController::class, 'cekHasil'])->name('cek_hasil');
Route::get('/lolos-pmb/{id}', [App\Http\Controllers\PdfController::class, 'lolosPmb'])->name('lolos-pmb');
