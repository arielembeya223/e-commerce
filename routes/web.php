<?php

use App\Http\Controllers\dashbordController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [welcomeController::class,'index'])->name("welcome");
Route::prefix('/')->controller(welcomeController::class)->name("public.")->group(function(){
    Route::get("product","product")->name("product");
    Route::get("/notifications","notif")->name("notif");
    Route::get("/users",'users')->name("users");
    Route::get('/connection','connection')->name('connection');
    Route::get("/boutique",'boutique')->name('boutique');
    Route::get("/connect/boutique","connectBoutique")->name("connectBoutique");
});
Route::prefix("/boutique")->controller(dashbordController::class)->name("private.")->group(function(){
   Route::get("/nom","index");
});
Route::fallback(function() {
    return view('404');
 });