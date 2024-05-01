<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCard(Request $request){

        $id_product = $request->id_product;
        $nom_product = $request->nom_product;
        $quantite = $request->quantite;
        $prix = $request->prix;
        $image = $request->image;

        Cart::add([
            'id' => $id_product,
            'name' => $nom_product,
            'qty' => $quantite,
            'price' => $prix,
            'options' => [
                'image' => $image,
            ],
        ]);

        return redirect()->back()->with('panierMessage', 'Produit ajouté au panier avec succès !');
    }

    public function showCart(){
        $cartItems=Cart::content();
        return view('panier',['cartItems'=>$cartItems]);
    }

    public function removeToCard($rowId){
        $cartItem=Cart::remove($rowId);
        return redirect()->back()->with('panierMessage','produit retiré du panier avec succès !');
    }

    public function updateQtyToCart(Request $request,$rowId){

        $newQty=$request->newQty;
        Cart::update($rowId,$newQty);
        return redirect()->back()->with('panierMessage','La quantité du produit a été mis à jour avec succès !');
    }
}
