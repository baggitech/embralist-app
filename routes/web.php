<?php

use App\Http\Controllers\AccountFavoritesController;
use App\Http\Controllers\AccountListingsController;
use App\Http\Controllers\AccountPaymentsController;
use App\Http\Controllers\AccountProfileController;
use App\Http\Controllers\AccountReviewsController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\AddContractorController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;


use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/contractors', [ContractorController::class, 'index'])->name('contractors.index');
Route::get('/contractors/{id}', [ContractorController::class, 'show'])->name('contractors.show');
Route::get('/add-contractor/location', [AddContractorController::class, 'location'])->name('contractor.add.location');
Route::get('/add-contractor/services', [AddContractorController::class, 'services'])->name('contractor.add.services');
Route::get('/add-contractor/profile', [AddContractorController::class, 'profile'])->name('contractor.add.profile');
Route::get('/add-contractor/price', [AddContractorController::class, 'price'])->name('contractor.add.price');
Route::get('/add-contractor/project', [AddContractorController::class, 'project'])->name('contractor.add.project');
Route::get('/terms', [TermsController::class, 'index'])->name('terms.index');
Route::get('/help/{slug}', [HelpController::class, 'article'])->name('help.article');

Route::middleware(['auth'])->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');



    Route::get('/account/profile', [AccountProfileController::class, 'index'])->name('account.profile.index');
    Route::get('/account/listings', [AccountListingsController::class, 'index'])->name('account.listings.index');
    Route::get('/account/favorites', [AccountFavoritesController::class, 'index'])->name('account.favorites.index');
    Route::get('/account/reviews', [AccountReviewsController::class, 'index'])->name('account.reviews.index');
    Route::get('/account/payments', [AccountPaymentsController::class, 'index'])->name('account.payments.index');
    Route::get('/account/settings', [AccountSettingsController::class, 'index'])->name('account.settings.index');   

    Route::get('/help', [HelpController::class, 'index'])->name('help.index');
});