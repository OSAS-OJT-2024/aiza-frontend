<?php

use App\Http\Controllers\SearchApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/search-application', [SearchApplicationController::class, 'showSearchForm'])->name('search.application');
Route::get('/search-application-result', [SearchApplicationController::class, 'searchApplication'])->name('search.application.result');
Route::get('/reaccreditation-confirmation', [SearchApplicationController::class, 'showConfirmation'])->name('reaccreditation.confirmation');


Route::get('/reaccreditation', function () {
    return view('reaccreditation');
})->name('reaccreditation');

Route::get('/organization-form', function () {
    return view('organization-form');
});

Route::get('/selection-of-application', function () {
    return view('selection-of-application');
})->name('selection-of-application');

