<!DOCTYPE html>
<html lang="{{ str_replace('PT-br', 'EN', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- CSS --}}
    <link rel="stylesheet" href="css/welcome.css">

    {{-- Bootstrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-logistics-dashboard.css')}}" />
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{asset('assets/js/app-logistics-dashboard.js')}}"></script>

</head>

<body>
    <div class="ns-dash-body container-fluid">
        <div class="container text-start">
            <div class="row">
                <div class="TÍTULO">
                    <h1>Acompanhamento de obra</h1>
                </div>
            </div>



            <div class="container text-center">

                <div class="ESQUERDA row">
                    <div class=" col-7">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-7">
                                    <div class="row">
                                        <div class="card-header">
                                            <div class="card-title mb-0">
                                                <h5 class="m-0">Cronograma de obra</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="content-right">
                                                <p class="mb-0">Planejado</p>
                                                <h4 class="text-primary mb-0">66</h4>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="content-right">
                                                <p class="mb-0">Executado</p>
                                                <h4 class="text-primary mb-0">34</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Vehicles overview -->
                                            <div class="col-xxl-6 mb-4 order-5 order-xxl-0">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-none d-lg-flex mb-4">
                                                            <div class="vehicles-progress-label unloading-text" style="width: 70%;">Realizado</div>
                                                            <div class="vehicles-progress-label loading-text" style="width: 30%;">Previsto</div>
                                                            <div class="vehicles-progress-label waiting-text text-nowrap" style="width: 100%;">Planejado</div>
                                                        </div>
                                                        <div class="vehicles-overview-progress progress rounded-1 my-4" style="height: 46px;">
                                                            <div class="progress-bar fw-medium text-start bg-primary px-3" role="progressbar" style="width: 70%" aria-valuenow="28.3" aria-valuemin="0" aria-valuemax="100">28.3%</div>
                                                            <div class="progress-bar fw-medium text-start text-bg-info px-3" role="progressbar" style="width: 30%" aria-valuenow="17.4" aria-valuemin="0" aria-valuemax="100">17.4%</div>
                                                            <div class="progress-bar fw-medium text-start bg-gray-900 px-2 rounded-0 px-lg-2 px-xxl-3" role="progressbar" style="width: 100%" aria-valuenow="14.6" aria-valuemin="0" aria-valuemax="100">14.6%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-5">
                                        <div class="row">
                                            <div class="col-12 ns-nav-bg-purple">
                                                <div class="card-header">
                                                    <div class="card-title mb-0">
                                                        <h5 class="m-0">Percentual de atividades</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="ns-nav-bg-blue">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="DIREITA col-5 ns-nav-bg-blue">

                            <div class="ns-nav-bg-yellow">
                                <div class="row">
                                    <div class="col-3 ns-nav-bg-blue">
                                        <div class="row">
                                            <div class="ns-nav-bg-pink">360</div>
                                        </div>
                                        <div class="row">
                                            <div class="ns-nav-bg-purple">360</div>
                                        </div>
                                        <div class="row">
                                            <div class="ns-nav-bg-blue">360</div>
                                        </div>
                                        <div class="row">
                                            <div class="ns-nav-bg-yellow">360</div>
                                        </div>
                                    </div>

                                    <div class="col-9 ns-nav-bg-blue">
                                        <div>
                                            <div class="ns-nav-bg-pink">Timelapse</div>
                                        </div>
                                        <div>
                                            <div class="ns-nav-bg-pink">Título</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="ns-nav-bg-yellow">
                            </div>

                        </div>
                    </div>
                </div>


            </div>
</body>

</html>