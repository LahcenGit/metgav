<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AdminController;
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


Route::get('/BS', function () {
    return view('Bs-detail');
});
Route::get('/tubulaire', function () {
    return view('tubulaire-detail');
});
Route::get('/armement', function () {
    return view('armement-detail');
});
Route::get('/charpente-metallique', function () {
    return view('charpente-metallique-detail');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/ermaksan-cutting-machine', function () {
    return view('investissement.ermaksan');
});

Route::get('/presse-plieuse-hydraulique-SPEED-BEND-PRO', function () {
    return view('investissement.presse-plieuse');
});
Route::get('/OPW-750-la-soudeuse-automatique', function () {
    return view('investissement.opw-750');
});
Route::get('/vernet-behringer-Scie-à-ruban-HBP-series', function () {
    return view('investissement.vernet-behringer');
});
Route::get('/demande-devis', function () {
    return view('devis');
});
Auth::routes();
Route::resource('/admin/articles',ArticleController::class)->middleware('can:admin');
Route::resource('/admin/actualites',ActualiteController::class)->middleware('can:admin');
Route::resource('/admin',AdminController::class)->middleware('can:admin');
Route::get('/article/{slug}',[App\Http\Controllers\FrontController::class, 'detailArticle']);
Route::get('/actualite/{slug}',[App\Http\Controllers\FrontController::class, 'detailActualite']);
Route::get('/actualites',[App\Http\Controllers\FrontController::class, 'actualites']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
