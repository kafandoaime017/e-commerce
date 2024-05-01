@extends('admin.layout.app')

@section('content')


    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 p-3 shadow-sm">
                    <div class="profile d-flex">
                        <div >
                            <img height="120" width="120" src="https://cdn-icons-png.flaticon.com/512/9193/9193821.png" alt="">
                        </div>
                        <div class="mx-3 my-3">
                            <h4 style="font-weight: 800;color:rgb(46, 121, 104)">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h4>
                            <h6>{{ Auth::user()->email }}</h6>
                            <h5>Role: {{ Auth::user()->role }}</h5>
                        </div>

                    </div>
                    <div>
                        <form class="card p-3 border-0 " action="{{ route('profile.update') }}"  method="post">
                            @if(session('status')==='profile-updated')
                            <div style="font-weight: 800;color:rgb(7, 90, 7);background-color:rgb(171, 255, 171)" class="alert alert-success alert-dismissible fade show" role="alert" >
                                Vos informations ont été mises à jour avec succès !
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if(session('status')==='password-updated')
                            <div style="font-weight: 800;color:rgb(7, 90, 7);background-color:rgb(171, 255, 171)" class="alert alert-success alert-dismissible fade show" role="alert" >
                                Votre mot de passe a été modifié !
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <h4 style="font-weight: 800" class="text-center">Modifier mes informations</h4>
                            @csrf
                            @method('patch')

                            {{-- <p>
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                                @error('image')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p> --}}
                            <p>
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control" value="{{ Auth::user()->email }}">
                                @error('nom')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p>
                            <p>
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ Auth::user()->prenom }}">
                                @error('prenom')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p>
                            <p>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
                                @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p>
                            {{-- <p>
                                <label for="role">Role</label>
                                <select class="form-select" name="role" id="role" value="{{ old('role') }}">
                                    <option disabled selected value="">-- Choisir le role de l'utilisateur --</option>
                                    <option  value="client">Client</option>
                                    <option  value="admin">Administrateur</option>
                                </select>
                                @error('role')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p> --}}
                            {{-- <p>
                                <label for="password">Mot de passe</label>
                                <input type="number" name="prix" id="prix" class="form-control" value="{{ old('prix') }}">
                                @error('prix')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p> --}}
                            <p>
                                <button type="submit" class="btn btn-success fw-bolder w-100">ENREGISTRER</button>
                            </p>


                        </form>
                    </div>
                    <div>
                        <form class="card p-3 border-0 " action="{{ route('password.update') }}"  method="post">
                            @method('put')
                            <h4 style="font-weight: 800" class="text-center">Modifier votre mot de passe</h4>
                            @csrf
                            {{-- <p>
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                                @error('image')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p> --}}
                            <p>
                                <label for="current_password">Votre mot de passe actuel</label>
                                <input type="password" name="current_password" id="current_password" class="form-control" >
                                @error('current_password')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p>
                            <p>
                                <label for="password">Nouveau mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control" >
                                @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p>
                            <p>
                                <label for="password_confirmation">Confirmation du nouveau mot de passe</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('email') }}">
                                @error('password_confirmation')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p>
                            {{-- <p>
                                <label for="role">Role</label>
                                <select class="form-select" name="role" id="role" value="{{ old('role') }}">
                                    <option disabled selected value="">-- Choisir le role de l'utilisateur --</option>
                                    <option  value="client">Client</option>
                                    <option  value="admin">Administrateur</option>
                                </select>
                                @error('role')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p> --}}
                            {{-- <p>
                                <label for="password">Mot de passe</label>
                                <input type="number" name="prix" id="prix" class="form-control" value="{{ old('prix') }}">
                                @error('prix')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </p> --}}
                            <p>
                                <button type="submit" class="btn btn-success fw-bolder w-100">ENREGISTRER</button>
                            </p>


                        </form>
                    </div>
                    <div>
                        <!-- Vertically centered modal -->
                        <button type="button" class="btn btn-danger fw-bolder" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Supprimer votre compte
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('profile.destroy') }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <p>
                                        <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex fugiat cum maxime est impedit aliquid mollitia perferendis iusto et molestias similique ducimus, explicabo cumque nobis animi exercitationem hic, quibusdam soluta.</small>
                                        <input type="password" class="form-control" name="password" id="password">
                                        <button type="submit" class="btn btn-danger">Supprimer mon compte</button>
                                    </p>
                                </form>
                            </div>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
