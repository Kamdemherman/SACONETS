<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TchatController;
use Gloudemans\Shoppingcart\Facades\Cart;

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

/* Route::get('/', function () {
    return view('menu');
}); */
Route::get('/', [App\Http\Controllers\AccueilController::class, 'index']);  

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// live chat

Route::resource('tchat', TchatController::class);

//ckeditor
//Route::post('ckeditor/image_upload', 'CKEditorController@store')->name('upload');
Route::post('/ckeditor/image_upload', [App\Http\Controllers\CKEditorController::class, 'store'])->name('upload');
//route boutique
Route::get('/shop', [App\Http\Controllers\BoutiqueController::class, 'index'])->name('shop');
Route::get('/shop/detail/{id}', [App\Http\Controllers\BoutiqueController::class, 'edit'])->name('shop.detail');
Route::get('/like/{id}', [App\Http\Controllers\BoutiqueController::class, 'like'])->name('like');
Route::get('/search', [App\Http\Controllers\BoutiqueController::class, 'search'])->name('shop.search');
Route::get('/shop/search/{titre}', [App\Http\Controllers\BoutiqueController::class, 'searchTitre'])->name('search.shop');
Route::get('/shop/categorie/{id}', [App\Http\Controllers\BoutiqueController::class, 'FindByCategorie'])->name('shop.categorie');
Route::get('/shop-detail-{slug}', [App\Http\Controllers\BoutiqueController::class, 'editSlug'])->name('shop.details');

//cart route
Route::group(['middleware' => ['auth']],function (){
    Route::post('/shop/add_cart', [App\Http\Controllers\BoutiqueController::class, 'store'])->name('add.cart');
    Route::get('/panier', [App\Http\Controllers\BoutiqueController::class, 'show'])->name('cart');
    Route::post('/panier/update/{rowId}', [App\Http\Controllers\CheckoutController::class, 'update'])->name('cart.update');
    Route::get('/shop/panier/delete/{rowId}', [App\Http\Controllers\BoutiqueController::class, 'destroy'])->name('cart.delete');
    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
    Route::get('/stripe', [App\Http\Controllers\CheckoutController::class, 'store'])->name('stripe');
    Route::post('/stripe_save', [App\Http\Controllers\CheckoutController::class, 'save'])->name('stripe.save');
    Route::get('/commande', [App\Http\Controllers\CheckoutController::class, 'edit'])->name('commande');

    Route::get('/commande-annuler-{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('commande.annuler');
    Route::get('/viderPanier',function ()
    {
        Cart::destroy();
    });

    Route::post('/paypal', [App\Http\Controllers\PaypalController::class, 'pay'])->name('paypal');
    Route::get('/success', [App\Http\Controllers\PaypalController::class, 'success'])->name('success');
    Route::get('/error', [App\Http\Controllers\PaypalController::class, 'error'])->name('error');
    //commander route
    Route::get('/commander', [App\Http\Controllers\OrderController::class, 'index'])->name('commander');
    Route::get('/commander/send', [App\Http\Controllers\OrderController::class, 'SendOrder'])->name('commander.send');

});

//route telecom 
Route::get('/interconnexion-et-internet-VSAT', [App\Http\Controllers\Service\TelecomController::class, 'index'])->name('interconnexion-et-internet-VSAT');
Route::get('/internet-et-interconnexion-fibre-optique', [App\Http\Controllers\Service\SecuriteController::class, 'index'])->name('internet-et-interconnexion-fibre-optique');
Route::get('/video-surveillance', [App\Http\Controllers\Service\IntegrationController::class, 'index'])->name('video-surveillance');
Route::get('/controle-acces', [App\Http\Controllers\Service\PieceController::class, 'index'])->name('controle-acces');
Route::get('/tracking', [App\Http\Controllers\Service\PieceController::class, 'Tracking'])->name('tracking');
Route::get('/telephonie-mobile-par-satellite', [App\Http\Controllers\Service\PieceController::class, 'Telephone'])->name('telephonie-mobile-par-satellite');
Route::get('/alarme-anti-intrusion', [App\Http\Controllers\Service\PieceController::class, 'Alarme'])->name('alarme-anti-intrusion');
Route::get('/systeme-de-securite-ncendie', [App\Http\Controllers\Service\PieceController::class, 'SecuriteIncendie'])->name('systeme-de-securite-ncendie');
Route::get('/reseau-informatique-et-conseil', [App\Http\Controllers\Service\IntegrationController::class, 'CabageReseau'])->name('cablage-reseau-structure');
Route::get('/visioconference', [App\Http\Controllers\Service\IntegrationController::class, 'Visioconference'])->name('visioconference');
Route::get('/compteuses-et-trieuses-de-billets-de-banque', [App\Http\Controllers\Service\TelecomController::class, 'Compteuse'])->name('compteuses.trieuses');


//route produit
Route::get('/produit-categorie-{slug}', [App\Http\Controllers\ProduitController::class, 'index'])->name('produit.categorie');
Route::get('/produit-detail-{slug}', [App\Http\Controllers\ProduitController::class, 'editProduit'])->name('produit.details');
Route::get('/produit-search', [App\Http\Controllers\ProduitController::class, 'store'])->name('produit.search');

Route::get('/produit-sous-categorie-{slug}', [App\Http\Controllers\ProduitController::class, 'indexSous'])->name('produit.sous.categorie');
//route contact
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'Send'])->name('contacts');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

