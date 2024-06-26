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
use App\Livewire\DisbursementVoucher;
use App\Livewire\Test;
use App\Models\Disbursement;

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
    return redirect('/dashboard');
});

Route::get('/dashboard', Dashboard::class);

Route::get('/payables', Payables::class);
Route::get('/payables/add', PayablesAdd::class);
Route::get('/payables/view', PayablesView::class);
Route::get('/payables/edit', PayablesEdit::class);

Route::controller(PayableController::class)->group(function () {
    Route::post('/payables/add', 'store')->name('submit.payable');
    Route::get('/payables/{iden}/delete', 'delete')->name('delete.payable');
    Route::get('/payables/edit?payable={id}', 'edit')->name('edit.payable');
    Route::post('/payables/update', 'update')->name('update.payable');

    Route::post('/accounting/generate/gen/{id}', 'generateDv')->name('generate.dv');
    Route::get('/accounting/download/dv', 'downloadDV')->name('download.dv');

    Route::post('/tracking/add/{id}', 'addTrack')->name('add.track');
    Route::post('/tracking/update/{id}', 'updateTrack')->name('update.track');

    Route::get('/SupplierInfo/{supplier}', 'SupplierInfo');
    Route::post('/particular/store', 'store')->name('particular.store');    

    Route::post('/folders/add', 'addFolder')->name('add.folder');
    Route::post('/folders/upload', 'uploadFile')->name('upload.file');

    Route::get('/payables/export', 'exportExcel')->name('payables.export');
});

Route::get('/payables/{currentRoute}',[PayableController::class, 'searchPayable']);

Route::get('/disbursement/voucher', DisbursementVoucher::class);

Route::get('/tracking', Tracking::class);
Route::get('/tracking/view', TrackingView::class);

Route::get('/accounts', Accounts::class);

Route::get('/folders/main', FoldersMain::class);
Route::get('/folders/yearly/{folder_name}', FoldersYearly::class)->name('folders.yearly');
Route::get('/folders/payable/{BUR}', FoldersPayable::class)->name('folders.payable')->middleware('store.previous.url');
Route::delete('/delete-file/{BUR}/{column}', [PayableController::class, 'deleteFile'])->name('delete.file');
Route::delete('/delete-folder/{folderName}', [PayableController::class, 'deleteFolder'])->name('delete.folder');


// Route for Livewire notifications
Route::get('/notifications', Notifications::class);

Route::get('/accounting/generate/dv', AccountingGenerateDv::class);
Route::get('/accounting/dv/view', AccountingDvView::class);

//Route::get('/test/{folder_name}', Test::class);

//Route::get('/offices/bt/dashboard', BtDashboard::class);
//Route::get('/offices/bt/payables', BtPayables::class);
//Route::get('/offices/bt/payables/view', BtPayablesView::class);
//Route::get('/offices/bt/tracking', BtTracking::class);
//Route::get('/offices/bt/navigation', BtNavigation::class);

//Route::get('/offices/property/navigation', PropertyNavigation::class);
