<?php

namespace App\Http\Controllers;

use App\RegistroSeries;
use Illuminate\Http\Request;

/**
 * Class RegistroSeriesController
 * @package App\Http\Controllers
 */
class RegistroSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroSeries = RegistroSeries::paginate();

        return view('registro-series.index', compact('registroSeries'))
            ->with('i', (request()->input('page', 1) - 1) * $registroSeries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registroSeries = new RegistroSeries();
        return view('registro-series.create', compact('registroSeries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RegistroSeries::$rules);

        $registroSeries = RegistroSeries::create($request->all());

        return redirect()->route('registro-series.index')
            ->with('success', 'RegistroSeries created successfully.');
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
            ->with('success', 'RegistroSeries updated successfully');
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
            ->with('success', 'RegistroSeries deleted successfully');
    }
}
