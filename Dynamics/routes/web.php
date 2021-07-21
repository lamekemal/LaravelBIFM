<?php
/**
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index']);
Route::resource('/Actualite', PostsController::class);
Route::resource('/BiShop', ShopController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Securite', [PagesController::class, 'guard']);
Route::get('/Climatisation', [PagesController::class, 'cold'])->name('Climatisation');
Route::get('/Domotique', [PagesController::class, 'domotics']);
Route::get('/Electricite', [PagesController::class, 'power']);
Route::get('/FacilityManagement', [PagesController::class, 'fmanagement']);
//Route::group( ['prefix' => 'backend','middleware' => ['auth', 'admin']], function() {});

Route::get('/Securite/Alarme-intrusion', [PagesController::class, 'intrusion']);
Route::get('/Securite/Alarme-incendie', [PagesController::class, 'incendie']);
Route::get('/Securite/Video-surveillance', [PagesController::class, 'surveillance']);
Route::get('/Securite/Control-acces', [PagesController::class, 'acess']);
Route::get('/Securite/Cablage-reseau', [PagesController::class, 'reseau']);