@extends('layouts.plantillabase')
<body>
	<nav class="full-box NavBar">
		<div class="full-box NavBar-logo">
			<figure class="full-box">
				<img src="assets/img/logo.png" alt="Acodjar" class="img-responsive">
			</figure>	
		</div>
		<ul class="full-box list-unstyled text-right NavBar-navigation">
			<li>
				<a href="index.html" class="text-condensed">INICIO</a>
			</li>
			<li>
				<a href="servicios.html" class="text-condensed">SERVICIOS</a>
			</li>
			<li>
				<a href="contactenos.html" class="text-condensed">CONTÁCTENOS</a>
			</li>
		</ul>
		<span class="glyphicon glyphicon-option-vertical visible-xs btn-mobile-menu" aria-hidden="true"></span>
	</nav>
	<section class="full-box section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h2 class="text-center text-titles">Contáctenos</h2>
					<p class="text-center lead">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim modi, assumenda maxime esse delectus deleniti odio, ad perspiciatis repudiandae, reprehenderit eveniet nemo nihil tempore fuga eaque, voluptatibus debitis nesciunt voluptas?
					</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<form action="">
						<div class="form-group">
						    <label for="form-name">Nombre</label>
						    <input type="text" class="form-control" id="form-name" placeholder="Nombre" required="">
						</div>
						<div class="form-group">
						    <label for="form-email">Correo electrónico</label>
						    <input type="email" class="form-control" id="form-email" placeholder="Correo electrónico" required="">
						</div>
						<div class="form-group">
						    <label for="form-msj">Mensaje</label>
						    <textarea class="form-control" id="form-msj" rows="3" placeholder="Mensaje" required=""></textarea>
						</div>
						<p class="text-center">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</p>
					</form>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<h2 class="text-center text-titles">Ubicación geográfica</h2>
					<div class="full-box" id="map-site">
						<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1157.494979387684!2d-84.89910383877799!3d13.736065703590192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d13.727454799999999!2d-84.776799!4m5!1s0x8f12b30847bc8edd%3A0x4258180356c201a3!2scoopesiuna!3m2!1d13.7363793!2d-84.8998781!5e1!3m2!1ses!2sni!4v1615449834777!5m2!1ses!2sni" frameborder="0" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="full-box footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="list-unstyled text-center social-icons">
						<li>
							<a href="#!">
								<i class="fa fa-facebook" aria-hidden="true" style="background-color: #2B3990;"></i>
							</a>
						</li>
						<li>
							<a href="#!">
								<i class="fa fa-twitter" aria-hidden="true" style="background-color: #26A9E0;"></i>
							</a>
						</li>
						<li>
							<a href="#!">
								<i class="fa fa-youtube" aria-hidden="true" style="background-color: #EC1B23"></i>
							</a>
						</li>
						<li>
							<a href="#!">
								<i class="fa fa-instagram" aria-hidden="true" style="background-color: #32689C"></i>
							</a>
						</li>
						<li>
							<a href="#!" aria-hidden="true" style="background-color: #BE1D2C"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12">
					<p class="text-center text-condensed">
						Copyright &copy; 2017 Carlos Alfaro
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>