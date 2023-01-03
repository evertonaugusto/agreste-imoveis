<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Http\Requests\StoreImovelRequest;
use App\Http\Requests\UpdateImovelRequest;

class ImovelController extends Controller
{
    public $entity_name = 'imoveis';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel.crud.imoveis.index', ['imoveis' => Imovel::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.crud.imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImovelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImovelRequest $request)
    {
        Imovel::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $imovel
     * @return \Illuminate\Http\Response
     */
    public function show($imovel)
    {
        return view('painel.crud.imoveis.show', ['imovel' => Imovel::find($imovel)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $imovel
     * @return \Illuminate\Http\Response
     */
    public function edit($imovel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImovelRequest  $request
     * @param  int  $imovel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImovelRequest $request, $imovel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $imovel
     * @return \Illuminate\Http\Response
     */
    public function destroy($imovel)
    {
        //
    }
}
