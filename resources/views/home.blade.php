@extends('layouts.home')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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

    <div class="col-lg-6">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Equipos Instalados Por Depto</h2>
                </div>
            </div>
            <div class="map_section padding_infor_info">
                {!! $chart->renderHtml() !!}

            </div>
        </div>
    </div>



    <div class="col-lg-6">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Proveedores</h2>
                </div>
            </div>
            <div class="map_section padding_infor_info">
                {!! $chart1->renderHtml() !!}
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
                {!! $chart2->renderHtml() !!}
            </div>
        </div>
    </div>
    {!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}
    {!! $chart1->renderJs() !!}
    {!! $chart2->renderJs() !!}
    @endsection