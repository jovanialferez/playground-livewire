<?php

use App\Livewire\LandingPage;
use App\Livewire\UserCreate;
use App\Livewire\UsersList;
use Illuminate\Support\Facades\Route;

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

Route::get('/', LandingPage::class)->name('default');

Route::get('/users', UsersList::class)->name('users');
Route::get('/users/create', UserCreate::class)->name('user-create');