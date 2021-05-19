@extends('layouts.plantillabase')

	<!-- Header -->
	<header class="header full-box bg-white">
	    <div class="header-brand full-box">
	        <a href="index.html">
	            <img src="./assets/img/logo.png" alt="Designlopers" class="img-fluid">
	        </a>
	    </div>

	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold scroll" onclick="show_menu_mobile()" >
	            <ul class="list-unstyled full-box" >
	                <li>
	                    <a href="" >Inicio</a>
	                </li>
	                <li>
	                    <a href="">Servicios</a>
	                </li>
	                <li>
	                    <a href="{{ route('home') }}">Login</a>
	                </li>
	                <li>
	                    <a href="{{ route('contacto') }}">Contacto</a>
	                </li>
	            </ul>
	        </nav>
	    </div>
	</header>
	<!-- Content -->
	<div class="banner">
	    <div class="banner-body">
	        <h3 class="text-uppercase">COPESIUNA.RL, LE DA LA BIENVENIDA</h3>
	        <p>Somos una cooperativa Cacaotera, organizada y comprometida con mejorar la calidad de vida de sus asociados,brindadando servicios y productos de calidad.</p>
	    </div>
	</div>
	@section('js')
<scritp>
Swal.fire(
  'The Internet?',
  'That thing is still around?',
  'question'
)
</scritp>
@stop
	<!-- Footer -->
	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i> Csteven, TonyNavas</h5></li>
	                    <li> Todos los derechos reservados </li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Nicaragua</h5></li>
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i> El hormigero, Nicargua, Centro América</li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
	                    <li>
	                        <a href="https://www.facebook.com/TonyNavas27" class="footer-link" target="_blank" >
	                            <i class="fab fa-facebook fa-fw"></i> Facebook
	                        </a>
	                    </li>

	                    <li>
	                        <a href="https://www.youtube.com/c/CarlosAlfaro007" class="footer-link" target="_blank" >
	                            <i class="fab fa-youtube fa-fw"></i>
	                                Youtube
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>
