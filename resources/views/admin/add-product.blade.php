@extends('admin.layout.app')

@section('content')

    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <form class="card p-3 border-0 " action="{{ route('ajouter_produit_traitement') }}" enctype="multipart/form-data" method="post">
                    <h4 style="font-weight: 800" class="text-center">Ajouter un produit</h4>
                    @csrf
                    <p>
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                        @error('image')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="nom">Nom du produit</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}">
                        @error('nom')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="description">Description du produit</label>
                        <textarea  name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                        @error('description')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="id_categorie">Categorie</label>
                        <select class="form-select" name="id_categorie" id="id_categorie" value="{{ old('id_categorie') }}">
                            <option disabled selected value="">-- Choisir la categorie --</option>
                            @foreach ($categories as $row )
                                <option  value="{{ $row->id }}">{{ $row->nom }}</option>
                            @endforeach
                        </select>
                        @error('id_categorie')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="prix">Prix/l'unité</label>
                        <input type="number" name="prix" id="prix" class="form-control" value="{{ old('prix') }}">
                        @error('prix')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <button type="submit" class="btn btn-success fw-bolder w-100">Ajouter</button>
                    </p>


                </form>
            </div>
        </div>
    </div>

@endsection
