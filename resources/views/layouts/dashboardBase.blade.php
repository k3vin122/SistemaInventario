 <!DOCTYPE html>
 <html lang="en">

 <head>
     @stack('head')
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <title>Sistema </title>



     <!--     Fonts and icons     -->
     <link rel="stylesheet" type="text/css"
         href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
     <!-- Nucleo Icons -->
     <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />

     <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />



     <!-- Font Awesome Icons -->
     <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
     <!-- Material Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
     <!-- CSS Files -->
     <link href="{{asset('assets/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />





     <script src="https://code.jquery.com/jquery-3.6.4.slim.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

     @yield('scripts')


     <!-- select2 estilos-->
     <link href="{{asset('Select/css/select2.min.css')}}" rel="stylesheet" />


     <!--estilos botones-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




     <!--Estilos SELECT2 ADEMAS DE JQUERY-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
     {{-- selec2 cdn --}}
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
     
 </head>

 <body class="bg-gray-200">
     <aside
         class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
         id="sidenav-main">
         <div class="sidenav-header">
             <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                 aria-hidden="true" id="iconSidenav"></i>
             <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                 target="_blank">
                 <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                 <span class="ms-1 font-weight-bold text-white">Información TI</span>
             </a>
         </div>
         <hr class="horizontal light mt-0 mb-2">
         <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link text-white active bg-gradient-primary" href="{{ route('inventarios.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">dashboard</i>
                         </div>
                         <span class="nav-link-text ms-1">Inventario</span>
                     </a>
                 </li>


                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ route('proveedores.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">table_view</i>
                         </div>
                         <span class="nav-link-text ms-1">Proveedor</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ route('marcas.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">table_view</i>
                         </div>
                         <span class="nav-link-text ms-1">Marca</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ route('modelos.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">table_view</i>
                         </div>
                         <span class="nav-link-text ms-1">Modelos</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ route('tipo-equipos.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">table_view</i>
                         </div>
                         <span class="nav-link-text ms-1">Clase Equipo</span>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ route('guias.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">receipt_long</i>
                         </div>
                         <span class="nav-link-text ms-1">Guia</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ route('ordenes.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">view_in_ar</i>
                         </div>
                         <span class="nav-link-text ms-1">Ordenes</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ route('registro-series.index') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                         </div>
                         <span class="nav-link-text ms-1">Registro Serie</span>
                     </a>
                 </li>

                 <!--
                 <li class="nav-item">
                     <a class="nav-link text-white " href="../pages/notifications.html">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">notifications</i>
                         </div>
                         <span class="nav-link-text ms-1">Notifications</span>
                     </a>
                 </li>

                  CSS Files -->









                 <li class="nav-item mt-3">
                     <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">PÁGINAS DE LA
                         CUENTA
                     </h6>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="../pages/profile.html">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">person</i>
                         </div>
                         <span class="nav-link-text ms-1">Perfiles</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="{{ url('/logout') }}">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">login</i>
                         </div>
                         <span class="nav-link-text ms-1">Cerrar sesion</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white " href="../pages/sign-up.html">
                         <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                             <i class="material-icons opacity-10">assignment</i>
                         </div>
                         <span class="nav-link-text ms-1">Registro</span>
                     </a>
                 </li>
             </ul>
         </div>
         <div class="sidenav-footer position-absolute w-100 bottom-0 ">
             <div class="mx-3">
                 <a class="btn bg-gradient-primary mt-4 w-100" href="#" type="button">Salir</a>
             </div>
         </div>
     </aside>

     <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
         <!-- Navbar -->
         <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
             data-scroll="true">
          
         </nav>

         <main class="py-4">
             @yield('content')
         </main>
         <!--   Core JS Files   -->
         <link src="{{asset('assets/js/core/popper.min.js')}}" />
         <link src="{{asset('assets/js/core/bootstrap.min.js')}}" />
         <link src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}" />
         <link src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}" />

         <script>
         var win = navigator.platform.indexOf('Win') > -1;
         if (win && document.querySelector('#sidenav-scrollbar')) {
             var options = {
                 damping: '0.5'
             }
             Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
         }
         </script>




         <!-- Github buttons -->
         <script async defer src="https://buttons.github.io/buttons.js"></script>
         <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
         <link src="{{asset('assets/js/material-dashboard.min.js?v=3.0.4')}}" />

         <!--estilos select2-->
         <script src="Select/js/select2.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


         <!--estilos select2-->
         <script src="Select/js/select2.min.js"></script>
         @yield('headers')



     </main>