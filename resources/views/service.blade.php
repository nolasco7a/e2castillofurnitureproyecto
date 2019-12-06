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
                           <h2>Servicios</h2>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
        <!-- breadcrumb start-->
    
        <!-- service part start-->
        <section class="service_part single_service_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section_tittle">
                            <h2>Nuestros Servicios</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia cum et eaque ab. Asperiores molestiae, nisi aut molestias perferendis alias exercitationem itaque quidem maxime vero ad veritatis ullam. Tempora aut recusandae nemo ipsa? Ab ullam, odit quibusdam corrupti labore ducimus facere laboriosam nemo voluptatum velit ut earum eaque laborum inventore.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia cum et eaque ab. Asperiores molestiae, nisi aut molestias perferendis alias exercitationem itaque quidem maxime vero ad veritatis ullam. Tempora aut recusandae nemo ipsa? Ab ullam, odit quibusdam corrupti labore ducimus facere laboriosam nemo voluptatum velit ut earum eaque laborum inventore.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service_slider owl-carousel" id="slider_pag_servicios">
                            <div class="single_service_slide">
                                @foreach ($servicios as $servicio)
                                <div class="row justify-content-end align-items-center single_service">
                                    @if ($servicio->id % 2 !== 0)
                                   <div class="col-lg-6 col-md-6">
                                   <img src="storage/{{$servicio->imagen}}" alt="#">
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="service_text service_text_p1">
                                        <h3>{{$servicio->nombre}}</h3>
                                            <p>{{$servicio->descripcion}} </p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="row align-items-center mt_less_115 single_service">
                                  @if ($servicio->id % 2 == 0)
                                  <div class="col-lg-5 col-md-6 d-none d-md-block">
                                        <div class="service_text service_text_p2">
                                        <h3>{{$servicio->nombre}}</h3>
                                        <p>{{$servicio->descripcion}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                    <img src="storage/{{$servicio->imagen}}" alt="#">
                                    </div>
                                    <div class="col-lg-5 col-md-6 d-block d-md-none mb-4">
                                            <div class="service_text service_text_p2">
                                            <h3>{{$servicio->nombre}}</h3>
                                            <p>{{$servicio->descripcion}}</p>
                                            </div>
                                        </div>
                                  @endif
                                </div>
                                   @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- service part end-->
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