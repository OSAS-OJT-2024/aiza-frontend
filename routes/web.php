<?php

use App\Http\Controllers\SearchApplicationController;
use Illuminate\Support\Facades\Route;


Route::get('/organization-details', function () {
    return view('organization-details');
});

Route::get('/search-application', [SearchApplicationController::class, 'showSearchForm'])->name('search.application');
Route::get('/search-application-result', [SearchApplicationController::class, 'searchApplication'])->name('search.application.result');

Route::get('/reaccreditation-confirmation', [SearchApplicationController::class, 'showConfirmation'])->name('reaccreditation.confirmation');


// use Illuminate\Support\Facades\Route;

// Route::get('/reaccreditation', function () {
//     return view('reaccreditation');
// });

// Add this to your routes/web.php
// Route::get('/reaccreditation', function () {
//     return view('reaccreditation');
// })->name('reaccreditation');



// Route::get('/organization-form', function () {
//     return view('organization-form');
// });

// Route::get('/search-application', function () {
//     return view('search-application');
// // });

// use App\Http\Controllers\SearchApplicationController;
// Route::get('/search-application', [SearchApplicationController::class, 'showSearchForm'])->name('search.application');
// Route::get('/search-application-result', [SearchApplicationController::class, 'searchApplication'])->name('search.application.result');



