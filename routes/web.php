<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

// Soal 1.a: Pengiriman data NIM dan Nama melalui form dengan metode POST
Route::get('/user', [PostController::class, 'user']);
Route::post('/result', [PostController::class, 'result']);

// Soal 1.b, 1.c, 1.d: Layout Bootstrap, Template Inheritance (base -> courses, students, grades, assignments) & Vertical Navigation
Route::get('/', function () {
    return view('courses');
});

Route::get('/base', function () {
    return view('layouts.base');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/assignments', function () {
    return view('assignments');
});

// Soal 2.d: Menampilkan setiap data yang ada pada tabel menggunakan Controller (tanpa view)
Route::resource('customers', CustomerController::class);
Route::resource('companies', CompanyController::class);
Route::resource('items', ItemController::class);
Route::resource('sales', SaleController::class);

Route::resource('customer', CustomerController::class);
Route::resource('company', CompanyController::class);
Route::resource('item', ItemController::class);
Route::resource('sale', SaleController::class);
