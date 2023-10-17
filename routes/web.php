<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Response;

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
Route::get('/prestation/galvanisation-par-centrifugation-des-boulons-et-des-visses ', function () {
    return view('produit-a-la-commande.galvanisation-par-centrifugation-des-boulons-et-des-visses ');
});
Route::get('prestation/galvanisation-a-chaud ', function () {
    return view('produit-a-la-commande.galvanisation-a-chaud ');
});
Route::get('prestation/galvanisation-a-chaud-ain-defla ', function () {
    return view('galvanisation-ain-defla ');
});
Route::get('/produit-a-la-commande/ateliers-hangar-en-charpente-legere-bungalow ', function () {
    return view('produit-a-la-commande.ateliers-hangar-en-charpente-legere-bungalow');
});
Route::get('/produit-a-la-commande/ateliers-hangar-en-charpente-metallique ', function () {
    return view('produit-a-la-commande.ateliers-hangar-metallique');
});
Route::get('/produit-a-la-commande/portes-et-fenetres-en-œuvre-d art ', function () {
    return view('produit-a-la-commande.portes-et-fenetres-en-œuvre-d art');
});
Route::get('/produit-a-la-commande/treillis-soudé ', function () {
    return view('produit-a-la-commande.treillis-soudé');
});
Route::get('/produit-a-la-commande/roulottes-de-chantiers ', function () {
    return view('produit-a-la-commande.roulottes-de-chantiers');
});
Route::get('/produit-a-la-commande/boulons-et-ecrous ', function () {
    return view('produit-a-la-commande.boulons-et-ecrous');
});
Route::get('/produit-a-la-commande/fil-galvanisé ', function () {
    return view('produit-a-la-commande.fil-galvanisé');
});
Route::get('/produit-a-la-commande/mat-eclairage-stade-portuaire ', function () {
    return view('produit-a-la-commande.mat-eclairage-stade-portuaire');
});
Route::get('/produit-a-la-commande/chassis-metallique-panneau ', function () {
    return view('produit-a-la-commande.chassis-metallique-panneau');
});
Route::get('/produit-a-la-commande/support-camera ', function () {
    return view('produit-a-la-commande.support-camera');
});

Route::get('/normes/galvanisation-iso-1461 ', function () {
    return view('la-norme-iso');
});





//catalogue
Route::get('/catalogue ', function () {
    return view('catalogue');
});

//products
Route::get('/products ', function () {
    return view('products');
});

//download file
Route::get('/normes/acier-1025-2', function () {
    $file = public_path('NBN-EN-10025-2.pdf');
    $headers = array(
        'Content-Type: application/pdf',
    );

    return Response::download($file, 'NBN-EN-10025-2.pdf', $headers);
});
