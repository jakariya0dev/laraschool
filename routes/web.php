<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicInfoController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BioDataController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpeechController;
use Illuminate\Support\Facades\Route;


Route::view('/','frontend.app')->name('home');
Route::view('/notice-page','frontend.pages.notice')->name('pages.notice');
Route::view('/gallery-page','frontend.pages.photo-gallery')->name('pages.gallery');
Route::view('/academic-info-page','frontend.pages.academic-info')->name('pages.academic.info');

Route::get('/photo-gallery-data',[PhotoGalleryController::class, 'getPhotoGalleryData']);
Route::get('/academic-data',[AcademicInfoController::class, 'getAcademicData']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Get data route
Route::get('banner-data', [BannerController::class, 'getBannerData'])->name('banner.data');
Route::get('about-data', [FetchDataController::class, 'getAboutData'])->name('about.data');
Route::get('speech-data', [FetchDataController::class, 'getSpeechData'])->name('speech.data');

// Admin Dashboard route
Route::view('/admin-dashboard', 'dashboard.master')->name('admin-dashboard');
Route::view('/about-dashboard', 'dashboard.about')->name('about-dashboard');
Route::view('/speech-dashboard', 'dashboard.speech')->name('speech-dashboard');
Route::view('/teacher-dashboard', 'dashboard.teacher');
Route::view('/gallery-dashboard', 'dashboard.photo-gallery')->name('gallery-dashboard');
Route::put('/photo-gallery-update/{id}', [PhotoGalleryController::class, 'updatePhotoGalleryData'])->name('gallery.update');
Route::view('/academic-dashboard', 'dashboard.academic-info');
Route::put('/academic-info-update', [AcademicInfoController::class, 'updateAcademicInfo']);

// Update

Route::put('/update-banner/{id}', [BannerController::class, 'updateBannerData'])->name('banner.update');
Route::put('/update-about', [AboutController::class, 'updateAboutData'])->name('about.update');
Route::put('/update-speech/{id}',  [SpeechController::class, 'updateSpeechData'])->name('speech.update');

// Notice
Route::get('/all-notice', [NoticeController::class, 'getAllNotice'])->name('notice.all');
Route::view('/notice-dashboard', 'dashboard.notice')->name('notice.dashboard');
Route::post('/add-notice', [NoticeController::class, 'newNotice'])->name('notice.add');
Route::get('/delete-notice/{id}', [NoticeController::class, 'deleteNotice'])->name('notice.delete');

// Teacher
Route::view('/new-teacher', 'dashboard.teacher-form')->name('teacher.new');
Route::view('/teachers', 'frontend.pages.teachers')->name('teachers');
Route::get('/teacher/{id}', [BioDataController::class, 'getSingleTeacherProfile'])->name('teacher');
Route::view('/all-teacher', 'dashboard.all-teacher')->name('teacher.all');
Route::get('/get-all-teacher-data', [BioDataController::class, 'getAllTeacherData']);
Route::get('/view-teacher/{id}', [BioDataController::class, 'getSingleTeacherProfile'])->name('teacher.view');
Route::get('/profile-teacher/{id}', [BioDataController::class, 'getTeacherProfile'])->name('teacher.profile');
Route::post('/add-teacher', [BioDataController::class, 'addNewBio'])->name('teacher.add');
Route::get('/delete-teacher/{id}', [BioDataController::class, 'deleteTeacher'])->name('teacher.delete');
Route::get('/edit-teacher/{id}', [BioDataController::class, 'editTeacherProfile'])->name('teacher.edit');
Route::put('/update-teacher/{id}', [BioDataController::class, 'updateTeacherProfile'])->name('teacher.update');

require __DIR__.'/auth.php';
