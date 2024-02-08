@section('footer', '© 2023 Your Website')


@extends('admin.layouts.app')

@section('title', 'Profil')

@section('header', 'Welcome to our Website')

@section('content')
    <h1></h1>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="assets/img/{{ Auth::user()->profile_photo_path }}" alt="Profile" class="rounded-circle">
                        <h2>{{ $user->name }}</h2>
                        <h3>{{ $user->username }}</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Profil</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier le
                                    profil</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-settings">Vide</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password"></button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <!--<h5 class="card-title">About</h5>
                                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>-->
                                <h5 class="card-title">Détails de Profile </h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nom complet</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Société</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ empty($user->nom_societe) ? '.............' : $user->nom_societe }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Site web</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ empty($user->site_web) ? '.............' : $user->site_web }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Registre commerce</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ empty($user->registre_commerce) ? '................' : $user->registre_commerce }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ empty($user->adresse) ? '.................' : $user->adresse }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ empty($user->phone_number) ? '...............' : $user->phone_number }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form action="Client-profile-edit" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                            Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="assets/img/profile-img.jpg" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class="btn btn-primary btn-sm"
                                                    title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"
                                                    title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom complet</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="fullName"
                                                value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom
                                            d'utilisateur</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="username" type="text" class="form-control" id="fullName"
                                                value="{{ $user->username }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="text" class="form-control" id="fullName"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="adresse" type="text" class="form-control" id="fullName"
                                                value="{{ $user->adresse }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Numéro de
                                            téléphone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone_number" type="text" class="form-control"
                                                id="fullName" value="{{ $user->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nouveau Mots de
                                            passe </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="passone" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Rentrer
                                            Nouveau Mots de passe</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="passtwo" type="password" class="form-control"
                                                id="renewPassword">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Modifier Profil</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">

                                <!-- 
                                <form action="Client-societe-edit" method="post">
                                    @CSRF
                                    <input type="hidden" name="id_societe" value="{{ $user->id_societe }}">
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Logo
                                            Société</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="assets/img/profile-img.jpg" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class="btn btn-primary btn-sm"
                                                    title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"
                                                    title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="adresse" type="text" class="form-control" id="Address"
                                                value="{{ empty($societe->adresse) ? '.................' : $societe->adresse }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Numéro
                                            Téléphone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="Phone"
                                                value="{{ empty($societe->phone_number) ? '.................' : $societe->phone_number }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Site web</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="site_web" type="text" class="form-control" id="Email"
                                                value="{{ empty($societe->site_web) ? '.................' : $societe->site_web }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-3 col-form-label">Type Société </label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" name="type_societe"
                                                aria-label="Default select example">
                                                <option value="SI"
                                                    {{ empty($societe->type_societe) ? 'selected' : 'SI' }}>SI</option>
                                                <option value="SARL"
                                                    {{ empty($societe->type_societe) ? 'selected' : 'SARL' }}>SARL</option>
                                                <option value="SPA"
                                                    {{ empty($societe->type_societe) ? 'selected' : 'SPA' }}>SPA</option>
                                                <option value="SNC"
                                                    {{ empty($societe->type_societe) ? 'selected' : 'SNC' }}>SNC</option>
                                                <option value="SCS"
                                                    {{ empty($societe->type_societe) ? 'selected' : 'SCS' }}>SCS</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Registre
                                            Commerce</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="registre_commerce" type="text" class="form-control"
                                                id="Facebook"
                                                value="{{ empty($societe->registre_commerce) ? '.................' : $societe->registre_commerce }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="row mb-3">
                                            <label for="Instagram"
                                                class="col-md-4 col-lg-3 col-form-label">Description</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="description" type="text" class="form-control"
                                                    id="Instagram"
                                                    value="{{ empty($societe->description) ? '.................' : $societe->description }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Entregister les
                                            modifications</button>
                                    </div>
                                </form><!-- End settings Form 
                                --> 

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form action="Client-profile-edit" method="post">

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="passone" type="password" class="form-control"
                                                id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control"
                                                id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control"
                                                id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Modifier Mots de passe</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('footer', '© 2023 Your Website')
