<?php

use App\Domains\Blotter\Http\Controllers\BlotterController;
use App\Domains\Official\Http\Controllers\OfficialController;
use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Home'), route('admin.dashboard'));
    });
Route::get('blotter/add/complainant', [BlotterController::class, 'addComplainant'])
        ->name('blotter.add.complainant');
Route::post('blotter/store/complainant', [BlotterController::class, 'storeComplainant'])
        ->name('blotter.store.complainant');

Route::get('blotter/add', [BlotterController::class, 'addBlotter'])
    ->name('blotter.add');

Route::post('blotter/store', [BlotterController::class, 'storeBlotter'])
    ->name('blotter.store');

Route::get('blotter/add/suspect/{blotter}', [BlotterController::class, 'addSuspect'])
    ->name('blotter.add.suspect');

Route::post('blotter/store/suspect/{blotter}', [BlotterController::class, 'storeSuspect'])
    ->name('blotter.store.suspect');

Route::get('blotter/add/case/{blotter}', [BlotterController::class, 'createCase'])
    ->name('blotter.add.case');

Route::get('official', [OfficialController::class, 'index'])
    ->name('official.index');

});






// Routes::get('blotter/create', )
