<?php

namespace App\Http\Controllers;

use App\TipoEquipo;
use App\Proveedore;

use Illuminate\Http\Request;

/**
 * Class TipoEquipoController
 * @package App\Http\Controllers
 */
class TipoEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caountTipo= TipoEquipo::count();
        $tipoEquipos = TipoEquipo::paginate();

        return view('tipo-equipo.index', compact('tipoEquipos','caountTipo'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoEquipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $Proveedores = Proveedore::pluck('id','nombre');

        $tipoEquipo = new TipoEquipo();
        return view('tipo-equipo.create', compact('tipoEquipo','Proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoEquipo::$rules);

        $tipoEquipo = TipoEquipo::create($request->all());

        return redirect()->route('tipo-equipos.index')
            ->with('success', 'TipoEquipo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoEquipo = TipoEquipo::find($id);

        return view('tipo-equipo.show', compact('tipoEquipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoEquipo = TipoEquipo::find($id);

        return view('tipo-equipo.edit', compact('tipoEquipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoEquipo $tipoEquipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoEquipo $tipoEquipo)
    {
        request()->validate(TipoEquipo::$rules);

        $tipoEquipo->update($request->all());

        return redirect()->route('tipo-equipos.index')
            ->with('success', 'TipoEquipo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoEquipo = TipoEquipo::find($id)->delete();

        return redirect()->route('tipo-equipos.index')
            ->with('success', 'TipoEquipo deleted successfully');
    }
}
