<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Payables;
use App\Livewire\Tracking;
use App\Livewire\PayablesAdd;
use App\Livewire\PayablesView;
use App\Livewire\PayablesEdit;

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
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);

Route::get('/payables', Payables::class);

Route::get('/tracking', Tracking::class);

Route::get('/payables/add', PayablesAdd::class);

Route::get('/payables/view', PayablesView::class);
//Route::get('/payables/view/{id}', PayablesView::class);

Route::get('/payables/edit', PayablesEdit::class);
//Route::get('/payables/edit/{id}', PayablesEdit::class);
