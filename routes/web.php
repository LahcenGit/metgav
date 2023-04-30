<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
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


Route::get('/supports-bs', function () {
    return view('Bs-detail');
});
Route::get('/supports-tubulaire', function () {
    return view('tubulaire-detail');
});
Route::get('/armements-electriques', function () {
    return view('armement-detail');
});
Route::get('/charpente-metallique', function () {
    return view('charpente-metallique-detail');
});
Route::get('/article', function () {
    return view('article');
});






Route::get('/galvanisation-a-chaud', function () {
    return view('galvanisation');
});

Route::get('/transformation-metalique', function () {
    return view('transformation-metal');
});


Route::get('/ermaksan-cutting-machine', function () {
    return view('investissement.ermaksan');
});


Route::get('/presse-plieuse-hydraulique-speed-bend-pro', function () {
    return view('investissement.presse-plieuse');
});
Route::get('/opw-750-la-soudeuse-automatique', function () {
    return view('investissement.opw-750');
});
Route::get('/vernet-behringer-scie-a-ruban-hbp-series', function () {
    return view('investissement.vernet-behringer');
});

Route::get('/demande-devis', function () {
    return view('devis');
});




Route::get('/a-propos-metgav', function () {
    return view('a-propos');
});

Route::get('/success-send', function () {
    return view('mail.success');
});


Route::post('/demande-devis/send',[App\Http\Controllers\MailController::class, 'sendEmail']);
Route::get('/demande-devis/send',[App\Http\Controllers\MailController::class, 'index']);

Auth::routes();
Route::resource('/admin/articles',ArticleController::class)->middleware('can:admin');
Route::resource('/admin/actualites',ActualiteController::class)->middleware('can:admin');
Route::resource('/admin',AdminController::class)->middleware('can:admin');
Route::get('/article/{slug}',[App\Http\Controllers\FrontController::class, 'detailArticle']);
Route::get('/actualite/{slug}',[App\Http\Controllers\FrontController::class, 'detailActualite']);
Route::get('/actualites',[App\Http\Controllers\FrontController::class, 'actualites']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

//route products

Route::get('/produit-a-la-chaine/Bs', function () {
    return view('produit-a-la-chaine.Bs');
});

Route::get('/produit-a-la-chaine/armements-electriques', function () {
    return view('produit-a-la-chaine.armement');
});
Route::get('/produit-a-la-chaine/tubulaire', function () {
    return view('produit-a-la-chaine.tubulaire');
});
Route::get('/produit-a-la-commande/support-haute-tension', function () {
    return view('produit-a-la-commande.support-haute-tension');
});
Route::get('/produit-a-la-commande/support-eclairage-standard', function () {
    return view('produit-a-la-commande.support-eclairage-standard');
});
Route::get('/produit-a-la-commande/support-eclairage-en-lampe-classique', function () {
    return view('produit-a-la-commande.support-eclairage-en-lampe-classique');
});
Route::get('/produit-a-la-commande/support-eclairage-photovoltaique', function () {
    return view('produit-a-la-commande.support-eclairage-photovoltaique');
});
Route::get('/produit-a-la-commande/support-telecommunication', function () {
    return view('produit-a-la-commande.support-telecommunication');
});
Route::get('/produit-a-la-commande/catenaires', function () {
    return view('produit-a-la-commande.catenaire');
});
Route::get('/produit-a-la-commande/pivot-irrigation', function () {
    return view('produit-a-la-commande.pivot-irrigation');
});
Route::get('/produit-a-la-commande/chassis-vehicules', function () {
    return view('produit-a-la-commande.chassis-vehicules');
});
Route::get('/produit-a-la-commande/construction-navale', function () {
    return view('produit-a-la-commande.construction-navale');
});
Route::get('/produit-a-la-commande/caillebotis ', function () {
    return view('produit-a-la-commande.caillebotis ');
});
Route::get('/produit-a-la-commande/fabrication-des-citernes ', function () {
    return view('produit-a-la-commande.fabrication-des-citernes ');
});
Route::get('/produit-a-la-commande/galvanisation-par-centrifugation-des-boulons-et-des-visses ', function () {
    return view('produit-a-la-commande.galvanisation-par-centrifugation-des-boulons-et-des-visses ');
});
Route::get('/produit-a-la-commande/galvanisation-a-chaud ', function () {
    return view('produit-a-la-commande.galvanisation-a-chaud ');
});
Route::get('/produit-a-la-commande/ateliers-hangar-en-charpente-legere-bungalow ', function () {
    return view('produit-a-la-commande.ateliers-hangar-en-charpente-legere-bungalow');
});
Route::get('/produit-a-la-commande/portes-et-fenetres-en-œuvre-d art ', function () {
    return view('produit-a-la-commande.portes-et-fenetres-en-œuvre-d art');
});
