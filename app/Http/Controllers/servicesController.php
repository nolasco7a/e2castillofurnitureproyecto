<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Banner;
use App\Categoria;

class servicesController extends Controller
{
    public function service(){
        $servicios = Servicio::all();
        $banners = Banner::where('id_pagina', 5)->where('estado', 'Habilitado')->first();
        $categorias = Categoria::all();

        return view('service', compact('servicios', 'banners', 'categorias'));
    }
}
