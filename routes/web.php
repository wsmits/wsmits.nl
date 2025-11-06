<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::controller(DemoController::class)->prefix('demo')->group(function () {
    Route::get('/worldmap', 'worldmap')->name('worldmap');
    Route::get('/europemap', 'europemap')->name('europemap');
});

Route::get('demo/', [WelcomeController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
        Route::get('/email', [EmailController::class, 'index'])->name('email');

        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::put('/settings/email/update', [SettingsController::class, 'updateEmailSettings'])->name('settings.email.update');

    });
