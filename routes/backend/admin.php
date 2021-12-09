<?php

use App\Domains\Blotter\Http\Controllers\BlotterController;
use App\Domains\Hearing\Http\Controllers\HearingController;
use App\Domains\Indigent\Http\Controllers\IndigentController;
use App\Domains\Official\Http\Controllers\OfficialController;
use App\Domains\Person\Http\Controllers\CitizenController;
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
Route::get('hearing/schedules', [HearingController::class, 'list'])
    ->name('hearing.schedules');
Route::get('hearing/add', [HearingController::class, 'add'])
    ->name('hearing.add');
Route::post('hearing/store', [HearingController::class, 'store'])
    ->name('hearing.store');
Route::get('hearing/show/{hearing}', [HearingController::class, 'show'])
    ->name('hearing.show');
Route::delete('hearing/delete/{hearing}', [HearingController::class, 'delete'])
    ->name('hearing.delete');

Route::get('citizen/list', [CitizenController::class, 'list'])
    ->name('citizen.list');
Route::get('citizen/show/{person}', [CitizenController::class, 'show'])
    ->name('citizen.show');
Route::get('citizen/add', [CitizenController::class, 'add'])
    ->name('citizen.add');
Route::post('citizen/store', [CitizenController::class, 'store'])
    ->name('citizen.store');

Route::get('indigent/add', [IndigentController::class, 'add'])
    ->name('indigent.add');


Route::get('indigent/list', [IndigentController::class, 'list'])
    ->name('indigent.list');
});






// Routes::get('blotter/create', )
