@extends('Template.app')

@section('content')
<br><br>
    <div class="container my-3">
        <div class="row d-flex justify-content-center">
            <h2 class="text-center" style="color: rgb(21, 82, 93);font-weight:800">Panier</h2>
            <div class="col-lg-10 my-3">
                @if(session('panierMessage'))
                <div class="alert alert-success">
                    {{ session('panierMessage') }}
                </div>
            @endif
                @if(Cart::count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: rgb(210, 210, 210);color:rgb(0, 0, 0)">
                                <th>Produit</th>
                                <th>Total</th>
                                <th>Quantité</th>

                                <th colspan="2">Action</th>
                            </trs>
                        </thead>
                        <tbody>
                           @forelse (Cart::content() as $row )
                           <tr>
                            <td>
                                <div class="container">
                                    <div class="row">
                                     <div class="col-lg-3">
                                        <div class="imag mx-2 bg-light shadow-sm p-2">
                                             <img src="{{ $row->options->image }}" height="80" width="90" alt="">
                                        </div>
                                     </div>
                                     <div class="col-lg-1"></div>
                                     <div class="col-lg-6">
                                       <h6 class="mx-2" style="font-weight: bolder">{{ $row->name }}</h6>
                                       <h6 class="mx-2" style="color:rgb(152, 152, 152)">{{ $row->price }} FCFA/unité</h6>
                                     </div>
                                    </div>
                                 </div>
                            </td>
                            <td><h4 style="font-weight: 800;color:rgb(213, 30, 6)"> {{ $row->price * $row->qty }} FCFA</h4></td>
                            <td>
                                <form action="/updateQty/{{ $row->rowId }}" method="post">
                                    @csrf
                                    <input type="number" class="form-control" name="newQty" id="newQty" value="{{ $row->qty }}">

                            </td>

                            <td class="d-flex">
                                <button class="btn mx-2 btn-primary fw-bold">Modifier</button>
                            </form>
                            <form action="/removeToCard/{{ $row->rowId }}" method="post">
                                @csrf
                                <button class="btn mx-2 btn-danger">Supprimer</button>
                            </form>
                            </td>
                        </tr>

                           @empty
                           {{-- <h3 class="text-center">Votre panier est vide</h3> --}}
                           @endforelse
                        </tbody>
                    </table>

                    <div class="container px-5">
                        <div class="row">
                            <div class="col-lg-8 d-flex justify-content-end">
                                <ul class="list-group">
                                    <li class="list-group-item bg-dark text-white fw-bolder"><h5 class="text-center" style="font-weight: 800">RESUME</h5></li>

                                    <li class="list-group-item"><h5 class="" style="font-weight: 800;color:rgb(32, 99, 90)"><span>Montant total : </span> {{ Cart::subtotal() }} FCFA </h5></li>
                                    <li class="list-group-item"><a href="/checkout" style="width: 100%" class="btn btn-success fw-bolder">PASSER A LA CAISSE</a></li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
                @else

                <div class="d-flex justify-content-center">
                    <img src="{{ asset('image/cart_empty.png') }}" height="250" width="320" alt="">
                </div>
                <h6 style="font-weight: 800" class="text-center">Votre panier est vide !</h4>
                    <p class="text-center">
                        <a class="mx-3 btn btn-primary fw-bolder btn-sm text-center" href="/">Parcourir les produits</a>

                    </p>
                @endif
            </div>

        </div>

    </div>
    <br> <br> <br> <br>
@endsection
