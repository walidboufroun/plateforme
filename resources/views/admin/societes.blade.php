<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Societe')

@section('header', 'Welcome to our Website')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between" style="">
                    <div class="card-title">
                        <h5 class="card-title">Liste des Societes</h5>
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
                                            <label for="inputText" class="col-sm-2 col-form-label">nombre societe</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="nombre_societe" required>
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
                            <th>Nom de societe</th>
                            <th>Site Web</th>
                            <th>Adresse</th>
                            <th>Phone number</th>
                            <th>Logo</th>
                            <th>Type</th>
                            <th>Registre</th>
                            <th>Description</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($societes as $societe)
                            <tr >
                                <td >{{ $societe->name }}</td>
                                <td>{{ $societe->site_web }}</td>
                                <td>{{ $societe->adresse }}</td>
                                <td>{{ $societe->phone_number }}</td>
                                <td>{{ $societe->logo }}</td>
                                <td>{{ $societe->type }}</td>
                                <td>{{ $societe->registre_commerce }}</td>
                                <td>{{ $societe->description }}</td>
                                <td>
                                    <div class="modal fade" id="modifier_commande_{{ $societe->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">3
                                            <form action="Admin_Add_ordre" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ajouter une commande {{ $societe->id }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">date
                                                                commande</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control"
                                                                    name="date_commande"
                                                                    value="{{ $societe->date_commande }}" required>
                                                            </div>
                                                        </div>
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
                                        data-bs-target="#modifier_commande_{{ $societe->id }}">Modifier</button>
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
    

@endsection

@section('footer', '© 2023 Your Website')
