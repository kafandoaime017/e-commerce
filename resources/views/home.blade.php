@extends('Template.app')

@section('content')
<style>
    .etoiles
    {
        text-align: center !important;
    }

    .etoiles i
    {
        color: orange !important;
        font-size: 13px;
    }
    .contacter-nous
    {
        background-color: rgb(39, 94, 108) !important;
    }
    .contacter-nous h2
    {
        color: white !important;
        font-weight: 900;
        text-transform: uppercase;
        font-size: 28px;
        text-align: center;
    }
    .categories a
    {
        font-size: 14px
    }
    .products .card
    {
        height: 350px !important;
    }
</style>
    <div class="thumnail shadow-sm">
        <div class="container p-1">
            <div class="row px-4">
               <div class="col-lg-6 py-4 my-3 animate__animated animate__fadeInLeft">
                    <h1 class="text-center ">Profiter d'une reduction de 10% sur votre premiere commande</h1>
                    <p class="text-center">
                        <a href="/products" class="btn btn-dark fw-bolder">Acheter maintenant</a>
                    </p>
               </div>
               <div class="col-lg-1"></div>
               <div class="col-lg-3 py-2 animate__animated animate__fadeInRight">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
               </div>
            </div>
        </div>
    </div> <br> <br>
    <div class="container px-3 categories">
        {{-- <h5 class="text-center" style="font-weight: 800">CATEGORIES DE PRODUIT</h5> <br> <br> --}}
        <div class="row px-5 owl-carousel owl-theme d-flex justify-content-center">
            @foreach ($categories as $categorie )
            <div class="col animate__animated animate__fadeInUp text-center ">
                <a  class="shadow" href="/products/category/all/{{ $categorie->id }}">
                    <div class="item ">
                        <div class="card shadow-sm p-3 px-4">
                          {{ $categorie->nom }}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    {{-- <div class="container my-5 py-4 products">
        <div class="row px-2">
            <h5 class="text-center" style="font-weight: 800">Produits populaires </h5> <br> <br>
            <div class="col-lg-2 animate__animated animate__fadeInUp mb-3">
                <div class="card p-3 shadow border-0">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                    <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href=""><small> iphone 10 pro max ultra</small></a>
                    <div class="etoiles">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <h5 class="text-center" style="font-weight: 800;color:rgb(56, 108, 135)">30000 $</h5>
                    <button style="background-color: rgb(39, 94, 108);color:white" class="btn  fw-bolder btn-sm">Ajouter <i class="fa  mx-2 fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card p-3 shadow border-0">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                    <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href=""><small> iphone 10 pro max ultra</small></a>
                    <div class="etoiles">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <h5 class="text-center" style="font-weight: 800;color:rgb(56, 108, 135)">30000 $</h5>
                    <button style="background-color: rgb(39, 94, 108);color:white" class="btn  fw-bolder btn-sm">Ajouter <i class="fa  mx-2 fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card p-3 shadow border-0">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                    <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href=""><small> iphone 10 pro max ultra</small></a>
                    <div class="etoiles">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <h5 class="text-center" style="font-weight: 800;color:rgb(56, 108, 135)">30000 $</h5>
                    <button style="background-color: rgb(39, 94, 108);color:white" class="btn  fw-bolder btn-sm">Ajouter <i class="fa  mx-2 fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card p-3 shadow border-0">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                    <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href=""><small> iphone 10 pro max ultra</small></a>
                    <div class="etoiles">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <h5 class="text-center" style="font-weight: 800;color:rgb(56, 108, 135)">30000 $</h5>
                    <button style="background-color: rgb(39, 94, 108);color:white" class="btn  fw-bolder btn-sm">Ajouter <i class="fa  mx-2 fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card p-3 shadow border-0">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                    <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href=""><small> iphone 10 pro max ultra</small></a>
                    <div class="etoiles">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <h5 class="text-center" style="font-weight: 800;color:rgb(56, 108, 135)">30000 $</h5>
                    <button style="background-color: rgb(39, 94, 108);color:white" class="btn  fw-bolder btn-sm">Ajouter <i class="fa  mx-2 fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card p-3 shadow border-0">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                    <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href=""><small> iphone 10 pro max ultra</small></a>
                    <div class="etoiles">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <h5 class="text-center" style="font-weight: 800;color:rgb(56, 108, 135)">30000 $</h5>
                    <button style="background-color: rgb(39, 94, 108);color:white" class="btn  fw-bolder btn-sm">Ajouter <i class="fa  mx-2 fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>


        </div>
    </div> --}}

    <div class="container my-5 py-4 products">
        <div class="row row-cols-2 row-cols-md-4"> <!-- Utilisez row-cols-2 pour les écrans de taille téléphone -->
            @forelse ($products as $row)
                <div class="col mb-2 col-lg-2"> <!-- Retirez les classes col-lg-3 et col-md-6 -->
                    <div class="card wow animate__animated animate__fadeInUp p-3 shadow border-0">
                        <img src="{{ $row->image }}" class="img-fluid" alt="">
                        <a style="text-decoration: none; color: black; font-weight: 800;" class="text-center" href="/detail/{{ $row->id }}"><small>{{ $row->nom }}</small></a>
                        <div class="etoiles">
                            <i class="fa fa-solid fa-star"></i>
                            <i class="fa fa-solid fa-star"></i>
                            <i class="fa fa-solid fa-star"></i>
                            <i class="fa fa-solid fa-star"></i>
                            <i class="fa fa-solid fa-star"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 800; color: rgb(31, 112, 107)">{{ $row->prix }} FCFA</h5>
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
                <h4 class="text-center my-5" style="color: black;font-weight:800">Pas de produits</h4>
            @endforelse
            <div class="col-12">
                {{ $products->links() }}
            </div>
        </div>

        </div>
    </div>
@endsection
