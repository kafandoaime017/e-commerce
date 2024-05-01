<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getProducts(){
        $categories=Categorie::with('products')->get();
        $products=Product::with('categorie')->paginate(8);
        return view('products',['products'=>$products,'categories'=>$categories]);
    }

    public function filterProduct($id)
    {
        $categories = Categorie::with('products')->get();
        $products = Product::with('categorie')->where('id_categorie', $id)->paginate(8);
        $categorieNom = Categorie::findOrFail($id)->nom;
        return view('products', ['products' => $products, 'categories' => $categories, 'message' => "de catégorie $categorieNom"]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {
        $request->validate([
            'terme'=>'required'
        ]);

        $terme=$request->terme;
        $categories=Categorie::with('products')->get();
        $products=Product::where('nom','like','%'.$terme.'%')
                            ->orWhere('description','like','%'.$terme.'%')
                            ->orWhere('prix','like','%'.$terme.'%')
                            ->paginate(8);

        return view('products',['products'=>$products,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
