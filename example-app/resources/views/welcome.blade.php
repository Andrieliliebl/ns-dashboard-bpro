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
</head>

<body>
    <div class="container-fluid ns-nav-bg-white">
        <div class="container-fluid">
            <div class="row col-12">
                <div class="container-fluid rounded m-1 p-3">
                    <h1>Acompanhamento de obra</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-6 container-fluid rounded p-4">
                    <div class="row">
                        <h5 class="col-7 pb-3">Cronograma de obra</h5>
                        <h5 class="col-5">% Realizada</h5>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="row pb-3">
                                <div class="col-6">
                                    <div class="card-title mb-0">
                                        <h3 class="mb-0">30</h3>
                                        <small class="text-muted">Realizadas</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-title mb-0">
                                        <h3 class="mb-0">35</h3>
                                        <small class="text-muted">Previsto</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="progress rounded-2 my-1" style="height: 46px;">
                                        <div class="progress-bar fw-medium text-start bg-body text-dark px-3 rounded-0" role="progressbar" style="width: 30%" aria-valuenow="39.7" aria-valuemin="0" aria-valuemax="100">30% Realizadas</div>
                                        <div class="progress-bar fw-medium text-start bg-primary px-3" role="progressbar" style="width: 35%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100">35% Executado</div>
                                        <div class="progress-bar fw-medium text-start text-bg-info px-3" role="progressbar" style="width: 35%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100">35% Planejado</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div id="generatedLeadsChart" style="min-height: 153.8px;">
                                <div id="apexcharts3jz2po27" class="apexcharts-canvas apexcharts3jz2po27 apexcharts-theme-light" style="width: 130px; height: 153.8px;"><svg id="SvgjsSvg2306" width="130" height="153.79999999999998" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2308" class="apexcharts-inner apexcharts-graphical" transform="translate(-28.5, 15)">
                                            <g id="SvgjsG2312" class="apexcharts-pie">
                                                <g id="SvgjsG2313" transform="translate(0, 0) scale(1)">
                                                    <circle id="SvgjsCircle2314" r="42.27317073170732" cx="93.5" cy="66" fill="transparent"></circle>
                                                    <g id="SvgjsG2315" class="apexcharts-slices">
                                                        <g id="SvgjsG2316" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2317" d="M 93.5 5.609756097560975 A 60.390243902439025 60.390243902439025 0 0 1 153.8702225747668 64.44507721439629 L 135.75915580233675 64.9115540500774 A 42.27317073170732 42.27317073170732 0 0 0 93.5 23.726829268292683 L 93.5 5.609756097560975 z" fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="88.52459016393442" data:startAngle="0" data:strokeWidth="0" data:value="45" data:pathOrig="M 93.5 5.609756097560975 A 60.390243902439025 60.390243902439025 0 0 1 153.8702225747668 64.44507721439629 L 135.75915580233675 64.9115540500774 A 42.27317073170732 42.27317073170732 0 0 0 93.5 23.726829268292683 L 93.5 5.609756097560975 z"></path>
                                                        </g>
                                                        <g id="SvgjsG2318" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath2319" d="M 153.8702225747668 64.44507721439629 A 60.390243902439025 60.390243902439025 0 0 1 70.26998080793818 121.7435894693956 L 77.23898656555673 105.02051262857694 A 42.27317073170732 42.27317073170732 0 0 0 135.75915580233675 64.9115540500774 L 153.8702225747668 64.44507721439629 z" fill="#28c76fb3" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="114.09836065573771" data:startAngle="88.52459016393442" data:strokeWidth="0" data:value="58" data:pathOrig="M 153.8702225747668 64.44507721439629 A 60.390243902439025 60.390243902439025 0 0 1 70.26998080793818 121.7435894693956 L 77.23898656555673 105.02051262857694 A 42.27317073170732 42.27317073170732 0 0 0 135.75915580233675 64.9115540500774 L 153.8702225747668 64.44507721439629 z"></path>
                                                        </g>
                                                        <g id="SvgjsG2320" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath2321" d="M 70.26998080793818 121.7435894693956 A 60.390243902439025 60.390243902439025 0 0 1 33.75155866739671 74.78096332531551 L 51.676091067177694 72.14667432772086 A 42.27317073170732 42.27317073170732 0 0 0 77.23898656555673 105.02051262857694 L 70.26998080793818 121.7435894693956 z" fill="#28c76f80" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="59.016393442622956" data:startAngle="202.62295081967213" data:strokeWidth="0" data:value="30" data:pathOrig="M 70.26998080793818 121.7435894693956 A 60.390243902439025 60.390243902439025 0 0 1 33.75155866739671 74.78096332531551 L 51.676091067177694 72.14667432772086 A 42.27317073170732 42.27317073170732 0 0 0 77.23898656555673 105.02051262857694 L 70.26998080793818 121.7435894693956 z"></path>
                                                        </g>
                                                        <g id="SvgjsG2322" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3">
                                                            <path id="SvgjsPath2323" d="M 33.75155866739671 74.78096332531551 A 60.390243902439025 60.390243902439025 0 0 1 93.4894599141317 5.6097570173569835 L 93.49262193989219 23.72682991214989 A 42.27317073170732 42.27317073170732 0 0 0 51.676091067177694 72.14667432772086 L 33.75155866739671 74.78096332531551 z" fill="#28c76f29" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="98.36065573770492" data:startAngle="261.6393442622951" data:strokeWidth="0" data:value="50" data:pathOrig="M 33.75155866739671 74.78096332531551 A 60.390243902439025 60.390243902439025 0 0 1 93.4894599141317 5.6097570173569835 L 93.49262193989219 23.72682991214989 A 42.27317073170732 42.27317073170732 0 0 0 51.676091067177694 72.14667432772086 L 33.75155866739671 74.78096332531551 z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2324" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2325" font-family="Public Sans" x="93.5" y="86" text-anchor="middle" dominant-baseline="auto" font-size=".8125rem" font-weight="400" fill="#28c76f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Total</text><text id="SvgjsText2326" font-family="Public Sans" x="93.5" y="67" text-anchor="middle" dominant-baseline="auto" font-size="1.375rem" font-weight="500" fill="#5d596c" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">{{15}}</text></g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 container-fluid ns-nav-bg-white rounded p-4">
                                <div class="card-datatable table-responsive">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                        <div class="table-responsive">
                                            <table class="dt-route-vehicles table dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1395px;">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 161px;" aria-label="location: activate to sort column descending" aria-sort="ascending">Área</th>
                                                        <th class="w-20 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 243px;" aria-label="progress: activate to sort column ascending">% Completa</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 255px;" aria-label="ending route: activate to sort column ascending">Planejadas</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 201px;" aria-label="warnings: activate to sort column ascending">Etapa atual</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                        <td class="sorting_1">
                                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                                <div class="d-flex flex-column"><a class="text-body fw-medium" href="app-logistics-fleet.html">Arquitetura</a></div>
                                                            </div>
                                                        </td>
                                                        <td class="" style="">
                                                            <div class="d-flex align-items-center">
                                                                <div div="" class="progress w-100" style="height: 8px;">
                                                                    <div class="progress-bar" role="progressbar" style="width:24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="text-body ms-3">24%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-body">Dresden, Germany</div>
                                                        </td>
                                                        <td><span class="badge rounded bg-label-success">No Warnings</span></td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                        <td class="sorting_1">
                                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                                <div class="d-flex flex-column"><a class="text-body fw-medium" href="app-logistics-fleet.html">Elétrica</a></div>
                                                            </div>
                                                        </td>
                                                        <td class="" style="">
                                                            <div class="d-flex align-items-center">
                                                                <div div="" class="progress w-100" style="height: 8px;">
                                                                    <div class="progress-bar" role="progressbar" style="width:24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="text-body ms-3">24%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-body">Roma, Italy</div>
                                                        </td>
                                                        <td><span class="badge rounded bg-label-primary">fuel problems</span></td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                        <td class="sorting_1">
                                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                                <div class="d-flex flex-column"><a class="text-body fw-medium" href="app-logistics-fleet.html">Proteção contra incêncio</a></div>
                                                            </div>
                                                        </td>
                                                        <td class="" style="">
                                                            <div class="d-flex align-items-center">
                                                                <div div="" class="progress w-100" style="height: 8px;">
                                                                    <div class="progress-bar" role="progressbar" style="width:24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="text-body ms-3">24%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-body">Torino, Italy</div>
                                                        </td>
                                                        <td><span class="badge rounded bg-label-warning">Temperature Not Optimal</span></td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                        <td class="sorting_1">
                                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                                <div class="d-flex flex-column"><a class="text-body fw-medium" href="app-logistics-fleet.html">Mecânica</a></div>
                                                            </div>
                                                        </td>
                                                        <td class="" style="">
                                                            <div class="d-flex align-items-center">
                                                                <div div="" class="progress w-100" style="height: 8px;">
                                                                    <div class="progress-bar" role="progressbar" style="width:24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="text-body ms-3">24%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-body">Dresden, Germany</div>
                                                        </td>
                                                        <td><span class="badge rounded bg-label-danger">Ecu Not Responding</span></td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                                        <td class="sorting_1">
                                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                                <div class="d-flex flex-column"><a class="text-body fw-medium" href="app-logistics-fleet.html">Mecânica</a></div>
                                                            </div>
                                                        </td>
                                                        <td class="" style="">
                                                            <div class="d-flex align-items-center">
                                                                <div div="" class="progress w-100" style="height: 8px;">
                                                                    <div class="progress-bar" role="progressbar" style="width:24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="text-body ms-3">24%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-body">Laspezia, Italy</div>
                                                        </td>
                                                        <td><span class="badge rounded bg-label-info">Oil Leakage</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-5 container-fluid ns-nav-bg-white rounded m-1">
                    <div class="row">
                        <div class="col-12 container-fluid rounded p-4 ns-nav-bg-white">
                            <div class="row">
                                <h5 class="col-12 pb-3">Cronograma de obra</h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
</body>
</html>
