<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pks_controller;
use App\Http\Controllers\controller_admin;
use App\Http\Controllers\up3;
use App\Http\Controllers\bank;
use Illuminate\Support\Facades\Route;

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
    return view('inputpks');
});

///////////////////////////////////////////////TEST STUFF//////////////////////////////////
//check ttd
Route::get('/checkttd', [up3::class, 'checkttd']);

///////////////////////////////////PDF STUFF////////////////////////////////////////////////
Route::get('/cetak', [HomeController::class, 'cetak']);

Route::get('/cetakpksba', [HomeController::class, 'cetakpksba'])->name('cetak.pks');
Route::get('/cetakpks', [HomeController::class, 'cetakpksbaview'])->name('view.cetak.pks');



///////////////////////////////////////BANK STUFF///////////////////////////////////////////
Route::get('/updatedatabank', [bank::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::post('/submitupdatedatabank', [bank::class, 'updatedatabank'])->name('update.data.bank');
});

Route::get('/inputaccountbank', [bank::class, 'inputaccountbank'])->name('bank.inputaccountbank');

Route::middleware(['auth'])->group(function () {
    Route::post('/storeaccountbank', [bank::class, 'storeaccountbank'])->name('update.data.account');
});

Route::get('/counterbank', [bank::class, 'counterbank'])->name('bank.counterbank');

///////////////////////////////////TTD STUFF////////////////////////////////////////////////
//upload ktp dan stempel
Route::middleware(['auth'])->group(function () {
    Route::post('/upload-ttd-stempel', [up3::class, 'uploadTTDAndStempel'])->name('upload.ttd.stempel');
});
//approvettd
Route::get('/updatettd', [up3::class, 'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
//////////////////////////////////////////////////////////////////////////////////////////////////
//store pks
Route::post('/pks', [pks_controller::class, 'store'])->name('pks.store');

////////////////////////////////////////////UP3 STUFF///////////////////////////////////////////////////
//approve status pks
Route::post('/pks/approve/{id_pks}', [pks_controller::class, 'approve'])->name('pks.approve');
//reject status pks
Route::post('/pks/reject/{id_pks}', [pks_controller::class, 'reject'])->name('pks.reject');
//view all pks
Route::get('/index', [pks_controller::class, 'index'])->name('admin.index');
//view detil pks
Route::get('/showpks/{id_pks}', [pks_controller::class, 'showpks'])->name('admin.showpks');
//==========================================MONITORING STUFF=========================================
Route::get('/monitoringup3/{id_pks}', [pks_controller::class, 'monitoringup3'])->name('monitoring.up3');
Route::get('/monitoringbank/{id_pks}', [pks_controller::class, 'monitoringbank'])->name('monitoring.bank');

Route::get('/monitorusr', [HomeController::class, 'monitoruserview'])->name('monitor.user.view');
Route::get('/monitoruser', [HomeController::class, 'monitoruser'])->name('monitor.user');
//===================================================================================================
// Route::get('/showpkss', [pks_controller::class, 'showpkss']);
//no agenda pks
Route::get('/noagenda/{agenda}', function ($agenda) {
    return view('noagenda', ['agenda' => $agenda]);
})->name('noagenda');

Route::get('/inputpksup3', [pks_controller::class, 'inputpksup3'])->name('up3.inputpks');
Route::post('/updatepksup3', [pks_controller::class, 'updatepksup3'])->name('up3.updatepksup3');
//=========================================index===========================================
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
//FILTERBANK
Route::get('/home_filterBank', [HomeController::class, 'bankfilter'])->middleware('auth')->name('home.filterbank');
//FILTERUP3
Route::get('/home_filterUP3', [HomeController::class, 'up3filter'])->middleware('auth')->name('home.filterup3');
//FILTERUP3PKS
Route::get('/home_filterUP3PKS', [HomeController::class, 'up3filterpks'])->middleware('auth')->name('home.filterup3pks');
//UP3 PKS INDEX
Route::get('/home_pksup3', [HomeController::class, 'up3pks'])->middleware('auth')->name('home.up3pks');

Route::get('/searchresult', [HomeController::class, 'searchresult'])->name('searchresult');

Route::get('/searchresultbank', [HomeController::class, 'searchresultbank'])->name('searchresultbank');

//============================================================================================

//===============================================UPDATE PASSWORD USER STUFF===================
Route::get('/updatepassword', [HomeController::class, 'updatepassup3'])->middleware('auth');
Route::get('/updatepasswordadmin', [HomeController::class, 'updatepassadmin'])->middleware('auth');
Route::get('/updatepasswordbank', [HomeController::class, 'updatepassbank'])->middleware('auth');
Route::post('/updatepass', [HomeController::class, 'updatepass'])->middleware('auth')->name('update_passwordform');



//======================================================================================================

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/post', [HomeController::class, 'post'])->middleware('auth','admin')->name('home');//auth middlewere is for can login, the admin is new middleware created

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//==============================================ADMIN STUFF=======================================================
Route::get('/updateuseradmin', [controller_admin::class, 'userupdateview'])->middleware('auth')->name('admin.userupdate');
Route::post('/updatepassadmin', [controller_admin::class, 'updatepassadmin'])->middleware('auth')->name('admin_postupdate');
//=============================================REQUEST VERIFIKASI==============================================================
Route::post('/req_verifikasi', [pks_controller::class, 'request_verifikasi'])->name('request.verifikasi');
Route::get('/dasboardverifikasi', [HomeController::class, 'dasboardverifikasi'])->middleware('auth')->name('dashboard.verifikasi');

require __DIR__.'/auth.php';
