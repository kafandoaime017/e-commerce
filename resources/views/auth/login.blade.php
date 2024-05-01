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
    <div class="container my-5 p-4">
       <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="image-login">
                <img src="{{asset('image/login.png')}}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-lg-4 my-4">
            <h2 style="font-weight: 800;color:rgb(45, 108, 108)">Connectez-vous</h2>
            <form action="{{ route('login') }}"  method="post">
                @csrf
                <p>
                    <input type="email" class="form-control  @error('email') border-danger  @enderror" placeholder="Votre email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <input type="password" class="form-control @error('password') border-danger  @enderror" placeholder="********" name="password">
                    @error('password')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <button type="submit" class="btn">Se connecter</button>
                </p>
            </form>
            <small style="font-weight:700">Vous n'avez pas de compte ?<a style="color:rgb(32, 67, 92)" href="/register">Creer un compte</a></small><hr>
           <p class="text-center">
            <small style="font-weight:700"><a style="color:rgb(32, 67, 92)" href="/forgot-password">Mot de passe oublié ?</a></small>
           </p>
        </div>
       </div>
    </div>
    <br> <br> <br>
@endsection
