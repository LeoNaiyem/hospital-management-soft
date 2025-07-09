<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PrescriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard.home');
});
Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
Route::resource('patients', App\Http\Controllers\PatientController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::resource('consultants', App\Http\Controllers\ConsultantController::class);
Route::resource('medicine_types', App\Http\Controllers\MedicineTypeController::class);
Route::resource('medicine_categories', App\Http\Controllers\MedicineCategoryController::class);
Route::resource('medicines', App\Http\Controllers\MedicineController::class);
Route::resource('prescriptions', PrescriptionController::class);
Route::resource('designations', App\Http\Controllers\DesignationController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('money_receipts', App\Http\Controllers\MoneyReceiptController::class);
Route::resource('money_receipts', App\Http\Controllers\MoneyReceiptController::class);