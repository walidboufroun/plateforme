<!-- views/home.blade.php -->
@extends('client.layouts.app')

@section('title', 'Employes')

@section('header', 'Espace Client')


<style>
    .custom-modal-width {
        max-width: calc(70%) !important;
    }

    .fix_width {
        width: 3vw;
        display: flex;
        gap: 1.2vw;
    }
</style>

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-title">
                        <h5 class="card-title">Liste des employes</h5>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">3
                            <form action="addEmployee" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter un employe</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nom et Prenom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nom utilisateur</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="username" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Numéro de
                                                téléphone</label>
                                            <div class="col-sm-10">
                                                <input type="num" class="form-control" name="phone_number" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="adresse" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="photo">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Mot de passe</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Type</label>
                                            <div class="col-sm-10">
                                                <select name="type" class="form-control" required>
                                                    <option value="gerant">Gerant</option>
                                                    <option value="superviseur">Superviseur</option>
                                                    <option value="employe">Employe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Societe</label>
                                            <div class="col-sm-10">
                                                <select name="id_societe" class="form-control" required>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End Large Modal-->

                    <div class="card-title">
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">Ajouter un employe</button>
                    </div>
                </div>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Username</th>
                            <th>Societe</th>
                            <th>Email</th>
                            <th>Adresse</th>
                            <th>Numero de telephone</th>
                            <th>Photo</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $employe)
                            <tr>
                                <td>{{ $employe->name}}</td>
                                <td>{{ $employe->username }}</td>
                                <td>{{ $employe->id_societe }}</td>
                                <td>{{ $employe->email }}</td>
                                <td>{{ $employe->adresse }}</td>
                                <td>{{ $employe->phone_number }}</td>
                                {{-- <td><img src="{{ asset('images/client1.jpg') }}" width="100px" height="100px" alt=""></td>  --}}
                                <td><img src="{{ asset('images/' . $employe->photo) }}" width="40px" height="40px" alt=""></td>
                                <td>{{ $employe->type }}</td>
                                <td class="fix_width">
                                    <div class="modal fade" id="modifier_commande_{{ $employe->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">3
                                            <form action="modifyEmployee/{{ $employe->id }}" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modifier un employe {{ $employe->id }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Nom et prenom</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="nom"
                                                                    value="{{ $employe->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Nom utilisateur</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="prenom"
                                                                    value="{{ $employe->username }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="ldn"
                                                                    value="{{ $employe->email }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Numéro
                                                                de téléphone</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="tel"
                                                                    value="{{ $employe->phone_number }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Adresse</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="Adresse"
                                                                    value="{{ $employe->adresse }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Photo</label>
                                                            <div class="col-sm-10">
                                                                <input type="image" class="form-control" name="photo"
                                                                    value="{{ $employe->photo }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Type</label>
                                                            <div class="col-sm-10">
                                                                <select name="type" value="{{ $employe->type }}" class="form-control">
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Societe</label>
                                                            <div class="col-sm-10">
                                                                <select name="id_societe" value="{{ $employe->id_societe }}" class="form-control">
                                                                    <option value="1">1</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Modifier l'employe</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- End Large Modal-->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modifier_commande_{{ $employe->id }}">Modifier</button>

                                    <div class="modal fade" id="verticalycentered_{{ $employe->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <form action="deleteEmployee/{{ $employe->id }}" method="post">
                                                @csrf
                                                {{-- <input type="hidden" name="id" value=""> --}}
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Supression</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Vous voulez supprimer cette employe ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#verticalycentered_{{ $employe->id }}">
                                        Supprimer
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>
    </div>

@endsection

@section('footer', '© 2023 Your Website')
