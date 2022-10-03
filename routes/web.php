<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AllPdf\PdfController;
use App\Http\Controllers\Tool\ToolsController;
use App\Http\Controllers\Incom\IncomeController;
use App\Http\Controllers\Renter\RenterController;
use App\Http\Controllers\User\UserAdminController;
use App\Http\Controllers\Location\LocationController;
use App\Http\Controllers\Tracking\TrackingController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\ExpenditureCost\ExpenditureCostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/renter', [RenterController::class, 'index'])->name('renter');
Route::post('/renter/store', [RenterController::class, 'store'])->name('store.renter');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin Role
    Route::get('admin/dashboard', [UserAdminController::class, 'index'])->name('admin.dashboard')->middleware('ensureUserRole:admin');

    // Route Tool
    Route::get('/tool/index', [ToolsController::class, 'index'])->name('tool')->middleware('ensureUserRole:admin');
    Route::get('/tool/create', [ToolsController::class, 'create'])->name('tool.create')->middleware('ensureUserRole:admin');
    Route::get('/tool/edit/{tool}', [ToolsController::class, 'edit'])->name('tool.edit')->middleware('ensureUserRole:admin');
    Route::get('/tracking/{tool}', [TrackingController::class, 'index'])->name('tracking')->middleware('ensureUserRole:admin');

    Route::post('/tool/store', [ToolsController::class, 'store'])->name('tool.store')->middleware('ensureUserRole:admin');
    Route::post('/tool/update/{tool}', [ToolsController::class, 'update'])->name('tool.update')->middleware('ensureUserRole:admin');
    Route::post('/tool/delete/{tool}', [ToolsController::class, 'destroy'])->name('tool.delete')->middleware('ensureUserRole:admin');

    // Route Admin Controll Transaction
    Route::get('/transaction/ubah-status/{transaction}', [TransactionController::class, 'changeStatus'])->name('ubah.status.transaction')->middleware('ensureUserRole:admin');

    // Route Location
    Route::get('/location', [LocationController::class, 'index'])->name('location')->middleware('ensureUserRole:admin');
    Route::get('/location/create', [LocationController::class, 'create'])->name('location.create')->middleware('ensureUserRole:admin');
    Route::get('/location/edit/{location}', [LocationController::class, 'edit'])->name('location.edit')->middleware('ensureUserRole:admin');
    Route::post('/location/update/{id}', [LocationController::class, 'update'])->name('location.update')->middleware('ensureUserRole:admin');
    Route::post('/location/store', [LocationController::class, 'store'])->name('location.store')->middleware('ensureUserRole:admin');
    Route::post('/location/delete/{location}', [LocationController::class, 'destroy'])->name('location.delete')->middleware('ensureUserRole:admin');

    // Route Penghasilan
    Route::get('/income', [IncomeController::class, 'daily_income'])->name('income')->middleware('ensureUserRole:admin');

    // Route pengeluaran (expenditure cost)
    Route::get('/expenditure', [ExpenditureCostController::class, 'index'])->name('expenditure')->middleware('ensureUserRole:admin');
    Route::get('/expenditure/create', [ExpenditureCostController::class, 'create'])->name('expenditure.create')->middleware('ensureUserRole:admin');
    Route::get('/expenditure/edit/{expenditure}', [ExpenditureCostController::class, 'edit'])->name('expenditure.edit')->middleware('ensureUserRole:admin');

    Route::post('/expenditure/store', [ExpenditureCostController::class, 'store'])->name('expenditure.store')->middleware('ensureUserRole:admin');
    Route::post('/expenditure/update/{expenditure}', [ExpenditureCostController::class, 'update'])->name('expenditure.update')->middleware('ensureUserRole:admin');
    Route::post('/expenditure/destroy/{expenditure}', [ExpenditureCostController::class, 'destroy'])->name('expenditure.destroy')->middleware('ensureUserRole:admin');

    // Route PDF

    // Route Renter
    // Route::get('/renter', [RenterController::class, 'create'])->name('renter')->middleware('ensureUserRole:admin');


    // User Role
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('ensureUserRole:user');
    Route::get('/pdf/surat-pernyataan/{renter}', [PdfController::class, 'suratPernyataan'])->name('suratPernyataan')->middleware('ensureUserRole:user');

    // Route TransactionController
    Route::get('/transaction/sewa/{nik}', [TransactionController::class, 'index'])->name('transaction')->middleware('ensureUserRole:user');
    Route::post('/transaction/sewa', [TransactionController::class, 'store'])->name('store.transaction')->middleware('ensureUserRole:user');
    Route::get('/transaction/success/{id}', [TransactionController::class, 'successTransaction'])->name('success.transaction')->middleware('ensureUserRole:user');
    // Route::get('user/transaction', [TransactionController::class, 'index'])->name('user.transaction')->middleware('ensureUserRole:user');
});


require __DIR__ . '/auth.php';
