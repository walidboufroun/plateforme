@extends("blog/layouts.layout")

@section("title", "Secteur")

@section("content")
        <!-- secteur section -->
        <section class="service_section layout_padding">
            <div class="">
                <div class="heading_container heading_center">
                    <h2>Secteur des <span>Centres Commerciaux</span></h2>
                    <p>Les centres commerciaux connaissent une forte fréquentation et génèrent d'importantes <br>
                        quantités
                        de déchets issus des activités de vente au détail. Les principaux insights incluent :</p>
                    <br>
                </div>
                <div class="row second_row">
                    <div class="col-lg-6 col-md-12 immo_first_row">
                        <h2>Déchets de vente au détail :</h2>
                        <p>Les défis liés à la gestion des déchets d'emballage, des déchets
                            alimentaires et d'autres flux de déchets générés par le commerce de détail.</p>
                        <h2>Gestion de la foule :</h2>
                        <p>Collecte et élimination efficaces des déchets pour maintenir des
                            environnements de shopping propres et sûrs pour les visiteurs.</p>
                        <h2>Initiatives de recyclage :</h2>
                        <p>Demande croissante pour que les centres commerciaux mettent en
                            place des programmes de recyclage et réduisent leur impact environnemental.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 text-right">
                        <img src="{{ asset('images/centre2.jpg') }}" alt="Gestion des déchets" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="service_section layout_padding">
            <div class="">
                <div class="heading_container heading_center">
                    <h2>Solutions pour le Secteur des<span>Centres Commerciaux</span></h2>
                    <p>Nos solutions de gestion des déchets pour les centres commerciaux répondent à ces besoins
                        spécifiques :</p>
                    <br>
                </div>
                <div class="row second_row">
                    <div class="col-lg-6 col-md-12 immo_second_row">
                        <ul class="list-group">
                            <li class="list-group-item">Bacs à déchets intelligents : Bacs à déchets connectés à l'IoT
                                équipés de capteurs pour le tri automatique des déchets et la surveillance des volumes.
                            </li>
                            <li class="list-group-item">Engagement du public : Affichages interactifs et supports
                                pédagogiques dans les centres commerciaux pour promouvoir la réduction des déchets et la
                                sensibilisation au recyclage.</li>
                            <li class="list-group-item">Analyse des données : Outils d'analyse avancés pour suivre les
                                tendances des déchets, optimiser les itinéraires de collecte et identifier les
                                opportunités de réduction des déchets.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 text-right">
                        <img src="{{ asset('images/GBIN.jpg') }}" alt="Gestion des déchets" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- end secteur section -->
@endsection