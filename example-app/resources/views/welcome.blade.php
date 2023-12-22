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
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
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

</head>

<body>
    {{-- Layout wrapper --}}
    <div class="container-fluid mt-3">
        <div class="row card">
            <div class="col-12">
                <h1>Acompanhamento de obra</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-8">
                <div class="row">
                    <div class="col-8">
                        <h3 class="mb-0">Planned Days Progress</h3>

                        <div class="row mt-4">
                            <div class="col-2">
                                <h3 class="mb-0 text-dark">264</h3>
                                <small>Actual Planned <i class="ti ti-circle-filled text-dark mb-2"></i></small>
                            </div>
                            <div class="col-10 ">
                                <h3 class="mb-0 text-success">66</h3>
                                <small>Ramaining Planeed <i class="ti ti-circle-filled text-success mb-2"></i></small>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="progress mb-3 mt-3" style="height:40px;">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <hr class="mb-0 mt-0">
                                <span class="d-inline text-start small">22 may, '22</span>
                                <span class="d-inline small" style="margin-left: 66%">today</span>
                                <span class="d-inline text-end small" style="margin-left: 17%">28 mar, '23</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <h3 class="mb-1">Overall % Installed</h3>
                        <div id="deliveryExceptionsChart" class="pt-md-4"></div>
                    </div>
                </div>

                <div class="row mt-4">
                    
                    <div class="card mb-4">
                        <div class="table-responsive mb-3">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                <table class="table datatables-academy-course dataTable no-footer dtr-column" style="border-collapse: separate !important;" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1393px;">
                                    <thead class="border-top">
                                        <tr>
                                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""></th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 459px;" aria-label="Course Name: activate to sort column ascending" aria-sort="descending">Trade name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 88px;" aria-label="Time: activate to sort column ascending">Planned start -> finish</th>
                                            <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 302px;" aria-label="Progress: activate to sort column ascending">% Complete</th>
                                            <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 302px;" aria-label="Status: activate to sort column ascending">Total Planned</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="  dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                            <td class="sorting_1">
                                                <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                                    <div><a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">UI/UX Design</a>
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="avatar-wrapper me-2">
                                                                <div class="avatar avatar-xs"><img src="http://127.0.0.1:4000/assets/img/avatars/2.png" alt="Avatar" class="rounded-circle"></div>
                                                            </div><span class="text-nowrap">Maybelle Zmitrovich</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="h6 mb-0 text-nowrap">19h 17m</span></td>
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
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-users ti-sm me-2 text-primary"></i>14</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-book ti-sm me-2 text-info"></i>48</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-video ti-sm me-2 text-danger"></i>43</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="  dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                            <td class="sorting_1">
                                                <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-warning p-2"><i class="ti ti-brand-figma ti-md"></i></span></span>
                                                    <div><a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">Typography Theory</a>
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="avatar-wrapper me-2">
                                                                <div class="avatar avatar-xs"><img src="http://127.0.0.1:4000/assets/img/avatars/13.png" alt="Avatar" class="rounded-circle"></div>
                                                            </div><span class="text-nowrap">Rollie Parsons</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="h6 mb-0 text-nowrap">16h 15m</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <p class="h6 mb-0">22%</p>
                                                    <div class="progress w-100" style="height: 8px;">
                                                        <div class="progress-bar" style="width: 22%" aria-valuenow="22%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div><small class="text-muted">11/50</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-users ti-sm me-2 text-primary"></i>209</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-book ti-sm me-2 text-info"></i>20</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-video ti-sm me-2 text-danger"></i>98</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="  dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                            <td class="sorting_1">
                                                <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-success p-2"><i class="ti ti-color-swatch ti-md"></i></span></span>
                                                    <div><a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">The Ultimate Drawing Course</a>
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="avatar-wrapper me-2">
                                                                <div class="avatar avatar-xs"><img src="http://127.0.0.1:4000/assets/img/avatars/12.png" alt="Avatar" class="rounded-circle"></div>
                                                            </div><span class="text-nowrap">Bernarr Markie</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="h6 mb-0 text-nowrap">16h 24m</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <p class="h6 mb-0">10%</p>
                                                    <div class="progress w-100" style="height: 8px;">
                                                        <div class="progress-bar" style="width: 10%" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div><small class="text-muted">1/10</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-users ti-sm me-2 text-primary"></i>116</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-book ti-sm me-2 text-info"></i>33</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-video ti-sm me-2 text-danger"></i>53</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="  dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                            <td class="sorting_1">
                                                <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-primary p-2"><i class="ti ti-diamond ti-md"></i></span></span>
                                                    <div><a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">The Science of Everyday Thinking</a>
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="avatar-wrapper me-2">
                                                                <div class="avatar avatar-xs"><img src="http://127.0.0.1:4000/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle"></div>
                                                            </div><span class="text-nowrap">Freda Garham</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="h6 mb-0 text-nowrap">8h 44m</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <p class="h6 mb-0">81%</p>
                                                    <div class="progress w-100" style="height: 8px;">
                                                        <div class="progress-bar" style="width: 81%" aria-valuenow="81%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div><small class="text-muted">81/100</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-users ti-sm me-2 text-primary"></i>79</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-book ti-sm me-2 text-info"></i>46</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-video ti-sm me-2 text-danger"></i>27</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="  dt-checkboxes-cell"> <i class="ti ti-square-rounded-plus-filled text-light mb-2"></i></td>
                                            <td class="sorting_1">
                                                <div class="d-flex align-items-center"><span class="me-3"><span class="badge bg-label-primary p-2"><i class="ti ti-diamond ti-md"></i></span></span>
                                                    <div><a class="text-body text-truncate fw-medium mb-2 text-wrap" href=" http://127.0.0.1:4000/app/academy/course-details">The Science of Critical Thinking</a>
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="avatar-wrapper me-2">
                                                                <div class="avatar avatar-xs"><img src="http://127.0.0.1:4000/assets/img/avatars/14.png" alt="Avatar" class="rounded-circle"></div>
                                                            </div><span class="text-nowrap">Papageno Sloy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="h6 mb-0 text-nowrap">4h 59m</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <p class="h6 mb-0">55%</p>
                                                    <div class="progress w-100" style="height: 8px;">
                                                        <div class="progress-bar" style="width: 55%" aria-valuenow="55%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div><small class="text-muted">11/20</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-users ti-sm me-2 text-primary"></i>274</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-book ti-sm me-2 text-info"></i>21</div>
                                                    <div class="w-px-50 d-flex align-items-center"><i class="ti ti-video ti-sm me-2 text-danger"></i>60</div>
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

            <div class="col-4">
                <div class="row">
                    <div class="col-2">
                        <div class="card icon-card cursor-pointer text-center  mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                            <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                <p class="icon-name text-capitalize text-truncate mb-0">Orders</p>
                            </div>
                        </div>
                        <div class="card icon-card cursor-pointer text-center  mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                            <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                <p class="icon-name text-capitalize text-truncate mb-0">Orders</p>
                            </div>
                        </div>
                        <div class="card icon-card cursor-pointer text-center  mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                            <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                <p class="icon-name text-capitalize text-truncate mb-0">Orders</p>
                            </div>
                        </div>
                        <div class="card icon-card cursor-pointer text-center  mb-2 mx-2 border border-1 border-primary" style="border-style: dashed !important;">
                            <div class="card-body"> <i class="ti ti-shopping-cart mb-2 text-primary bg-primary-subtle p-1"></i>
                                <p class="icon-name text-capitalize text-truncate mb-0">Orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">

                        <div class="ns-nav-bg-pink">
                            <div class="col-12 me-4">
                                <div class="card h-100">
                                    <div class="card-body m-4">
                                        <div class="bg-label-primary rounded-3 text-center pt-4">
                                            <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png" alt="Card girl image" width="200" />
                                        </div>
                                        <h3 class="mb-0 mt-3">Visao 360</h3>
                                        <a href="javascript:void(0);" class="btn btn-warning w-100 mt-3">Veja em tela cheia</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-header header-elements">
                                <div>
                                    <h5 class="card-title mb-0">Statistics</h5>
                                    <small class="text-muted">Commercial networks and enterprises</small>
                                </div>
                                <div class="card-header-elements ms-auto py-0">
                                    <h5 class="mb-0 me-3">$ 78,000</h5>
                                    <span class="badge bg-label-secondary">
                                        <i class='ti ti-arrow-up ti-xs text-success'></i>
                                        <span class="align-middle">37%</span>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <canvas id="lineChart" class="chartjs" data-height="500"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</body>

</html>