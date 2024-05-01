@extends('Template.app')

@section('content')

<style>
    .details-section {
        background-color: rgb(34, 92, 108) !important;
        color: white !important;
    }

    .details-section h1 {
        font-weight: 800 !important;
    }

    .etoiles i {
        color: orange !important;
        font-size: 13px;
    }
</style>
<div class="details-section">
    <div class="container p-5">
        <div class="row">
            {{-- <h1 class="text-center">{{ $product->categorie->nom }}</h1> --}}
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="owl-carousel owl-theme">
          @foreach ($products as $row )
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


            <!-- Répétez cette structure pour chaque produit -->
        </div>
    </div>
</div>



@endsection
