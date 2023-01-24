<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        return view('painel.index')
            ->with('imoveis', Imovel::all());
    }
}
