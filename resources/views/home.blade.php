@extends('layouts.home')
@section('content')
<!--Comienzo del  contenido -->
<?php
require_once "../resources/views/_db.php";
?>

<div class="row column1">
    <div class="col-md-6 col-lg-3">
        <div class="full counter_section margin_bottom_30">
            <div class="couter_icon">
                <div>
                    <i class="fa fa-user yellow_color"></i>
                </div>
            </div>
            <div class="counter_no">
                <div>
                    <p class="total_no">{{$countusert}}</p>
                    <p class="head_couter">Usuarios Registrados</p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="full counter_section margin_bottom_30">
            <div class="couter_icon">
                <div>
                    <i class="fa fa-clock-o blue1_color"></i>
                </div>
            </div>
            <div class="counter_no">
                <div>
                    <p class="total_no">{{$countorden}}</p>
                    <p class="head_couter">Ordenes de compra</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="full counter_section margin_bottom_30">
            <div class="couter_icon">
                <div>
                    <i class="fa fa-cloud-download green_color"></i>
                </div>
            </div>
            <div class="counter_no">
                <div>
                    <p class="total_no">{{$countregistroSeries}}</p>
                    <p class="head_couter">Equipos Resitrados</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="full counter_section margin_bottom_30">
            <div class="couter_icon">
                <div>
                    <i class="fa fa-comments-o red_color"></i>
                </div>
            </div>
            <div class="counter_no">
                <div>
                    <p class="total_no">{{$invenatrycount}}</p>
                    <p class="head_couter">Equipos Instalados</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row column1">

    <div class="col-lg-6" style="width: 800px; height: 300px;">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <h2>Equipos Entregados Por Funcionario</h2>
                <div id="piechart" ></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <h2>Proveedores</h2>
            </div>
        </div>
    </div>



    <div class="col-lg-6">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Modelos Registrados</h2>
                </div>
            </div>
            <div class="map_section padding_infor_info">
            </div>
        </div>
    </div>



    <!--Script de garficos-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!--  Grafico Marcas -->


    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php
          $SQL = "SELECT entrega, COUNT(*) as Total FROM inventarios  GROUP BY entrega";
          $consulta = mysqli_query($conexion, $SQL);
          while ($resultado = mysqli_fetch_assoc($consulta)){
            echo "['" .$resultado['entrega']."', " .$resultado['Total']."],";
          }

?>
        ]);

        var options = {
            title: 'Hospiatl puerto Montt'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>





    <!-- Script del grafico Usuarios registros  -->



    @endsection