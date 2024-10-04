<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\InfoController;

// Route::get('/info', function () {
//     return view('info');
// });

Route::get('/info', [InfoController::class, 'loadAllInfo'])->name('LoadInfo');
Route::get('/info2/{id}', [InfoController::class, 'infoDetails']);
// Route::get('/info2', function () {
//     return view('info2');
// });
Route::get('/kritiksaran', function () {
    return view('kritikSaran');
});
Route::get('/sudetails', function () {
    return view('suDetails');
});
Route::get('/tentangkami', function () {
    return view('tentangKami');
});
Route::get('/admin-addnewinfo', function () {
    return view('admin/admin-addnewinfo');
});
Route::get('/admin-kritikSaran', function () {
    return view('admin/admin-kritikSaran');
});
Route::get('/',[HomeController::class,"GetHome"]);
Route::get('/admin-home',[AdminController::class,"GetHome"]);
Route::post('/kritiksaran/submit',[KritikController::class,"PostKritik"])->name("PostKritik");
Route::post('/admin-homeapresiasisubmit',[AdminController::class,"PostApresiasi"])->name("PostApresiasi");
Route::post('/admin-homekontensubmit',[AdminController::class,"PostKonten"])->name("PostKonten");
Route::put('/admin/apresiasi-update/{id}', [AdminController::class, 'UpdateApresiasi'])->name('UpdateApresiasi');
Route::delete('/admin/apresiasi-delete/{id}', [AdminController::class, 'DeleteApresiasi'])->name('DeleteApresiasi');
Route::delete('/admin-delete-konten/{id}', [AdminController::class, 'DeleteKonten'])->name('DeleteKonten');
Route::get('/admin-info',[AdminController::class,"GetInfo"]);
Route::post('/admin-addnewinfo',[AdminController::class,"PostAddInfo"])->name("PostAddInfo");
Route::get("/admin-editinfo/{id}", [AdminController::class,'GetEditInfo'])->name("GetEditInfo");
Route::post('/admin-editinfo',[AdminController::class,"PostEditInfo"])->name("PostEditInfo");
Route::get('/admin-deleteinfo/{id}',[AdminController::class,"DeleteInfo"])->name("DeleteInfo");
Route::get('/admin-kritikSaran',[AdminController::class,"GetKritik"]);
Route::delete('/admin-kritikSaran-delete/{id}', [AdminController::class, 'DeleteKritik'])->name('DeleteKritik');
Route::get('/admin/export-kritik', [AdminController::class, 'exportKritik'])->name('ExportKritik');
