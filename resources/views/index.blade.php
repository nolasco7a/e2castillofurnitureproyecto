@extends('layouts.template')
@section('content')
<style>
    .img {
  width:100%;
  height:100%;
  object-fit:cover;
}
</style>
        <!-- banner part start-->
        @foreach ($banners as $banner)
        <?php
            $imagenBanner = str_replace('\\','/', $banner->imagen);
        ?>
        <section class="banner_part" style="background-image: url(storage/{{$imagenBanner}});">
        @endforeach
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner_text">
                                @foreach ($anuncios as $anuncio)
                                <div class="banner_text_iner">
                                    {{-- Anuncios de banner --}}
                                    <div style="width: auto; height:auto">
                                    <h5>{{$anuncio->sub_titulo}}</h5>
                                    <h1>{{$anuncio->titulo}}</h1>
                                    <p>{{$anuncio->descripcion}}</p>
                                    <div class="banner_btn">
                                    <a href="{{$anuncio->enlace}}" class="btn_1">QUIERO VER MÁS <span><img src="img/icon/left.svg" alt=""></span>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="nav next"><a href="#"><span class="flaticon-left-arrow"></span></a></div>
                            <div class="nav prev"><a href="#"><span class="flaticon-right-arrow"></span></a></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner part start-->
                    <!-- banner part start-->
            <div class="our_speciality">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            {{-- Fortalezas --}}
                            @foreach ($fortalezas as $fortaleza)
                            <div class="single_special_part col-lg-3 col-md-12 border_left" style="z-index: 99">
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
            <!-- banner part start-->
        
         
        
            <!-- about part start-->
            <div class="about_part section_bg">
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-lg-4 col-md-6">
                            <div class="about_part_text">
                                <h2>Acerca de Nosotros</h2>
                                <p>Somos una empresa dedicada al diseño y elaboración, especializada en muebles de vanguardia para cubrir todas sus necesidades.</p>
                                <p>Trabajamos a nivel nacional.</p>
                            <a href="{{route('about')}}" class="btn_1">QUIERO CONOCERLOS <span><img src="img/icon/left.svg" alt=""></span> </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="about_img">
                                <img src="img/about_overlay.jpeg" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about part end-->        
            <!-- service part start-->
            {{-- 
            medicios de espacios
            dise;o de muebles a medida
            maquetado y prototipado
            instalacion    
            --}}
            <section class="service_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section_tittle">
                                <h2>Nuestros Servicios</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service_slider owl-carousel" id="slider_services_index">
                                @foreach ($servicios as $servicio)
                                <div class="single_service_slide">
                                        <div class="row justify-content-end align-items-center single_service">
                                            <div class="col-lg-6 col-md-6">
                                            <img src="storage/{{$servicio->imagen}}" class="img" alt="#">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="service_text">
                                                <h3>{{$servicio->nombre}}</h3>
                                                    <p>
                                                        {{$servicio->descripcion}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                @endforeach                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service part end-->
        
            <!-- blog part start-->
            <section class="blog_part">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7">
                            <div class="section_tittle">
                                <h2>Resultado</h2>
                                <p>Cada proyecto que emprendemos es único y depende de la tipología del cliente que nos lo encarga y del mercado y las necesidades que tiene en cada momento. Lo que no cambia es nuestra actitud frente a los retos y el compromiso de calidad y servicio al cliente.</p>
                            <a href="{{route('project')}}" class="btn_1">QUIERO VER TODOS LOS PROYECTOS <span><img src="img/icon/left.svg" alt=""></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog_post_slider owl-carousel">
                                @foreach ($proyectos as $proyecto)
                                <div class="single_blog_post">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="single_img">
                                                    {{-- covertir cadena de texto a un array --}}
                                                    {{-- poner dimension correcta de imagenes --}}
                                                    {{-- a;adir nuevos campos a proyectos
                                                            *descripcion
                                                            *portada de proyecto o estandarizar la dimension de las imagenes    
                                                    --}}
                                                    <?php
                                                        /* $arregloImagenes = $proyecto->imagen; 
                                                        $arregloImagenes = explode(",", $arregloImagenes); */
                                                        $imagen_portada = str_replace('\\', '/', $proyecto->imagen_portada);
                                                        
                                                     ?>
                                                    <a href="{{route('project')}}"><img class="single-gallery-image" src="storage/{{$imagen_portada}}" alt="#"></a>
            
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="single_project_text">
                                                    <div class="single_project_tittle">
                                                    <h4> <a href="blog.html">{{$proyecto->nombre}}</a></h4>
                                                   
                                                        <span>categoria: {{$proyecto->nombre_categoria}}</span>
                                                    </div>
                                                    <p>{{$proyecto->descripcion}}</p>
                                                    <a href="{{route('project')}}" class="">Ver Proyectos</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="slider-counter"></div>
                        </div>
                    </div>
                
                </div>
            </section>
            <!-- blog part end-->
@endsection