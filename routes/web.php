<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\logout;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ClientController::class,'home']);

Route::get('/shop', [ClientController::class,'shop']);
Route::get('/cart', [ClientController::class,'cart']);
Route::get('/checkout', [ClientController::class,'checkout']);
Route::get('/login', [ClientController::class,'login']);
Route::get('/signup', [ClientController::class,'signup']);
Route::get('/admin',[AdminController::class, 'admin']);
Route::get('/addcategory',[CategoryController::class, 'addcategory']);
Route::get('/edit_category/{id}',[CategoryController::class, 'edit_category']);
Route::post('/update_category',[CategoryController::class, 'update_category']);
Route::get('/delete_category/{id}',[CategoryController::class, 'delete_category']);
Route::post('/savecategory',[CategoryController::class, 'savecategory']);
Route::get('/categories',[CategoryController::class, 'categories']);

Route::get('/logout',[logout::class,'logout']);

Route::get('/products',[ProductController::class, 'products']);
Route::get('/addproduct',[ProductController::class, 'addproduct']);
Route::post('/updateproduct',[ProductController::class, 'updateproduct']);
Route::post('/saveproduct',[ProductController::class, 'saveproduct']);
Route::get('/edit_product/{id}',[ProductController::class, 'edit_product']);
Route::get('purchase/{id}',[PurchaseController::class,'purchase']);

Route::get('/orders',[AdminController::class, 'orders']);
Route::get('/addslider',[AdminController::class, 'addslider']);
Route::get('/slider',[AdminController::class, 'slider']);
Route::post('register',[registerController::class,'form_submitted']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');cl

// require __DIR__.'/auth.php';