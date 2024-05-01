<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use App\Models\Contact;


//_____________________________________________________________
//_____________________________________________________________

Route::get('/', [PublicController::class,'index']);

Route::get('/cart', function () {
    return view('panier');
});

Route::get('/detail/{id}',[PublicController::class, 'detailProduct']);
Route::get('/products/category/all/{id}',[PublicController::class, 'getCategorieProduct']);

Route::get('/products',[ProductController::class, 'getProducts']);

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact/traitement',[ContactController::class, 'store'])->name('contact-traitement');




Route::middleware(['auth', 'verified','admin'])->group(function () {
    Route::get('/home', function () {
        if(Auth::user()->role=='admin'){
             $nbreUsers=User::count();
             $nbreProducts=Product::count();
             $nbreMessages=Contact::count();
             return view('admin.dashboard',[
                'nbreUsers'=>$nbreUsers,
                'nbreProducts'=>$nbreProducts,
                'nbreMessages'=>$nbreMessages,
             ]);
        }else{
             return view('client.home');
        }
     })->name('dashboard');
     Route::get('/products/add',[AdminController::class,'createProduct'])->name('ajouter_produit');
     Route::post('/products/add/traitement',[AdminController::class,'storeProduct'])->name('ajouter_produit_traitement');
     Route::get('/products/list',[AdminController::class,'getProducts'])->name('listProduits');
     Route::get('/products/list/detail-product/{id}',[AdminController::class,'ShowProduct'])->name('detail_produit');
     Route::get('/products/edit-product/{id}',[AdminController::class,'editProduct'])->name('modifier_prod');
     Route::post('/products/edit-product/{id}/traietement',[AdminController::class,'updateProduct'])->name('modifier_prod_traietement');
     Route::post('/products/list',[AdminController::class,'searchProduct'])->name('rechercher_prod_traietement');
     Route::get('/products/delete/product/{id}',[AdminController::class,'deleteProduct'])->name('supprimer_produit');
     //Gestion clients
     Route::get('/users/add',[AdminController::class,'createUser'])->name('ajouter_user');
     Route::post('/users/add/traitement',[AdminController::class,'storeUser'])->name('ajouter_user_traitement');
     Route::get('/users/list',[AdminController::class,'getUsers'])->name('lister_users');
     Route::post('/users/list',[AdminController::class,'searchUser'])->name('rechercher_users');
     Route::get('/users/detail-user/{id}',[AdminController::class,'showUser'])->name('detail_user');
     //Contact messages
     Route::get('/messages',[AdminController::class,'getMessages'])->name('messages');

     Route::post('/repondreMessage/{id}',[AdminController::class, 'repondreMessage'])->name('repondreReponseTraitement');
     Route::get('/message/delete/{id}',[AdminController::class, 'deleteMessage'])->name('supprimer');
     Route::get('/admin/profile',function(){
             return view('admin.profile');
     });

});





Route::get('/client/product/detail',function(){
    return view('client.detail');
})->name('detail_product');

//Traitements panier virtuel
Route::post('/addToCard',[CartController::class,'addToCard'])->name('ajouter_panier');
Route::post('/removeToCard/{rowId}',[CartController::class,'removeToCard'])->name('supprimer_panier');
Route::post('/updateQty/{rowId}',[CartController::class,'updateQtyToCart'])->name('modifier_panier');


//CHECKOUT TRAITEMENT

// Route::get('/checkout',[CommandeController::class, 'commander'])->name('commander');

Route::get('/checkout', [StripePaymentController::class, 'stripe']);
Route::post('/stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');








Route::post('/products',[ProductController::class, 'search'])->name('rechercher_traitement');

Route::get('/product/filter/{id}',[ProductController::class, 'filterProduct']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
