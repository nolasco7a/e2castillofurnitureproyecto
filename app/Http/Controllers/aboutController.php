<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Fortaleza;
use App\Empresa;
use App\Categoria;

class aboutController extends Controller
{
    public function about(){
        $banners = Banner::where('id_pagina', 2)->where('estado', 'Habilitado')->first();
        $empresa = Empresa::first();
        $fortalezas= Fortaleza::all();
        $categorias = Categoria::all();

        /* dd($empresa); */
        return view('about', compact('banners','empresa', 'fortalezas','categorias'));
    }
}
