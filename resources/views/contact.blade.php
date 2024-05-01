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
        <div class="col-lg-6">
            <img src="{{ asset('image/contact-us.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 ">
            <h2 style="font-weight: 800;color:rgb(45, 108, 108)">Contactez-nous !</h2>
            <form action="{{ route('contact-traitement') }}"  method="post">
                @csrf
                <p>
                    <input type="text" class="form-control" placeholder="Votre nom" name="nom" required>
                    @error('nom')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="Votre prenom" name="prenom" required>
                    @error('prenom')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <input type="email" class="form-control" placeholder="Votre email" name="email" required>
                    @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <input type="text" class="form-control" placeholder="Sujet" name="sujet" required>
                    @error('sujet')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <textarea  name="message" placeholder="Message ici..." class="form-control" required></textarea>
                    @error('message')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                </p>
                <p>
                    <button type="submit" class="btn">ENVOYER <i class="fa-solid mx-3 fa-paper-plane"></i></button>
                </p>
            </form>
            {{-- <small style="font-weight:700">Vous avez déja un compte ?<a style="color:rgb(32, 67, 92)" href="/login">Connexion</a></small> --}}
        </div>
       </div>
    </div>
    <br> <br> <br>
@endsection
