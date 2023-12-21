<!DOCTYPE html>
<html lang="{{ str_replace('PT-br', 'EN', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href={{asset('https://fonts.googleapis.com')}}/>
    <link rel="preconnect" href={{asset('https://fonts.gstatic.com')}}/>
    <link href={{asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap' rel="stylesheet")}} />

    <!-- Icons -->
    <link rel="stylesheet" href="example-app\public\assets\fonts\fontawesome.scss"/>
    <link rel="stylesheet" href="example-app\public\assets\fonts\flag-icons.scss"/>
    <link rel="stylesheet" href="example-app\public\assets\fonts\tabler-icons.scss"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../assets/vendor/css/pages/app-logistics-dashboard.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="css/welcome.css">

    {{-- Bootstrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


</head>

<body>
    {{-- Layout wrapper --}}
    <div class="layout-container ns-dash-body container-fluid">
        {{-- Titulo --}}
        <div class="container-fluid text-start">
            <div class="row">
                <h4 class="py-3 mb-4"> Acompanhamento de obras </h4>
            </div>
        </div>
        {{-- /Título --}}

        <div class="container-fluid text-center container-a">
            <div class="card-title mb-0">
                <h5 class="m-0">Cronograma de Obra</h5>
            </div>
            <div class="row">
                <div class="container-fluid col-7">
                    <div class="row">
                        <div class="col-7">
                            <div class="row">
                                <div class="col-6">
                                    dado
                                </div>
                                <div class="col-6">
                                    dado
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 card-body M-1">
                                    <div class="d-flex vehicles-progress-labels mb-4">
                                        <div class="vehicles-progress-label on-the-way-text" style="width: 39.7%">Realizada</div>
                                        <div class="vehicles-progress-label unloading-text" style="width: 28.3%">Prevista</div>
                                        <div class="vehicles-progress-label loading-text" style="width: 17.4%">Planejada</div>
                                    </div>
                                    <div class="vehicles-overview-progress progress rounded my-3 mx-5" style="height: 46px">
                                        <div class="progress-bar fw-medium text-start bg-body text-dark px-3 rounded" role="progressbar" style="width: 39.7%" aria-valuenow="39.7" aria-valuemin="0" aria-valuemax="100">
                                            39.7%
                                        </div>
                                        <div class="progress-bar fw-medium text-start bg-primary px-3" role="progressbar" style="width: 28.3%" aria-valuenow="28.3" aria-valuemin="0" aria-valuemax="100">
                                            28.3%
                                        </div>
                                        <div class="progress-bar fw-medium text-start text-bg-info px-3" role="progressbar" style="width: 32%" aria-valuenow="17.4" aria-valuemin="0" aria-valuemax="100">
                                            32%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="card-title mb-0">
                                        <h5 class="m-0 me-2">Percentual de entregas</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="deliveryExceptionsChart" class="pt-md-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-12 order-5">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Acompanhamento por disciplina</h5>
                                        </div>
                                    </div>
                                    <div class="card-datatable table-responsive">
                                        <table class="dt-route-vehicles table">
                                            <thead class="border-top">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Disciplina</th>
                                                    <th class="w-20">% Completa</th>
                                                    <th>Data início > final</th>
                                                    <th>Previsto</th>
                                                    <th>Realizado</th>
                                                    <th>Em atraso</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid col-5">
                    <div class="row">
                        <div class="col-3 ns-nav-bg-blue PREVISUALIZAÇAO">
                            <div class="row">
                                <div class="ns-nav-bg-pink">                                    <div class="card-body m-4">
                                    <div class="bg-label-primary rounded-3 text-center pt-4">
                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png" alt="Card girl image"/>
                                    </div>
                                </div></div>
                            </div>
                            <div class="row">
                                <div class="ns-nav-bg-purple">                                    <div class="card-body m-4">
                                    <div class="bg-label-primary rounded-3 text-center pt-4">
                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png" alt="Card girl image"/>
                                    </div>
                                </div></div>
                            </div>
                            <div class="row">
                                <div class="ns-nav-bg-blue">                                    <div class="card-body m-4">
                                    <div class="bg-label-primary rounded-3 text-center pt-4">
                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png" alt="Card girl image"/>
                                    </div>
                                </div></div>
                            </div>
                            <div class="row">
                                <div class="ns-nav-bg-yellow">
                                    <div class="card-body m-4">
                                        <div class="bg-label-primary rounded-3 text-center pt-4">
                                            <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png" alt="Card girl image"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-9 ns-nav-bg-blue TIME LAPSE">
                            <div>
                                <div class="row">
                                    <div class="ns-nav-bg-pink">
                                        <div class="col-12 me-4">
                                            <div class="card h-100">
                                                <div class="card-body m-4">
                                                    <div class="bg-label-primary rounded-3 text-center pt-4">
                                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png" alt="Card girl image" width="140" />
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-primary w-100">Join the event</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/app-logistics-dashboard.js"></script>

</body>
</html>
