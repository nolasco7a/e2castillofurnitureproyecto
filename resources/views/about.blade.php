@extends('layouts.template')
@section('content')

<!-- breadcrumb start-->
<?php
        $backSlash = "\\";
        $imagen = str_replace($backSlash, "/", $banners->imagen); 
    ?>
<section class="breadcrumb breadcrumb_bg d-flex justify-content-center align-items-center"
    style="background: url(storage/{{$imagen}})">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="breadcrumb_iner text-center ">
                    <div class="breadcrumb_iner_item ">
                        <h2>Conocenos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- home tips start-->
<section class="home_tips padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="home_tips_text">
                    <h1>Nosotros</h1>
                    {!!$empresa->info_nosotros!!}
                   
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="card" style="border:none;">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Mision
                                    </h3>
                                {!!$empresa->mision!!}

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="border:none;">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Vision
                                    </h3>
                                {!!$empresa->vision!!}
    
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" src="./storage/video/video_promocional.mp4?autoplay=0" controls allowfullscreen"></video>
                    </div> --}}
                </div>
            </div>
        </div>
</section>
<!-- home tips start-->

{{-- cambiar imagen por imagen en espa;ol y conservar la imagen en ingles para traduccion --}}
<div class="overlay_section">

</div>

<!-- single special page item start -->
<div class="our_speciality">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="z-index: 99">
                    {{-- Fortalezas --}}
                    @foreach ($fortalezas as $fortaleza)
                    <div class="single_special_part col-lg-4 col-md-6 border_left">
                    <img src="{{$fortaleza->icono}}" alt="">
                        <div class="single_special_text">
                            <h3>{{$fortaleza->nombre}}</h3>
                        <p>{{$fortaleza->descripcion}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<!-- single special page item end -->
 {{-- Formulario de contacto --}}
 @if(session()->get('cotizacionSuccess'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Well done!!</h4>
    {{ session()->get('cotizacionSuccess')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
     <section>
         <div class="container my-4 form-contact-about">
             <div class="col-lg-6">
                <h2>Contactanos</h2>
                <p>Sera un placer poder atender su cotizacion, a continuacion llene el formulario y cuentenos que necesita...</p>
             </div>
             <form action="/sendemail" method="POST">
                @csrf
                  <div class="input-group-icon mt-4">
                         <div class="icon"><i class="fas fa-user" aria-hidden="true"></i></div>
                  <input type="text" name="name" placeholder="Ingrese su nombre" class="single-input" value="{{old('name')}}">
                  {!! $errors->first('name', '<small class="form-text text-danger text-bold">:message</small>') !!}
                  </div>
                  <div class="input-group-icon mt-4">
                         <div class="icon"><i class="fas fa-phone" aria-hidden="true"></i></div>
                      <input type="number" name="phone" placeholder="Ingrese su numero de telefono" class="single-input" value="{{old('phone')}}">
                      {!! $errors->first('phone', '<small class="form-text text-danger text-bold">:message</small>') !!}
                  </div>
                  <div class="input-group-icon mt-4">
                         <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                      <input type="email" name="email" placeholder="Ingrese su correo electronico" class="single-input" value="{{old('email')}}">
                      {!! $errors->first('email', '<small class="form-text text-danger text-bold">:message</small>') !!}
                  </div>
                  <div class="input-group-icon mt-4">
                         <div class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                      <input type="text" name="ubication" placeholder="De donde nos escribe" class="single-input" value="{{old('ubication')}}">
                      {!! $errors->first('ubication', '<small class="form-text text-danger text-bold">:message</small>') !!}
                  </div>
                  <div class="input-group-icon mt-4">
                      <div class="icon"><i class="fas fa-layer-group" aria-hidden="true"></i></div>
                      <div class="form-select" id="default-select" value="{{old('category')}}">
                                      <select  name="category" >
                                      <option value="1">Seleccione la categoria</option>
                                       @foreach ($categorias as $categoria)
                                       <option value="{{$categoria->nombre_categoria}}">{{$categoria->nombre_categoria}}</option>
                                       @endforeach
                          </select>
                      </div>
                  </div>
                  {!! $errors->first('category', '<small class="form-text text-danger text-bold">:message</small>') !!}
                  <div class="mt-4">
                  <textarea name="message" class="single-textarea" placeholder="En que podemos ayudarle...">{{old('message')}}</textarea>
                  {!! $errors->first('message', '<small class="form-text text-danger text-bold">:message</small>') !!}
                  </div>
                  <button type="submit" class="genric-btn primary mt-3">Enviar</button>
              </form>
         </div>
     </section>
@endsection
