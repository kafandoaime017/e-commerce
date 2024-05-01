@extends('admin.layout.app')

@section('content')
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 card border-0 shadow-sm p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="text-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/9193/9193821.png" height="100" width="100" alt="">
                            </p>
                            <h4 class="text-center" style="font-weight: 800">{{ $user->nom }} {{ $user->prenom }}</h4>
                            <h6 class="text-center" style="font-weight: 800"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></h6>
                            <h6 class="text-center" style="font-weight: 800">Date de creation de compte: {{ $user->created_at }}</h6>
                            <p>
                                {{-- <small style="color:red;font-weight:800"> <span class="badge bg-danger">{{ $product->categorie->nom }}</span></small> --}}
                            </p>
                            {{-- <p>
                                 {{ $product->description }}
                            </p>
                            <h3>Prix: <span style="font-weight: 800;color:rgb(34, 96, 95)">{{ $product->prix }} FCFA</span></h3>
                            <p>
                                <small>Produit ajouté le <span style="font-weight: 800">{{ $product->created_at->formatLocalized('%e %B %Y à %Hh') }}</span></small>
                            </p> --}}
                            <div class="buttons d-flex justify-content-center">
                                <button class="btn btn-primary mx-2  fw-bolder">Modifier </button>
                                <button class="btn btn-danger  mx-2 fw-bolder">Supprimer </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
