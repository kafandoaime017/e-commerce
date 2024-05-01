@extends('admin.layout.app')

@section('content')
    <h5 class="mx-3 py-3" style="font-weight: 800">Content de vous revoir {{ Auth::user()->prenom }}</h5>

    <div class="container">
        <div class="row px-5">
            <div class="col-lg-3 mb-2">
                <div class="card border-0 shadow p-3">
                    <h6 style="font-weight: 800;color:rgb(37, 115, 115)">Nombre d'utilisateurs</h6>
                    <h1 class="text-center" style="font-weight: 800">{{ $nbreUsers }}</h1>
                    <h6 class="text-center"><a href="/users/list">Voir</a></h6>
                </div>
            </div>
            <div class="col-lg-3  mb-2">
                <div class="card border-0 shadow p-3">
                    <h6 style="font-weight: 800;color:rgb(37, 115, 115)">Nombre  commandes</h6>
                    <h1 class="text-center" style="font-weight: 800">{{ $nbreUsers }}</h1>
                    <h6 class="text-center"><a href="">Voir</a></h6>
                </div>
            </div>
            <div class="col-lg-3  mb-2">
                <div class="card">
                    <div class="card border-0 shadow p-3">
                        <h6 style="font-weight: 800;color:rgb(37, 115, 115)">Nombre de produits</h6>
                        <h1 class="text-center" style="font-weight: 800">{{ $nbreProducts }}</h1>
                        <h6 class="text-center"><a href="/products/list">Voir</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  mb-2">
                <div class="card border-0 shadow p-3">
                    <h6 style="font-weight: 800;color:rgb(37, 115, 115)">Nombre de messages</h6>
                    <h1 class="text-center" style="font-weight: 800">{{ $nbreMessages }}</h1>
                    <h6 class="text-center"><a href="/messages">Voir</a></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
