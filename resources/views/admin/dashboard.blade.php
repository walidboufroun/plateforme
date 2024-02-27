<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Acceuil')

@section('header', 'Welcome to our Website')

@section('content')
@section('content')
<div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
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
                        <h5 class="card-title">Commandes <span>| Ce mois</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-suitcase2"></i>
                            </div>
                            <div class="ps-3">
                                <h6>0 </h6>
                                <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">Commande</span>

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
                        <h5 class="card-title">Societes <span>| Ce mois</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <div class="ps-3">
                                <h6>0</h6>
                                <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">Societe</span>

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
                        <h5 class="card-title">Produit <span>| Ce mois</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-trash2"></i>
                            </div>
                            <div class="ps-3">
                                <h6>0</h6>
                                <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">Produit</span>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12">
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
                        <h5 class="card-title">Employes <span>| Ce mois</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-suitcase"></i>
                            </div>

                            <div class="ps-3">
                                <h6>0</h6>
                                <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">Employe</span>
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
                        <h5 class="card-title">Alerts <span>| Ce Mois </span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                                <i class="bi bi-recycle"></i>
                            </div>
                            <div class="ps-3">
                                <h6>0</h6>
                                <span class="text-danger small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">Alert</span>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row">
            <!-- Reports -->
            <div class="col-12">
                <div class="card">

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
                        <h5 class="card-title">Rapports <span>| Aujourd'hui</span></h5>

                        <!-- Line Chart -->
                        <div id="reportsChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                    series: [{
                                        name: 'Paper',
                                        data: [31, 40, 28, 51, 42, 82, 56],
                                    }, {
                                        name: 'Plastic',
                                        data: [11, 32, 45, 32, 34, 52, 41]
                                    }, {
                                        name: 'Metal',
                                        data: [06, 32, 68, 32, 20, 52, 41]
                                    }, {
                                        name: 'GLASS',
                                        data: [90, 90, 90, 90, 90, 90, 90]
                                    }, {
                                        name: 'Other',
                                        data: [05, 15, 25, 35, 45, 65, 75]
                                    }],
                                    chart: {
                                        height: 350,
                                        type: 'area',
                                        toolbar: {
                                            show: false
                                        },
                                    },
                                    markers: {
                                        size: 4
                                    },
                                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                    fill: {
                                        type: "gradient",
                                        gradient: {
                                            shadeIntensity: 1,
                                            opacityFrom: 0.3,
                                            opacityTo: 0.4,
                                            stops: [0, 90, 100]
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        curve: 'smooth',
                                        width: 2
                                    },
                                    xaxis: {
                                        type: 'datetime',
                                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                            "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                            "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                            "2018-09-19T06:30:00.000Z"
                                        ]
                                    },
                                    tooltip: {
                                        x: {
                                            format: 'dd/MM/yy HH:mm'
                                        },
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Line Chart -->

                    </div>

                </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filtrer</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                            <li><a class="dropdown-item" href="#">Ce mois</a></li>
                            <li><a class="dropdown-item" href="#">Cette Année</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Réclamations <span>| Aujourd'hui</span></h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Réclamation</th>
                                    <th scope="col">Produit</th>
                                    <th scope="col">Utilisateur</th>
                                    <th scope="col">Societe</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">Ne fonctionne pas</a></th>
                                    <td>GBIN G-0043</td>
                                    <td><a href="#" class="text-primary">Hamid Said</a></td>
                                    <td><a href="#" class="text-primary">SONATRACH</a></td>
                                    
                                    <td><span class="badge bg-primary">En cours de traitement</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">Manque d'information</a></th>
                                    <td>GBIN G-0006</td>
                                    <td><a href="#" class="text-primary">Admnistrateur</a></td>
                                    <td><a href="#" class="text-primary">GNOV</a></td>
                                    <td><span class="badge bg-warning">En attente</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">Ne fonctionne pas</a></th>
                                    <td>G-0023</td>
                                    <td><a href="#" class="text-primary">Hani Rahim</a></td>
                                    <td><a href="#" class="text-primary">Ardis</a></td>
                                    <td><span class="badge bg-dark">Non applicable</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">Internet faible</a></th>
                                    <td>G-0092</td>
                                    <td><a href="#" class="text-primary">ABDELGHANI</a></td>
                                    <td><a href="#" class="text-primary">UNO</a></td>
                                    <td><span class="badge bg-danger">Traitement terminé avec problème</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">Manque d'information</a></th>
                                    <td>G-0081</td>
                                    <td><a href="#" class="text-primary">Admnistrateur</a></td>
                                    <td><a href="#" class="text-primary">GNOV</a></td>
                                    <td><span class="badge bg-success">Traitement terminé avec succès</span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Recent Sales -->

            <!-- 
            <div class="col-12">
                <div class="card top-selling overflow-auto">

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

                    <div class="card-body pb-0">
                        <h5 class="card-title">Top Selling <span>| Today</span></h5>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Preview</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Sold</th>
                                    <th scope="col">Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas
                                            nulla</a></td>
                                    <td>$64</td>
                                    <td class="fw-bold">124</td>
                                    <td>$5,828</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                    <td><a href="#" class="text-primary fw-bold">Exercitationem similique
                                            doloremque</a></td>
                                    <td>$46</td>
                                    <td class="fw-bold">98</td>
                                    <td>$4,508</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                            exercitationem</a></td>
                                    <td>$59</td>
                                    <td class="fw-bold">74</td>
                                    <td>$4,366</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum
                                            error</a></td>
                                    <td>$32</td>
                                    <td class="fw-bold">63</td>
                                    <td>$2,016</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus
                                            repellendus</a></td>
                                    <td>$79</td>
                                    <td class="fw-bold">41</td>
                                    <td>$3,239</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>-->

        </div>
    </div><!-- End Left side columns -->
    <!-- Right side columns -->
    <div class="col-lg-4">

        <!-- Recent Activity -->
        <div class="card">
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
                <h5 class="card-title">Activité récente <span>| Aujourd'hui </span></h5>

                <div class="activity">

                    <div class="activity-item d-flex">
                        <div class="activite-label">32 min</div>
                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                        <div class="activity-content">
                            La poubelle <strong>G-0001</strong> a été vidée
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">56 min</div>
                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                        <div class="activity-content">
                            La poubelle <strong> G-0023</strong> est pleine
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">2 hrs</div>
                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                        <div class="activity-content">
                            La poubelle <strong> G-0043</strong> ne fonctionne pas
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">1 day</div>
                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                        <div class="activity-content">
                            La poubelle <strong>G-0001</strong> a été déplacée

                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">2 days</div>
                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                        <div class="activity-content">
                            La poubelle <strong> G-0015 </strong> a été louée à <strong> SONATRACH</strong>
                        </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                        <div class="activite-label">56 min</div>
                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                        <div class="activity-content">
                            La poubelle <strong> G-0023</strong> est pleine.
                        </div>
                    </div>

                </div>

            </div>
        </div><!-- End Recent Activity -->

        <!-- 
        <div class="card">
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

            <div class="card-body pb-0">
                <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                            legend: {
                                data: ['Allocated Budget', 'Actual Spending']
                            },
                            radar: {
                                // shape: 'circle',
                                indicator: [{
                                        name: 'Sales',
                                        max: 6500
                                    },
                                    {
                                        name: 'Administration',
                                        max: 16000
                                    },
                                    {
                                        name: 'Information Technology',
                                        max: 30000
                                    },
                                    {
                                        name: 'Customer Support',
                                        max: 38000
                                    },
                                    {
                                        name: 'Development',
                                        max: 52000
                                    },
                                    {
                                        name: 'Marketing',
                                        max: 25000
                                    }
                                ]
                            },
                            series: [{
                                name: 'Budget vs spending',
                                type: 'radar',
                                data: [{
                                        value: [4200, 3000, 20000, 35000, 50000, 18000],
                                        name: 'Allocated Budget'
                                    },
                                    {
                                        value: [5000, 14000, 28000, 26000, 42000, 21000],
                                        name: 'Actual Spending'
                                    }
                                ]
                            }]
                        });
                    });
                </script>

            </div>
        </div> -->

        <!-- Website Traffic -->
        <div class="card">
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

            <div class="card-body pb-0">
                <h5 class="card-title">Déchets <span>| 2024</span></h5>

                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        echarts.init(document.querySelector("#trafficChart")).setOption({
                            tooltip: {
                                trigger: 'item'
                            },
                            legend: {
                                top: '5%',
                                left: 'center'
                            },
                            series: [{
                                name: 'TAUX DE DECHETS 2024',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '18',
                                        fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: [{
                                        value: 1048,
                                        name: 'PLASTIQUE'
                                    },
                                    {
                                        value: 735,
                                        name: 'GLASS'
                                    },
                                    {
                                        value: 580,
                                        name: 'PAPER'
                                    },
                                    {
                                        value: 484,
                                        name: 'METAL'
                                    },
                                    {
                                        value: 300,
                                        name: 'OTHER'
                                    }
                                ]
                            }]
                        });
                    });
                </script>

            </div>
        </div><!-- End Website Traffic -->

        <!-- News & Updates Traffic
                <div class="card">
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

                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-3.jpg" alt="">
                                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-4.jpg" alt="">
                                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-5.jpg" alt="">
                                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                            </div>

                        </div> End sidebar recent posts-->

    </div>
</div><!-- End News & Updates -->

</div><!-- End Right side columns -->

</div>

@endsection
<h1>Dashboard</h1>
<h2>Résumé des activités récentes et statistiques clés.</h2>
@endsection

@section('footer', '© 2023 Your Website')