//newsletter
Route::post('/subscrire', [App\Http\Controllers\ContactController::class, 'Subscrire'])->name('subscrire');
//route news
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/news/edit/{id}', [App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
Route::get('/news-details-{slug}', [App\Http\Controllers\NewsController::class, 'editNews'])->name('news.detail');
Route::get('/news-search-title', [App\Http\Controllers\NewsController::class, 'Search'])->name('news.search');

//route about
Route::get('/qui-somme-nous', [App\Http\Controllers\AboutController::class, 'index'])->name('qui-somme-nous');
Route::get('/histoire', [App\Http\Controllers\AboutController::class, 'index1'])->name('histoire');
Route::get('/liste_partenaire', [App\Http\Controllers\AboutController::class, 'index2'])->name('liste_partenaire');
Route::get('/devenir_partenaire', [App\Http\Controllers\AboutController::class, 'index3'])->name('devenir_partenaire');
Route::get('/honneurs', [App\Http\Controllers\AboutController::class, 'index4'])->name('honneurs');
Route::get('/emploi', [App\Http\Controllers\AboutController::class, 'index5'])->name('emploi');
Route::get('/candidature', [App\Http\Controllers\AboutController::class, 'index6'])->name('candidature');

//route carriere
Route::get('/job', [App\Http\Controllers\JobController::class, 'index'])->name('job');
Route::get('/job/edit/{id}', [App\Http\Controllers\JobController::class, 'edit'])->name('job.edit');
Route::get('/job-detail-{slug}', [App\Http\Controllers\JobController::class, 'editTitre'])->name('job.detail');
Route::get('/job/application/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('job.application');
Route::get('/job-application-{slug}', [App\Http\Controllers\JobController::class, 'Formutaire'])->name('job.application.form');
Route::post('/job/applications/{titre}', [App\Http\Controllers\JobController::class, 'store'])->name('job.applications');
   // route candidature spontanee
Route::get('/candidature-spontanee', [App\Http\Controllers\CandidatureSpontaneeController::class, 'index'])->name('candidature-spontanee');
Route::post('/candidature-spontanee', [App\Http\Controllers\CandidatureSpontaneeController::class, 'store'])->name('candidature-spontanee.store');   

   // route faq
Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');

   // route partenaire liste
Route::get('/partenaire', [App\Http\Controllers\PartenaireController::class, 'index'])->name('partenaire.liste');
   // route investisseur
Route::get('/investisseurs', [App\Http\Controllers\InvestisseurController::class, 'index'])->name('investisseurs');
Route::post('/investisseurs', [App\Http\Controllers\InvestisseurController::class, 'store']);

// route sav
Route::get('/sav', [App\Http\Controllers\SavController::class, 'index'])->name('sav');
// devis route
Route::post('/devis', [App\Http\Controllers\DevisController::class, 'store'])->name('devis.store');  
//admin auth route



Route::namespace('App\Http\Controllers\Admin')->group(function ()
{
    //login
    //Route::get('/administration','Auth\LoginController@showLoginForm');
    Route::get('/administration', function (){
        return redirect('/administration/login');
    });
    Route::get('/administration/login','Auth\LoginController@showLoginForm')->name('administration.login');
    Route::post('/administration/login', 'Auth\LoginController@login');
    Route::get('/administration/home','AdminController@index')->name('administration.home');
    //logout
    Route::post('/administration/logout', 'Auth\LoginController@logout')->name('administration.logout');
    //register
    Route::get('/administration/register', 'Auth\RegisterController@showRegistrationForm')->name('administration.register');
    Route::post('/administration/register', 'Auth\RegisterController@register');

    //typeCompte user
    Route::get('/administration/type_compte_user','TypeCompteController@index')->name('administration.type_compte_user');
    Route::post('/administration/type_compte_user','TypeCompteController@store');
    Route::get('/administration/type_compte_user/add','TypeCompteController@Add')->name('administration.type_compte_user/add');
    Route::get('/administration/type_compte_user/edit/{id}','TypeCompteController@edit')->name('administration.type_compte_user.edit');
    Route::post('/administration/type_compte_user/edit/{id}','TypeCompteController@update');
    Route::get('/administration/type_compte_user/destroy/{id}','TypeCompteController@destroy')->name('administration.type_compte_user.delete');

    //shop categorie
    Route::get('/administration/shop_categorie','ShopCategorieController@index')->name('administration.shop_categorie');
    Route::post('/administration/shop_categorie','ShopCategorieController@store');
    Route::get('/administration/shop_categorie/add','ShopCategorieController@Add')->name('administration.shop_categorie/add');
    Route::get('/administration/shop_categorie/edit/{id}','ShopCategorieController@edit')->name('administration.shop_categorie.edit');
    Route::post('/administration/shop_categorie/edit/{id}','ShopCategorieController@update');
    Route::get('/administration/shop_categorie/destroy/{id}','ShopCategorieController@destroy')->name('administration.shop_categorie.delete');

    //shop
    Route::get('/administration/shop','ShopController@index')->name('administration.shop');
    Route::post('/administration/shop','ShopController@store');
    Route::get('/administration/shop/search','ShopController@Search')->name('administration.shop.search');
    //Route::get('/administration/shop/edit/{id}','ShopController@edit')->name('administration.shop.edit');
    Route::post('/administration/shop/edit/{id}','ShopController@update')->name('administration.shop.update');
    Route::get('/administration/shop/destroy/{id}','ShopController@destroy')->name('administration.shop.delete');

    //about saconets route
    Route::get('/administration/about','AboutController@index')->name('administration.about');
    Route::post('/administration/about','AboutController@store');
    Route::get('/administration/about_add','AboutController@Add')->name('administration.about.add');
    Route::get('/administration/about_edit/{id}','AboutController@edit')->name('administration.about.edit');
    Route::post('/administration/about_edit/{id}','AboutController@update');
    Route::get('/administration/about/destroy/{id}','AboutController@destroy')->name('administration.about.delete');

    //service telecom saconets route
    Route::get('/administration/telecom','TelecomController@index')->name('administration.telecom');
    Route::post('/administration/telecom','TelecomController@store');
    Route::get('/administration/telecom_add','TelecomController@Add')->name('administration.telecom.add');
    Route::get('/administration/telecom_edit/{id}','TelecomController@edit')->name('administration.telecom.edit');
    Route::post('/administration/telecom_edit/{id}','TelecomController@update');
    Route::get('/administration/telecom/destroy/{id}','TelecomController@destroy')->name('administration.telecom.delete');
    //service telecom saconets route
    Route::get('/administration/securite','SecuriteController@index')->name('administration.securite');
    Route::post('/administration/securite','SecuriteController@store');
    Route::get('/administration/securite_add','SecuriteController@Add')->name('administration.securite.add');
    Route::get('/administration/securite_edit/{id}','SecuriteController@edit')->name('administration.securite.edit');
    Route::post('/administration/securite_edit/{id}','SecuriteController@update');
    Route::get('/administration/securite/destroy/{id}','SecuriteController@destroy')->name('administration.securite.delete');
    //produit thuraya saconets route
    Route::get('/administration/produit','PTController@index')->name('administration.produit');
    Route::post('/administration/produit','PTController@store');
    Route::get('/administration/produit_add','PTController@Add')->name('administration.produit.add');
    Route::get('/administration/produit/search','PTController@Search')->name('administration.produit.search');
    Route::get('/administration/produit_edit/{id}','PTController@edit')->name('administration.produit.edit');
    Route::post('/administration/produit_edit/{id}','PTController@update');
    Route::get('/administration/produit/destroy/{id}','PTController@destroy')->name('administration.produit.delete');

    //Document thuraya saconets route
    Route::get('/administration/produit_Doc','DocumentThurayaController@index')->name('administration.produit_Doc');
    Route::post('/administration/produit_Doc','DocumentThurayaController@store');
    Route::get('/administration/produit_Doc_add','DocumentThurayaController@Add')->name('administration.produit_Doc.add');
    Route::get('/administration/produit_Doc_edit/{id}','DocumentThurayaController@edit')->name('administration.produit_Doc.edit');
    Route::post('/administration/produit_Doc_edit/{id}','DocumentThurayaController@update');
    Route::get('/administration/produit_Doc/destroy/{id}','DocumentThurayaController@destroy')->name('administration.produit_Doc.delete');

    //Accessoire thuraya saconets route
    Route::get('/administration/produit_accessoire','AccessoireThurayaController@index')->name('administration.produit_accessoire');
    Route::post('/administration/produit_accessoire','AccessoireThurayaController@store');
    Route::get('/administration/produit_accessoire_add','AccessoireThurayaController@Add')->name('administration.produit_accessoire.add');
    Route::get('/administration/produit_accessoire_edit/{id}','AccessoireThurayaController@edit')->name('administration.produit_accessoire.edit');
    Route::post('/administration/produit_accessoire_edit/{id}','AccessoireThurayaController@update');
    Route::get('/administration/produit_accessoire/destroy/{id}','AccessoireThurayaController@destroy')->name('administration.produit_accessoire.delete');
    //produit TC saconets route
    Route::get('/administration/produit_TC','TCController@index')->name('administration.produit_TC');
    Route::post('/administration/produit_TC','TCController@store');
    Route::get('/administration/produit_TC_add','TCController@Add')->name('administration.produit_TC.add');
    Route::get('/administration/produit_TC_edit/{id}','TCController@edit')->name('administration.produit_TC.edit');
    Route::post('/administration/produit_TC_edit/{id}','TCController@update');
    Route::get('/administration/produit_TC/destroy/{id}','TCController@destroy')->name('administration.produit_TC.delete');
    //produit MC saconets route
    Route::get('/administration/produit_MC','MCController@index')->name('administration.produit_MC');
    Route::post('/administration/produit_MC','MCController@store');
    Route::get('/administration/produit_MC_add','MCController@Add')->name('administration.produit_MC.add');
    Route::get('/administration/produit_MC_edit/{id}','MCController@edit')->name('administration.produit_MC.edit');
    Route::post('/administration/produit_MC_edit/{id}','MCController@update');
    Route::get('/administration/produit_MC/destroy/{id}','MCController@destroy')->name('administration.produit_MC.delete');
    //produit AI saconets route

    //solution saconets route
    Route::get('/administration/solution','SolutionController@index')->name('administration.solution');
    Route::post('/administration/solution','SolutionController@store');
    Route::get('/administration/solution_add','SolutionController@Add')->name('administration.solution.add');
    Route::get('/administration/solution_edit/{id}','SolutionController@edit')->name('administration.solution.edit');
    Route::post('/administration/solution_edit/{id}','SolutionController@update');
    Route::get('/administration/solution/destroy/{id}','SolutionController@destroy')->name('administration.solution.delete');
     //news saconets route
     Route::get('/administration/news','NewsController@index')->name('administration.news');
     Route::post('/administration/news','NewsController@store');
     Route::get('/administration/news_add','NewsController@Add')->name('administration.news.add');
     Route::get('/administration/news/search','NewsController@Search')->name('administration.news.search');
     Route::get('/administration/news_edit/{id}','NewsController@edit')->name('administration.news.edit');
     Route::post('/administration/news_edit/{id}','NewsController@update');
     Route::get('/administration/news/destroy/{id}','NewsController@destroy')->name('administration.news.delete');

    //nous saconets route
    Route::get('/administration/nous','NousController@index')->name('administration.nous');
    Route::post('/administration/nous','NousController@store');
    Route::get('/administration/nous_add','NousController@Add')->name('administration.nous.add');
    Route::get('/administration/nous_edit/{id}','NousController@edit')->name('administration.nous.edit');
    Route::post('/administration/nous_edit/{id}','NousController@update');
    Route::get('/administration/nous/destroy/{id}','NousController@destroy')->name('administration.nous.delete');

    //histoire saconets route
    Route::get('/administration/histoire','HistoireController@index')->name('administration.histoire');
    Route::post('/administration/histoire','HistoireController@store');
    Route::get('/administration/histoire-add','HistoireController@Add')->name('administration.histoire.add');
    Route::get('/administration/histoire-edit/{id}','HistoireController@edit')->name('administration.histoire.edit');
    Route::post('/administration/histoire-edit/{id}','HistoireController@update');
    Route::get('/administration/histoire/destroy/{id}','HistoireController@destroy')->name('administration.histoire.delete');

    //histoire saconets route
    Route::get('/administration/sav','SavController@index')->name('administration.sav');
    Route::post('/administration/sav','SavController@store');
    Route::get('/administration/sav-add','SavController@Add')->name('administration.sav.add');
    Route::get('/administration/sav-edit/{id}','SavController@edit')->name('administration.sav.edit');
    Route::post('/administration/sav-edit/{id}','SavController@update');
    Route::get('/administration/sav/destroy/{id}','SavController@destroy')->name('administration.sav.delete');

    //equipe saconets route
    Route::get('/administration/equipe','EquipeController@index')->name('administration.equipe');
    Route::post('/administration/equipe','EquipeController@store');
    Route::get('/administration/equipe-add','EquipeController@Add')->name('administration.equipe.add');
    Route::get('/administration/equipe-edit/{id}','EquipeController@edit')->name('administration.equipe.edit');
    Route::post('/administration/equipe-edit/{id}','EquipeController@update');
    Route::get('/administration/equipe/destroy/{id}','EquipeController@destroy')->name('administration.equipe.delete');

    //technicien saconets route
    Route::get('/administration/technicien','TechnicienController@index')->name('administration.technicien');
    Route::post('/administration/technicien','TechnicienController@store');
    Route::get('/administration/technicien-add','TechnicienController@Add')->name('administration.technicien.add');
    Route::get('/administration/technicien-edit/{id}','TechnicienController@edit')->name('administration.technicien.edit');
    Route::post('/administration/technicien-edit/{id}','TechnicienController@update');
    Route::get('/administration/technicien/destroy/{id}','TechnicienController@destroy')->name('administration.technicien.delete');

     //emploi saconets route
     Route::get('/administration/emploi','EmploiController@index')->name('administration.emploi');
     Route::post('/administration/emploi','EmploiController@store');
     Route::get('/administration/emploi_add','EmploiController@Add')->name('administration.emploi.add');
     Route::get('/administration/emploi/search','EmploiController@Search')->name('administration.emploi.search');
     Route::get('/administration/emploi_edit/{id}','EmploiController@edit')->name('administration.emploi.edit');
     Route::post('/administration/emploi_edit/{id}','EmploiController@update');
     Route::get('/administration/emploi/destroy/{id}','EmploiController@destroy')->name('administration.emploi.delete');
     //candidature saconets route
     Route::get('/administration/candidature','CandidatureController@index')->name('administration.candidature');
     Route::get('/administration/candidature/search','CandidatureController@Search')->name('administration.candidature.search');
     Route::get('/administration/candidature/destroy/{id}','CandidatureController@destroy')->name('administration.candidature.delete');
     //candidature saconets route
     Route::get('/administration/candidature-spontanee','CandidatureSpontaneeController@index')->name('administration.candidature-spontanee');
     Route::get('/administration/candidature-spontanee/search','CandidatureSpontaneeController@Search')->name('administration.candidature-spontanee.search');
     Route::get('/administration/candidature-spontanee/destroy/{id}','CandidatureSpontaneeController@destroy')->name('administration.candidature-spontanee.delete');

      //faq saconets route
      Route::get('/administration/faq','FaqController@index')->name('administration.faq');
      Route::post('/administration/faq','FaqController@store');
      Route::get('/administration/faq_add','FaqController@Add')->name('administration.faq.add');
      Route::get('/administration/faq_edit/{id}','FaqController@edit')->name('administration.faq.edit');
      Route::post('/administration/faq_edit/{id}','FaqController@update');
      Route::get('/administration/faq/destroy/{id}','FaqController@destroy')->name('administration.faq.delete');

     //partenaire saconets route
     Route::get('/administration/partenaire','PartenaireController@index')->name('administration.partenaire');
     Route::post('/administration/partenaire','PartenaireController@store');
     Route::get('/administration/partenaire_add','PartenaireController@Add')->name('administration.partenaire.add');
     Route::get('/administration/partenaire/search','PartenaireController@Search')->name('administration.partenaire.search');
     Route::get('/administration/partenaire_edit/{id}','PartenaireController@edit')->name('administration.partenaire.edit');
     Route::post('/administration/partenaire_edit/{id}','PartenaireController@update');
     Route::get('/administration/partenaire/destroy/{id}','PartenaireController@destroy')->name('administration.partenaire.delete');
    //saconets route marque
     Route::get('/administration/marque','MarqueController@index')->name('administration.marque');
     Route::post('/administration/marque','MarqueController@store');
     Route::get('/administration/marque_add','MarqueController@Add')->name('administration.marque.add');
     Route::get('/administration/marque/search','MarqueController@Search')->name('administration.marque.search');
     Route::get('/administration/marque_edit/{id}','MarqueController@edit')->name('administration.marque.edit');
     Route::post('/administration/marque_edit/{id}','MarqueController@update');
     Route::get('/administration/marque/destroy/{id}','MarqueController@destroy')->name('administration.marque.delete');
     //investisseur saconets route
     Route::get('/administration/investisseur','InvestisseurController@index')->name('administration.investisseur');
     Route::get('/administration/investisseur/destroy/{id}','InvestisseurController@destroy')->name('administration.investisseur.delete'); 
     //order saconets route
     Route::get('/administration/commande_en_attente','OrderController@index')->name('administration.commande_en_attente');
     Route::get('/administration/commande_en_attente/edit/{id}','OrderController@edit')->name('administration.commande_en_attente.edit');
     Route::get('/administration/commande_en_attente/update/{id}','OrderController@update')->name('administration.commande_en_attente.update');
     Route::get('/administration/commande_en_attente/destroy/{id}','OrderController@destroy')->name('administration.commande_en_attente.destroy');
     Route::get('/administration/commande_en_attente_search_nom','OrderController@NonRegleeClient')->name('administration.commande_en_attente.search_nom');
     Route::get('/administration/commande_en_attente_search_date','OrderController@NonRegleeJour')->name('administration.commande_en_attente.search_date');
     Route::get('/administration/commande_en_attente_search_entre','OrderController@NonRegleeEntre')->name('administration.commande_en_attente.search_entre');
     Route::get('/administration/commande_en_attente/pdf','OrderController@NonRegleeExportPDF')->name('administration.commande_en_attente.pdf');

     Route::get('/administration/commande_reglee','OrderController@indexReglee')->name('administration.commande_reglee');
     Route::get('/administration/commande_reglee/edit/{id}','OrderController@edit')->name('administration.commande_reglee.edit');
     Route::get('/administration/commande_reglee/send/{id}','OrderController@Send')->name('administration.commande_reglee.send');
     Route::get('/administration/commande_reglee/pdf','OrderController@ExportPDF')->name('administration.commande_reglee.pdf');
     Route::get('/administration/commande_reglee/destroy/{id}','OrderController@destroy')->name('administration.commande_reglee.destroy');
     Route::get('/administration/commande_reglee_search_nom','OrderController@RegleeClient')->name('administration.commande_reglee.search_nom');
     Route::get('/administration/commande_reglee_search_date','OrderController@RegleeJour')->name('administration.commande_reglee.search_date');
     Route::get('/administration/commande_reglee_search_entre','OrderController@RegleeEntre')->name('administration.commande_reglee.search_entre');

     Route::get('/administration/commande_annulee','OrderController@indexAnnulee')->name('administration.commande_annulee');
     Route::get('/administration/commande_annulee/edit/{id}','OrderController@edit')->name('administration.commande_annulee.edit');
     Route::get('/administration/commande_annulee/destroy/{id}','OrderController@destroy')->name('administration.commande_annulee.destroy');
     Route::get('/administration/commande_annulee_search_nom','OrderController@AnnuleeClient')->name('administration.commande_annulee.search_nom');
     Route::get('/administration/commande_annulee_search_date','OrderController@AnnuleeJour')->name('administration.commande_annulee.search_date');

     //shop arivage 
    Route::get('/administration/arivage','ArivageController@index')->name('administration.arivage');
    Route::post('/administration/arivage','ArivageController@store');
    Route::get('/administration/arivage/add','ArivageController@Add')->name('administration.arivage-add');
    Route::get('/administration/arivage/edit/{id}','ArivageController@edit')->name('administration.arivage.edit');
    Route::post('/administration/arivage/edit/{id}','ArivageController@update');
    Route::get('/administration/arivage/destroy/{id}','ArivageController@destroy')->name('administration.arivage.delete');

     //slider saconets route
     Route::get('/administration/slider','SliderController@index')->name('administration.slider');
     Route::post('/administration/slider','SliderController@store');
     Route::get('/administration/slider_add','SliderController@Add')->name('administration.slider.add');
     Route::get('/administration/slider_edit/{id}','SliderController@edit')->name('administration.slider.edit');
     Route::post('/administration/slider_edit/{id}','SliderController@update');
     Route::get('/administration/slider/destroy/{id}','SliderController@destroy')->name('administration.slider.delete');

      //sous-categorie saconets route
      Route::get('/administration/sous-categorie','SousCategorieController@index')->name('administration.sous-categorie');
      Route::post('/administration/sous-categorie','SousCategorieController@store');
      Route::get('/administration/sous-categorie/add','SousCategorieController@Add')->name('administration.sous-categorie.add');
      Route::get('/administration/sous-categorie/edit/{id}','SousCategorieController@edit')->name('administration.sous-categorie.edit');
      Route::post('/administration/sous-categorie/edit/{id}','SousCategorieController@update');
      Route::get('/administration/sous-categorie/destroy/{id}','SousCategorieController@destroy')->name('administration.sous-categorie.delete');
});


Route::get('/administration_shop_add', [App\Http\Controllers\Admin\ShopController::class, 'Add'])->name('administration.shop.add');
Route::get('/administration_shop_edit/{id}', [App\Http\Controllers\Admin\ShopController::class, 'edit'])->name('administration.shop.edit');

// route redirection
Route::get('/job/edit/language/en', function (){
    return redirect('/job');
});
Route::get('/job/edit/language/fr', function (){
    return redirect('/job');
});

Route::get('/produit-detail/language/en', function (){
    return redirect('/');
});

Route::get('/produit-detail/language/fr', function (){
    return redirect('/');
});
Route::get('/produit-compteuse-et-trieuse/language/fr', function (){
    return redirect('/');
});

Route::get('/produit-compteuse-et-trieuse/language/en', function (){
    return redirect('/');
});

Route::get('/job/language/en', function (){
    return redirect('/job');
});
Route::get('/job/language/fr', function (){
    return redirect('/job');
});

Route::get('/job/formApplication/language/fr', function (){
    return redirect('/job');
});

Route::get('/job/formApplication/language/en', function (){
    return redirect('/job');
});

Route::get('/news/language/fr', function (){
    return redirect('/');
});
Route::get('/news/language/en', function (){
    return redirect('/');
});

Route::get('/shop/detail/language/en', function (){
    return redirect('/shop');
});

Route::get('/shop/detail/language/fr', function (){
    return redirect('/shop');
});