<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Ordene;
use App\Guia;
use App\Inventario;
use App\Proveedore;
use App\Marcas;
use App\RegistroSeries;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $chart_options = [
            'chart_title' => 'Equipos',
            'report_type' => 'group_by_string',
            'model' => 'App\Inventario',
            'group_by_field' => 'unidad',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
        ];

        $chart = new LaravelChart($chart_options);


        $chart_options = [
            'chart_title' => 'Proveedores',
            'report_type' => 'group_by_string',
            'model' => 'App\Proveedore',
            'group_by_field' => 'nombre',
            'chart_type' => 'pie',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
        ];

        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Modelos',
            'report_type' => 'group_by_string',
            'model' => 'App\Modelo',
            'group_by_field' => 'nombre',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
        ];


        $chart2 = new LaravelChart($chart_options);

        $countusert = User::count();
        $countorden = Ordene::count();
        $countregistroSeries = RegistroSeries::count();
        $invenatrycount = Inventario::count();

        return view('home', compact('countusert','countorden','countregistroSeries','invenatrycount','chart','chart1','chart2'));
        
    }
}