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
        Route::get('/services/legal-and-compliance', 'servicesLegal')->name('services.legal');
        Route::get('/services/bank-account-opening', 'servicesBank')->name('services.bank');
        Route::get('/services/brand-registration-trade-mark-registration', 'servicesBrand')->name('services.brand');
        Route::get('/services/pro', 'servicesPro')->name('services.pro');
        Route::get('/services/golden-visa', 'servicesVisa')->name('services.visa');
        Route::get('/services/single-and-multiple-family-office', 'servicesOffice')->name('services.office');
        Route::get('/services/will-preparation', 'servicesWill')->name('services.will');
        Route::get('/services/difc-and-adgm-foundation-and-trustee', 'servicesDifc')->name('services.difc');
        /*Route::get('/privacy-policy', 'privacy')->name('privacy.policy');*/
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
    });
});
