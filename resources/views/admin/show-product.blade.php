@extends('admin.layout.app')

@section('content')
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 card border-0 shadow-sm p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 bg-light">
                            <div class="img">
                                <img src="{{ $product->image }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2 style="font-weight: 800">{{ $product->nom }}</h2>
                            <p>
                                <small style="color:red;font-weight:800"> <span class="badge bg-danger">{{ $product->categorie->nom }}</span></small>
                            </p>
                            <p>
                                 {{ $product->description }}
                            </p>
                            <h3>Prix: <span style="font-weight: 800;color:rgb(34, 96, 95)">{{ $product->prix }} FCFA</span></h3>
                            <p>
                                <small>Produit ajouté le <span style="font-weight: 800">{{ $product->created_at->formatLocalized('%e %B %Y à %Hh') }}</span></small>
                            </p>
                            <div class="buttons">
                                <button class="btn btn-primary fw-bolder">Modifier </button>
                                <button class="btn btn-danger fw-bolder">Supprimer </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
