<?php

namespace App\Http\Controllers;

use App\Inventario;
use App\Marca;
use App\Modelo;
use App\TipoEquipo;
use App\RegistroSeries;
use Illuminate\Http\Request;

/**
 * Class InventarioController
 * @package App\Http\Controllers
 */
class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


     /*** contar registros*/
        $invenatrycount = Inventario::count();

             /**Busqueda de registros inventario*/
        $busqueda_inventario =  $request->busqueda;
        $inventarios = Inventario::where('n_invenatario','LIKE','%'.$busqueda_inventario.'%')
                            ->orWhere('mac','LIKE','%'.$busqueda_inventario.'%')
                            ->orWhere('unidad','LIKE','%'.$busqueda_inventario.'%')
                            ->orWhere('recinto','LIKE','%'.$busqueda_inventario.'%')
                            ->orWhere('ip','LIKE','%'.$busqueda_inventario.'%')
                            ->orWhere('entrega','LIKE','%'.$busqueda_inventario.'%')
                            ->latest('id')
                            ->paginate(7);
                            $data = [
                                'inventarios'=>$inventarios,
                                'busqueda_inventario'=>$busqueda_inventario,
                            ];
        return view('inventario.index', compact('inventarios','invenatrycount'))
            ->with('i', (request()->input('page', 1) - 1) * $inventarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventario = new Inventario();
        $marcas = Marca::pluck('nombre','id');
        $modelos = Modelo::pluck('nombre','id');
        $TipoEquipos = TipoEquipo::pluck('nombre','id');
        $series = RegistroSeries::all();
        return view('inventario.create', compact('inventario','marcas','modelos','TipoEquipos','series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inventario::$rules);

        $inventario = Inventario::create($request->all());

        return redirect()->route('inventarios.index')
            ->with('success', 'Inventario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventario = Inventario::find($id);

        return view('inventario.show', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = Inventario::find($id);

        $marcas = Marca::pluck('nombre','id');
        $modelos = Modelo::pluck('nombre','id');
        $TipoEquipos = TipoEquipo::pluck('nombre','id');
        $series = RegistroSeries::all();

        return view('inventario.edit', compact('inventario','marcas','modelos','TipoEquipos','series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inventario $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        request()->validate(Inventario::$rules);

        $inventario->update($request->all());

        return redirect()->route('inventarios.index')
            ->with('success', 'Inventario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id)->delete();

        return redirect()->route('inventarios.index')
            ->with('success', 'Inventario deleted successfully');
    }
}