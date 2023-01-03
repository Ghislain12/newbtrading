<?php

use App\Http\Livewire\Contact;
use App\Http\Livewire\Services;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\UserProfil;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\DetailService;
use App\Http\Livewire\InvestmentForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddInvestment;
use App\Http\Controllers\sendInvestDoc;
use App\Http\Livewire\ClientOperations;
use App\Http\Controllers\AvatarController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\InvestmentDocController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');
Route::get('/documents/loan', [sendInvestDoc::class, 'loadloan'])->name('documents.loan');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');

    Route::get('dashboard', Dashboard::class)->name('users.dashboard');
    Route::get('clients/{id}', ClientOperations::class)->name('clients.operations');
    Route::get('profil', UserProfil::class)->name('users.profil');
    Route::get('services', Services::class)->name('services');
    Route::get('contact', Contact::class)->name('contact');
    Route::get('services/details', DetailService::class)->name('services.details');
    Route::get('investmenForm', InvestmentForm::class)->name('investmentform');
    Route::post('avatar', [AvatarController::class, 'save'])->name('avatar.change');
    Route::post('adinvestment1', [AddInvestment::class, 'save'])->name('adinvestment.save');
    Route::get('adinvestmentform', [AddInvestment::class, 'getinvestmentform'])->name('getinvestmentform');
    Route::post('documents/submit', [InvestmentDocController::class, 'senddocument'])->name('documents.submit');
    Route::post('investment-doc', [sendInvestDoc::class, 'indexAction'])->name('documents.index');

    Route::post('services', [ServicesController::class, 'save'])->name('services.create');
});
