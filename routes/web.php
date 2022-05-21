<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\galleryController;



use App\Http\Controllers\adminController;
use App\Http\Controllers\adminAppoinmentController;
use App\Http\Controllers\adminCollectedMediacontroller;
use App\Http\Controllers\adminDoctorController;
use App\Http\Controllers\adminServiceController;
use App\Http\Controllers\ourDoctorsController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\pdfController;

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

Route::get('/',[homeController::class, 'homePage'])->name('homePage');
Route::get('/about',[aboutController::class, 'aboutPage'])->name('aboutPage');
Route::get('/appointment',[appointmentController::class, 'appointmentspage'])->name('appointmentspage');
Route::post('/appointment',[appointmentController::class, 'sendAppoinmentData'])->name('sendAppoinmentData');
Route::get('/contact',[contactController::class, 'contactPage'])->name('contactPage');
Route::post('/contact',[mailController::class, 'sendmail'])->name('sendmail');
Route::get('/team',[teamController::class, 'teamPage'])->name('teamPage');
Route::get('/service',[serviceController::class, 'servicePage'])->name('servicePage');
Route::get('/gallery',[galleryController::class, 'galleryPage'])->name('galleryPage');
Route::get('/ourDoctors',[ourDoctorsController::class, 'ourDoctorsPage'])->name('ourDoctorsPage');



// admin
Route::get('/admin',[adminController::class, 'adminPage'])->name('adminPage')->middleware(['auth']);


// service
Route::get('/admin/service/create',[adminServiceController::class, 'adminServiceCreate'])->name('adminServiceCreate')->middleware(['auth']);
Route::post('/admin/service/create',[adminServiceController::class, 'storeAdminServiceCreate'])->name('storeAdminServiceCreate');
Route::get('/admin/service/list',[adminServiceController::class, 'showAdminServiceList'])->name('showAdminServiceList')->middleware(['auth']);
Route::get('/admin/service/edit/{id}',[adminServiceController::class, 'editAdminServiceList'])->name('editAdminServiceList')->middleware(['auth']);
Route::put('/admin/service/edit/{id}',[adminServiceController::class, 'updateAdminServiceListStore'])->name('updateAdminServiceListStore');
Route::get('/admin/service/delete/{id}',[adminServiceController::class, 'deleteAdminServiceList'])->name('deleteAdminServiceList')->middleware(['auth']);
// ourdoctor

Route::get('/admin/doctor/add',[adminDoctorController::class, 'adminDoctor'])->name('adminDoctor')->middleware(['auth']);
Route::post('/admin/doctor/add',[adminDoctorController::class, 'adminDoctorStore'])->name('adminDoctorStore');
Route::get('/admin/doctor/list',[adminDoctorController::class, 'adminDoctorShow'])->name('adminDoctorShow')->middleware(['auth']);
Route::get('/admin/doctor/list/{id}',[adminDoctorController::class, 'deletedoctor'])->name('deletedoctor')->middleware(['auth']);
// media
Route::get('/admin/gallery/media',[adminCollectedMediacontroller::class, 'showCollectedMediaPage'])->name('showCollectedMediaPage')->middleware(['auth']);
Route::post('/admin/gallery/media',[adminCollectedMediacontroller::class, 'addCollectedMedia'])->name('addCollectedMedia');
Route::get('/admin/gallery/media/{id}',[adminCollectedMediacontroller::class, 'deleteCollectedMedia'])->name('deleteCollectedMedia')->middleware(['auth']);

// appoinment
Route::get('/admin/appoinment',[adminAppoinmentController::class, 'showAppoinmentData'])->name('showAppoinmentData')->middleware(['auth']);
Route::get('/admin/appoinment/cancel/{id}',[adminAppoinmentController::class, 'cancelAppoinment'])->name('cancelAppoinment')->middleware(['auth']);
Route::get('/pdf/data',[pdfController::class,'gPdf'])->name('appoimentPdf')->middleware(['auth']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
