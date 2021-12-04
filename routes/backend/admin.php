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
Route::get('blotter/show/{blotter}', [BlotterController::class, 'show'])
    ->name('blotter.show');
Route::get('blotter/list', [BlotterController::class, 'list'])
    ->name('blotter.list');

Route::get('official', [OfficialController::class, 'index'])
    ->name('official.index');

Route::get('official/add', [OfficialController::class, 'add'])
    ->name('official.add');

});






// Routes::get('blotter/create', )
