<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeesController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Companies
    Route::get('/addCompanies', [CompanyController::class, 'index'])->name('addCompanies');
    Route::post('/storeCompany', [CompanyController::class, 'store'])->name('storeCompany');
    Route::get('/viewCompanies', [CompanyController::class, 'view'])->name('viewCompanies');
    Route::get('/deleteCompany/{id}', [CompanyController::class, 'delete'])->name('deleteCompany');
    Route::get('/editCompany/{id}', [CompanyController::class, 'edit'])->name('editCompany');
    Route::post('/updateCompany/{id}', [CompanyController::class, 'update'])->name('updateCompany');

    // Employees
    Route::get('/addEmployee', [EmployeesController::class, 'index'])->name('addEmployee');
    Route::post('/storeEmployee', [EmployeesController::class, 'store'])->name('storeEmployee');
    Route::get('/viewEmployee', [EmployeesController::class, 'view'])->name('viewEmployee');
    Route::get('/deleteEmployee/{id}', [EmployeesController::class, 'delete'])->name('deleteEmployee');
    Route::get('/editEmployee/{id}', [EmployeesController::class, 'edit'])->name('editEmployee');
    Route::post('/updateEmployee/{id}', [EmployeesController::class, 'update'])->name('updateEmployee');
});
