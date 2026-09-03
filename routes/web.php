<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginPage',[AuthController::class,'loginPage']);   
Route::post('/Login',[AuthController::class,'Login']);   
Route::post('/Medicine_Sold',[StaffController::class,'Medicine_Sold']);   
Route::post('/Stock_Received',[StaffController::class,'Stock_Received']);   
Route::post('/Damaged_Medicine',[StaffController::class,'Damaged_Medicine']);   
Route::post('/Expired_Medicine',[StaffController::class,'Expired_Medicine']);   
Route::post('/Medicine_Return',[StaffController::class,'Medicine_Return']);  

Route::get('/Medicine_Sold',function(){
    return view('Dashboard/staff/UserDashboard');
});   
Route::get('/Stock_Received',function(){
    return view('Dashboard/staff/StockRecieved');
});   
Route::get('/Damaged_Medicine',function(){
    return view('Dashboard/staff/DamagedMedicine');
});   
Route::get('/Expired_Medicine',function(){
    return view('Dashboard/staff/ExpiredMedicine');
});   
Route::get('/Medicine_Return',function(){
    return view('Dashboard/staff/MedicineReturn');
});   

Route::get('/admin/manage', [AdminController::class, 'dashboard'])
    ->name('admin.manage');

Route::post('/admin/stock-received/{id}/approve',
    [AdminController::class, 'approveStockReceived'])
    ->name('admin.stock.received.approve');

Route::post('/admin/medicine-sold/{id}/approve',
    [AdminController::class, 'approveMedicineSold'])
    ->name('admin.medicine.sold.approve');

Route::post('/admin/damaged-medicine/{id}/approve',
    [AdminController::class, 'approveDamagedMedicine'])
    ->name('admin.damaged.approve');

Route::post('/admin/expired-medicine/{id}/approve',
    [AdminController::class, 'approveExpiredMedicine'])
    ->name('admin.expired.approve');

Route::post('/admin/medicine-return/{id}/approve',
    [AdminController::class, 'approveMedicineReturn'])
    ->name('admin.return.approve');

Route::post('/admin/stock-received/{id}/reject',
    [AdminController::class, 'rejectStockReceived'])
    ->name('admin.stock.received.reject');

Route::post('/admin/medicine-sold/{id}/reject',
    [AdminController::class, 'rejectMedicineSold'])
    ->name('admin.medicine.sold.reject');

Route::post('/admin/damaged-medicine/{id}/reject',
    [AdminController::class, 'rejectDamagedMedicine'])
    ->name('admin.damaged.reject');

Route::post('/admin/expired-medicine/{id}/reject',
    [AdminController::class, 'rejectExpiredMedicine'])
    ->name('admin.expired.reject');

Route::post('/admin/medicine-return/{id}/reject',
    [AdminController::class, 'rejectMedicineReturn'])
    ->name('admin.return.reject');

Route::get('/admin/medicine', [AdminController::class, 'Medicine'])
    ->name('admin.medicine');

Route::get('/admin/user',[AdminController::class,'user'])->name('admin.user');
Route::post('/admin/user',[AdminController::class,'storeuser'])->name('admin.user.store');

Route::put('/admin/user/{id}/block', [AdminController::class, 'BlockUser'])
    ->name('admin.user.block');

Route::put('/admin/user/{id}/unblock', [AdminController::class, 'UnblockUser'])
    ->name('admin.user.unblock');

Route::get('/blocked', function () {
    return view('Errors/blockeduser');
});