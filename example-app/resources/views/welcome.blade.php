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
    <script src="{{asset('assets/js/app-academy-dashboard.js')}}"></script>
    <script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
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
        <div class="ns-full-body row m-0 p-0">
            <div class="ns-full-body container-fluid">
                <div class="ns-title-ctn container-fluid card">
                    <div class="row">
                        <div class="col-12">
                            <h1>Acompanhamento de obra</h1>
                        </div>
                    </div>
                </div>

                <div class="ns-full-content-ctn row mt-4 ms-2">

                    <div class="ns-left-content-ctn col-7">
                        <div class="ns-left-top-ctn row">
                            <div class="ns-left-left-ctn col-8">
                                <h3 class="ns-subtitle">Planejamento de obra</h3>
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
                            <div class="ns-left-right-ctn col-4 d-flex justify-center">
                                <div class="ns-left-right-ctn row">
                                    <h3 class="ns-subtitle-center">% Realizada</h3>
                                    <div class="p-0 m-0">
                                        <div id="deliveryExceptionsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ns-left-bottom-ctn row mt-4">
                            <div class="card mb-4">
                                <h3 class="ns-subtitle">Desempenho por disciplina</h3>
                                <div class="table-responsive mb-3">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                        <table class="table datatables-academy-course dataTable no-footer dtr-column" style="border-collapse: separate !important;" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1393px;">
                                            <thead class="border-top">
                                                <tr>
                                                    <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""></th>
                                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 459px;" aria-label="Course Name: activate to sort column ascending" aria-sort="descending">Disciplina</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 88px;" aria-label="Time: activate to sort column ascending">Início | Fim</th>
                                                    <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 302px;" aria-label="Progress: activate to sort column ascending">% Realizada</th>
                                                    <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 302px;" aria-label="Status: activate to sort column ascending">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="control" tabindex="0" style="display: none;"></td>
                                                    <td class="dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                                    <td class="sorting_1">
                                                        <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                                            <div>
                                                                <a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">Arquitetura</a>
                                                            </div>
                                                        </div>
                                    </div>
                                    </td>
                                    <td><span class="h6 mb-0 text-nowrap">18 DEC | 22 DEC</span></td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <p class="h6 mb-0">89%</p>
                                            <div class="progress w-100" style="height: 8px;">
                                                <div class="progress-bar" style="width: 89%" aria-valuenow="89%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div><small class="text-muted">89/100</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="w-px-50 d-flex align-items-center">14</div>
                                            <div class="w-px-50 d-flex align-items-center">48</div>
                                            <div class="w-px-50 d-flex align-items-center">43</div>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="control" tabindex="0" style="display: none;"></td>
                                        <td class="dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                        <td class="sorting_1">
                                            <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                                <div>
                                                    <a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">Hidrossanitário</a>
                                                </div>
                                            </div>
                                </div>
                                </td>
                                <td><span class="h6 mb-0 text-nowrap">18 DEC | 22 DEC</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <p class="h6 mb-0">89%</p>
                                        <div class="progress w-100" style="height: 8px;">
                                            <div class="progress-bar" style="width: 89%" aria-valuenow="89%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><small class="text-muted">89/100</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="w-px-50 d-flex align-items-center">14</div>
                                        <div class="w-px-50 d-flex align-items-center">48</div>
                                        <div class="w-px-50 d-flex align-items-center">43</div>
                                    </div>
                                </td>
                                </tr>
                                <tr class="odd">
                                    <td class="control" tabindex="0" style="display: none;"></td>
                                    <td class="dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                    <td class="sorting_1">
                                        <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                            <div>
                                                <a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">Elétrica</a>
                                            </div>
                                        </div>
                            </div>
                            </td>
                            <td><span class="h6 mb-0 text-nowrap">18 DEC | 22 DEC</span></td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <p class="h6 mb-0">89%</p>
                                    <div class="progress w-100" style="height: 8px;">
                                        <div class="progress-bar" style="width: 89%" aria-valuenow="89%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><small class="text-muted">89/100</small>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="w-px-50 d-flex align-items-center">14</div>
                                    <div class="w-px-50 d-flex align-items-center">48</div>
                                    <div class="w-px-50 d-flex align-items-center">43</div>
                                </div>
                            </td>
                            </tr>
                            <tr class="odd">
                                <td class="control" tabindex="0" style="display: none;"></td>
                                <td class="dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                        <div>
                                            <a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">HVAC</a>
                                        </div>
                                    </div>
                        </div>
                        </td>
                        <td><span class="h6 mb-0 text-nowrap">18 DEC | 22 DEC</span></td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <p class="h6 mb-0">89%</p>
                                <div class="progress w-100" style="height: 8px;">
                                    <div class="progress-bar" style="width: 89%" aria-valuenow="89%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div><small class="text-muted">89/100</small>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="w-px-50 d-flex align-items-center">14</div>
                                <div class="w-px-50 d-flex align-items-center">48</div>
                                <div class="w-px-50 d-flex align-items-center">43</div>
                            </div>
                        </td>
                        </tr>
                        <tr class="odd">
                            <td class="control" tabindex="0" style="display: none;"></td>
                            <td class="dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                            <td class="sorting_1">
                                <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                    <div>
                                        <a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">PPCI</a>
                                    </div>
                                </div>
                    </div>
                    </td>
                    <td><span class="h6 mb-0 text-nowrap">18 DEC | 22 DEC</span></td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <p class="h6 mb-0">89%</p>
                            <div class="progress w-100" style="height: 8px;">
                                <div class="progress-bar" style="width: 89%" aria-valuenow="89%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-muted">89/100</small>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="w-px-50 d-flex align-items-center">14</div>
                            <div class="w-px-50 d-flex align-items-center">48</div>
                            <div class="w-px-50 d-flex align-items-center">43</div>
                        </div>
                    </td>
                    </tr>
                    <tr class="odd">
                        <td class="control" tabindex="0" style="display: none;"></td>
                        <td class="dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                        <td class="sorting_1">
                            <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                <div>
                                    <a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">Estrutural</a>
                                </div>
                            </div>
                </div>
                </td>
                <td><span class="h6 mb-0 text-nowrap">18 DEC | 22 DEC</span></td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <p class="h6 mb-0">89%</p>
                        <div class="progress w-100" style="height: 8px;">
                            <div class="progress-bar" style="width: 89%" aria-valuenow="89%" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><small class="text-muted">89/100</small>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="w-px-50 d-flex align-items-center">14</div>
                        <div class="w-px-50 d-flex align-items-center">48</div>
                        <div class="w-px-50 d-flex align-items-center">43</div>
                    </div>
                </td>
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
    </div>
    </div>
    </div>

</body>

</html>