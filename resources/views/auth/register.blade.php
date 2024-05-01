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
        <div class="col-lg-5 ">
            <h2 style="font-weight: 800;color:rgb(45, 108, 108)">Créer votre compte</h2>
            <form action="{{ route('register') }}"  method="post">
                @csrf
                <p>
                    <input type="text" class="form-control @error('nom') border-danger  @enderror" name="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                    @error('nom')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </p>
                <p>
                    <input type="text" class="form-control  @error('prenom') border-danger  @enderror" name="prenom" placeholder="Votre prenom " value="{{ old('prenom') }}">
                    @error('prenom')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <input type="email" class="form-control  @error('email') border-danger  @enderror" name="email" placeholder="Votre email" value="{{ old('email') }}">
                    @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <input type="password" class="form-control  @error('password') border-danger  @enderror" name="password" placeholder="********">
                    @error('password')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <input type="password" name="password_confirmation" name="password_confirmation" class="form-control"/>
                </p>
                <p>
                    <button class="btn">Créer mon compte</button>
                </p>
            </form>
            <small style="font-weight:700">Vous avez déja un compte ?<a style="color:rgb(32, 67, 92)" href="/login">Connexion</a></small>
        </div>
       </div>
    </div>
    <br> <br> <br>
@endsection
