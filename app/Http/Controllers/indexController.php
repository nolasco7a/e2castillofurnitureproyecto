<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Banner;
use App\Anuncio;
use App\Fortaleza;
use App\Servicio;
use App\Proyecto;

class indexController extends Controller
{
    public function index(){
        $banners = Banner::where('id_pagina', 1)->where('estado', 'Habilitado')->get();
        $anuncios = Anuncio::all();
        $fortalezas = Fortaleza::all();
        $servicios = Servicio::all();
        $proyectos = DB::table('proyectos')
        ->join('categorias', 'proyectos.id_categoria', '=', 'categorias.id')
        ->inRandomOrder()
        ->take(5)
        ->get();

        
       /*   dd($proyectos);  */

        return view('/index', compact('proyectos','servicios','banners','anuncios', 'fortalezas'));
    }
}
