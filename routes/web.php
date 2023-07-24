<?php

use App\Http\Livewire\Calculator;
use App\Http\Livewire\CascadingDropdown;
use App\Http\Livewire\Count;
use App\Http\Livewire\Registration;
use App\Http\Livewire\ToDo;
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

Route::get('/', function () {
    // return view('welcome');
    return redirect('/counter');
});

Route::get('/counter', Count::class)->name('counter');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/to-do', ToDo::class)->name('todo');
Route::get('/cascading-dropdown', CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/registration', Registration::class)->name('registration');
