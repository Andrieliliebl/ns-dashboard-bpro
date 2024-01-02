<!DOCTYPE html>
<html lang="{{ str_replace('PT-br', 'EN', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/welcome.css') }}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-logistics-dashboard.css')}}" />

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/chartjs/chartjs.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/js/app-ecommerce-dashboard.js')}}"></script>
    <script src="{{asset('assets/js/app-academy-dashboard.js')}}"></script>
    <script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
    <script src="{{asset('assets/js/cards-analytics.js')}}"></script>
    <script src="{{asset('assets/js/welcome.js')}}"></script>


</head>

<body>
    <section class="ns-menu"> @include('menu')</section>

    <section class="ns-container-geral text-start m-0 px-3 px-md-5 mt-5">

        <section class="ns-first-page row m-0 p-0">

            <section class="ns-titulo mt-3">
                <h2 class="col-12">
                    <span class="text-muted fw-light">Acompanhamento de obra /</span> Dashboard
                </h2>
            </section>

            <section class="ns-container-esquerda col-12 col-lg-6">
                <div class="ns-planejamento-obra m-2">
                    <div class="row">
                        <div>
                            <h3 class="card-title ns-card-title">Planejamento de obra</h3>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row mt-3">
                                <div class="col-4 mt-3">
                                    <h3 class="m-0 text-dark">75<i class="px-2 ti ti-circle-filled text-info"></i></h3>
                                    <small>Dias planejados</small>
                                </div>
                                <div class="col-6 mt-3">
                                    <h3 class="m-0 text-dark">75<i class="px-2 ti ti-circle-filled text-primary"></i></h3>
                                    <small>Dias Remanescentes</small>
                                </div>
                                <div class="barra-progresso rounded-0 col-10 my-3 mt-3">
                                    <div class="progress ns-no-border my-4" style="height: 30px;">
                                        <div class="progress-bar fw-medium  text-bg-info text-start rounded-0 px-3" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar fw-medium text-start rounded-0 px-3" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <hr class="p-0 m-0">
                                    <div class="d-none d-sm-flex vehicles-progress-labels">
                                        <div class="text-start" style="width: 25%;">01 jan</div>
                                        <div class="text-end" style="width: 50%;">15 jan</div>
                                        <div class="text-end" style="width: 25%;">31 jan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mt-3 pb-5">
                            <div>
                                <p class="card-title text-start ps-4">% Realizada</p>
                            </div>
                            <div class="card-body mb-1 p-2">
                                <div id="generatedLeadsChart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ns-desempenho-disciplina m-2">
                    <div class="row card">
                        <div>
                            <h3 class="card-title ns-card-title">Desempenho por disciplina</h3>
                        </div>
                        <div class="card-datatable table-responsive mt-3">
                            <table class="dt-performance-by-discipline table" aria-label="tabela de dados por disciplina">
                                <thead class="border-top">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>DISCIPLINA</th>
                                        <th class="w-20">% COMPLETA</th>
                                        <th>DATA INÍCIO</th>
                                        <th>DATA FIM</th>
                                        <th>DIAS TOTAIS</th>
                                        <th>DIAS PLANEJADOS</th>
                                        <th>REMANESCENTES</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </section>

            <section class="ns-container-direita col-12 col-lg-6">
                <div class="ns-produtividade m-2">
                    <div class="ns-produtividade row card">
                        <div>
                            <h3 class="card-title ns-card-title">Produtividade</h3>
                        </div>
                        <div class="card-body py-0">
                            <div>
                                <canvas id="lineChart" class="chartjs" data-height="255"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ns-acompanhamento-visual m-2">
                    <div class="ns-acomp-visual row card flex-row align-items-center justify-content-center">
                        <div>
                            <h3 class="card-title ns-card-title ">Acompanhamento visual</h3>
                        </div>
                        <div class="ns-pre-vis col-3 mt-3 p-4 pt-0">
                            <div class="card icon-card cursor-pointer text-center">
                                <div class="card-body m-0 p-0" style="overflow: hidden;">
                                    <a href="#">
                                        <img src="{{ asset('assets/vendor/img/drone.png') }}" class="object-fit-cover p-1" style="max-width: 100%; height: auto;">
                                    </a>
                                    <p class="icon-name text-capitalize text-truncate m-0">Drone</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mt-1">
                                <div class="card-body m-0 p-0" style="overflow: hidden;">
                                    <a href="#">
                                        <img src="{{ asset('assets/vendor/img/360.png') }}" class="object-fit-cover p-1" style="max-width: 100%; height: auto;">
                                    </a>
                                    <p class="icon-name text-capitalize text-truncate m-0">360°</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mt-1">
                                <div class="card-body m-0 p-0" style="overflow: hidden;">
                                    <a href="#">
                                        <img src="{{ asset('assets/vendor/img/4d-previsto.png') }}" class="object-fit-cover p-1" style="max-width: 100%; height: auto;">
                                    </a>
                                    <p class="icon-name text-capitalize text-truncate m-0">4D Previsto</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mt-1 mb-1">
                                <div class="card-body m-0 p-0" style="overflow: hidden;">
                                    <a href="#">
                                        <img src="{{ asset('assets/vendor/img/4d-atual.png') }}" class="object-fit-cover p-1" style="max-width: 100%; height: auto;">
                                    </a>
                                    <p class="icon-name text-capitalize text-truncate m-0">4D Real</p>
                                </div>
                            </div>
                        </div>
                        <div class="ns-vis-timelapse col-9 text-center ">
                            <div class="col-12">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <div class="card icon-card cursor-pointer text-center">
                                        <div class="card-body m-0 p-0" style="overflow: hidden;">
                                            <a href="#">
                                                <img src="{{ asset('assets/vendor/img/timelapse.jpg') }}" class="object-fit-cover" style="max-width: 100%; height: auto;">
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="0 mt-3">Timelapse</h3>
                                    <a href="javascript:void(0);" class="btn btn-primary w-50 mt-3">Veja em tela cheia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>

        <section class="ns-second-page row m-0 p-0">

            <section class="ns-titulo mt-3 3">
                <h2 class="col-12">
                    <span class="text-muted fw-light">Acompanhamento de Projetos /</span> Dashboard
                </h2>
            </section>

            <section class="ns-container-esquerda col-12 col-lg-6">
                <div class="ns-planejamento-projetos m-2">
                    <div class="row">
                        <div>
                            <h3 class="card-title ns-card-title">Planejamento de projetos</h3>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row mt-3">
                                <div class="col-4 mt-3">
                                    <h3 class="m-0 text-dark">75<i class="px-2 ti ti-circle-filled text-info"></i></h3>
                                    <small>Dias planejados</small>
                                </div>
                                <div class="col-6 mt-3">
                                    <h3 class="m-0 text-dark">75<i class="px-2 ti ti-circle-filled text-primary"></i></h3>
                                    <small>Dias Remanescentes</small>
                                </div>
                                <div class="barra-progresso rounded-0 col-10 my-3 mt-3">
                                    <div class="progress ns-no-border my-4" style="height: 30px;">
                                        <div class="progress-bar fw-medium  text-bg-info text-start rounded-0 px-3" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar fw-medium text-start rounded-0 px-3" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <hr class="p-0 m-0">
                                    <div class="d-none d-sm-flex vehicles-progress-labels">
                                        <div class="text-start" style="width: 25%;">01 jan</div>
                                        <div class="text-end" style="width: 50%;">15 jan</div>
                                        <div class="text-end" style="width: 25%;">31 jan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 pe-4 mt-3">
                            <div>
                                <p class="card-title text-center me-5">% Realizada</p>
                            </div>
                            <div class="card-body text-center mt-3 me-5">
                            <div id="generatedLeadsChartObra"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="ns-desempenho-disciplina  m-2">
                    <div class="row card">
                        <div>
                            <h3 class="card-title ns-card-title">Desempenho por disciplina</h3>
                        </div>
                        <div class="card-datatable table-responsive mt-3">
                            <table class="dt-performance-by-discipline table" aria-label="tabela de dados por disciplina">
                                <thead class="border-top">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>DISCIPLINA</th>
                                        <th class="w-20">% COMPLETA</th>
                                        <th>DATA INÍCIO</th>
                                        <th>DATA FIM</th>
                                        <th>DIAS TOTAIS</th>
                                        <th>DIAS PLANEJADOS</th>
                                        <th>REMANESCENTES</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </section>

            <section class="ns-container-direita col-12 col-lg-6">

                <div class="ns-direita-cima m-2">
                    <div class="row flex-row">
                        <div class="col-7 ns-lista-mestra  card">
                            <h3 class="card-title ns-card-title ">Lista Mestra</h3>
                            <div class="card-body p-3">
                                <h3 class="card-title 2 text-start">100</h3>
                            </div>
                            <div class="row">
                                <div class="col-5 ps-4">
                                    <div class="d-flex align-items-center 2">
                                        <span class="badge bg-label-info p-1 rounded"><i class="ti ti-clock-exclamation ti-xs"></i></span>
                                        <p class="0">Em aprovação</p>
                                    </div>
                                    <h3 class="0 pt-1 text-nowrap">75%</h3>
                                    <small class="text-muted">75</small>
                                </div>
                                <div class="col-2">
                                    <div class="divider divider-vertical">
                                        <div class="divider-text">
                                            <span class="badge-divider-bg bg-label-secondary">VS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 text-end pe-4">
                                    <div class="d-flex justify-content-end align-items-center 2">
                                        <p class="0">Aprovados</p>
                                        <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-clock-check ti-xs"></i></span>
                                    </div>
                                    <h3 class="0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25%</h3>
                                    <small class="text-muted">25</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 px-3 pb-3">
                                <div class="progress w-100" style="height: 8px;">
                                    <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 ns-aprovacoes card">
                            <h3 class="card-title ns-card-title ">Aprovações</h3>
                            <div class="row status">
                                <div class="col-6 ps-5">
                                    <div class="card-body text-center">
                                        <div class="badge rounded-pill p-2 bg-label-danger 2"><i class="ti ti-briefcase ti-sm"></i></div>
                                        <h5 class="card-title 1">15</h5>
                                        <small>Pendentes</small>
                                    </div>
                                </div>
                                <div class="col-6 pe-5">
                                    <div class="card-body text-center">
                                        <div class="badge rounded-pill p-2 bg-label-danger 2"><i class="ti ti-briefcase ti-sm"></i></div>
                                        <h5 class="card-title 1">03</h5>
                                        <small>Reprovadas</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row nivel">
                                <div class="col-4 p-0 ps-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title 1">15</h5>
                                        <small>Nível 01</small>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <div class="card-body text-center">
                                        <h5 class="card-title 1">15</h5>
                                        <small>Nível 02</small>
                                    </div>
                                </div>
                                <div class="col-4 p-0 pe-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title 1">15</h5>
                                        <small>Nível 03</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row ns-direita-meio mt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header pb-0 d-flex justify-content-between">
                                <div class="card-title 0">
                                    <h3 class="0">Análise técnica de projetos</h3>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body row m-0">
                                <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                                    <div class="mt-lg-4 mt-lg-2 lg-4 2 pt-1">
                                        <h3 class="0">100</h3>
                                        <p class="0">Total de atividades</p>
                                    </div>
                                    <ul class="p-0 m-0">
                                        <li class="d-flex gap-3 align-items-center lg-3 pt-2 pb-1">
                                            <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                                            <div>
                                                <h6 class="0 text-nowrap">Criadas</h6>
                                                <small class="text-muted">100</small>
                                            </div>
                                        </li>
                                        <li class="d-flex gap-3 align-items-center lg-3 pb-1">
                                            <div class="badge rounded bg-label-info p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                                            <div>
                                                <h6 class="0 text-nowrap">Aprovadas</h6>
                                                <small class="text-muted">85</small>
                                            </div>
                                        </li>
                                        <li class="d-flex gap-3 align-items-center pb-1">
                                            <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                                            <div>
                                                <h6 class="0 text-nowrap">Pendentes de revisão</h6>
                                                <small class="text-muted">15</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-8 col-md-12 col-lg-8">
                                    <div id="supportTracker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-direita-baixo row mt-3">
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title ns-card-tittle 0">
                                    <h3 class="m-0 me-2">Atividades</h3>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div id="expensesChart"></div>
                                <div class="row d-flex mt-3">
                                    <div class="col-6 p-0">
                                        <div class="card-body text-center py-2">
                                            <h5 class="card-title 1">100</h5>
                                            <small>Planejandas</small>
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div class="card-body text-center py-2">
                                            <h5 class="card-title 1">78</h5>
                                            <small>Executadas</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title ns-card-tittle 0">
                                    <h3 class="m-0">Histórico de atividades</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="reportBarChart"></div>
                            </div>
                        </div>
                    </div>
                </div>



            </section>
        </section>
    </section>
</body>

</html>