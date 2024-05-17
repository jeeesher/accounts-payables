<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Dashboard;
use App\Livewire\Payables;
use App\Livewire\Tracking;
use App\Livewire\PayablesAdd;
use App\Livewire\PayablesView;
use App\Livewire\PayablesEdit;
use App\Livewire\Accounts;
use App\Livewire\TrackingView;
use App\Livewire\FoldersMain;
use App\Livewire\FoldersYearly;
use App\Livewire\FoldersPayable;
use App\Livewire\Notifications;
use App\Livewire\AccountingGenerateDv;
use App\Livewire\AccountingDvView;

use App\Livewire\PropertyNavigation;

use App\Livewire\BtDashboard;
use App\Livewire\BtPayables;
use App\Livewire\BtPayablesView;
use App\Livewire\BtTracking;    
use App\Livewire\BtNavigation;


use App\Http\Controllers\PayableController;

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
Route::get('/payables/add', PayablesAdd::class);
Route::get('/payables/view', PayablesView::class);
//Route::get('/payables/view/{id}', PayablesView::class);
Route::get('/payables/edit', PayablesEdit::class);
//Route::get('/payables/edit/{id}', PayablesEdit::class);
Route::post('/payables/add', [PayableController::class, 'store'])->name('submit.payable');
Route::post('/particular/store', [PayableController::class, 'store'])->name('particular.store');


Route::get('/tracking', Tracking::class);
Route::get('/tracking/view', TrackingView::class);

Route::get('/accounts', Accounts::class);

Route::get('/folders/main', FoldersMain::class);
Route::get('/folders/yearly', FoldersYearly::class);
Route::get('/folders/payable', FoldersPayable::class);

Route::get('/notifications', Notifications::class);

Route::get('/accounting/generate/dv', AccountingGenerateDv::class);
Route::get('/accounting/dv/view', AccountingDvView::class);

Route::get('/SupplierInfo/{supplier}', [PayableController::class, 'SupplierInfo']);

//Route::get('/offices/bt/dashboard', BtDashboard::class);
//Route::get('/offices/bt/payables', BtPayables::class);
//Route::get('/offices/bt/payables/view', BtPayablesView::class);
//Route::get('/offices/bt/tracking', BtTracking::class);
//Route::get('/offices/bt/navigation', BtNavigation::class);

//Route::get('/offices/property/navigation', PropertyNavigation::class);
