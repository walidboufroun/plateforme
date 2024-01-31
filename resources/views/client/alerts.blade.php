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
                <div class="d-flex justify-content-between">
                    <div class="card-title">
                        <h5 class="card-title">Liste des réclamations</h5>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">3
                            <form action="Admin_Add_ordre" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter une réclamations</h5>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Date réclamations</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date_réclamations"
                                                    value="{{ now()->format('Y-m-d') }}" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Client</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="idclient" name="client" required>
                                                    <!-- afficher directement le client en session -->
                                                    <option value="client1">client1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nom Produit</label>
                                            <div class="col-sm-10">
                                                <!-- select from list produit de clients -->
                                                <select class="form-control" id="id_produit_client" name="Nom_produit"
                                                    required>
                                                    <option value="produit1">produit1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description_reclamation" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Type de
                                                réclamation</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="typeReclamation" name="type">
                                                    <option value="produit_defectueux">Produit défectueux</option>
                                                    <option value="service_insatisfaisant">Service insatisfaisant</option>
                                                    <option value="livraison_retardee">Livraison retardée</option>
                                                    <option value="facturation_incorrecte">Facturation incorrecte</option>
                                                    <option value="mauvaise_communication">Mauvaise communication</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">statut de
                                                réclamations</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="etatReclamation" name="statut">
                                                    <option value="en_attente">En attente</option>
                                                    <option value="en_cours">En cours de traitement</option>
                                                    <option value="termine_succee">Traitement terminé avec succès</option>
                                                    <option value="termine_probleme">Traitement terminé avec problème
                                                    </option>
                                                    <option value="non_applicable">Non applicable</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Actions prise</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="actions"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Ajouter la réclamations</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End Large Modal-->

                    <div class="card-title">
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">Ajouter une réclamations</button>
                    </div>
                </div>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Nom de réclamation</th>
                            <th>Client</th>
                            <th>Nom de produit</th>
                            <th>Description</th>
                            <th>Type réclamation</th>
                            <th>Statut réclamation</th>
                            <th>Action prise</th>
                            <th>Date résolution</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alerts as $alert)
                            <tr>
                                <td>{{ $alert->name }}</td>
                                <td>{{ $alert->date_et_heure }}</td>
                                <td>{{ $alert->id_produit }}</td>
                                <td>{{ $alert->description }}</td>
                                <td>{{ $alert->lu }}</td>
                                <td>{{ $alert->lu }}</td>
                                <td>{{ $alert->name }}</td>
                                <td>{{ $alert->name }}</td>
                                <td class="fix_width">
                                    <div class="modal fade" id="modifier_réclamations_{{ $alert->id }}"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-lg">3
                                            <form action="Admin_Add_ordre" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modifier une réclamations
                                                            {{ $alert->id }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Date
                                                                réclamations</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control"
                                                                    name="date_réclamations" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Client</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="client"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Nom
                                                                Produit</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="Nom_produit" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" name="description" value=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Type de
                                                                réclamation</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" id="typeReclamation"
                                                                    name="typeR">
                                                                    <option value="produit_defectueux">Produit défectueux
                                                                    </option>
                                                                    <option value="service_insatisfaisant">Service
                                                                        insatisfaisant</option>
                                                                    <option value="livraison_retardee">Livraison retardée
                                                                    </option>
                                                                    <option value="facturation_incorrecte">Facturation
                                                                        incorrecte</option>
                                                                    <option value="mauvaise_communication">Mauvaise
                                                                        communication</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">statut
                                                                de réclamations</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" id="etatReclamation"
                                                                    name="statutR">
                                                                    <option value="en_attente">En attente</option>
                                                                    <option value="en_cours">En cours de traitement
                                                                    </option>
                                                                    <option value="termine_succee">Traitement terminé avec
                                                                        succès</option>
                                                                    <option value="termine_probleme">Traitement terminé
                                                                        avec problème</option>
                                                                    <option value="non_applicable">Non applicable</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Actions
                                                                prise</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" name="actions" value=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">Date de
                                                                résolution</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control"
                                                                    name="dateReso" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Modifer la
                                                            réclamations</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- End Large Modal-->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modifier_réclamations_{{ $alert->id }}">Modifier</button>
                                </td>
                                <td class="fix_width">
                                    <div class="modal fade" id="verticalycentered_{{ $alert->id }}" tabindex="-1">
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
                                        data-bs-target="#verticalycentered_{{ $alert->id }}">
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