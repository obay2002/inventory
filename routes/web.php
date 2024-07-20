<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
Route::get('/', function () {
    return view('welcome');
    
});

Route::prefix('inventory')->group(function () {
    Route::get('/', [InventoryController::class, 'showMain'])->name('main');

Route::get('/personal-convenant', [InventoryController::class, 'showPersonalConvenat'])->name('personalConvenant');
Route::get('/exchange-document', [InventoryController::class, 'showExchangeDocument'])->name('exchangeDocument');
Route::get('/receiving-document', [InventoryController::class, 'showReceivingDocument'])->name('receivingDocument');
Route::get('/external-transfer', [InventoryController::class, 'showExternalTransfer'])->name('externalTransfer');
Route::get('/internal-transfer', [InventoryController::class, 'showInternalTransfer'])->name('internalTransfer');
Route::get('/pure-disclosure', [InventoryController::class, 'showPureDsclosure'])->name('pureDisclosure');
Route::get('/receipt-detection', [InventoryController::class, 'showReceiptDetection'])->name('receiptDetection');
Route::get('/the-findings', [InventoryController::class, 'showTheFindings'])->name('theFindings');
Route::get('/Add-receipt', [InventoryController::class, 'showAddReceiptDocument'])->name('AddReceiptDocument');
});