<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpeechController;
use Illuminate\Support\Facades\Route;


Route::view('/','frontend.app')->name('home');
Route::view('/notice-page','frontend.pages.notice')->name('pages.notice');

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
Route::view('/banner-dashboard', 'dashboard.banner');
Route::view('/academic-dashboard', 'dashboard.academic');

// Update

Route::put('/update-banner/{id}', [BannerController::class, 'updateBannerData'])->name('banner.update');
Route::put('/update-about', [AboutController::class, 'updateAboutData'])->name('about.update');
Route::put('/update-speech/{id}',  [SpeechController::class, 'updateSpeechData'])->name('speech.update');

// Notice
Route::get('/all-notice', [NoticeController::class, 'getAllNotice'])->name('notice.all');
Route::view('/notice-dashboard', 'dashboard.notice')->name('notice.dashboard');
Route::post('/add-notice', [NoticeController::class, 'newNotice'])->name('notice.add');
Route::get('/delete-notice/{id}', [NoticeController::class, 'deleteNotice'])->name('notice.delete');

require __DIR__.'/auth.php';
