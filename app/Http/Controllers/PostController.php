<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('admin.inicio.home');
    }
    public function welcome(){
        return view('welcome');
    }
}
