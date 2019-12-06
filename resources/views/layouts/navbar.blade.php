    <style>
        
    </style>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main_menu_iner">
                        <div class="logo">
                        <a href="{{route('index')}}" ><img src="img/e2castillo/logos/white-logo-e2castillo.svg" id="complete-logo" alt="#"></a>
                        <a href="{{route('index')}}" ><img src="img/e2castillo/logos/white-logo-letters-e2castillo.svg" id="partial-logo" class="d-none" alt="#"></a>
                            
                        </div>
           
                                <div class="menu-trigger visible-xs">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                            </div>
                        
                        <div class="off-canven-menu">
                            <span class="close-icon">
                                <i class="ti-close"></i>
                            </span>
                            <div class="canven-menu-warp">
                                <div class="canven-menu-iner">
                                    <ul>

                                        {{-- falta helper de clase active --}}
                                    <li><a href="{{route('index')}}">Inicio</a></li>
                                    <li><a href="{{route('about')}}">Nosotros</a></li>
                                    <li><a href="{{route('service')}}">Servicios</a></li>
                                    <li><a href="{{route('project')}}">Proyectos</a></li>
                                    <li><a href="{{route('melamines')}}">Materiales</a></li>
                                    <li><a href="{{route('contact')}}">Contactanos</a></li>
                                    </ul>

                                   {{--  <div class="container">
                                        <div class="row d-flex justify-content-center align-items-center">
                                                <div class="col-lg-4 d-flex justify-content-center ">
                                                    <img class="logo-sidenav" src="./img/favicon.png" alt="" srcset="">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-center">
                                                    <p>Visita E2Castillo Arquitectos</p>
                                                </div>
                                            </div>
                                  </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->