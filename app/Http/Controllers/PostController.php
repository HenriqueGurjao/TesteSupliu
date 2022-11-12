<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\faixa;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function index(){

        $albums = Post::get();
        $faixas = Faixa::get();
        


        return view('admin.inicio.home', compact('albums','faixas'));
    }

    
    public function criarAlbum(){

        return view('admin.criar.album');
    }
  
    public function StoreAlbum(Request $Request){
        Post::create($Request ->all());

        return redirect()->route('index');
    }
    public function FiltrarAlbum(Request $request){
        dd("pesquisando por {{$request -> search}}");
    }

}
