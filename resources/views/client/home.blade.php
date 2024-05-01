@extends('client.template.app')

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
</style>
    <div class="thumnail">
        <div class="container p-3">
            <div class="row p-4">
               <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <h1 class="text-center ">Profiter d'une reduction de 10% sur votre premiere commande</h1>
                    <p class="text-center">
                        <button class="btn btn-dark fw-bolder">Acheter maintenant</button>
                    </p>
               </div>
               <div class="col-lg-1"></div>
               <div class="col-lg-3 animate__animated animate__fadeInRight">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
               </div>
            </div>
        </div>
    </div> <br> <br>
    <div class="container categories">
        <div class="row d-flex justify-content-center">
            <h5 class="text-center" style="font-weight: 800">CATEGORIES DE PRODUIT</h5> <br> <br>
            <div class="col-lg-3">
                <a href="">
                    <div class="item ">
                        <div class="card shadow-sm  p-3 px-4">
                            Téléphones portables
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="item ">
                        <div class="card shadow-sm  p-3 px-4">
                            Ordinateurs
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="item ">
                        <div class="card shadow-sm  p-3 px-4">
                            Accessoires
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container my-5 py-4 products">
        <div class="row px-2">
            <h5 class="text-center" style="font-weight: 800">Produits populaires </h5> <br> <br>
            <div class="col-lg-2 animate__animated animate__fadeInUp mb-3">
                <div class="card p-3 shadow border-0">
                    <img src="{{ asset('image/fond.png') }}" class="img-fluid" alt="">
                    <a style="text-decoration: none;color:black;font-weight: 800" class="text-center"  href="{{ route('detail_product') }}"><small> iphone 10 pro max ultra</small></a>
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
    </div>

    <div class="contacter-nous">
       <div class="container p-4 px-3">
            <div class="row px-3">
               <div class="col-lg-5 my-5">
                    <h2>Souhaitez vous nous contacter ?</h2>
                    {{-- <p style="color:white"><small>Lorem eque inventore cupiditate totam ratione laboriosam autem consequatur dignissimos cum voluptatibus ipsum dolore odit.</small></p> --}}
                    <p class="text-center">
                        <button class="btn btn-dark p-3 fw-bolder">Contactez nous</button>
                    </p>
               </div>
               <div class="col-lg-1"></div>
               <div class="col-lg-5">
                    <img src="{{ asset('image/contact.png') }}" class="img-fluid" alt="">
               </div>
            </div>
       </div>
    </div>

    <div class="container my-5 py-4 products">
        <div class="row px-2">
            <h5 class="text-center" style="font-weight: 800">NOS SELECTION DE PRODUITS </h5> <br> <br>
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
    </div>
@endsection
