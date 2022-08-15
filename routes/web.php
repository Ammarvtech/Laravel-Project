<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Companies
    Route::get('/addCategories', [CategoryController::class, 'index'])->name('addCategories');
    Route::post('/storeCategory', [CategoryController::class, 'store'])->name('storeCategory');
    Route::get('/viewCategories', [CategoryController::class, 'view'])->name('viewCategories');
    Route::get('/deleteCategory/{id}', [CategoryController::class, 'delete'])->name('deleteCategory');
    Route::get('/editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::post('/updateCategory/{id}', [CategoryController::class, 'update'])->name('updateCategory');

    // Employees
    Route::get('/addEmployee', [EmployeesController::class, 'index'])->name('addEmployee');
    Route::post('/storeEmployee', [EmployeesController::class, 'store'])->name('storeEmployee');
    Route::get('/viewEmployee', [EmployeesController::class, 'view'])->name('viewEmployee');
    Route::get('/deleteEmployee/{id}', [EmployeesController::class, 'delete'])->name('deleteEmployee');
    Route::get('/editEmployee/{id}', [EmployeesController::class, 'edit'])->name('editEmployee');
    Route::post('/updateEmployee/{id}', [EmployeesController::class, 'update'])->name('updateEmployee');
});
