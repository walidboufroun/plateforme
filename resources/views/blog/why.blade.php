@extends("blog/layouts.layout")

@section("title", "US")

@section("content")
    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Pourquoi Choisir <span>Notre</span> Solution De Gestion Des Déchets
                </h2>
            </div>
            <div class="why_container">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/w1.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Essentielles
                        </h5>
                        <p>
                            Notre système utilise une technologie de pointe pour recueillir des données en temps réel à
                            partir de capteurs connectés,
                            fournissant des informations cruciales sur les niveaux et les types de déchets, entre
                            autres. Ces informations permettent de prendre des décisions éclairées et d'optimiser les
                            processus de collecte et de tri des déchets, contribuant ainsi à un environnement plus
                            propre et plus durable.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/w2.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Sécurité de l'Investissement
                        </h5>
                        <p>
                            La gestion des déchets est un investissement important pour la durabilité de l'environnement
                            et la santé publique.
                            Notre approche assure la sécurité de votre investissement en maximisant l'efficacité de la
                            collecte, du tri et de la valorisation des déchets. Vous pouvez être assuré que votre
                            contribution fait une réelle différence.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/w3.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Technologie de Gestion Instantanée
                        </h5>
                        <p>
                            Nous utilisons des technologies de pointe pour assurer une gestion instantanée des déchets.
                            Notre système de collecte de données en temps réel, associé à des capteurs connectés, permet
                            une gestion efficace.
                            Cela signifie que vous pouvez prendre des décisions éclairées sur la base de données
                            précises.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/w4.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Satisfaction des Clients
                        </h5>
                        <p>
                            La satisfaction de nos clients est notre priorité absolue.
                            Nous travaillons en étroite collaboration avec des particuliers, des entreprises, des
                            collectivités locales et d'autres parties prenantes pour répondre à leurs besoins
                            spécifiques en matière de gestion des déchets.
                            Notre objectif est de garantir que nos clients sont satisfaits de nos services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->
@endsection