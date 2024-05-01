@extends('Template.app')

@section('content')
<style>
    input
    {
        padding: 10px !important;
    }
    input:focus
    {
        border: 1px solid rgb(42, 85, 105) !important;
        box-shadow: none  !important;
    }
    form button
    {
        background-color:rgb(42, 85, 105) !important;
        padding: 10px !important;
        color: white !important;
        font-weight: 800 !important;
        width: 100%;
    }
</style>
    <div class="container my-5 p-3">
       <div class="row d-flex justify-content-center">

        <div class="col-lg-5 my-2">
            <h2 style="font-weight: 800;color:rgb(45, 108, 108)">Reinitialiser le mot de passe</h2>
            <p>
                <small style="color:black;font-weight:600">Vous avez oublié votre mot de passe ? pas de panique soumettez juste votre email et nous vous enverrons par email un lien de reinitialisataion de votre mot de passe.</small>
            </p>
            <form action="{{ route('password.email') }}"  method="post">
                @csrf
                <p>
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="Votre email">
                </p>
                <p>
                    <input name="password" type="password" class="form-control" >
                </p>
                <p>
                    <input name="password_confirmation" type="password" class="form-control">
                </p>
                <p>
                    <button class="btn">Reinitialiser le mot de passe</button>
                </p>
            </form>
            <p class="text-center">
                <small style="font-weight:700"><a style="color:rgb(32, 67, 92)" href="/register">Connexion</a></small><hr>
            </p>
           {{-- <p class="text-center">
            <small style="font-weight:700"><a style="color:rgb(32, 67, 92)" href="/forgot-password">Mot de passe oublié ?</a></small>
           </p> --}}
        </div>
       </div>
    </div>
    <br> <br> <br>
@endsection
