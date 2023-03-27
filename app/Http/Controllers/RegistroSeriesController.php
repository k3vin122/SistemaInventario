<?php

namespace App\Http\Controllers;

use App\RegistroSeries;
use Illuminate\Http\Request;
use App\Imports\RegistroSerieImport;

use Maatwebsite\Excel\Facades\Excel;

/**
 * Class RegistroSeriesController
 * @package App\Http\Controllers
 */
class RegistroSeriesController extends Controller
{
    public function index(Request $request)
    {
        $countregistroSeries = RegistroSeries::count();

        $busqueda_inventario =  $request->busqueda;

        $registroSeries = RegistroSeries::where('serie','LIKE','%'.$busqueda_inventario.'%')
        ->orWhere('id_guia','LIKE','%'.$busqueda_inventario.'%')
        ->latest('id')
        ->paginate(7);
        $data = [
            'registroSeries'=>$registroSeries,
            'busqueda_inventario'=>$busqueda_inventario,
        ];

        return view('registro-series.index', compact('registroSeries','countregistroSeries'))
            ->with('i', (request()->input('page', 1) - 1) * $registroSeries->perPage());
    }


    public function create(Request $request)
    {
        $registroSeries = new RegistroSeries();



        return view('registro-series.create', compact('registroSeries'));
    }



    /**
    * Metodo que nos permite importar data deacuerdo a un modelo de archivo.
    */

    public function store(Request $request)
    {

        Excel::import( new RegistroSerieImport, $request->file );
        return ('datos registrados');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registroSeries = RegistroSeries::find($id);

        return view('registro-series.show', compact('registroSeries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroSeries = RegistroSeries::find($id);

        return view('registro-series.edit', compact('registroSeries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RegistroSeries $registroSeries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroSeries $registroSeries)
    {
        request()->validate(RegistroSeries::$rules);

        $registroSeries->update($request->all());

        return redirect()->route('registro-series.index')
            ->with('success', 'RegistroSeries Datos actualizados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registroSeries = RegistroSeries::find($id)->delete();

        return redirect()->route('registro-series.index')
            ->with('success', 'RegistroSeries Datos eliminados');
    }




}
