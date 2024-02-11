<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Forfait')

@section('header', 'Welcome to our Website')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between" style="">
                    <div class="card-title">
                        <h5 class="card-title">Liste des Forfaits</h5>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <form action="Admin_Add_forfait" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter une commande</h5>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Duree</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="duration" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="description" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="photos" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">produit</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="id_produit"
                                                    aria-label="Sélectionnez un produit" required>
                                                    @foreach ($produits as $produit)
                                                        <option value="{{ $produit->id }}">
                                                            {{ $produit->name }} -
                                                            {{ $produit->descriptive }} -
                                                            {{ $produit->prix }} DA</option>
                                                    @endforeach
                                                </select>
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
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Nom de forfait</th>
                            <th>Duree</th>
                            <th>Description de forfait</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($forfaits as $forfait)
                            <tr>
                                <td>{{ $forfait->name }}</td>
                                <td>{{ $forfait->duration }}</td>
                                <td>{{ $forfait->description }}</td>
                                <td>
                                    <div class="modal fade" id="modifier_commande_{{ $forfait->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">3
                                            <form action="Admin_Add_ordre" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ajouter une commande {{ $forfait->id }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="name" value="{{ $forfait->name }}"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Duree</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="duration" value="{{ $forfait->duration }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Description</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" value="{{ $forfait->description}}"
                                                                    name="description" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">Photo</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control" name="photos" 
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText"
                                                                class="col-sm-2 col-form-label">produit</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" name="id_produit" aria-label="Sélectionnez un produit" required>
                                                                    @foreach ($produits as $produit)
                                                                        
                                                                        <option value="{{ $produit->id }}" @if ($forfait->id_produit == $produit->id) echo "selected" @endif  >{{ $produit->name }} -{{ $produit->descriptive }} -{{ $produit->prix }} DA</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-success">Modifer la
                                                                commande</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- End Large Modal-->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modifier_commande_{{ $forfait->id }}">Modifier</button>
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
    <h1>Forfaits</h1>
    <h2>Créer/Modifier/Supprimer un forfait.</h2>
    <h2>Afficher la liste des forfaits disponibles.</h2>
@endsection

@section('footer', '© 2023 Your Website')
