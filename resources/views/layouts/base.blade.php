  <!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
      <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
      <title>
          HPM
      </title>
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css"
          href="https://cdn.euroinnova.edu.es/img/subidasEditor/dise%C3%B1o%20sin%20t%C3%ADtulo%20(8)%20(1)-1615267761.webp" />
      <!-- Nucleo Icons -->

      <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />

      <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <!-- Material Icons -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
      <!-- CSS Files -->
      <link href="{{asset('assets/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />

  </head>

  <body class="bg-gray-200">
      <div class="container position-sticky z-index-sticky top-0">
          <div class="row">
              <div class="col-12">
                  <!-- Navbar -->

                  <!-- End Navbar -->
              </div>
          </div>
      </div>
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

  </body>

  </html>