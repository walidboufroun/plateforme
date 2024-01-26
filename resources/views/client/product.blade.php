<!-- views/home.blade.php -->
@extends('client.layouts.app')

@section('title', 'Produit')

@section('header', 'Espace Client')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">
                    <h5 class="card-title">Liste des produits</h5>
                </div>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>ID Produit</th>
                        <th>Nom Produit</th>
                        <th>Client</th>
                        <th>Photos</th>
                        <th>Description</th>
                        <th>prix</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Afficher products according to its client-->
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <div class="modal fade" id="modifier_réclamations_" tabindex="-1">
                                <div class="modal-dialog modal-lg">3
                                    <form action="Admin_Add_ordre" method="post">
                                        @csrf
                                        <div class="modal-content">
       cp                                      <div class="modal-header">
                                                <h5 class="modal-title">Modifier le produit
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">ID produit</label>
                                                    <div class="col-sm-10">
                                                        <input type="num" class="form-control" name="id" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Nom produit</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nom_produit" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="photos" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Client</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="client" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="descriptive" value=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Modifer le produit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Large Modal-->
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modifier_réclamations_">Modifier</button>
                        </td>
                        <td>
                            <div class="modal fade" id="verticalycentered_" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Supression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Vous voulez supprimer ce produit.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered_">
                                Supprimer
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>
</div>
<h1>Products</h1>
<h2>Afficher les anomalies signalées pour les produits.</h2>
<h2>Planifier et suivre les actions correctives.</h2>

<th>Produit</th>
<th>Anomalie</th>
<th>Statut</th>
<th>Responsable</th>
<th>Actions Correctives</th>

@endsection

@section('footer', '© 2023 Your Website')