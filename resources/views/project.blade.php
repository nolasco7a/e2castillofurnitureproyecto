@extends('layouts.template')
@section('content')
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
                <h2>Proyectos</h2>
            </div>
        </div>
    </div>
</div>
</div>
</section>
        <!-- breadcrumb start-->

        <div class="container">
            <div class="col-lg-8 my-3">
                    <h1>Conoce algunos de nuestros proyectos</h1>
                    <p>E2Castillo furniture pone todas sus fortalezas a trabajar pasion, innovacion y creatividad en cada uno de los proyectos que hacemos.</p>
                    <p>Garantizando siempre la calidad y durabilidad de nuestros productos, asegurando con ello la satisfaccion y superacion de las espectativas de nuestros clientes</p>
            </div>
            {{-- filtro de proyectos --}}

        <form method="get" class="mb-4">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="input-group-icon mt-4">
                            <div class="icon"><i class="fas fa-layer-group" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select" value="{{old('filter-category')}}">
                                            <select  name="categoryFilter" >
                                            <option value="1">Seleccione la categoria</option>
                                             @foreach ($categorias as $categoria)
                                             <option value="{{$categoria->nombre_categoria}}">{{$categoria->nombre_categoria}}</option>
                                             @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="submit" class="genric-btn primary mt-3">Buscar</button>
                    </div>
                </div>
            </form>
            <div class="card-columns" style="margin-bottom: 8rem;">
                    @foreach ($proyectos as $proyecto)
                    <?php
             /*        $arregloImagenes = $proyecto->imagen_portada; 
                    $arregloImagenes = explode(",", $arregloImagenes);
                    $primeraImagen = str_replace('"', '', $arregloImagenes[1]);
                    $primeraImagen = str_replace('\\', '/', $primeraImagen);
                    $primeraImagen = str_replace('//', '/', $primeraImagen); */
                    $imagen_portada = str_replace('\\', '/', $proyecto->imagen_portada)
                    ?>
                    <a href="storage/{{$imagen_portada}}" class="proyecto" title="{!! $proyecto->nombre !!}" data-lcl-txt="{!! $proyecto->descripcion !!}">
                        <div class="{{-- col-lg-3 col-md-4 col-sm-6 col-xs-12 --}}">
                            <div class="shadow-hover card p-0 mt-1" style="border:none">
                                <img src="storage/{{$imagen_portada}}" class="card-img-top" alt="{{$proyecto->nombre}}">
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
               <div class="container d-flex justify-content-center">
                    {{ $proyectos->links() }}
               </div>
        </div>
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