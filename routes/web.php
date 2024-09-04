<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about-us', 'about')->name('about');
        Route::get('/business-setup', 'businessSetup')->name('business.setup');
        Route::get('/accounting-and-taxation', 'accountingAndTaxation')->name('accounting.and.taxation');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::get('/services', 'services')->name('services');
        /*Route::get('/privacy-policy', 'privacy')->name('privacy.policy');*/
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
    });
});
