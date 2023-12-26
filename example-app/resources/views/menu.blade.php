<head>
    <title>@yield('menu')</title>
    <link src="{{ asset('example-app\public\assets\menu.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid nav-style">
            <a class="navbar-brand logo-style" href="#"><img src="assets/logo.png" style="height: 7vh;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                <div class="d-flex flex-lg-row flex-column col-12 justify-content-between">

                    <ul class="navbar-nav menu-data ps-4">
                        <li class="nav-item">
                            <a class="nav-link active link-transition" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BproProject
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><strong>Projetos</strong></a></li>
                                <ul>
                                    <li>Documentos</li>
                                    <li>Itens Obsoletos</li>
                                    <li>Eventos</li>
                                </ul>
                                <li><a class="dropdown-item" href="#"><strong>Aprovações</strong></a></li>
                                <ul>
                                    <li>Aprovações</li>
                                    <li>Revisar</li>
                                    <li>Revisão Pendente</li>
                                </ul>
                                <li><a class="dropdown-item" href="#"><strong>Lista Mestra</strong></a></li>
                                <ul>
                                    <li>Geral</li>
                                    <li>Aprovados</li>
                                </ul>
                                <li><a class="dropdown-item" href="#"><strong>Visualização em BIM</strong></a></li>
                                <li><a class="dropdown-item" href="#"><strong>Análise técnica de projetos</strong></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BproManager
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><strong>Acompanhamentos</strong></a></li>
                                <ul>
                                    <li>360°</li>
                                    <li>Drone</li>
                                    <li>Logístico</li>
                                    <li>Produção</li>
                                </ul>
                                <li><a class="dropdown-item" href="#"><strong>Sustentabilidade</strong></a></li>
                                <ul>
                                    <li class="pe-5">Indicadores de projeto</li>
                                    <li>Gestão de ativos</li>
                                </ul>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BproField
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><strong>Planejamento de obra</strong></a></li>
                                <ul>
                                    <li>Cronograma de obra</li>
                                    <li class="pe-5">Planejamento semanal</li>
                                    <li>Planejamentos criados</li>
                                    <li>Lista de atividades</li>
                                    <li>Controle de produção</li>
                                    <li>Atribuições</li>
                                </ul>
                                <li><a class="dropdown-item" href="#"><strong>Medição</strong></a></li>
                                <ul>
                                    <li>Medição</li>
                                </ul>
                                <li><a class="dropdown-item" href="#"><strong>Qualidade</strong></a></li>
                                <ul>
                                    <li>Controle de qualidade</li>
                                </ul>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BproLog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Controle logístico</a></li>
                                <li><a class="dropdown-item" href="#">Acompanhamento visual</a></li>
                                <li><a class="dropdown-item" href="#">Acompanhamento logístico</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav menu-projects">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>ESCOLHA A OBRA</option>
                            <option value="1">CPVICES</option>
                            <option value="2">TIROLESA</option>
                            <option value="3">SANEPAR BACACHERI</option>
                            <option value="4">BPRO</option>
                            <option value="5">IBMP</option>
                            <option value="6">PRÓ VIDA</option>
                            <option value="7">RAC PARAGUAY</option>
                            <option value="8">TESTE</option>
                            <option value="9">HOSPITAL NOSSA SENHORA DAS GRAÇAS</option>
                            <option value="10">ED. PUNTA NORTE</option>
                            <option value="11">CODERARROLHO</option>
                            <option value="12">ETL MIRINGUAVA-SANEPAR</option>
                        </select>
                    </ul>

                    <ul class="navbar-nav menu-profile pe-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill-gear pe-1 h3"></i>
                                Perfil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><strong>Login</strong></a></li>
                                <li><a class="dropdown-item" href="#"><strong> Configurações </strong></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>