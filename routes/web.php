<?php

use App\Models\paiement;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin route
Route::get('/admin-register', [App\Http\Controllers\AdministrateursController::class, 'viewForm'])->name('admin.formview');
Route::post('/admin-create', [App\Http\Controllers\AdministrateursController::class, 'registerAdmin'])->name('admin.create');
Route::get('/admin-liste', [App\Http\Controllers\AdministrateursController::class, 'index'])->name('admin.index');
Route::get('/admin-dashboard', [App\Http\Controllers\AdministrateursController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/edit{id}', [App\Http\Controllers\AdministrateursController::class, 'edit'])->name('admin.edit');
Route::patch('/admin/update{id}', [App\Http\Controllers\AdministrateursController::class, 'update'])->name('admin.update');
Route::get('/admin/show{id}', [App\Http\Controllers\AdministrateursController::class, 'show'])->name('admin.show');



//client route
Route::get('/clients-register', [App\Http\Controllers\ClientsController::class, 'viewForm'])->name('clients.formview');
Route::post('/clients-create', [App\Http\Controllers\ClientsController::class, 'registerClients'])->name('clients.create');
Route::get('/clients-liste', [App\Http\Controllers\ClientsController::class, 'index'])->name('clients.index');
Route::get('/clients-dashboard', [App\Http\Controllers\ClientsController::class, 'dashboard'])->name('clients.dashboard');
Route::get('/clients/edit{id}', [App\Http\Controllers\ClientsController::class, 'edit'])->name('clients.edit');
Route::patch('/clients/update{id}', [App\Http\Controllers\ClientsController::class, 'update'])->name('clients.update');



//cat route
Route::get('/categories-register', [App\Http\Controllers\CategoriesController::class, 'viewForm'])->name('categories.formview');
Route::post('/categories-create', [App\Http\Controllers\CategoriesController::class, 'registerCategories'])->name('categories.create');
Route::get('/categories-liste', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/edit{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
Route::patch('/categories/update{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');


//produit route
Route::get('/produits-register', [App\Http\Controllers\ProduitsController::class, 'viewForm'])->name('produits.formview');
Route::post('/produits-create', [App\Http\Controllers\ProduitsController::class, 'registerProduits'])->name('produits.create');
Route::get('/produits-liste', [App\Http\Controllers\ProduitsController::class, 'index'])->name('produits.index');
Route::get('/produits/edit{id}', [App\Http\Controllers\ProduitsController::class, 'edit'])->name('produits.edit');
Route::patch('/produits/update{id}', [App\Http\Controllers\ProduitsController::class, 'update'])->name('produits.update');


//commande route
Route::get('/commande-register', [App\Http\Controllers\CommandeController::class, 'viewForm'])->name('commande.formview');
Route::post('/commande-create', [App\Http\Controllers\CommandeController::class, 'registerCommande'])->name('commande.create');
Route::get('/commande-liste', [App\Http\Controllers\CommandeController::class, 'index'])->name('commande.index');
// Route::get('/commande/edit/{id}', [App\Http\Controllers\CommandeController::class, 'edit'])->name('commande.edit');
// Route::patch('/commande/update{id}', [App\Http\Controllers\CommandeController::class, 'update'])->name('commande.update');


//paiement ..
Route::get('/paiements-register', [App\Http\Controllers\PaiementsController::class, 'viewForm'])->name('paiements.formview');
Route::post('/paiements-create', [App\Http\Controllers\PaiementsController::class, 'registerPaiements'])->name('paiements.create');
Route::get('/paiements-liste', [App\Http\Controllers\PaiementsController::class, 'index'])->name('paiements.index');

Route::get('/livraisons-register', [App\Http\Controllers\LivraisonsController::class, 'viewForm'])->name('livraisons.formview');
Route::post('/livraisons-create', [App\Http\Controllers\LivraisonsController::class, 'registerlivraisons'])->name('livraisons.create');
Route::get('/livraisons-liste', [App\Http\Controllers\LivraisonsController::class, 'index'])->name('livraisons.index');






