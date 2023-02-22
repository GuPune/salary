<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('/logout', [LoginController::class, 'perform'])->name('logout.perform');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('employee', '\App\Http\Controllers\EmployeeController');
Route::resource('managesalary', '\App\Http\Controllers\managesalaryController');
Route::resource('salary', '\App\Http\Controllers\SalaryController');
Route::get('/autocomplete', [App\Http\Controllers\EmployeeController::class, 'autocomplete'])->name('autocomplete');
Route::get('generate-pdf/{id}', [\App\Http\Controllers\PDFController::class, 'generatePDFData']);

