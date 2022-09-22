<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!Auth::check()) {
        return view('auth.login');
    }
    return redirect(url('/backend/dashboard'));
});

// Route::get('/login-siswa', function () {
//     if (!Auth::check()) {
//         return view('frontend.login');
//     }
//     return redirect(url('/backend/dashboard'));
// });


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Backend
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('backend')->group(function () {
        Route::get('/dashboard', 'Backend\dashboardController@index')->name('dashboard');
        // Register
        Route::post('/store-register','Backend\RegisterUserController@store')->name('store-register');
        Route::get('/register-user', 'Backend\registerUserController@index')->name('register-user');
        Route::get('/form-pendaftaran', 'Backend\formPendaftaranController@index')->name('form-pendaftaran');
        Route::get('/status-pendaftaran', 'backend\formPendaftaranController@statusPendaftaran')->name('form-status-pendaftaran');
        Route::get('/jumlah-pendaftaran', 'backend\formPendaftaranController@jumlahPendaftaran')->name('jumlah-pendaftaran');
        Route::get('/json-jurusan', 'backend\formPendaftaranController@jurusanJson')->name('jurusanJson');
        Route::post('/store-form-pendaftaran','backend\formPendaftaranController@store')->name('store-form-pendaftaran');
        Route::post('/update-status-jumlah-pendaftaran/{id}', 'backend\formPendaftaranController@updateStatusJumlahPendaftaran')->name('update-statusJumlahPendaftaran');
        Route::post('/edit-profile/{id}', 'Backend\registerUserController@editProfile')->name('edit-profile');
        Route::post('/update-password/{id}', 'Backend\registerUserController@updatePassword')->name('update-password');
        Route::get('/profile', 'Backend\registerUserController@profile')->name('profile');
        // Jurusan
        Route::get('/jurusan', 'Backend\jurusanController@index')->name('jurusan');
        Route::post('/jurusan-store', 'Backend\jurusanController@store')->name('jurusan-store');
        Route::delete('/jurusan-delete/{id}', 'Backend\jurusanController@delete')->name('jurusan-delete');
        // Status
        Route::get('/status', 'Backend\statusController@index')->name('status');
        Route::post('/status-store', 'Backend\statusController@store')->name('status-store');
        // Kelas
        Route::get('/kelas', 'Backend\kelasController@index')->name('kelas');
        Route::post('/kelas-store', 'Backend\kelasController@store')->name('kelas-store');
        Route::delete('/kelas-delete/{id}', 'Backend\kelasController@delete')->name('kelas-delete');
        // Jenis Data
        Route::get('/jenis-biaya', 'Backend\jenisBiayaController@jenisBiaya')->name('jenis-biaya');
        Route::post('/jenis-biaya-store', 'Backend\jenisBiayaController@store')->name('jenis-biaya-store');
        // Upload Invoice 1
        Route::post('/upload-invoice-1', 'Backend\uploadController@uploadBukti1')->name('upload1');
        Route::post('/upload-invoice-2', 'Backend\uploadController@uploadBukti2')->name('upload2');
        // Invoice
        Route::get('/invoice', 'Backend\invoiceController@index')->name('invoice');
        Route::get('/bukti-invoice', 'Backend\invoiceController@buktiUploadInvoice')->name('bukti-invoice');
        Route::post('/bukti-invoice-validasi/{id}', 'Backend\invoiceController@updateInvoiceTf1')->name('update-invoice-tf1');
        Route::post('/bukti-invoice-validasi2/{id}', 'Backend\invoiceController@updateInvoiceTf2')->name('update-invoice-tf2');
        Route::get('/approve-status-pendaftaran', 'Backend\invoiceController@approveStatusRegister')->name('approve-status-pendaftaran');
        // Laporan
        Route::get('/laporan-calon-siswa', 'Backend\laporanController@laporan')->name('laporan-calon-siswa');
        Route::get('/laporan-jurusan', 'Backend\laporanController@laporanJurusan')->name('laporan-jurusan');
        Route::get('/laporan-kelas/{id?}', 'Backend\laporanController@laporanKelas')->name('laporan-kelas');
        Route::get('/data-siswa/{id?}', 'Backend\laporanController@dataSiswa')->name('data-siswa');
        // Invoice Siswa
        Route::get('/invoice-siswa', 'Backend\invoiceController@invoiceSiswa')->name('invoice-siswa');
        Route::get('/print-invoice-siswa', 'Backend\invoiceController@printInvoiceSiswa')->name('print-invoice-siswa');
        // Logout
        Route::post('/logout', 'Frontend\LoginController@logout')->name('logout-dashboard');

        // Get jurusan and kelas
        Route::get('/getKelas/{id}', 'backend\formPendaftaranController@getKelas')->name('getKelas');
    });
});

Route::get('/landing-page', 'Frontend\landingPageController@index')->name('landing-page');
Route::get('/formlir-pendaftaran', 'Frontend\landingPageController@formlir')->name('formlir-pendaftaran');
Route::post('/store-siswa', 'Backend\registerUserController@storeFront')->name('store-siswa');
