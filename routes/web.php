<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('medicool.frontend.pages.index');
})->name('index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// RUTELE PENTRU INREGSITRARE ALE MEDICULUI
Route::middleware('guest')->group(function(){
    Route::get('/register', [App\Http\Controllers\medicool\backend\doctors\RegistrationController::class, 'index'])->name('doctor.register');
    Route::post('/register', [App\Http\Controllers\medicool\backend\doctors\RegistrationController::class, 'store'])->name('doctor.register.store');
});

Route::group(['prefix' => 'doctor', 'middleware' => ['auth', 'verified']], function(){
    Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
    Route::get('/send-invitation', [\App\Http\Controllers\medicool\backend\patients\RegisterController::class, 'index'])->name('doctor.send.invitation');
    Route::post('/send-invitation', [\App\Http\Controllers\medicool\backend\patients\RegisterController::class, 'store'])->name('doctor.send.invitation.store');
});

require __DIR__.'/auth.php';
