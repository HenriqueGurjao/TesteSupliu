<?php

namespace App\Http\Controllers;

use App\Models\faixa;
use Illuminate\Http\Request;

class FaixaController extends Controller
{
    public function index(){

        $faixas = faixa::get();
        
        return view('admin.inicio.home', compact('faixas'));
    }

    public function criarFaixa(){

        return view('admin.criar.faixa');
    }
    public function StoreFaixa(Request $Request){
        
        faixa::create($Request ->all());

        return redirect()->route('index');
    }
}
