<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShipmentController;
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

//user routs
Route::prefix('shipments')->group(function () {
    Route::get('/',[ShipmentController::class,'index'])->name('shipments');
    Route::get('/add',[ShipmentController::class,'create'])->name('addShipment');
    Route::post('/store',[ShipmentController::class,'store'])->name('storeShipment');
    Route::post('/delete', [ShipmentController::class,'destroy'])->name('deleteShipment');
    Route::get('/edit/{id}',[ShipmentController::class,'edit'])->name('editShipment');
    Route::post('/update/{id}', [ShipmentController::class,'update'])->name('updateShipment');
    Route::get('/filter',[ShipmentController::class,'filter'])->name('filterShipment'); 
    Route::get('/group',[ShipmentController::class,'groub'])->name('groupShipment');     
});