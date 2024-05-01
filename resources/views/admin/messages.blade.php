@extends('admin.layout.app')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="column p-3">
        @if(session('status'))
                <div style="font-weight: 800;color:rgb(7, 90, 7);background-color:rgb(171, 255, 171)" class="alert alert-success alert-dismissible fade show" role="alert" >
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <h5 style="font-weight: 800;">Ceux qui vous ont contacté</h5>
        @foreach ($messages as $message)
        <div class="col-lg-12 mb-3">
            <div class="card border-0 shadow-sm p-3">
                <div class="d-flex">
                    <img height="60" width="60" src="https://cdn-icons-png.flaticon.com/512/9193/9193821.png" alt="">
                    <div class="mx-3">
                        <h5 style="font-weight: 800;color:rgb(46, 125, 112)">{{ $message->prenom }} {{ $message->nom }}</h5>
                        <h5 style="color:rgb(150, 150, 150);font-size:15px">Message envoyé le {{ $message->created_at->format('j F Y \à H\h') }} </h5>
                    </div>
                </div>
                <h6 style="font-weight: 800" class="mx-3 p-2">Sujet: {{ $message->sujet }}</h6>
                <p class="mx-2 py-2 bg-light p-2">
                    {{ $message->message }}
                </p>
                <p class="mx-3 d-flex">
                    <button type="button" class="btn mx-3 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $message->id }}">
                        Répondre via email
                    </button>
                    <a onclick="return confirm('Êtes-vous sur de vouloir supprimer ce message ?')" href="/message/delete/{{ $message->id }}" class="btn btn-danger fw-bolder">Supprimer</a>
                </p>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $message->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bolder" id="exampleModalLabel">Répondre à {{ $message->prenom }} {{ $message->nom }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               <form action="/repondreMessage/{{ $message->id }}" method="post">
                                    @csrf
                                    <input type="text" name="nom" id="" value="{{ $message->nom }}">
                                    <input type="text" name="prenom" id="prenom" value="{{ $message->prenom }}">
                                    <input type="text" name="sujetUser" id="sujetUser" value="{{ $message->sujet }}">
                                    <p>
                                        <label for="sujet">Sujet</label>
                                        <input type="text" name="sujet" id="sujet" class="form-control">
                                    </p>
                                    <p>
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control"></textarea>
                                    </p>
                                    <p>
                                        <button type="submit" class="btn btn-primary fw-bold">Envoyer</button>
                                    </p>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<div class="px-5">
    {{ $messages->links() }}
</div>

@endsection
