<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Banner;
use App\Proyecto;
use App\Categoria;

class projectsController extends Controller
{
    public function project(Request $request){
        $banners = Banner::where('id_pagina', 4)->where('estado', 'Habilitado')->first();
        
        if ($request->categoryFilter != '') {
            $filtro = $request->categoryFilter;
            $categoria = Categoria::where('nombre_categoria', $filtro)->first();
            $idCategoria = $categoria->id;
            $proyectos = DB::table('proyectos')
            ->where('id_categoria', $idCategoria)
            ->join('categorias', 'proyectos.id_categoria', '=', 'categorias.id')
            ->inRandomOrder()
            ->paginate(15);
            $categorias = Categoria::all();

            /* dd($proyectos); */
            return view('project', compact('banners', 'proyectos', 'categorias'));
               
        }else {
            $proyectos = DB::table('proyectos')
            ->join('categorias', 'proyectos.id_categoria', '=', 'categorias.id')
            ->inRandomOrder()
            ->paginate(15);
            $categorias = Categoria::all();
            return view('project', compact('banners', 'proyectos', 'categorias'));
        }
    }
}
