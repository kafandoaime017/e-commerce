@extends('admin.layout.app')

@section('content')

    <div class="container my-4">

        <div class="row d-flex justify-content-center">
            <h6 style="font-weight: 800" class="text-center">Liste des produits</h6>
            <div class="col-lg-9 px-2">
                @if(session('status'))
                <div style="font-weight: 800;color:rgb(7, 90, 7);background-color:rgb(171, 255, 171)" class="alert alert-success alert-dismissible fade show" role="alert" >
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
                <div class="table-responsive card border-0 p-3">
                    <form action="{{ route('rechercher_prod_traietement') }}" method="post">
                        @csrf
                        <p class="d-flex">
                            <input type="search" name="terme" id="terme" class="form-control" placeholder="Rechercher un produit">
                            <button class="btn btn-primary fw-bold">Rechercher</button>
                        </p>
                    </form>
                    <table class="table  table-bordered">
                        <thead>
                            <tr style="background-color: rgb(37, 103, 103);color:white">
                                <th>#</th>
                                <th>IMAGE</th>
                                <th>PRODUIT</th>
                                {{-- <th>PRIX</th> --}}
                                <th>CATEGORIE</th>
                                <th colspan="3">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($products as $row )
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td><img src="{{ $row->image }}" height="60" width="60" alt=""></td>
                                <td>{{ $row->nom }}</td>
                                {{-- <td>{{ $row->prix }}</td> --}}
                                <td>{{ $row->categorie->nom }}</td>
                                <td><a style="border-radius: 100%" href="/products/list/detail-product/{{ $row->id }}" class="btn btn-info fw-bolder"><i class="fa fa-regular fa-eye"></i></a></td>
                                <td><a style="border-radius: 100%" href="/products/edit-product/{{ $row->id }}" class="btn btn-primary  fw-bolder"><i class="fa fa-regular fa-pen-to-square"></i></a></td>
                                <td><a style="border-radius: 100%" onclick='return confirm("Voulez-vous vraiment supprimer ce produit? cette action est irréversible et le produit {{ $row->nom }} sera définitivement supprimé du site web ")' href="/products/delete/product/{{ $row->id }}" class="btn btn-danger  fw-bolder"><i class="fa fa-solid fa-trash"></i></a></td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
