@extends('Template.app')

@section('content')

<style>
    .details-section
    {
        background-color: rgb(34, 92, 108) !important;
        color: white !important;

    }
    .details-section h1
    {
        font-weight: 800 !important;
    }
    /* .etoiles
    {
        text-align: center !important;
    } */

    .etoiles i
    {
        color: orange !important;
        font-size: 13px;
    }
    .quantite
    {
        background-color: aliceblue !important;
        border: 1px solid rgb(231, 231, 231);
        width: 100px;
        font-weight: 900;
        padding: 5px;
        border-radius: 40px;
    }
</style>
        {{-- <div class="details-section">
           <div class="container p-5">
                <div class="row">
                    <h1 class="text-center">Details</h1>
                </div>
           </div>
        </div> --}}
        <div class="container my-5">
            <div class="row d-flex justify-content-center">

                <div class="col-lg-4 bg-light p-4 " style="border-radius: 15px">
                    <img src="{{ $product->image }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 my-4">
                    @if(session('panierMessage'))
                    <div class="alert  alert-success">
                       <h6> {{ session('panierMessage') }}</h6>
                    </div>
                @endif
                    <h2 class="mx-3" style="font-weight: 800;color:rgb(0, 0, 0)">{{ $product->nom }}</h2>
                    <p class="mx-3">
                        <small>{{ $product->description }}</small>
                    </p>
                    <h3 style="color:rgb(221, 0, 0);font-weight: 800" class=" mx-3">{{ $product->prix }} FCFA</h3>
                    <h6 class="mx-3 fw-bolder">Categorie : {{ $product->categorie->nom }}</h6>
                    <div class="etoiles mx-3">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <p class="mx-3">
                        <form class="d-flex" action="{{ route('ajouter_panier') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_product" id="id_product" value="{{ $product->id }}">
                            <input type="hidden" name="nom_product" id="nom_product" value="{{ $product->nom }}">
                            <input type="number" class="quantite" value="1" name="quantite" id="quantite">
                            <input type="hidden" value="{{ $product->image }}" name="image" id="image">
                            <input class="form-control" min='1' max="10" oninput="checkMinValue(this)" type="hidden" value="{{ $product->prix }}" name="prix" id="prix">
                            <button type="submit" class="btn btn-danger fw-bolder">Ajouter au panier</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <h4 class="mx-2" style="font-weight: 800;color:black">Produits similaires </h4>
                <div class="owl-carousel ">
                  @foreach ($relatedProducts as $row )
                  <div class="col animate__animated animate__fadeInUp mb-3">
                    <div class="card p-3 shadow border-0">
                        <img src="{{ $row->image }}" class="img-fluid" alt="">
                        <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href="/detail/{{ $row->id }}"><small> {{ $row->nom }}</small></a>
                        <div class="etoiles">
                            <i class=" fa fa-solid fa-star"></i>
                            <i class=" fa fa-solid fa-star"></i>
                            <i class=" fa fa-solid fa-star"></i>
                            <i class=" fa fa-solid fa-star"></i>
                            <i class=" fa fa-solid fa-star"></i>
                        </div>
                        <h5 class="text-center" style="font-weight: 800;color:rgb(56, 108, 135)">{{ $row->prix }} $</h5>
                        <button style="background-color: rgb(39, 94, 108);color:white" class="btn  fw-bolder btn-sm">Ajouter <i class="fa  mx-2 fa-solid fa-cart-shopping"></i></button>
                    </div>
                </div>
                  @endforeach
                </div>
            </div>
        </div>
        <script>
            function checkMinValue(input) {
    // Convertit la valeur saisie en nombre
    var value = parseInt(input.value);

    // Vérifie si la valeur est inférieure à 1
    if (value < 1) {
        // Si la valeur est inférieure à 1, laissez-la inchangée
        return;
    }
}

        </script>
@endsection
