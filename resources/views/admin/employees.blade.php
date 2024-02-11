<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Employes')

@section('header', 'Welcome to our Website')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between" style="">
                    <div class="card-title">
                        <h5 class="card-title">Liste des employes</h5>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">3
                            <form action="Admin_Add_ordre" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter une commande</h5>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">date commande</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date_commande" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">nombre produit</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="nombre_produit" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Ajouter la commande</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End Large Modal-->

                    <div class="card-title">
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">Ajouter une commande</button>
                    </div>
                </div>

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
                                    <div class="modal fade" id="modifier_commande_{{ $employe->id }}"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-lg">3
                                            <form action="Admin_Add_ordre" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ajouter une commande {{ $employe->id }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Modifer la
                                                            commande</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- End Large Modal-->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modifier_commande_{{ $employe->id }}">Modifier</button>
                                </td>
                                <td>
                                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Supresion</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Vous voulez supprimer cette commande.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#verticalycentered">
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
