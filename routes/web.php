<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
Route::get('/', function () {
    return view('welcome');
    
});
// Route::post('/main', [SearchController::class, 'store'])->name('main.store');
Route::prefix('inventory')->group(function () {
    Route::get('/',[InventoryController::class,'index'])->name('inventory.index');
    Route::get('/Receiving',[InventoryController::class,'CreateReceivingdocument'])->name('inventory.Receiving');
    Route::get('/Exchange',[InventoryController::class,'CreateExchangedocument'])->name('inventory.Exchange');
});