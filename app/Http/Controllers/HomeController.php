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

use DB;





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

        $userData = RegistroSeries::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("created_at"))
                    ->pluck('count');

        $countusert = User::count();
        $countorden = Ordene::count();
        $countregistroSeries = RegistroSeries::count();
        $invenatrycount = Inventario::count();

        return view('home', compact('countusert','countorden','countregistroSeries','invenatrycount','userData'));
        
    }
}