@extends('layouts.plantillabase')
<header>
	<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="First slide" class="d-block w-100" src="https://firebasestorage.googleapis.com/v0/b/login-firebase-cdb0d.appspot.com/o/4.jpg?alt=media&token=aecaae94-6a4f-4060-8814-cf0dc3688aae">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">Web Development</h5>
					<p class="animated bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">More Info</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="https://firebasestorage.googleapis.com/v0/b/login-firebase-cdb0d.appspot.com/o/5.jpg?alt=media&token=67af152b-7f77-4c72-9cb1-7fb4f170174f">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated slideInDown" style="animation-delay: 1s">web design</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="https://firebasestorage.googleapis.com/v0/b/login-firebase-cdb0d.appspot.com/o/10.jpg?alt=media&token=2552b8d0-2adc-4e1b-a5d0-fc7937b27888">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated zoomIn" style="animation-delay: 1s">Digital Marketing</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
				</div>
			</div>
		</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
	</div>
	</header>
	<section class="full-box section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="text-center text-titles">¡Bienvenido!</h2>
					<p class="lead text-justify">
						¡Hola! Un gusto saber de ti, sabemos que tu tiempo es valioso, por lo tanto te contamos rápidamente un poco sobre nosotros, somos la Asociación Cooperativa de Ahorro y Crédito Comunal Dr. José Antonio Ruíz de Responsabilidad Limitada, una institución financiera formada por una comunidad unida por principios y valores cooperativos, trabajando para el mejoramiento de nuestra calidad de vida, por medio de servicios financieros de calidad.
					</p>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-xs-12 col-md-4" style="padding: 17px 0;">
					<i class="fa fa-briefcase icon-services" aria-hidden="true"></i>
					<h3 class="text-center text-titles">Nuestros Servicios</h3>
					<ul class="list-unstyled full-box list-services">
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Ahorros
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Créditos
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Remesas Familiares
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Pago de Servicios Básicos
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Seguros
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Tarjeta de Débito
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-md-4" style="padding: 17px 0;">
					<i class="fa fa-heart icon-services" aria-hidden="true"></i>
					<h3 class="text-center text-titles">Principios Cooperativos</h3>
					<ul class="list-unstyled full-box list-services">
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Membresía abierta y voluntaria
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Control democrático de los miembros
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Participación económica de los miembros
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							 Autonomía e independencia
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Educación, formación e información
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Cooperación entre cooperativas
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Compromiso con la comunidad
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-md-4" style="padding: 17px 0;">
					<i class="fa fa-balance-scale icon-services" aria-hidden="true"></i>
					<h3 class="text-center text-titles">Valores Cooperativos</h3>
					<ul class="list-unstyled full-box list-services">
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Ayuda mutua
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Responsabilidad
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Democracia
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Igualdad
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Equidad
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
							Solidaridad
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="full-box cover section-lema">
		<div class="full-box section-lema-bg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p class="text-condensed text-center">
							Tenemos 50 Años de brindarte servicios financieros de calidad y atención personalizada que ayudan a mejorar tu calidad de vida
						</p>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<section class="full-box section section-a">
		<h2 class="text-center text-titles">¿Cómo Asociarse?</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-push-4 col-sm-4">
					<div class="section-a-container">
						<h3 class="text-center text-condensed">Lorem ipsum.</h3>
						<p class="text-center section-a-p">Lorem ipsum dolor sit.</p>
						<h3 class="text-center text-condensed">Lorem ipsum dolor sit amet, consectetur adipisicing..</h3>
					</div>
				</div>
				<div class="col-xs-12 col-sm-pull-4 col-sm-4">
					<div class="section-a-container">
						<p class="text-center section-a-p">San Sebastián</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing...<br>
							Tels.: XXXXXXXX
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="section-a-container">
						<p class="text-center section-a-p">Nombre de Jesús</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing... <br>
							Tels.: XXXXXXXX
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="section-a-container">
						<p class="text-center section-a-p">Cojutepeque</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing... <br>
							Tels.: XXXXXXXX
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="section-a-container">
						<p class="text-center section-a-p">Ilobasco</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing... <br>
							Tels.: XXXXXXXX
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="section-a-container">
						<p class="text-center section-a-p">San Vicente</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing... <br>
							Tels.: XXXXXXXX
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-push-2 col-sm-4">
					<div class="section-a-container">
						<p class="text-center section-a-p">San Salvador</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing... <br>
							Tels.: XXXXXXXX
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-push-2 col-sm-4">
					<div class="section-a-container">
						<p class="text-center section-a-p">Ciudad Victoria</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing... <br>
							Tels.: XXXXXXXX
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="full-box section" style="background-color: #005A4A;">
		<h2 class="text-condensed text-center" style="color: #F5D817;">Lorem ipsum dolor sit amet, consectetur adipisicing:</h2>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<p style="color:#fff;">
						Te damos la oportunidad de: <br>
						•  Ahorrar y que tu dinero gane más. <br>
						• Hacer créditos con las mejores tasas de interés. <br>
						•  Recibir remesas familiares sin largas filas, ni contratiempos. <br>
						• Con nuestra tarjeta de débito puedes llevar tus ahorros contigo.
					</p>
				</div>
				<div class="col-xs-12 col-sm-4">
					<p style="color:#fff;">
						• Te ofrecemos las mejores tasas de intereses <br>
						• Te aplicamos los intereses a cabalidad <br>
						• Te damos un seguro extra por defunción <br>
						• Te brindamos seguridad <br>
						• Te damos un servicio personalizado
					</p>
				</div>
				<div class="col-xs-12 col-sm-4">
					<p style="color:#fff;">
						• Estamos respaldados por INSAFOCOOP,
     					FEDECACES y SEGUROS FUTUROS. <br>
						• Te ofrecemos solidez <br>
						• Eres un asociado <br>
						• Participas en promociones <br>
						• Participas en Asamblea General de Asociados
					</p>
				</div>
			</div>
		</div>
	</section>
<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
<!--headin5_amrc-->
<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
<p><i class="fa fa-phone"></i>  +91-9999878398  </p>
<p><i class="fa fa fa-envelope"></i> info@example.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Image Rectoucing</a></li>
<li><a href="http://webenlance.com">Clipping Path</a></li>
<li><a href="http://webenlance.com">Hollow Man Montage</a></li>
<li><a href="http://webenlance.com">Ebay & Amazon</a></li>
<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
<li><a href="http://webenlance.com">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Remove Background</a></li>
<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
<li><a href="http://webenlance.com">Logo Design</a></li>
<li><a href="http://webenlance.com">Vectorization</a></li>
<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
<li><a href="http://webenlance.com">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="http://webenlance.com">Home</a></li>
<li><a href="http://webenlance.com">About</a></li>
<li><a href="http://webenlance.com">Services</a></li>
<li><a href="http://webenlance.com">Pricing</a></li>
<li><a href="http://webenlance.com">Blog</a></li>
<li><a href="http://webenlance.com">Contact</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

<ul class="social_footer_ul">
<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>

