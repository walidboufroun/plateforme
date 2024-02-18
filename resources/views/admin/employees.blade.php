<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Employes')

@section('header', 'Welcome to our Website')

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
                        <form action="Admin_Add_Employe" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajouter un employe</h5>
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
                                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="email" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-4 col-form-label">Mots de passe</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="password" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-4 col-form-label">Confirmer le Mots de passe</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="passwordconfirmation" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Numéro de téléphone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="phone_number" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="adresse" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="type" required>
                                                <option value="gnov_admin">GNOV Admin</option>
                                                <option value="gnov_employe">GNOV Employe</option>
                                                <option value="gnov_technicien">GNOV Technicien</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Ajouter l'Employe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- End Large Modal-->

                <div class="card-title">
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#largeModal">Ajouter un Employe</button>
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
                        <th>Nom complet</th>
                        <th>username</th>
                        <th>Email</th>
                        <th>Numero de telephone</th>
                        <th>Adresse</th>
                        <th>Type</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($employes as $employe)
                    <tr>
                        <td>{{ $employe->name }}</td>
                        <td>{{ $employe->username }}</td>
                        <td>{{ $employe->email }}</td>
                        <td>{{ $employe->phone_number }}</td>
                        <td>{{ $employe->adresse }}</td>
                        <td>{{ $employe->type }}</td>
                        <td>
                            <div class="modal fade" id="modifier_commande_{{ $employe->id }}" tabindex="-1">
                                <div class="modal-dialog modal-lg">3
                                    <form action="Admin_Update_Employe" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $employe->id }}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modifier l'employe n° {{ $employe->id }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Nom Complet</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="name" value="{{ $employe->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="username" value="{{ $employe->username }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="email" value="{{ $employe->email }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-4 col-form-label">Nouveau Mots de passe</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="password" >
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-4 col-form-label">Confirmer le Mots de passe</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="passwordconfirmation" >
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Numéro de téléphone</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="phone_number" value="{{ $employe->phone_number }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="adresse" value="{{ $employe->adresse }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Type</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="type" required>
                                                            <option value="gnov_admin" {{ $employe->type === 'gnov_admin' ? 'selected' : '' }}>GNOV Admin</option>
                                                            <option value="gnov_employe" {{ $employe->type === 'gnov_employe' ? 'selected' : '' }}>GNOV Employe</option>
                                                            <option value="gnov_technicien" {{ $employe->type === 'gnov_technicien' ? 'selected' : '' }}>GNOV Technicien</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Modifer l'employe
                                                    commande</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Large Modal-->
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modifier_commande_{{ $employe->id }}">Modifier</button>
                        </td>
                        <td>
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Supresion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Vous voulez supprimer cette commande.
                                        </div>
                                        <form action="Admin_Delete_Employe" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $employe->id }}">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
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
<h1>Employes</h1>
<h2>Ajouter/Modifier/Supprimer un utilisateur administrateur.</h2>
<h2>Afficher la liste des utilisateurs administrateurs.</h2>
@endsection

@section('footer', '© 2023 Your Website')