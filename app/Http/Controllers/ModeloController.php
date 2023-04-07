<?php

namespace App\Http\Controllers;

use App\Modelo;
use Illuminate\Http\Request;

use App\Http\Requests\ModeloCreateRequest;
use App\Http\Requests\ModeloEditRequest;

/**
 * Class ModeloController
 * @package App\Http\Controllers
 */
class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countmodelo= Modelo::count();
        $modelos = Modelo::paginate();

        return view('modelo.index', compact('modelos','countmodelo'))
            ->with('i', (request()->input('page', 1) - 1) * $modelos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelo = new Modelo();
        return view('modelo.create', compact('modelo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeloCreateRequest $request)
    {
        request()->validate(Modelo::$rules);

        $modelo = Modelo::create($request->all());

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Modelo::find($id);

        return view('modelo.show', compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Modelo::find($id);

        return view('modelo.edit', compact('modelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modelo $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        request()->validate(Modelo::$rules);

        $modelo->update($request->all());

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modelo = Modelo::find($id)->delete();

        return redirect()->route('modelos.index')
            ->with('success', 'borrado exitosamente');
    }
}
