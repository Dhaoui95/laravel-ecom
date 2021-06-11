<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactForMail;
use AApp\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;

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
Route::get('/index','PageController@getIndex');
Route::get('/jdida','PageController@getJdida');
Route::get('/contact','ContactController@getContact');
Route::post('/contactMail','ContactController@envoie')->name('cont');
Route::get('/pannier','PageController@pannier');
Route::get('/ajoutVente','VenteController@annonceVente');
Route::get('/profile','UserController@profile');
Route::get('/ajout','PostController@annonce');
Route::post('/ajoutAnnonce','PostController@ajout')->name('ajout');
Route::post('/ajoutVente','VenteController@ajoutVente')->name('postVente');
Route::get('/listeProduit','PostController@getPost');
Route::get('/listeVente','VenteController@getPostVente');
Route::get('/liked/{id}','PostController@like');
Route::get('/likedVente/{id}','VenteController@likeVente');
Route::post('add/to_cart/{vente_id}','PannierController@addPannier')->middleware('auth');
Route::get('pannierView','PannierController@getPannier');
Route::get('pannierViewPost','PannierController@getPannierPost');
Route::post('add/to_cartPost/{post_id}','PannierController@addPannierPost');
Route::get('pannier/delete/{pannier_id}','PannierController@destroy');
Route::post('pannier/update/quantite/{pannier_id}','PannierController@update');
Route::post('comments/{vente}','CommentController@storeComment');
Route::post('commentsP/{post}','CommentController@storeCommentPost');
Route::get('/aboutUser','Admin\DashboardController@afficheAbout');

Route::get('/index','PageController@getPostVente'); //afficher les vente au home
//              categorie
Route::get('/recherche','PageController@filtre')->name('filtre');
//Route::get('/filtre','PageController@filtre');

//     Facebook  
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
// LOGIN GOOGLE


//   messagerie
Route::get('/chat','HomeController@chat');
Route::get('/message/{id}','HomeController@getMessage')->name('message');
// profile
Route::get('/account/{id}','PageController@getProfile');
Route::put('/update','UserController@update')->name('profileupdate');

// wishlist
Route::get('/addWishlist','WishlistController@getWishlist');
Route::post('add/wishlist/{vente_id}','WishlistController@addWishlist');
Route::get('wishlist/delete/{wish_id}','WishlistController@destroy');

// search
Route::get('/recherche','PageController@search')->name('prod.search');

// images multiple
Route::get('/imageM','ImageController@index');
Route::post('/image','ImageController@store')->name('upload');
Route::get('/imageV','ImageController@getImage');

Route::get('/payment','PageController@payment');
Route::post('checkout','PageController@afterpayment')->name('checkout.credit-card');



Auth::routes();
//           ADMIN
Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/dashboard',function(){

        return view('admin.dashboard');
    });
    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::get('/role-delete/{id}','Admin\DashboardController@registerdelete');

    Route::get('/role-produit','Admin\DashboardController@produit');
    Route::post('/add-product','Admin\DashboardController@Ajoutproduit');
    Route::get('/role-produit','Admin\DashboardController@produitAff');
    Route::get('/role-prod/{id}','Admin\DashboardController@proddelete');

    Route::get('/about','Admin\DashboardController@about');
    Route::post('/aboutStore','Admin\DashboardController@storeAbout');
});
Route::get('test', function () {

    $user = [
        'name' => 'Mahedi Hasan',
        'info' => 'Laravel Developer'
    ];

    \Mail::to('mail@codechief.org')->send(new \App\Mail\NewMail($user));

    dd("success");

});

Route::get('/home', 'HomeController@index')->name('home');
