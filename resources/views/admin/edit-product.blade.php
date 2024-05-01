@extends('admin.layout.app')

@section('content')
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <form class="card p-3 border-0 " action="{{ route('modifier_prod_traietement',['id'=>$product->id]) }}" enctype="multipart/form-data" method="post">
                    <h4 style="font-weight: 800" class="text-center">Modifier un produit</h4>
                    @csrf
                    <p>
                        {{-- <label for="image">Image</label> --}}
                        <h5 style="font-weight: 800;color:rgb(43, 116, 109)">Image actuelle</h5>
                     <p class="text-center">
                        <img src="{{ $product->image }}" height="160" width="50%" alt="">
                     </p>
                        <small>Voulez vous le modifier ?</small>
                        <input type="file" name="image" id="image" class="form-control" value="{{ $product->image }}">
                        @error('image')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="nom">Nom du produit</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{ $product->nom }}">
                        @error('nom')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="description">Description du produit</label>
                        <textarea  name="description" id="description" class="form-control">{{ $product->description }}</textarea>
                        @error('description')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="id_categorie">Categorie</label>
                        <select class="form-select" name="id_categorie" id="id_categorie" value="{{ old('id_categorie') }}">
                            <option disabled selected value="">-- Choisir la categorie --</option>
                            @foreach ($categories as $row )
                                <option @if($product->id_categorie==$row->id) selected @endif  value="{{ $row->id }}">{{ $row->nom }}</option>
                            @endforeach
                        </select>
                        @error('id_categorie')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="prix">Prix/l'unité</label>
                        <input type="number" name="prix" id="prix" class="form-control" value="{{ $product->prix }}">
                        @error('prix')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <button type="submit" class="btn btn-success fw-bolder w-100">Modifier </button>
                    </p>
                </form>
            </div>
        </div>
    </div>

@endsection
