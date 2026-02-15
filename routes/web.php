<?php

use Illuminate\Support\Facades\Route;
use App\Http\Modules\authentication\controllers\Authentication;

Route::get('/', [Authentication::class, 'index'])->name('login');
Route::get('/login', [Authentication::class, 'index'])->name('login');
Route::post('/login', [Authentication::class, 'login'])->name('login.submit');
