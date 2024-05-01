@extends('admin.layout.app')

@section('content')

    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <form class="card p-3 border-0 " action="{{ route('ajouter_user_traitement') }}"  method="post">
                    <h4 style="font-weight: 800" class="text-center">Ajouter un utilisateur</h4>
                    @csrf
                    {{-- <p>
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                        @error('image')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p> --}}
                    <p>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}">
                        @error('nom')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom') }}">
                        @error('prenom')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="role">Role</label>
                        <select class="form-select" name="role" id="role" value="{{ old('role') }}">
                            <option disabled selected value="">-- Choisir le role de l'utilisateur --</option>
                            <option  value="client">Client</option>
                            <option  value="admin">Administrateur</option>
                        </select>
                        @error('role')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    {{-- <p>
                        <label for="password">Mot de passe</label>
                        <input type="number" name="prix" id="prix" class="form-control" value="{{ old('prix') }}">
                        @error('prix')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p> --}}
                    <p>
                        <button type="submit" class="btn btn-success fw-bolder w-100">Ajouter</button>
                    </p>


                </form>
            </div>
        </div>
    </div>

@endsection
