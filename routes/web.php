<?php

use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\PersonalInfo\FamilyBackgroundController;
use App\Http\Controllers\Web\PersonalInfo\PersonalInfoController;
use App\Http\Controllers\Web\User\ActivateController;
use App\Http\Controllers\Web\User\DeactivateController;
use App\Http\Controllers\Web\User\UserController;
use App\Models\PersonalInformation;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Dashboard
Route::get('/dashboard', function () {
    $userCount = User::count();
    $clientCount = PersonalInformation::count();
    return view('dashboard', compact('userCount', 'clientCount'));
})->middleware(['auth', 'verified'])->name('dashboard');

//Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //User
    Route::prefix('users')->group(function () {
        Route::patch('deactivate/{user}', DeactivateController::class);
        Route::patch('activate/{user}', ActivateController::class);
        Route::get('table', [UserController::class, 'table'])->name('table');
    });
    Route::resource('users', UserController::class);

    //Personal Forms
    Route::prefix('personal')->group(function () {
    Route::get('table', [PersonalInfoController::class, 'table'])->name('table');
    Route::patch('familybackground/{family}', FamilyBackgroundController::class)->name('familybackground');

    });
    Route::resource('personal', PersonalInfoController::class);

});

require __DIR__ . '/auth.php';
