<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    HomeController,
    AdminController,
    ProductController,
    DanhmucController,
    AuthController
};

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

//Frontend
Route::get('/', [HomeController:: class, 'index']);

Route::get('/login', [AuthController:: class, 'index']);
Route::post('/login', [AuthController:: class, 'loginPost'])->name('login');
Route::get('/register', [AuthController:: class, 'register']);
Route::post('/register', [AuthController:: class, 'registerPost'])->name('register');
Route::delete('/logout', [AuthController:: class, 'logout'])->name('logout');





Route::prefix('/')->group(function() {
    Route::get('/admin', [AdminController:: class, 'index']);
    Route::post('/signinDashboard', [AdminController:: class, 'signin_dashboard']);
});


Route::prefix('/')->middleware('admin.login')->group(function(){
    Route::get('/dashboard', [AdminController:: class, 'dashboard']);
    Route::get('/admin_logout', [AdminController:: class, 'admin_logout']); 
});



//Backend




//khac
Route::get('/product', [ProductController:: class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController:: class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/Danhmuc', [DanhmucController::class, 'index'])->name('Danhmuc.index');

