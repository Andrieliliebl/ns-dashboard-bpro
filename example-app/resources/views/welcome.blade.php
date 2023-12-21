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

    @section('vendor-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    @endsection

    @section('page-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-logistics-dashboard.css')}}" />

    @endsection

    @section('vendor-script')
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    @endsection

    @section('page-script')
    <script src="{{asset('assets/js/app-logistics-dashboard.js')}}"></script>
    @endsection

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
                        <div class="col-12 ns-nav-bg-yellow">
                            <div class="row">
                                <div class="col-7 ns-nav-bg-blue">
                                    <div class="row">
                                        <h5 class="col-7 ns-nav-bg-pink">título</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 ns-nav-bg-pink">Real</div>
                                        <div class="col-6 ns-nav-bg-pink">Planejado</div>
                                    </div>
                                    <div class="row">
                                        <div class="ns-nav-bg-pink">Barra</div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="row">
                                        <div class="col-12 ns-nav-bg-purple">Título</div>
                                    </div>
                                    <div class="row">
                                        <div class="ns-nav-bg-blue">Gráfico</div>
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
