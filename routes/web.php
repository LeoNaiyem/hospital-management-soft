<?php

use App\Http\Controllers\OAuth\OAuthController;
use App\Http\Controllers\MoneyReceiptController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MedicineCategoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineTypeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



Route::get('register', [OAuthController::class, 'showRegister']);
Route::post('register', [OAuthController::class, 'register'])->name('register');
Route::get('login', [OAuthController::class, 'showLogin'])->name('login');
Route::post('login', [OAuthController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('logout', [OAuthController::class, 'logout'])->name('logout');
    Route::get('/', function () {
        return view('pages.dashboard.home');
    });
    Route::get('dashboard', function () {
        return view('pages.dashboard.home');
    })->name('dashboard');
    Route::resource('appointments', AppointmentController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('consultants', ConsultantController::class);
    Route::resource('medicine_types', MedicineTypeController::class);
    Route::resource('medicine_categories', MedicineCategoryController::class);
    Route::resource('medicines', MedicineController::class);
    Route::resource('prescriptions', PrescriptionController::class);
    Route::resource('designations', DesignationController::class);
    Route::resource('money_receipts', MoneyReceiptController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('admissions', App\Http\Controllers\AdmissionController::class);
    Route::resource('beds', App\Http\Controllers\BedController::class);
});