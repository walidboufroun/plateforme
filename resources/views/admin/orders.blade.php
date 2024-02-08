<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Commandes')

@section('header', 'Welcome to our Website')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between" style="">
                    <div class="card-title">
                        <h5 class="card-title">Liste des commandes</h5>
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
                                            <label for="inputText" class="col-sm-2 col-form-label">date de livrision</label>
                                            <div class="col-sm-10">
                                            <input type="date" class="form-control" name="date" value="{{ now()->format('Y-m-d') }}" required>
                                            </div>
                                        </div>
                                        @if (!$societes->isEmpty() || !$clientsWithoutSociete->isEmpty())
                                            @if (!$societes->isEmpty())
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Societe</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="id_societe"
                                                            aria-label="Sélectionnez une société ou une societe" required>
                                                            <option value="" disabled selected>Choisir le client
                                                            </option>
                                                            @foreach ($societes as $societe)
                                                                <option value="{{ $societe->id }}">
                                                                    {{ $societe->nom_societe }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (!$clientsWithoutSociete->isEmpty())
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Client</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="id_client"
                                                            aria-label="Sélectionnez une société ou un client" required>
                                                            <option value="" disabled selected>Choisir le client
                                                            </option>
                                                            @foreach ($clientsWithoutSociete as $client)
                                                                <option value="{{ $client->id }}">{{ $client->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Client</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" name="id_client"
                                                        aria-label="Sélectionnez une société ou un client" required>
                                                        <option value="" disabled selected>Il faut creer client ou
                                                            societe, Aucun client ou societe existe
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">produit</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="id_produit"
                                                    aria-label="Sélectionnez un produit" required>
                                                    @foreach ($produits as $produit)
                                                        <option value="{{ $produit->id }}">{{ $produit->nom_produit }} -
                                                            {{ $produit->descriptive }} - {{ $produit->prix }} DA</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">nombre produit</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="number" required>
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
                            <th>date_commande</th>
                            <th>Client</th>
                            <th data-type="date" data-format="YYYY/DD/MM">Produit</th>
                            <th>Nombre</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($commandes as $commande)
                            <tr>
                                <td>{{ $commande->date }}</td>
                                <td>{{ $commande->client->name }}</td>
                                <td>{{ $commande->produit->name }}</td>
                                <td>{{ $commande->number }}</td>
                                <td>{{ $commande->statut }}</td>
                                <td>
                                    <div class="modal fade" id="modifier_commande_{{ $commande->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">3
                                            <form action="Admin_Add_ordre" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ajouter une commande {{ $commande->id }}
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
                                                                    value="{{ $commande->date_commande }}" required>
                                                            </div>
                                                        </div>
                                                        @if (!$societes->isEmpty() || !$clientsWithoutSociete->isEmpty())
                                                            @if (!$societes->isEmpty())
                                                                <div class="row mb-3">
                                                                    <label for="inputText"
                                                                        class="col-sm-2 col-form-label">Societe</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-select" name="id_societe"
                                                                            aria-label="Sélectionnez une société ou une societe"
                                                                            required>
                                                                            <option value="" disabled selected>
                                                                                Choisir le client
                                                                            </option>
                                                                            @foreach ($societes as $societe)
                                                                                <option value="{{ $societe->id }}">
                                                                                    {{ $societe->nom_societe }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if (!$clientsWithoutSociete->isEmpty())
                                                                <div class="row mb-3">
                                                                    <label for="inputText"
                                                                        class="col-sm-2 col-form-label">Client</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-select" name="id_client"
                                                                            aria-label="Sélectionnez une société ou un client"
                                                                            required>
                                                                            <option value="" disabled selected>
                                                                                Choisir le client
                                                                            </option>
                                                                            @foreach ($clientsWithoutSociete as $client)
                                                                                <option value="{{ $client->id }}">
                                                                                    {{ $client->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @else
                                                            <div class="row mb-3">
                                                                <label for="inputText"
                                                                    class="col-sm-2 col-form-label">Client</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-select" name="id_client"
                                                                        aria-label="Sélectionnez une société ou un client"
                                                                        required>
                                                                        <option value="" disabled selected>Il faut
                                                                            creer client ou societe, Aucun client ou societe
                                                                            existe
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">produit</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" name="id_produit"
                                                                    aria-label="Sélectionnez un produit" required>
                                                                    @foreach ($produits as $produit)
                                                                        <option value="{{ $produit->id }}">
                                                                            {{ $produit->nom_produit }} -
                                                                            {{ $produit->descriptive }} -
                                                                            {{ $produit->prix }} DA</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label">nombre
                                                                produit</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control"
                                                                    name="nombre_produit"
                                                                    value="{{ $commande->nombre_produit }}" required>
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

                                    <div>
                                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modifier_commande_{{ $commande->id }}">Modifier</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#verticalycentered">
                                            Supprimer
                                        </button>
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
