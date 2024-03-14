<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Client')

@section('header', 'Welcome to our Website')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between" style="">
                <div class="card-title">
                    <h5 class="card-title">Liste des Clients</h5>
                </div>

                <div class="modal fade" id="largeModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">3
                        <form action="Admin_Add_client" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajouter un client</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nom Complet</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="password" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="photo" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="adresse" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Numéro de téléphone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="phone_number" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="role" required>
                                                @foreach(['gerant', 'superviseur', 'employe'] as $role)
                                                <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Societe</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="id_societe" aria-label="Sélectionnez une société ou une societe" required>
                                                <option value="" disabled selected>Choisir la société</option>
                                                @foreach ($societes as $societe)
                                                <option value="{{ $societe->id }}">{{ $societe->name }} {{ $societe->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Ajouter le client</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- End Large Modal-->

                <div class="card-title">
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#largeModal">Ajouter un client</button>
                </div>
            </div>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>nom complet</th>
                        <th>Nom dutilisateur </th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Numéro de téléphone</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->username }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->adresse }}</td>
                        <td>{{ $client->phone_number }}</td>
                        <td>{{ $client->type }}</td>
                        <td>
                            <div class="modal fade" id="modifier_commande_{{ $client->id }}" tabindex="-1">
                                <div class="modal-dialog modal-lg">3
                                    <form action="Admin_update_client" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $client->id }}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modifier le client n° {{ $client->id }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Nom Complet</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="name" value="{{ $client->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="username" value="{{ $client->username }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="password" value="{{ $client->password }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" name="email" value="{{ $client->email }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                                                    <img src="img-profile/{{ $client->photo }}" class="col-sm-2 col-form-label" height="10px" width="10px" alt="">
                                                    <div class="col-sm-8">
                                                        <input type="file" class="form-control" name="photo" value="{{ $client->photo }}">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="adresse" value="{{ $client->adresse }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Numéro de téléphone</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="phone_number" value="{{ $client->phone_number }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Role</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="role" required>
                                                            @foreach(['gerant', 'superviseur', 'employe'] as $role)
                                                            <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Societe</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="id_societe" aria-label="Sélectionnez une société ou une societe" required>
                                                            <option value="" disabled selected>Choisir la société</option>
                                                            @foreach ($societes as $societe)
                                                            <option value="{{ $societe->id }}">{{ $societe->name }} {{ $societe->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Modifer la commande</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Large Modal-->

                            <div>
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modifier_commande_{{ $client->id }}">Modifier</button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered_{{ $client->id }}">Supprimer</button>
                                <div class="modal fade" id="verticalycentered_{{ $client->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form action="Admin_delete_client" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $client->id }}">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Supresion client n° {{ $client->id }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">Vous voulez supprimer le client <strong>{{ $client->name }}</strong> </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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