<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/classes', [ClassController::class, 'index'])->name('classes');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/instructors', [InstructorController::class, 'index'])->name('instructors');
Route::get('/testimonials', [ClassController::class, 'testimonials'])->name('testimonials');

// Authentication Routes
require __DIR__.'/auth.php';

// User Dashboard Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // User Dashboard Sub-pages
    Route::get('/user/schedule', [ClassController::class, 'schedule'])->name('user.schedule');
    
    Route::get('/user/instructors', [InstructorController::class, 'index'])->name('user.instructors');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'admin'])->group(function () {
    // Admin Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Content Management
    Route::get('/content', [AdminController::class, 'content'])->name('content');
    Route::post('/content/update', [AdminController::class, 'updateContent'])->name('content.update');
    
    // Inquiries Management
    Route::get('/inquiries', [AdminController::class, 'inquiries'])->name('inquiries');
    Route::get('/inquiries/{id}', [AdminController::class, 'showInquiry'])->name('inquiries.show');
    Route::post('/inquiries/{id}/reply', [AdminController::class, 'replyInquiry'])->name('inquiries.reply');
    Route::delete('/inquiries/{id}', [AdminController::class, 'destroyInquiry'])->name('inquiries.destroy');
    
    // Instructors Management
    Route::get('/instructors', [AdminController::class, 'instructors'])->name('instructors');
    Route::get('/instructors/create', [AdminController::class, 'createInstructor'])->name('instructors.create');
    Route::post('/instructors', [AdminController::class, 'storeInstructor'])->name('instructors.store');
    Route::get('/instructors/{id}/edit', [AdminController::class, 'editInstructor'])->name('instructors.edit');
    Route::put('/instructors/{id}', [AdminController::class, 'updateInstructor'])->name('instructors.update');
    Route::delete('/instructors/{id}', [AdminController::class, 'destroyInstructor'])->name('instructors.destroy');
    
    // Schedule Management
    Route::get('/schedule', [AdminController::class, 'schedule'])->name('schedule');
    Route::get('/schedule/create', [AdminController::class, 'createClass'])->name('schedule.create');
    Route::post('/schedule', [AdminController::class, 'storeClass'])->name('schedule.store');
    Route::get('/schedule/{id}/edit', [AdminController::class, 'editClass'])->name('schedule.edit');
    Route::put('/schedule/{id}', [AdminController::class, 'updateClass'])->name('schedule.update');
    Route::delete('/schedule/{id}', [AdminController::class, 'destroyClass'])->name('schedule.destroy');
    
    // Registration Management
    Route::get('/registration', [AdminController::class, 'registration'])->name('registration');
    Route::get('/registration/{id}', [AdminController::class, 'showRegistration'])->name('registration.show');
    Route::post('/registration/{id}/confirm', [AdminController::class, 'confirmRegistration'])->name('registration.confirm');
    Route::post('/registration/{id}/cancel', [AdminController::class, 'cancelRegistration'])->name('registration.cancel');
    Route::delete('/registration/{id}', [AdminController::class, 'destroyRegistration'])->name('registration.destroy');
});
