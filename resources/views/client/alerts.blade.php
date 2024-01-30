
<!-- views/home.blade.php -->
@extends('client.layouts.app')

@section('title', 'Alerts')

@section('header', 'Espace Client')



<style>
    .custom-modal-width {
        max-width: calc(70%) !important;
    }

    .fix_width {
        width: 3vw;
    }
</style>

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between" style="">

                <div class="d-flex justify-content-between">

                    <div class="card-title">
                        <h5 class="card-title">Liste des Alerts</h5>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <form action="Admin_Add_ordre" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter une alerts</h5>
                                        <button type="button" class="btn-close" 
                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nom alerte</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nom_alerte" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Date alerte</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date_alerte" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Client</label>
                                            <div class="col-sm-10">
                                            <!-- select from list clients -->
                                                <select class="form-control" id="idclient" name="client" required>
                                                    <option value="client1">client1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nom Produit</label>
                                            <div class="col-sm-10">
                                                <!-- select from list produit de clients -->
                                                <select class="form-control" id="id_produit_client" name="Nom_produit" required>
                                                    <option value="produit1">produit1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description_alerte" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Ajouter l'alerte</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End Large Modal-->

                    <div class="card-title">
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" style="display:none;"
                            data-bs-target="#largeModal">Ajouter une alerte</button>
                    </div>
                </div>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Nom alerte</th>
                            <th>Date alerte</th>
                            <th>ID Produit</th>
                            <th>Nom Produit</th>
                            <th>Statut</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                                <td>

                                <td class="fix_width">

                                    <div class="modal fade" id="modifier_réclamations_" tabindex="-1">
                                        <div class="modal-dialog modal-lg">3
                                            <form action="Admin_Add_ordre" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modifier une alerte</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Nom alerte</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="nom_alerte" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Date alerte</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" name="date_alerte" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Client</label>
                                                            <div class="col-sm-10">
                                                            <!-- select from list clients -->
                                                                <select class="form-control" id="idclient" name="client" value="">
                                                                    <option value="client1">client1</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Nom Produit</label>
                                                            <div class="col-sm-10">
                                                                <!-- select from list produit de clients -->
                                                                <select class="form-control" id="id_produit_client" name="Nom_produit">
                                                                    <option value="produit1">produit1</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" name="description_alerte"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Modifier l'alerte</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- End Large Modal-->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modifier_réclamations_">Modifier</button>
                                </td>
                            </tr>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>
    </div>
@endsection

@section('footer', '© 2023 Your Website')   
