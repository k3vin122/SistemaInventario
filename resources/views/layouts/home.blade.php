<!DOCTYPE html>
<html lang="en">

<head>
    @stack('head')
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>HPM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link href="{{ asset('polo/images/fevicon.png') }}" type="image/png" rel="stylesheet" />

    <!-- bootstrap css -->
    <link href="{{ asset('polo/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- site css -->
    <link href="{{ asset('polo/style.css') }}" rel="stylesheet" />

    <!-- responsive css -->
    <link href="{{ asset('polo/css/responsive.css') }}" rel="stylesheet" />

    <!-- color css -->
    <link href="{{ asset('polo/css/colors.css') }}" rel="stylesheet" />

    <!-- select bootstrap -->
    <link href="{{ asset('polo/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- scrollbar css -->
    <link href="{{ asset('polo/css/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- custom css -->
    <link href="{{ asset('polo/css/custom.css') }}" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.4.slim.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    @yield('scripts')
    <!-- graficos HIGCHARTS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- Fin -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


    <!-- select2 estilos-->
    <link href="{{ asset('Select/css/select2.min.css') }}" rel="stylesheet" />


    <!--estilos botones-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- select2 estilos-->
    <link href="{{ asset('Select/css/select2.min.css') }}" rel="stylesheet" />


    <!--estilos botones-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <!--Estilos SELECT2 ADEMAS DE JQUERY-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- selec2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    {{-- Estilo de boton register --}}
    <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 5px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button3 {
            background-color: #ff5722;

        }

        .button2 {
            background-color: #070707;
    </style>

</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive"
                                    src="{{ asset('polo/images/logo/logo_icon.png') }} " alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="{{ asset('polo/images/layout_img/user.png') }}" alt="#" /></div>
                            <div class="user_info">
                                <h6>{{ Auth::user()->name }}</h6>


                                <p><span class="online_animation"></span> En linea</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>Sistema de Inventario</h4>
                    <ul class="list-unstyled components">

                        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard yellow_color"></i>
                                <span>Inicio</span></a>
                        </li>

                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-object-group blue2_color"></i> <span>Compras</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <a href="{{ route('guias.index') }}">> <span>Guia</span></a>
                                <a href="{{ route('ordenes.index') }}">> <span>Orden de Compra</span></a>
                            </ul>
                        </li>
                        <li><a href="{{ route('inventarios.index') }}"><i class="fa fa-clock-o orange_color"></i>
                                <span>Inventario</span></a>
                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-diamond purple_color"></i> <span>Mantenedores</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="{{ route('proveedores.index') }}">> <span>Proveedor</span></a></li>
                                <li><a href="{{ route('marcas.index') }}">> <span>Marca</span></a></li>
                                <li><a href="{{ route('modelos.index') }}">> <span>Modelo</span></a></li>

                                <li><a href="{{ route('tipo-equipos.index') }}">> <span>Tipo de equipo</span></a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('registro-series.index') }}"><i class="fa fa-table purple_color2"></i>
                                <span>Registra N° Serie Equipo</span></a></li>

                        <!--
                        <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing
                                    Tables</span></a></li>
                        <li>
                            <a href="contact.html">
                                <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                        </li>
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional
                                    Pages</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="profile.html">> <span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="project.html">> <span>Projects</span></a>
                                </li>
                                <li>
                                    <a href="login.html">> <span>Login</span></a>
                                </li>
                                <li>
                                    <a href="404_error.html">> <span>404 Error</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                        <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a>
                        </li>


                         Esto es un comentario -->

                        <li><a href="#"><i class="fa fa-cog yellow_color"></i> <span>Configuración</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->

            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.html"><img class="img-responsive"
                                        src="{{ asset('polo/images/layout_img/hpm.png') }}" alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span
                                                    class="badge">2</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span
                                                    class="badge">3</span></a>
                                        </li>
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="{{ asset('polo/layout_img/user.png') }}"
                                                    alt="" /><span class="name_user">
                                                    {{ Auth::user()->name }}
                                                </span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Perfil</a>
                                                <a class="dropdown-item" href="#">Ayuda</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"><span> Cerrar
                                                        sesion</span> <i class="fa fa-sign-out"></i></a>


                                            </div>
                                        </li>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    @yield('content')

                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2023 develop Kevin Ross.<br><br>
                                Distributed By: <a href="https://hospitalpuertomontt.gob.cl/">Hospital Puerto Montt</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="polo/js/jquery.min.js"></script>
    <script src="polo/js/popper.min.js"></script>
    <script src="polo/js/bootstrap.min.js"></script>

    <!-- wow animation -->
    <script src="polo/js/animate.js"></script>

    <!-- select country -->
    <script src="polo/js/bootstrap-select.js"></script>

    <!-- owl carousel -->
    <script src="polo/js/owl.carousel.js"></script>

    <!-- chart js -->
    <script src="polo/js/Chart.min.js"></script>

    <script src="polo/js/Chart.bundle.min.js"></script>

    <script src="polo/js/utils.js"></script>

    <script src="polo/js/analyser.js"></script>

    <!-- nice scrollbar -->
    <script src="polo/js/perfect-scrollbar.min.js"></script>

    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="polo/js/chart_custom_style1.js"></script>

    <script src="polo/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"
        integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>




    <!--estilos select2-->
    <script src="Select/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!--estilos select2-->
    <script src="Select/js/select2.min.js"></script>





    @yield('headers')

</body>
