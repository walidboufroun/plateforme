<!-- views/home.blade.php -->
@extends('client.layouts.app')

@section('title', 'Employes')

@section('header', 'Espace Client')

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
                        <form action="Admin_Add_ordre" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajouter un employe</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nom" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Prenom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="prenom" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Date de naissance</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="ddn" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Lieu de naissance</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ldn" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Adresse" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Numéro de
                                            téléphone</label>
                                        <div class="col-sm-10">
                                            <input type="num" class="form-control" name="tel" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Taches</label>
                                        <div class="col-sm-10">
                                            <textarea name="plus" class="form-control" name="nombre_produit"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
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
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Lieu de naissance</th>
                        <th>Adresse</th>
                        <th>Numero de telephone</th>
                        <th>Mot de passe</th>
                        <th>Taches</th>
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
                        <td>-</td>
                        <td>-to do do do do do</td>
                        <td>
                            <div class="modal fade" id="modifier_commande_" tabindex="-1">
                                <div class="modal-dialog modal-lg">3
                                    <form action="Admin_Add_ordre" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modifier un employe
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nom" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText"
                                                        class="col-sm-2 col-form-label">Prenom</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="prenom" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Date de
                                                        naissance</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="ddn" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Lieu de
                                                        naissance</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="ldn" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText"
                                                        class="col-sm-2 col-form-label">Adresse</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="Adresse" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Numéro de
                                                        téléphone</label>
                                                    <div class="col-sm-10">
                                                        <input type="num" class="form-control" name="tel" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText"
                                                        class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" name="password"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText"
                                                        class="col-sm-2 col-form-label">Taches</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="plus" class="form-control" name="nombre_produit"
                                                            value=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Modifer l'employe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Large Modal-->
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modifier_commande_">Modifier</button>
                        </td>
                        <td>
                            <div class="modal fade" id="verticalycentered_" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Supression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Vous voulez supprimer cet employe.
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
                                data-bs-target="#verticalycentered_">
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

@endsection

@section('footer', '© 2023 Your Website')