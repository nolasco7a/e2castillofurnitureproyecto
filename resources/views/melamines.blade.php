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
                        <h2>Materiales</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- breadcrumb start-->
<section class="home_tips padding_top">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-6">
                    <div class="home_tips_text">
                        <h1>Materiales de Elaboracion</h1>
                        <p>Con E2Castillo furniture puede tener la plena confianza que los materiales que utilizamos de un nivel premium, para garantizar la durabilidad y la buena calidad de los productos terminados.</p>
                        <p>A continuación se muestra una variedad de colores de melaminas para que pueda tener una referencia del color que quiere sus muebles.</p>
                    </div>
                </div>
                <p>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-bottom: 8rem;">
                    @foreach ($melaminas as $melamina)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <?php
                            $imagen = str_replace('\\', '/', $melamina->imagen)    
                        ?>
                        <a href="storage/{{$imagen}}" class="melamina" title="{!! $melamina->nombre !!}">
                            <div class="card p-0 mt-3" style="border:none">
                                    <img src="storage/{{$imagen}}" class="card-img-top" alt="{{$melamina->nombre}}">
                                            <div class="card-body pb-0" >
                                            <h5 class="card-title py-1">{{$melamina->nombre}}</h5>
                                            {{-- <p class="pb-1 pt-0">{{$melamina->description}}</p> --}}
                                            </div>
                                          </div>
                        </a>
                    </div>
                    @endforeach
            </div>
        </div>
        <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-6">
                        <div class="home_tips_text">
                            <h1>Colores Solidos</h1>
                            <p>Colores que pueden ajustarse a la imagen de tu empresa</p>
                        </div>
                    </div>
        </div>
        <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-6">
                        <div class="home_tips_text">
                            <h1>MDF</h1>
                            <p>Pintados al gusto con pintura a presion con acabados mates o brillantes</p>
                        </div>
                    </div>
        </div>
        {{-- Colores solidos --}}
        {{-- colores que pueden ajustarse a la imagen de tu empresa... --}}
        {{-- MDF --}}
        {{-- pintados al gusto con pintura a presion con acabados mates o brillantes --}}
        {{-- countertop --}}
        {{-- Encimera **** Complmento liso que se coloca encima del mueble de cocina, baños etc, soportan altas temperatuas, donde se debe soportar las altas tempreturas que adquieren los implementos de cocina--}}
</section>
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
          <div class="container my-4">
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