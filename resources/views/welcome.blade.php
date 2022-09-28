@extends('layouts.plantillabase')



	<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item">
        <a class="nav-link text-black bold btn mr-1" href="/">Inicio  <i class="fas fa-home"></i></a>
      </li>
	  {{-- <li class="nav-item">
        <a class="nav-link text-white bold btn mr-1" href="/">Servicios <i class="fas fa-cog"></i></a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link text-black bold btn me-1" href="{{ route('home') }}">Login  <i class="fas fa-sign-in-alt"></i></a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link text-white bold btn mr-1" href="{{ route('contacto') }}">Contacto  <i class="fas fa-address-card"></i></a>
      </li> --}}
    </ul>
	<div class="text-center">
	<a href="/">
	            <img src="./assets/img/logo.png" class="img-fluid mt-2 mb-1" width="150px" alt="Designlopers" class="img-fluid">
	        </a>
			</div>
  </div>
</nav>

<!-- Carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="d-block w-100 img-fluid vh-100" src="../assets/img/4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100 img-fluid vh-100" src="../assets/img/10.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100 img-fluid vh-100" src="../assets/img/1.jpg" alt="Third slide">
    </div>
  </div>

</div>

	<!-- Footer -->
<section class="">
  <!-- Footer -->
  <footer class="text-center text-white bg-success">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      {{-- <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Registrarse</span>
		  <a class="btn btn-outline-light btn-rounded" href="{{ route('register') }}">Inscribirse</a>
        </p>
      </section> --}}
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->
	<div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/Copesiuna-R-L-111428190613088"
        role="button"
        >Encuentranos en facebook   <i class="fab fa-facebook-f"></i>
    </a>
    </section>
    <!-- Section: Social media -->

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ver los reportes climatologicos <i class="fas fa-cloud-rain"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="https://ambientweather.net/">Busca la ubicación   <i class="fas fa-search"></i></a>
          <a class="dropdown-item" href="">Siuna </a>
          <a class="dropdown-item" href="https://ambientweather.net/dashboard/641ad895d38c0da9260472417dc828fe">Rosita</a>
          <a class="dropdown-item" href="https://ambientweather.net/dashboard/115bfe1e4930ac5754c99f8065a3f26f">Bonanza</a>
          <a class="dropdown-item" href="https://ambientweather.net/dashboard/ed0d9a87d9f133957b64282390de3c1d">Waslala</a>
        </div>
      </div>
  </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">CoopesiunaR.L Todos los derechos reservados</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
