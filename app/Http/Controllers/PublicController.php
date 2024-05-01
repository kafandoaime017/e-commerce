<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
class PublicController extends Controller
{
    public function index(){
        $products=Product::with('categorie')->paginate(12);
        $categories=Categorie::with('products')->get();
        // $categoriess=Categorie::all();
        return view('home',['products'=>$products,'categories'=>$categories]);
    }

    public function detailProduct($id)
    {
        // Sélectionne les détails du produit avec son ID
        $product = Product::with('categorie')->findOrFail($id);

        // Sélectionne tous les autres produits de la même catégorie
        $relatedProducts = Product::where('id_categorie', $product->id_categorie)
                                  ->where('id', '!=', $id) // Exclut le produit actuel
                                  ->get();

        return view('detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }


    public function getCategorieProduct($id){
        $product=Product::with('categorie')->find($id);
        // $categories=Categorie::with('products')->get();
        $products=Product::with('categorie')->where('id_categorie',$id)->get();
        return view('product-single',['products'=>$products,'product'=>$product]);
    }
}







