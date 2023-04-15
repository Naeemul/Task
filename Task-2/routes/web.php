<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/product', [FrontendController::class, 'product'])->name('product');
Route::get('/product-detail/{id}', [FrontendController::class, 'productDetail'])->name('product.detail');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact-form-submit', [FrontendController::class, 'contactFormSubmit'])->name('contact.form.submit');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    Route::get('/add-product', [AdminController::class, 'addProduct'])->name('add.product');
    Route::post('/add-product-complete', [AdminController::class, 'addProductComplete'])->name('add.product.complete');
    Route::get('/manage-product', [AdminController::class, 'manageProduct'])->name('manage.product');
    Route::get('/delete-product/{id}', [AdminController::class, 'deleteProduct'])->name('delete.product');
    Route::get('/update-product/{id}', [AdminController::class, 'updateProduct'])->name('update.product');
    Route::post('/update-product-complete/{id}', [AdminController::class, 'updateProductComplete'])->name('update.product.complete');


    Route::get('/add-category', [AdminController::class, 'addCategory'])->name('add.category');
    Route::post('/add-category-complete', [AdminController::class, 'addCategoryComplete'])->name('add.category.complete');
    Route::get('/manage-category', [AdminController::class, 'manageCategory'])->name('manage.category');
    Route::get('/delete-category/{id}', [AdminController::class, 'deleteCategory'])->name('delete.category');
    Route::get('/update-category/{id}', [AdminController::class, 'updateCategory'])->name('update.category');
    Route::post('/update-category-complete/{id}', [AdminController::class, 'updateCategoryComplete'])->name('update.category.complete');




});
