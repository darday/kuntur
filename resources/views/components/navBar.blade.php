<div>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top text-center" >
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" style="background-color: black" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <!--<img src="../img/logos/icofestival.png" alt="" height="70%" width="60%">-->
            </a>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav "><!--ml-auto-->
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>-->
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">INICIO</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/peliculas') }}">PELÍCULAS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="proyectos.php">WAWAS AL CINE</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="galeria.php">PROGRAMACIÓN</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">NOTICIAS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">GALERIA</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">NOSOTROS</a>
                    </li>

                </ul>

            </div>
            <div class="flex-center position-ref float-right ">
                    @if (Route::has('login'))
                        <div class="right link buttonunion" style="padding: 0 0 px">
                            @auth
                                @if(Auth::user()->rol == 'admin')
                                       <a href="{{ url('/admin') }}">  PERFIL ADMIN</a>
                                @endif

                                 @if(Auth::user()->rol == 'user')
                                       <a href="{{ url('/home') }}">  PERFIL</a>
                                @endif


                            @else
                                <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-dark">INGRESA</button></a>

                                @if (Route::has('register'))

                                    <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">REGISTRATE</button></a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
        </div>
    </nav>
</div>
