<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Produit')

@section('header', 'Welcome to our Website')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between" style="">
                <div class="card-title">
                    <h5 class="card-title">Liste des Produits</h5>
                </div>
                <div class="modal fade" id="largeModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">3
                        <form action="Admin_Add_Produit" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajouter produit</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nom produit</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Code produit</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="code" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Photo produit</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="photos" required>
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
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Description produit</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="descriptive" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Prix produit</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="prix" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Ajouter la commande</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- End Large Modal-->

                <div class="card-title">
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#largeModal">Ajouter Produit</button>
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
                        <th>Nom de produit</th>
                        <th>Code produit</th>
                        <th>Photo</th>
                        <th>Description de produit</th>
                        <th>societe</th>
                        <th>Prix</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->name }}</td>
                        <td>{{ $produit->code }}</td>
                        <td>{{ $produit->photos }}</td>
                        <td>{{ $produit->descriptive }}</td>
                        <td>{{ empty($produit->societes->name) ? 'Aucune societe' : $produit->societes->name }}</td>
                        <td>{{ $produit->prix }}</td>
                        <td>
                            <div class="modal fade" id="modifier_commande_{{ $produit->id }}" tabindex="-1">
                                <div class="modal-dialog modal-lg">3
                                    <form action="Admin_Add_ordre" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ajouter une commande {{ $produit->id }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Nom produit</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="name" value="{{ $produit->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Code produit</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="code" value="{{ $produit->code }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Photo produit</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="photos" >
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Societe</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="id_societe" aria-label="Sélectionnez une société ou une societe" required>
                                                            <option value="" disabled selected>Choisir la société</option>
                                                            @foreach ($societes as $societe)
                                                            <option value="{{ $societe->id }}" @if ($societe->id == $produit->id_societe) selected @endif >{{ $societe->name }} {{ $societe->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Description produit</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="descriptive" value="{{ $produit->descriptive }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Prix produit</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="prix" value="{{ $produit->prix }}" required>
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
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modifier_commande_{{ $produit->id }}">Modifier</button>
                        </td>
                        <td>
                            <form action="Admin_Delete_Produit" method="post">
                                <div class="modal fade" id="verticalycentered_{{ $produit->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $produit->id }}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Supresion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Vous voulez supprimer le produit n° {{ $produit->id }}.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered_{{ $produit->id }}">
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
<h1>Products</h1>
<h2>Ajouter/Modifier/Supprimer un produit.</h2>
<h2> Afficher la liste des produits avec leurs détails.</h2>
<h2>Gérer les catégories de produits.</h2>


@endsection

@section('footer', '© 2023 Your Website')