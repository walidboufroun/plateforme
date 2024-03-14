<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Réclamations')

@section('header', 'Welcome to our Website')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between" style="">
                <div class="card-title">
                    <h5 class="card-title">Reclamations des clients</h5>
                </div>


            </div>
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>Reclamation</th>
                        <th>Nom Produit</th>
                        <th>Utilisateur</th>
                        <th>Statut</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($complaints as $complaint)
                    <tr>
                        <td>{{ $complaint->content }}</td>
                        <td>{{ $complaint->id_produit }}</td>
                        <td>{{ $complaint->id_utilisateur }}</td>
                        <td>{{ $complaint->statut }}</td>
                        <td>
                            <div class="modal fade" id="change_statut_reclamation-{{ $complaint->id }}" tabindex="-1">
                                <div class="modal-dialog modal-lg">3
                                    <form action="change_statut_reclamation/{{ $complaint->id }}" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ajouter une commande {{ $complaint->id }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="selectStatus" class="col-sm-2 col-form-label">Statut</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" id="selectStatus" name="statut" required>
                                                            <option value="En attente" {{ $complaint->statut === 'En attente' ? 'selected' : '' }}>En attente</option>
                                                            <option value="En cours de traitement" {{ $complaint->statut === 'En cours de traitement' ? 'selected' : '' }}>En cours de traitement</option>
                                                            <option value="Traitement terminé avec succès" {{ $complaint->statut === 'Traitement terminé avec succès' ? 'selected' : '' }}>Traitement terminé avec succès</option>
                                                            <option value="Traitement terminé avec problème" {{ $complaint->statut === 'Traitement terminé avec problème' ? 'selected' : '' }}>Traitement terminé avec problème</option>
                                                            <option value="Non applicable" {{ $complaint->statut === 'Non applicable' ? 'selected' : '' }}>Non applicable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Modifer la
                                                    commande</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Large Modal-->
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#change_statut_reclamation-{{ $complaint->id }}">Modifier statut de
                                reclamation</button>
                        </td>
                        <td>
                            <div class="modal fade" id="verticalycentered_{{ $complaint->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="Admin-suprmier_complaint/{{ $complaint->id }}" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Supresion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Vous voulez supprimer cette Réclamation.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered_{{ $complaint->id }}">
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