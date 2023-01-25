<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
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
        $files = $request->imgs;

        $address = Address::create([
            'street' => $request->input('street'),
            'bairro' => $request->input('bairro'),
            'number' => $request->input('number'),
            'cep' => $request->input('cep'),
            'city' => $request->input('city'),
            'uf' => $request->input('uf'),
        ]);

        if($address) {
            $imovel = Imovel::create([
                'tipo_imovel' => $request->input('tipo_imovel'),
                'descricao' => $request->input('descricao'),
                'valor' => $request->input('valor'),
                'qt_comodos' => $request->input('qt_comodos'),
                'nu_registro' => $request->input('nu_registro'),
                'metros_quadrados' => $request->input('metros_quadrados'),
                'address_id' => $address->id,
                'user_id' => Auth::user()->id,
            ]);

            $count = 1;
            foreach($files as $file){
                $file->storeAs("images/imoveis/{$imovel->id}", $count);
                $count++;
            }
        }

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
