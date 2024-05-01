<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(): View
    {
        return view('checkout');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // Collecte des informations du client
        $clientDetails = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'adresse' => $request->input('adresse'),
        ];

        // Création de la charge avec les informations du client
        Stripe\Charge::create([
            "amount" => 100 * 100, // Montant en centimes (par exemple, 10$ serait 1000 centimes)
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from your card",
            "metadata" => $clientDetails, // Ajout des détails du client comme métadonnées
        ]);

        // Si l'utilisateur a choisi de créer un compte, créer le compte utilisateur
        if ($request->has('create-account')) {
            $password = Hash::make($request->input('password'));

            // Création du compte utilisateur
            $user = User::create([
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'email' => $request->input('email'),
                'password' => $password,
                // Ajoutez d'autres champs utilisateur selon vos besoins
            ]);

            // Connexion de l'utilisateur après la création du compte
            Auth::login($user);
        }

        // Retour à la page précédente avec un message de succès
        return back()->with('success', 'Payment successful!');
    }

}
