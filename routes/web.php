<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admin\AdminMiddleware;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BrandController;
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

Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login_post');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/registration', [AuthenticationController::class, 'registration'])->name('registration');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');
Route::get('/clothes', [ClothesController::class, 'clothes'])->name('clothes');
Route::get('/ categories', [ClothesController::class, ' Categories1Controller'])->name(' categories');


Route::prefix('/admin')->middleware([AdminMiddleware::class])->group(function () {

    Route::post('/', [AdminController::class, 'admin'])->name('admin');

    Route::prefix('/users')->group(function () {
        Route::get('/', [UsersController::class, 'usersView'])->name('users');
        Route::get('/delete/{user}', [UsersController::class, 'delete'])->name('deleteUser');
        Route::get('/active/{user}', [UsersController::class, 'active'])->name('activeUser');
    });

    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'categories'])->name('categories');
        Route::post('/create', [CategoriesController::class, 'create'])->name('createCategory');
        Route::get('/delete/{category_id}', [CategoriesController::class, 'delete'])->name('deleteCategory');
    });

    Route::prefix('/brands')->group(function () {
        Route::get('/', [BrandController::class, 'brand'])->name('brands');
        Route::post('/create', [BrandController::class, 'create'])->name('createBrand');
        Route::get('/delete/{brand_id}', [BrandController::class, 'delete'])->name('deleteBrand');
    });


});
