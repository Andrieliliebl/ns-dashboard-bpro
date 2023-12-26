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
    <script src="{{asset('assets/js/app-logistics-dashboard.js')}}"></script>
    <script src="{{asset('assets/js/app-ecommerce-dashboard.js')}}"></script>
    <script src="{{asset('assets/js/app-academy-dashboard.js')}}"></script>
    <script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
    <script src="{{asset('assets/js/cards-analytics.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
    <link src="{{ asset('example-app\public\css\welcome.css') }}">
    <link src="{{ asset('example-app\public\css\menu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/welcome.css') }}" />

</head>

<body>
    <div>@include('menu')</div>
    <div class="ns-full-body container-fluid text-center m-0 p-0 c">
        <div class="ns-first-page row m-0 p-0">
            <div class="ns-first-page container-fluid">

                <div class="ns-title-ctn container-fluid card">
                    <div class="row">
                        <div class="col-12">
                            <h1>Acompanhamento de obra</h1>
                        </div>
                    </div>
                </div>

                <div class="ns-first-page row mt-4 ms-2">
                    <div class="ns-left-ctn col-7">
                        <div class="ns-left-top-ctn row">
                            <div class="ns-left-leftdiv-ctn col-8">
                                <h3 class="ns-subtitle">Planejamento de obra</h3>
                                <div class="row mt-4">
                                    <div class="col-4 mt-4">
                                        <h3 class="m-0 text-dark text-center">75<i class="px-2 ti ti-circle-filled text-dark mb-2"></i></h3>
                                        <small class="text-center">Dias planejados</small>
                                    </div>
                                    <div class="col-4 mt-4">
                                        <h3 class="m-0 text-dark text-center">25<i class="px-2 ti ti-circle-filled text-success mb-2"></i></h3>
                                        <small class="text-center">Dias remanescentes</small>
                                    </div>
                                    <div class="col-10 my-3">
                                        <div class="progress ms-5 mb-3 mt-3 ns-progress-bar" style="height:40px;">
                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <hr class="mb-0 ms-5 mt-0">
                                        <span class="d-inline text-start small" style="margin-left: 7%">22 may</span>
                                        <span class="d-inline small" style="margin-left: 40%">today</span>
                                        <span class="d-inline text-end small" style="margin-left: 25%">28 mar</span>
                                    </div>

                                </div>
                            </div>
                            <div class="ns-left-rightdiv-ctn col-4 d-flex justify-center">
                                <div class="ns-left-rightdiv-ctn row">
                                    <h3 class="ns-subtitle-center">% Realizada</h3>
                                    <div class="p-0 m-0">
                                        <div id="deliveryExceptionsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ns-left-bottom-ctn row mt-4">
                            <div class="card mb-4">
                                <div class="card-datatable table-responsive">
                                    <h3 class="ns-subtitle">Desempenho por disciplina</h3>
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                        <table class="datatables-projects table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 922px;">
                                            <thead style="text-align:center !important;">
                                                <tr>
                                                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                                    <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                                                    <th class="," style="text-align:center !important;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Leader: activate to sort column ascending" style="text-align:center !important;">Leader</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Team" style="text-align:center !important;">Team</th>
                                                    <th class="w-px-200 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="text-align:center !important;">Status</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="text-align:center !important;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <div class="ns-right-content-ctn col-5">
                        <div class="ns-right-top-content row card flex-row m-3">
                            <div class="col-3 py-4">
                                <div class="card icon-card cursor-pointer text-center mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                                    <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                        <p class="icon-name text-capitalize text-truncate mb-0">Drone</p>
                                    </div>
                                </div>
                                <div class="card icon-card cursor-pointer text-center  mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                                    <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                        <p class="icon-name text-capitalize text-truncate mb-0">Visão 360</p>
                                    </div>
                                </div>
                                <div class="card icon-card cursor-pointer text-center  mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                                    <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                        <p class="icon-name text-capitalize text-truncate mb-0">4D Real</p>
                                    </div>
                                </div>
                                <div class="card icon-card cursor-pointer text-center  mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                                    <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                        <p class="icon-name text-capitalize text-truncate mb-0">4D Planejado</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 py-4">
                                <div class="col-12 me-4">
                                    <div class="card h-100">
                                        <div class="card-body m-4">
                                            <div class="bg-label-primary rounded-3 text-center pt-4">
                                                <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png" alt="Card girl image" width="200" />
                                            </div>
                                            <h3 class="mb-0 mt-3">Timelapse</h3>
                                            <a href="javascript:void(0);" class="btn btn-warning w-100 mt-3">Veja em tela cheia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ns-right-bottom-ctn row">
                            <div class="card m-4">
                                <div>
                                    <h3 class="card-title mb-0 pb-0 ns-subtitle">Produtividade</h3>
                                </div>

                                <div class="card-body p-0">
                                    <div>
                                        <canvas id="lineChart" class="chartjs" data-height="255"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <hr>


                <!-- second-->


                <div class="ns-second-page row mt-4 ms-2">
                    <div class="ns-left-ctn col-7">
                        <div class="ns-left-top-ctn row">
                            <div class="ns-left-leftdiv-ctn col-8">
                                <h3 class="ns-subtitle">Planejamento de projetos</h3>
                                <div class="row mt-4">
                                    <div class="col-4">
                                        <h3 class="m-0 text-dark text-center">75<i class="px-2 ti ti-circle-filled text-dark mb-2"></i></h3>
                                        <small class="text-center">Dias planejados</small>
                                    </div>
                                    <div class="col-4">
                                        <h3 class="m-0 text-dark text-center">25<i class="px-2 ti ti-circle-filled text-success mb-2"></i></h3>
                                        <small class="text-center">Dias remanescentes</small>
                                    </div>
                                    <div class="col-10 my-3">
                                        <div class="progress ms-5 mb-3 mt-3 ns-progress-bar" style="height:40px;">
                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <hr class="mb-0 ms-5 mt-0">
                                        <span class="d-inline text-start small" style="margin-left: 7%">22 may</span>
                                        <span class="d-inline small" style="margin-left: 40%">today</span>
                                        <span class="d-inline text-end small" style="margin-left: 25%">28 mar</span>
                                    </div>

                                </div>
                            </div>
                            <div class="ns-left-rightdiv-ctn col-4 d-flex justify-center">
                                <div class="ns-left-rightdiv-ctn row">
                                    <h3 class="ns-subtitle-center">% Realizada</h3>
                                    <div class="p-0 m-0">
                                        <div id="deliveryExceptionsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ns-left-bottom-ctn row mt-4">
                            <div class="card mb-4">
                                <div class="card-datatable table-responsive">
                                    <h3 class="ns-subtitle">Desempenho por disciplina</h3>
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                        <table class="datatables-projects table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 922px;">
                                            <thead style="text-align:center !important;">
                                                <tr>
                                                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                                    <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                                                    <th class="," style="text-align:center !important;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Leader: activate to sort column ascending" style="text-align:center !important;">Leader</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Team" style="text-align:center !important;">Team</th>
                                                    <th class="w-px-200 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="text-align:center !important;">Status</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="text-align:center !important;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                    <td>Owen</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100 me-3" style="height: 6px;">
                                                                <div class="progress-bar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div><span>45%</span>
                                                        </div>
                                                    </td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                    <td>Owen</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>


                    <div class="ns-right-content-ctn col-5">
                        <div class="row ns-right-top mt-3">
                            <div class="col-7">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="ns-subtitle p-0 m-0">Lista mestra</h4>
                                            <p class="card-text text-success">+18.2%</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <h4 class="card-title mb-2 text-start">45</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="d-flex gap-2 align-items-center mb-2">
                                                    <span class="badge bg-label-info p-1 rounded"><i class="ti ti-clock-exclamation ti-xs"></i></span>
                                                    <p class="mb-0">Em aprovação</p>
                                                </div>
                                                <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                                                <small class="text-muted">6,440</small>
                                            </div>
                                            <div class="col-2">
                                                <div class="divider divider-vertical">
                                                    <div class="divider-text">
                                                        <span class="badge-divider-bg bg-label-secondary">VS</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                                    <p class="mb-0">Aprovados</p>
                                                    <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-clock-check ti-xs"></i></span>
                                                </div>
                                                <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                                                <small class="text-muted">12,749</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-4">
                                            <div class="progress w-100" style="height: 8px;">
                                                <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h4 class="ns-subtitle">Panorama de aprovações</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-package"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0 fw-normal">Packages in transit</h6>
                                                        <small class="text-success fw-normal d-block">
                                                            <i class="ti ti-chevron-up mb-1"></i>
                                                            25.8%
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-info"><i class="ti ti-truck"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0 fw-normal">Packages out for delivery</h6>
                                                        <small class="text-success fw-normal d-block">
                                                            <i class="ti ti-chevron-up mb-1"></i>
                                                            4.3%
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ns-right-middle mt-3">
                            <div class="col-4">
                                <div class="card ">
                                    <div class="card-header pb-0">
                                        <h4 class="ns-subtitle">Atividades</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="expensesChart"></div>
                                        <div class="mt-md-2 text-center mt-lg-3 mt-3">
                                            <small class="text-muted mt-3">$21k Expenses more than last month</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Histórico de atividades</h5>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div id="reportBarChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ns-right-bottom mt-3">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header pb-0 d-flex justify-content-between">
                                        <div class="card-title mb-0">
                                            <h5 class="mb-0">Support Tracker</h5>
                                            <small class="text-muted">Last 7 Days</small>
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
                                            <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                                                <h1 class="mb-0">164</h1>
                                                <p class="mb-0">Total Tickets</p>
                                            </div>
                                            <ul class="p-0 m-0">
                                                <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                                                    <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                                                    <div>
                                                        <h6 class="mb-0 text-nowrap">New Tickets</h6>
                                                        <small class="text-muted">142</small>
                                                    </div>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                                                    <div class="badge rounded bg-label-info p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                                                    <div>
                                                        <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                                                        <small class="text-muted">28</small>
                                                    </div>
                                                </li>
                                                <li class="d-flex gap-3 align-items-center pb-1">
                                                    <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                                                    <div>
                                                        <h6 class="mb-0 text-nowrap">Response Time</h6>
                                                        <small class="text-muted">1 Day</small>
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


                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>