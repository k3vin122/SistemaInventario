<?php

namespace App\Http\Controllers;

use App\Ordene;
use App\Guia;



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
    public function index(Request $request)
    {

        $countordenes = Ordene::count();


             /**Busqueda de registros Ordenes*/
             $busqueda_inventario =  $request->busqueda;
             $ordenes = Ordene::where('nombre','LIKE','%'.$busqueda_inventario.'%')
                                 ->orWhere('id_guia','LIKE','%'.$busqueda_inventario.'%')
                                 ->latest('id')
                                 ->paginate(7);
                                 $data = [
                                     'ordenes'=>$ordenes,
                                     'busqueda_inventario'=>$busqueda_inventario,
                                 ];


        return view('ordene.index', compact('ordenes','countordenes'))
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
        $guias = Guia::pluck('nombre','id');

        return view('ordene.create', compact('ordene','guias'));
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
        $guias = Guia::pluck('nombre','id');


        return view('ordene.edit', compact('ordene','guias'));
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
