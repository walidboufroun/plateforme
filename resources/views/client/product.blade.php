<!-- views/home.blade.php -->
@extends('client.layouts.app')

@section('title', 'Produit')

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
                        <th>Action</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Afficher products according to its client-->
                    @foreach($produits as $produit)
                    <tr>
                        <td>{{ $produit->name }}</td>
                        <td>{{ $produit->code }}</td>
                        <td>{{ $produit->descriptive }}</td>
                        <td>{{ $produit->prix }}</td>
                        <td>{{ $produit->id_client  }}</td>
                        <td>{{ $produit->id_societe }}</td>
                        <td class="fix_width">
                            <div class="modal fade" id="voir_produit_" tabindex="-1">
                                <div class="modal-dialog modal-lg custom-modal-width">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Voir le produit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Produit ID:</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                    <span id="product_name_id">Product A - 123</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Anomalies:</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                    <ul>
                                                        <li>Anomaly 1: Description of the first anomaly.</li>
                                                        <li>Anomaly 2: Description of the second anomaly.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Status:</label>
                                                <div class="col-sm-8 col-md-9 col-lg-10">
                                                    <span id="product_name_id">Hors service</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 row mb-3">
                                                <div class="row">
                                                    <!-- Sales Card -->
                                                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                                                        <div class="card info-card sales-card">

                                                            <div class="filter">
                                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                    <li class="dropdown-header text-start">
                                                                        <h6>Filter</h6>
                                                                    </li>

                                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="card-body">
                                                                <h5 class="card-title">PLASTIQUE <span>| Ce mois</span></h5>

                                                                <div class="d-flex align-items-center">
                                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                        <i class="bi bi-suitcase2"></i>
                                                                    </div>
                                                                    <div class="ps-3">
                                                                        <h6>145 </h6>
                                                                        <span class="text-success small pt-1 fw-bold">28%</span> <span class="text-muted small pt-2 ps-1">Revenu</span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                                                        <div class="card info-card revenue-card">

                                                            <div class="filter">
                                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                    <li class="dropdown-header text-start">
                                                                        <h6>Filter</h6>
                                                                    </li>

                                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="card-body">
                                                                <h5 class="card-title">PAPIER <span>| Ce mois</span></h5>

                                                                <div class="d-flex align-items-center">
                                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                        <i class="bi bi-file-earmark-text"></i>
                                                                    </div>
                                                                    <div class="ps-3">
                                                                        <h6>$3,264</h6>
                                                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Revenu</span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                                                        <div class="card info-card revenue-card">

                                                            <div class="filter">
                                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                    <li class="dropdown-header text-start">
                                                                        <h6>Filter</h6>
                                                                    </li>

                                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="card-body">
                                                                <h5 class="card-title">VERRE <span>| Ce mois</span></h5>

                                                                <div class="d-flex align-items-center">
                                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                        <i class="bi bi-trash2"></i>
                                                                    </div>
                                                                    <div class="ps-3">
                                                                        <h6>$3,264</h6>
                                                                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">Revenu</span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                                                        <div class="card info-card revenue-card">

                                                            <div class="filter">
                                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                    <li class="dropdown-header text-start">
                                                                        <h6>Filter</h6>
                                                                    </li>

                                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="card-body">
                                                                <h5 class="card-title">MÉTAL <span>| Ce mois</span></h5>

                                                                <div class="d-flex align-items-center">
                                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                                        <i class="bi bi-suitcase"></i>
                                                                    </div>

                                                                    <div class="ps-3">
                                                                        <h6>$3,264</h6>
                                                                        <span class="text-success small pt-1 fw-bold">17%</span> <span class="text-muted small pt-2 ps-1">Revenu</span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-xl-12">

                                                        <div class="card info-card customers-card">

                                                            <div class="filter">
                                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                    <li class="dropdown-header text-start">
                                                                        <h6>Filter</h6>
                                                                    </li>

                                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="card-body">
                                                                <h5 class="card-title">AUTRE <span>| Ce Mois </span></h5>

                                                                <div class="d-flex align-items-center">
                                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                                                                        <i class="bi bi-recycle"></i>
                                                                    </div>
                                                                    <div class="ps-3">
                                                                        <h6>1244</h6>
                                                                        <span class="text-danger small pt-1 fw-bold">25%</span> <span class="text-muted small pt-2 ps-1">Revenu</span>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#voir_produit_">Voir</button>
                        </td>
                        <td class="fix_width">

                            <div class="modal fade" id="modifier_réclamations_" tabindex="-1">
                                <div class="modal-dialog modal-lg">3
                                    <form action="Admin_Add_ordre" method="post">
                                        @csrf
                                        <div class="modal-content">
                                             <div class="modal-header">

                                            <div class="modal-header">

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

                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>

                                                <button type="submit" class="btn btn-success">Modifer le produit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Large Modal-->
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modifier_réclamations_">Modifier</button>
                        </td>
                        <td>


                        <td class="fix_width">

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

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>

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
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>
</div>



@endsection

@section('footer', '© 2023 Your Website')
