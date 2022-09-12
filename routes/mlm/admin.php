<?php

use App\Http\Controllers\Admin\DatabaseController;
use App\Http\Controllers\Admin\Extensions\MLM\ManageMLMController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'mlm', 'as' => 'mlm.'], function () {
    Route::get('/', [ManageMLMController::class, 'index'])->name('index');
    Route::get('new', [ManageMLMController::class, 'new'])->name('new');
    Route::get('edit/{id}', [ManageMLMController::class, 'edit'])->name('edit');
    Route::post('set', [ManageMLMController::class, 'set'])->name('set')->middleware('demo');
    Route::post('store', [ManageMLMController::class, 'store'])->name('store')->middleware('demo');
    Route::post('update', [ManageMLMController::class, 'update'])->name('update')->middleware('demo');
    Route::post('remove', [ManageMLMController::class, 'remove'])->name('remove')->middleware('demo');
    Route::get('regenerate', [DatabaseController::class, 'regenerate'])->name('regenerate')->middleware('demo');

    // Log
    Route::get('log', [ManageMLMController::class, 'log'])->name('log.list');
    Route::get('pending/log', [ManageMLMController::class, 'pending'])->name('log.pending');
    Route::get('completed/log', [ManageMLMController::class, 'completed'])->name('log.completed');
    Route::get('{scope}/search', [ManageMLMController::class, 'search'])->name('log.search');
});
