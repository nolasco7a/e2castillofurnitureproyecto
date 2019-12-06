<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Melamina;
use App\Banner;
use App\Categoria;
class melaminesController extends Controller
{
    public function melamines(){
        $melaminas = Melamina::all();
        $banners = Banner::where('id_pagina', 7)->where('estado', 'Habilitado')->first();
        $categorias = Categoria::all();


        return view('melamines', compact('melaminas', 'banners', 'categorias'));
    }
}
