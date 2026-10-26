<?php

use Illuminate\Support\Facades\Route;

// Import  Dari Landing
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\FeatureController;
use App\Http\Controllers\Landing\CourseController;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\ContactController;

// Import Dari Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\LoginController;

// Route untuk Landing 
Route::get('/', [HomeController::class, 'index'])->name('landing.home');
Route::get('/about', [AboutController::class, 'index'])->name('landing.about');
Route::get('/feature', [FeatureController::class, 'index'])->name('landing.feature');
Route::get('/course', [CourseController::class, 'index'])->name('landing.course');
Route::get('/blog', [BlogController::class, 'index'])->name('landing.blog');
Route::get('/contact', [ContactController::class, 'index'])->name('landing.contact');

// Route  untuk Admin 
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
Route::get('/tables', [TableController::class, 'index'])->name('tables');
Route::get('/forms', [FormController::class, 'index'])->name('forms');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
Route::get('/login', [LoginController::class, 'index'])->name('login');
});