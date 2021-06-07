@extends('layouts.plantillabase')

	<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item">
        <a class="nav-link text-white bold btn mr-1" href="/">Inicio  <i class="fas fa-home"></i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white bold btn mr-1" href="/">Servicios <i class="fas fa-cog"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white bold btn me-1" href="{{ route('home') }}">Login  <i class="fas fa-sign-in-alt"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white bold btn mr-1" href="{{ route('contacto') }}">Contacto  <i class="fas fa-address-card"></i></a>
      </li>
    </ul>
	<div class="text-center">
	<a href="index.html">
	            <img src="./assets/img/logo.png" class="img-fluid mt-2 mb-1" width="150px" alt="Designlopers" class="img-fluid">
	        </a>
			</div>
  </div>
</nav>
	<!-- Content -->
	<div class="banner">
	    <div class="banner-body">
	        <h3 class="text-uppercase">COPESIUNA.RL, LE DA LA BIENVENIDA</h3>
	        <p>Somos una cooperativa Cacaotera, organizada y comprometida con mejorar la calidad de vida de sus asociados,brindadando servicios y productos de calidad.</p>
	    </div>
	</div>
	<!-- Footer -->
<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Registrarse</span>
		  <a class="btn btn-outline-light btn-rounded" href="{{ route('register') }}">Inscribirse</a>
        </p>
      </section>
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
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
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