<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; // Add this if missing


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

// Read - Display all categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Create - Show form to add a category
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Store - Add a category (POST request)
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Edit - Show form to edit a category
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Update - Modify an existing category (PUT request)
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

// Delete - Remove a category (DELETE request)
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
