@extends('client.template.app')

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
</style>
        <div class="details-section">
           <div class="container p-4">
                <div class="row">
                    <h1 class="text-center">Details</h1>
                </div>
           </div>
        </div>
        <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 bg-light p-4 " style="border-radius: 15px">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 my-4">
                    <h2 class="mx-3" style="font-weight: 800;color:rgb(33, 92, 116)">Iphone 15 pro max</h2>
                    <p class="mx-3">
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga itaque non eius accusantium. Commodi at modi illum, voluptatum vel officia, nam fugit quis dolorum autem ratione quas ab veniam odit.</small>
                    </p>
                    <h3 style="color:rgb(221, 0, 0);font-weight: 800" class=" mx-3">300.000 FCFA</h3>
                    <h6 class="mx-3 fw-bolder">Categorie : Téléphone</h6>
                    <div class="etoiles mx-3">
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                        <i class=" fa fa-solid fa-star"></i>
                    </div>
                    <p class="mx-3">
                        <form class="d-flex" action="">
                            <input type="number" value="1" name="" id="">
                            <button class="btn btn-danger fw-bolder">Ajouter au panier</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
@endsection
