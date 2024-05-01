<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\EnvoyerPassword;
use App\Mail\RepondreMessageMail;

class AdminController extends Controller
{
    public function getProducts(){
        $products=Product::with('categorie')->paginate(6);
        return view('admin.productList',['products'=>$products]);
    }

    public function ShowProduct($id){
        $product=Product::with('categorie')->findOrFail($id);
        return view('admin.show-product',['product'=>$product]);
    }

    public function createProduct(){
        $categories=Categorie::all();
        return view('admin.add-product',['categories'=>$categories]);
    }

    public function editProduct($id){
        $categories=Categorie::all();
        $product=Product::with('categorie')->findorFail($id);
        return view('admin.edit-product',['product'=>$product,'categories'=>$categories]);
    }

    public function storeProduct(Request $request){
        //Validate forms fields
        $request->validate([
            'nom'=>['required','string'],
            'image'=>['required','mimes:png,jpg'],
            'description'=>['required'],
            'prix'=>['required'],
            'id_categorie'=>['required'],
        ]);
        $imageUrl = $request->file('image')->store('image_products','public');

        Product::create([
            'image'=>$imageUrl,
            'nom'=>$request->nom,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'id_categorie'=>$request->id_categorie,
        ]);

        return redirect("/products/list")->with('status','Produit ajouté avec succès !');
    }

    public function updateProduct(Request $request,$id){
        // Valider les champs du formulaire
        $request->validate([
            'nom'=>['required','string'],
            'image'=>['nullable','mimes:png,jpg'], // L'image est facultative
            'description'=>['required'],
            'prix'=>['required'],
            'id_categorie'=>['required'],
        ]);

        $product=Product::findOrFail($id);

        // Vérifier si une nouvelle image est sélectionnée
        $imageSelectionnee = $request->hasFile('image');

        // Si une nouvelle image est sélectionnée
        if($imageSelectionnee){
            $imageUrl = $request->file('image')->store('public/image_products');

            // Mettre à jour les données du produit avec la nouvelle image
            $product->update([
                'image'=>$imageUrl,
                'nom'=>$request->nom,
                'description'=>$request->description,
                'prix'=>$request->prix,
                'id_categorie'=>$request->id_categorie,
            ]);

            return redirect("/products/list")->with('status','Produit modifié avec succès !');
        } else {
            // Si aucune nouvelle image n'est sélectionnée, mettre à jour les autres données du produit
            $product->update([
                'nom'=>$request->nom,
                'description'=>$request->description,
                'prix'=>$request->prix,
                'id_categorie'=>$request->id_categorie,
            ]);

            return redirect("/products/list")->with('status','Produit modifié avec succès !');
        }
    }

    public function searchProduct(Request $request){
        //Validate form's term field
        $request->validate([
            'terme'=>['required']
        ]);

        $terme=$request->terme;

        $products=Product::with('categorie')->where('description','like','%'.$terme.'%')
                            ->orWhere('nom','like','%'.$terme.'%')
                            ->orWhere('prix','like','%'.$terme.'%')
                            ->paginate(6);

        return view('admin.productList',['products'=>$products]);

    }

    public function deleteProduct($id){
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect("/products/list")->with('status','Produit supprimé avec succès !');

    }

    public function getUsers(){
        $users=User::paginate(6);
        return view('admin.clientsList',['users'=>$users]);
    }

    public function searchUser(Request $request){
        //Validate form's term field
        $request->validate([
            'terme'=>['required']
        ]);

        $terme=$request->terme;

        $users=User::where('nom','like','%'.$terme.'%')
                            ->orWhere('prenom','like','%'.$terme.'%')
                            ->orWhere('email','like','%'.$terme.'%')
                            ->orWhere('created_at','like','%'.$terme.'%')
                            ->paginate(6);

        return view('admin.clientsList',['users'=>$users]);

    }

    public function showUser($id){
        $user=User::findOrFail($id);
        return view('admin.show-user',['user'=>$user]);
    }

    public function createUser(){
        return view('admin.add-user');
    }


    public function storeUser(Request $request){
        //Validate forms fields
        $request->validate([
            'nom'=>['required','string'],
            'prenom'=>['required','string'],
            'email'=>['required','string'],
            'role'=>['required','string'],
        ]);

        $password=Str::random(8);
        $passwordHache=Hash::make($password);


        $user=User::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$passwordHache,
        ]);
        Mail::to($request->email)->send(new EnvoyerPassword($request->nom, $request->prenom, $request->email, $password));

        return redirect("/users/list")->with('status','Utilisateur  ajouté avec succès! un email contenant le mot de passe a été envoyé a l\'utilisateur');
    }

    public function getMessages(){
        $messages=Contact::paginate(3);
        return view('admin.messages',['messages'=>$messages]);
    }

    public function repondreMessage(Request $request, $id)
    {
        $request->validate([
            'sujet' => ['required'],
            'contenu' => ['required'],
        ]);

        $contact = Contact::findOrFail($id);

        $nom = $contact->nom;
        $prenom = $contact->prenom;
        $email = $contact->email;
        $sujet = $request->sujet;
        $sujetUser = $contact->sujet; // Supposons que vous voulez utiliser le sujet original du contact
        $message = $request->message;

        Mail::to($email)->send(new RepondreMessageMail($nom, $prenom, $sujet, $message, $sujetUser));

        return redirect()->back()->with('status', "Réponse envoyée à $prenom $nom avec succès !");
    }


    public function deleteMessage($id){
        $message=Contact::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('status', "Message surppimé avec succès !");
    }


}
