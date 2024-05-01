<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Mail\ChangePassword;

class PasswordController extends Controller
{

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        // Mettez à jour le mot de passe de l'utilisateur
        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        // Récupérez les informations de l'utilisateur
        $user = $request->user();

        // Envoyez un e-mail à l'utilisateur pour informer que son mot de passe a été mis à jour
        Mail::to($user->email)->send(new ChangePassword($user));

        return back()->with('status', 'password-updated');
    }

}
