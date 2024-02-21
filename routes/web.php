<?php

use App\Http\Controllers\dashbordController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckStoreID;
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
    Route::get("{product}-product","product")->name("product");//qui affiche le produit en particulier
    Route::get("/notifications","notif")->name("notif");
    Route::get("/users",'users')->name("users");
    Route::get('/connection','connection')->name('connection');
    Route::get("/boutique",'boutique')->name('boutique');
    Route::post("/boutique",'newBoutique')->name('newBoutique');//route qui cree une nouvelle boutique
    Route::get("/connect/boutique","connectBoutique")->name("connectBoutique");
    Route::post("/connect/boutique","boutiqueConnect")->name("boutiqueConnect");//connection a la boutique
    Route::post("{product}-product-commande-{store}","commandeProduct")->name("commandeProduct");//qui cree la commande
    Route::post("{product}-product-message-{store}","messageProduct")->name("messageProduct");//qui cree le message
});
Route::prefix("/boutique-{store}")->middleware(['web', 'auth:store',CheckStoreID::class])->controller(dashbordController::class)->name("private.")->group(function(){
   Route::get("-nom","index")->name('stat');
   Route::get("-home-nom",'home')->name('home');
   Route::get("-message",'message')->name('message');
   Route::post("-message",'postMessage')->name('postMessage');//publie l'annonce de la boutique
   Route::get("-gerer-nom",'gerer')->name('gerer');//profil du dashbord
   Route::post("-gerer-nom",'newProducts')->name('newProducts');//route qui insere le produit dans la base de donnees
   Route::get("-compte-dashbord",'compte')->name('compte');
});
Route::fallback(function() {
    return view('404');
 });