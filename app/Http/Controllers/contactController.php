<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Cotizacion;
use App\Banner;
use App\Categoria;
use Mail;
class contactController extends Controller
{
    public function contact(){
        $banners = Banner::where('id_pagina', 3)->where('estado', 'Habilitado')->first();
        $categorias = Categoria::all();
        return view('contact', compact('banners', 'categorias'));
    }

    public function sendEmail(Request $request){

            $contactMessage = $request->validate([
                'name'=>'required',
                'phone'=>'required|min:8',
                'email'=>'',
                'ubication'=>'required',
                'category'=>'notIn:1|required',
                'message'=> 'required',

            ],[
                'name.required' => 'Su nombre es necesario para el envio del formulairo',
                'phone.required'=> 'Necesitamos su numero para comunicarnos con usted',
                'phone.min' => 'Al parecer el numero que ingreso esta incompleto, por favor ingrese el numero correctamente',
                'email.email' => 'Por favor ingrese una direccion de correo valida',
                'ubication.required' => 'Ingrese el departamento o ciudad de donde nos escribe',
                'category.notIn' => 'Por favor seleccione una categoria',
                'message.required' => 'Por favor cuentenos algo acerca de lo qu enecesita',
            ]);

            Mail::send(new Cotizacion($contactMessage));

            return redirect('/emailsent');
        
    }
}
