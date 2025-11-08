<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FooterSettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\ContactFormFieldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'landingPage'])->name('home');

Route::get('/about', [HomeController::class, 'aboutPage'])->name('about');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/projects',[HomeController::class, 'othersProjects'])->name('projects');

// Admin: Footer settings
Route::post('/admin/footer-settings', [FooterSettingController::class, 'store'])->name('admin.footer-settings.store');

// API: Get footer settings
Route::get('/api/footer-settings', function() {
    $settings = \App\Models\FooterSetting::first();
    if (!$settings) {
        return response()->json(['error' => 'No footer settings found'], 404);
    }
    return response()->json($settings);
})->name('api.footer-settings');

// Testimonials API routes
Route::get('/api/testimonials', [TestimonialController::class, 'index'])->name('api.testimonials.index');
Route::post('/admin/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
Route::put('/admin/testimonials/{id}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
Route::delete('/admin/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');

// Social Media API routes
Route::get('/api/social-media', [SocialMediaController::class, 'index'])->name('api.social-media.index');
Route::post('/admin/social-media', [SocialMediaController::class, 'store'])->name('admin.social-media.store');
Route::put('/admin/social-media/{id}', [SocialMediaController::class, 'update'])->name('admin.social-media.update');
Route::delete('/admin/social-media/{id}', [SocialMediaController::class, 'destroy'])->name('admin.social-media.destroy');

// Contact Form Fields API routes
Route::get('/api/contact-form-fields', [ContactFormFieldController::class, 'index'])->name('api.contact-form-fields.index');
Route::post('/admin/contact-form-fields', [ContactFormFieldController::class, 'store'])->name('admin.contact-form-fields.store');
Route::put('/admin/contact-form-fields/{id}', [ContactFormFieldController::class, 'update'])->name('admin.contact-form-fields.update');
Route::delete('/admin/contact-form-fields/{id}', [ContactFormFieldController::class, 'destroy'])->name('admin.contact-form-fields.destroy');

// Contact Form Submit Button (managed via localStorage on frontend)
Route::get('/api/contact-form-button', function() {
    return response()->json(['buttonText' => 'পাঠান']);
});

// Auth routes (simple session-based)
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');










