<?php

namespace App\Http\Controllers;

use App\Guia;
use App\Proveedore;

use Illuminate\Http\Request;

/**
 * Class GuiaController
 * @package App\Http\Controllers
 */
class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $countgia = Guia::count();
        $guias = Guia::paginate();

        return view('guia.index', compact('guias','countgia'))
            ->with('i', (request()->input('page', 1) - 1) * $guias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guia = new Guia();
        $x1 = Proveedore::pluck('nombre','id');
        return view('guia.create', compact('guia','x1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Guia::$rules);

        $guia = Guia::create($request->all());

        return redirect()->route('guias.index')
            ->with('success', 'Guia creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guia = Guia::find($id);

        return view('guia.show', compact('guia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guia = Guia::find($id);
        $x1 = Proveedore::pluck('nombre','id');
        return view('guia.edit', compact('guia','x1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Guia $guia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guia $guia)
    {
        request()->validate(Guia::$rules);

        $guia->update($request->all());

        return redirect()->route('guias.index')
            ->with('success', 'Guia actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $guia = Guia::find($id)->delete();

        return redirect()->route('guias.index')
            ->with('success', 'Guia borrado exitosamente');
    }
}
