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
      <link href="{{asset('polo/images/fevicon.png')}}" type="image/png" rel="stylesheet" />

      <!-- bootstrap css -->
      <link href="{{asset('polo/css/bootstrap.min.css')}}" rel="stylesheet" />

      <!-- site css -->
      <link href="{{asset('polo/style.css')}}" rel="stylesheet" />


      <!-- responsive css -->
      <link href="{{asset('polo/css/responsive.css')}}" rel="stylesheet" />

      <!-- color css -->
      <link href="{{asset('polo/css/colors.css')}}" rel="stylesheet" />

      <!-- select bootstrap -->
      <link href="{{asset('polo/css/bootstrap-select.css')}}" rel="stylesheet" />

      <!-- scrollbar css -->
      <link href="{{asset('polo/css/perfect-scrollbar.css')}}" rel="stylesheet" />

      <!-- custom css -->
      <link href="{{asset('polo/css/custom.css')}}" rel="stylesheet" />


      <style>
      body {
          background-image: url("{{asset('assets/img/vr-bg.jpg')}}");

      }
      </style>

      @yield('scripts')

  </head>

  <body class="bg-gray-200">
      <div class="midde_cont">
          @yield('content')

          <!-- footer -->
          <div class="container-fluid">
              <div class="footer">
                  <p>Departamento TI Informatica<br><br>
                      Distributed By: <a href="https://hospitalpuertomontt.gob.cl/">Hospital Puerto Montt</a>
                  </p>
              </div>
          </div>
      </div>
      <!-- end dashboard inner -->

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
      @yield('headers')


  </body>

  </html>