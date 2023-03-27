<?php

namespace App\Http\Controllers;

use App\Ordene;
use Illuminate\Http\Request;

/**
 * Class OrdeneController
 * @package App\Http\Controllers
 */
class OrdeneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Ordene::paginate();

        return view('ordene.index', compact('ordenes'))
            ->with('i', (request()->input('page', 1) - 1) * $ordenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordene = new Ordene();
        return view('ordene.create', compact('ordene'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ordene::$rules);

        $ordene = Ordene::create($request->all());

        return redirect()->route('ordenes.index')
            ->with('success', 'Ordene creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordene = Ordene::find($id);

        return view('ordene.show', compact('ordene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordene = Ordene::find($id);

        return view('ordene.edit', compact('ordene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ordene $ordene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordene $ordene)
    {
        request()->validate(Ordene::$rules);

        $ordene->update($request->all());

        return redirect()->route('ordenes.index')
            ->with('success', 'Ordene actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordene = Ordene::find($id)->delete();

        return redirect()->route('ordenes.index')
            ->with('success', 'Ordene borrado exitosamente');
    }
}
