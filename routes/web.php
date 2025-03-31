<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;  
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FoodController;
use App\Models\Category;
use App\Models\Food;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::post('/register', [LoginController::class, 'registerCreate'])->name('registerCreate');

Route::controller(CategoriesController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin.admin');

    Route::get('/categories/{category}/edit', 'edit')->name('categories.edit');
    Route::put('/categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');

    Route::delete('/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

    Route::get('/adminTabs', [CategoriesController::class, 'create'])->name('adminTabs.create');
    Route::post('/adminTabs', [CategoriesController::class, 'store'])->name('adminTabs.store');
});

Route::controller(FoodController::class)->group(function(){
    Route::get('/adminFood', 'index')->name('adminFood.index');

    Route::get('adminFood/create/{category_id}', 'create',)->name('adminFood.create');
    Route::post('/adminFood', 'store')->name('adminFood.store');

    Route::get('/adminFood/{food}/edit', 'edit')->name('food.edit');
    Route::put('/adminFood/{food}', 'update')->name('food.update');

    Route::delete('/adminFood/{food}', 'destroy')->name('food.destroy');
});
