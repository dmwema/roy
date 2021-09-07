<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::get('ventes', [VenteController::class, 'index'])->name('ventes.all');
Route::get('ventes/delete/id', [VenteController::class, 'delete'])->name('ventes.delete');
Route::post('ventes/new', [VenteController::class, 'store'])->name('ventes.new');

Route::get('clients', [ClientController::class, 'index'])->name('clients.all');
Route::get('clients/delete/id', [ClientController::class, 'delete'])->name('clients.delete');
Route::post('clients/new', [ClientController::class, 'store'])->name('clients.new');

Route::get('fournisseurs', [FournisseurController::class, 'index'])->name('fournisseurs.all');
Route::get('fournisseurs/delete/id', [FournisseurController::class, 'delete'])->name('fournisseurs.delete');
Route::post('fournisseurs/new', [FournisseurController::class, 'store'])->name('fournisseurs.new');

Route::get('produits', [ProduitController::class, 'index'])->name('produits.all');
Route::get('produits/delete/id', [ProduitController::class, 'delete'])->name('produits.delete');
Route::post('produits/new', [ProduitController::class, 'store'])->name('produits.new');

