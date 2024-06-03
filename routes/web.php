<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\WaitersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Masterdata\MasterJenisMenuController;
use App\Http\Controllers\Masterdata\MasterDaftarMejaController;

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

Route::get('/', [LandingController::class, 'index']);
Route::get('menu', [LandingController::class, 'menu']);
Route::get('book-table/{id}', [MejaController::class, 'setSessionMeja']);
Route::post('menu/order/{id}', [PesananController::class, 'addPesananToChart']);

Route::get('pesanan', [LandingController::class, 'pesanan']);
Route::post('pesanan/modify/{id_menu}', [PesananController::class, 'modifyPesanan']);
Route::post('checkout/confirm', [PesananController::class, 'checkoutPesanan']);
Route::get('testquery/{id}', [PesananController::class, 'addPesananToChart']);

Route::get('contact', [LandingController::class, 'contact']);
Route::post('contact/sendMessage', [LandingController::class, 'sendMessage']);
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('pengelola')->name('pengelola.')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('waiters-task', [DashboardController::class, 'taskWaiters'])->name('task-waiters');
        Route::post('dashboard/rekap-chart', [DashboardController::class, 'chartPesananMasuk'])->name('dashboard.rekap.chart');
        Route::middleware(['auth.role:3'])->group(function () {
            Route::get('pesananMasuk', [AdminController::class, 'pesananMasuk'])->name('pesanan.masuk');
            Route::post('pesananMasuk/ajax', [PesananController::class, 'listPesananMasuk'])->name('pesanan.masuk.ajax');
            Route::post('pesananMasuk/proses', [PesananController::class, 'updateStatusPesanan'])->name('pesanan.masuk.proses');
        });
        Route::middleware(['auth.role:1,3,5'])->group(function () {
            Route::get('pesananMasuk/cetak-struk/{id_pesanan}', [PesananController::class, 'cetakStruk']);
            Route::get('rekapPesanan', [AdminController::class, 'rekapPesanan'])->name('pesanan.rekap');
            Route::post('rekapPesanan/ajax', [PesananController::class, 'listRekapPesanan'])->name('pesanan.rekap.ajax');
            Route::get('pesanan/detail/{id_pesanan}', [PesananController::class, 'detailPesanan'])->name('pesanan.detail');
        });
        Route::get('monitoring', [AdminController::class, 'monitoring'])->name('monitoring');
        Route::post('monitoring/ajax', [WaitersController::class, 'monitoring'])->name('monitoring.ajax');
        Route::post('monitoring/confirm/{id_status_waiters}', [WaitersController::class, 'confirmWaiters'])->name('monitoring.confirm');

        Route::get('pesanMasuk', [AdminController::class, 'pesanMasuk'])->name('pesanMasuk');
        Route::post('pesanMasuk/ajax', [CmsController::class, 'listPesanMasuk'])->name('pesanMasuk.ajax');

        Route::get('editlandingpage', [AdminController::class, 'editlandingpage'])->name('editlandingpage');
        Route::middleware(['auth.role:1,5,4'])->group(function () {
            Route::get('daftarWaiters', [AdminController::class, 'daftarWaiters'])->name('daftarWaiters');
            Route::post('daftarWaiters/ajax', [WaitersController::class, 'daftarWaitersAjax'])->name('daftarWaiters.ajax');
            Route::post('daftarWaiters/storeUpdate', [WaitersController::class, 'storeUpdate'])->name('daftarWaiters.storeUpdate');
            Route::get('daftarWaiters/show/{id}', [WaitersController::class, 'showDetail'])->name('daftarWaiters.showDetail');
            Route::delete('daftarWaiters/delete/{id}', [WaitersController::class, 'delete'])->name('daftarWaiters.delete');
        });
        Route::middleware(['auth.role:1,2'])->group(function () {
            Route::prefix('media-promotion')->name('cms.')->group(function(){
                Route::prefix('menu')->name('menu')->group(function(){
                    Route::get('/', [CmsController::class, 'indexMenu']);
                    Route::post('/ajax', [CmsController::class, 'listMenu'])->name('.ajax');
                    Route::post('/storeUpdate', [CmsController::class, 'storeUpdateMenu'])->name('.storeUpdate');
                    Route::get('/edit/{id}', [CmsController::class, 'showDetailMenu'])->name('.edit');
                    Route::delete('/delete/{id}', [CmsController::class, 'deleteMenu'])->name('.delete');
                });
                Route::prefix('jenis-menu')->name('jenis-menu')->group(function(){
                    Route::get('/', [CmsController::class, 'indexJenisMenu']);
                    Route::post('/ajax', [MasterJenisMenuController::class, 'listJenisMenu'])->name('.ajax');
                    Route::post('/storeUpdate', [MasterJenisMenuController::class, 'storeUpdateJenisMenu'])->name('.storeUpdate');                
                    Route::delete('/delete/{id}', [MasterJenisMenuController::class, 'deleteJenisMenu'])->name('.delete');
                });
                Route::prefix('daftar-meja')->name('daftar-meja')->group(function(){
                    Route::get('/', [MasterDaftarMejaController::class, 'indexDaftarMeja']);
                    Route::post('/ajax', [MasterDaftarMejaController::class, 'listDaftarMeja'])->name('.ajax');
                    Route::post('/storeUpdate', [MasterDaftarMejaController::class, 'storeUpdateDaftarMeja'])->name('.storeUpdate');
                    Route::delete('/delete/{id}', [MasterDaftarMejaController::class, 'deleteDaftarMeja'])->name('.delete');
                });
                Route::post('editLanding/storeUpdate', [CmsController::class, 'storeUpdateLanding'])->name('editLanding.storeUpdate');
            });
        });
    }); 
});     

