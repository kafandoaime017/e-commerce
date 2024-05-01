@extends('Template.app')

@section('content')
<style>
    .etoiles i
    {
        color: orange !important;
        font-size: 13px;
    }
</style>
<div class="container my-3 py-4 products">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('rechercher_traitement') }}" method="post"> <!-- Ajoute une action à ton formulaire -->
                    @csrf <!-- Ajoute un jeton CSRF pour la sécurité -->
                    <p class="d-flex">
                        <input type="text" placeholder="Rechercher un produit" value="{{ old('terme') }}" class="form-control p-2" name="terme" id="terme"> <!-- Donne un nom à ton champ de texte -->
                        <button class="btn btn-dark fw-bolder" type="submit">Rechercher</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class="row px-2">
        <h5 class="text-center" style="font-weight: 800">Nos produits @if(isset($message)) <span style="color: rgb(38, 92, 108)">{{ $message }}</span> @endif</h5><br><br>
        <div class="col-lg-3">
            <ul class="list-group">
                <li style="background-color: rgb(31, 90, 104)" class="list-group-item text-white text-center fw-bolder">CATEGORIES</li>
                    @foreach ($categories as $cat )
                            <li class="list-group-item"><a href="/product/filter/{{ $cat->id }}" class="btn btn-outline-dark fw-bolder" style="width: 100%">{{ $cat->nom }}</a></li>

                    @endforeach
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="row row-cols-2 "> <!-- Utilisez row-cols-2 pour les écrans de taille téléphone -->
                @forelse ($products as $row)
                    <div class="col-lg-3 mb-3"> <!-- Retirez les classes col-lg-3 et col-md-6 -->
                        <div class="card p-3 shadow border-0">
                            <img src="{{ $row->image }}" class="img-fluid" alt="">
                            <a style="text-decoration: none; color: black; font-weight: 800;" class="text-center" href="/detail/{{ $row->id }}"><small>{{ $row->nom }}</small></a>
                            <div class="etoiles">
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                            </div>
                            <h5 class="text-center" style="font-weight: 800; color: rgb(56, 108, 135)">{{ $row->prix }} $</h5>
                            <form action="{{ route('ajouter_panier') }}" method="post">
                                @csrf
                                    <input type="hidden" name="id_product" id="id_product" value="{{ $row->id }}">
                                    <input type="hidden" name="nom_product" id="nom_product" value="{{ $row->nom }}">
                                    <input type="hidden" value="1" name="quantite" id="quantite">
                                    <input type="hidden" value="{{ $row->image }}" name="image" id="image">

                                    <input type="hidden" value="{{ $row->prix }}" name="prix" id="prix">
                                  <p class="text-center">
                                    <button style="background-color: rgb(39, 94, 108); color: white;" class="btn fw-bolder btn-sm">Ajouter <i class="fa mx-2 fa-solid fa-cart-shopping"></i></button>
                                  </p>
                              </form>
                        </div>
                    </div>
                @empty
                   <div class="">
                    <h4 class="text-center my-5" style="color: black;font-weight:800;text-align:center">Pas de produits</h4>
                    <div class="img d-flex justify-content-center">
                        <img src="{{ asset('image/empty.png') }}" height="200" width="300" alt="">
                    </div>
                   </div>
                @endforelse
                <div class="col-12">
                    {{ $products->links() }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
