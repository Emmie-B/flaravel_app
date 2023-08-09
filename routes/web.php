<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitarController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get("/about", [ HomeController::class , 'about'])->name('home.about');

Route::get('/category',  [ HomeController::class, 'category'])->name('home.category');

// Route::get('/guitart/',  [ GuitarController::class, 'index'])->name('home.guitar');

Route::resource('guitars', GuitarController::class);

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if (isset($category)&&isset($item)) {

        return "This is the  " . $category .  $item;
    }
     return " Please Specify category and items";
    
});
