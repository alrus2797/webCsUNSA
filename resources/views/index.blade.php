@extends('templates.theme')

@section('title', 'School Of Computer Science UNSA')

@section('scripts')

@endsection

@section('home', 'active')

@section('body')

	<header id="header" class="header fixed-top">
		<div class="branding">
			<div class="container-fluid">
				<nav class="main-nav navbar navbar-expand-lg">
					<div class="site-logo"><a class="scrollto" href="#hero-block"><img class="logo-icon" src="/images/cslogos/logo-only.png" alt="logo"></a></div>
					<div class="site-logo"><a class="scrollto" href="#hero-block"><img class="logo-icon" src="/images/cslogos/logo-white.svg" alt="logo"></a></div>

					<div id="navigation" class="navbar-collapse collapse  justify-content-lg-end mr-lg-3">
						<ul class="nav navbar-nav">
							<li class="nav-item"><a class="nav-link scrollto" href="#">[EN CONSTRUCCIÓN]</a></li>
						</ul>
					</div>

					<!-- Register -->
					<div class="navbar-btn order-lg-2"><a class="btn btn-secondary" href="#" target="_blank">Registrarse</a></div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="navigation" class="navbar-collapse collapse  justify-content-lg-end mr-lg-3">
						<ul class="nav navbar-nav">

							<li class="nav-item"><a class="nav-link scrollto" href="#about-section">Sobre</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#speakers-section">Ponencias</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#schedule-section">Cronograma</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#venue-section">Participación</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#sponsors-section">Sponsors</a></li>
						</ul><!--//nav-->
					</div><!--//navabr-collapse-->

				</nav><!--//main-nav-->

			</div><!--//container-->
		</div><!--//branding-->
	</header><!--//header-->

	<div id="hero-block" class="hero-block">
		<div id="hero-carousel" class="hero-carousel carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item-1 carousel-item active">
				</div>
				<div class="carousel-item-2 carousel-item">
				</div>
				<div class="carousel-item-3 carousel-item">
				</div>
			</div>
		</div>
		<div class="hero-block-mask"></div>
		<div class="container">
			<div class="hero-text-block">
				<h1 class="hero-heading mb-2">3ra. Semana CS 2020</h1>
				<div class="hero-meta mb-3"><i class="far fa-calendar-alt mr-2"></i>26 - 30 Oct <i class="fas fa-map-marker-alt mx-2"></i>Arequipa, Perú</div>
				<div class="hero-intro mb-4">El mayor evento de la Escuela Profesional <br>de Ciencia de la Computación.</div>
				<!-- Register -->
				<div class="hero-cta"><a class="btn btn-primary btn-lg" href="#" target="_blank">Registrarse</a></div>

			</div><!--//hero-text-block-->
		</div><!--//container-->

	</div><!--//hero-block-->

	<div class="stats-block theme-bg-primary text-white py-4 text-center">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">250+</div>
						<div class="unit">Asistentes</div>
					</div><!--//item-->
				</div><!--//col-->
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">5</div>
						<div class="unit">Días</div>
					</div><!--//item-->
				</div><!--//col-->
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">20+</div>
						<div class="unit">Charlas</div>
					</div><!--//item-->
				</div><!--//col-->
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">2+</div>
						<div class="unit">Actividades Sociales</div>
					</div><!--//item-->
				</div><!--//col-->
			</div>
		</div><!--//container-->
	</div><!--//stats-block-->

	<section id="about-section" class="about-section section theme-bg-light">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Sobre Nosotros</h3>
			<div class="section-intro single-col-max mx-auto mb-4">La <strong>Escuela Profesional de Ciencia de la Computación</strong> tiene por objetivo
				formar profesionales aptos para <strong>identificar problemas del mundo real y proponer soluciones inéditas o mejorar las ya existentes</strong>,
				convirtiéndolos en líderes de la realización de un determinado proyecto por intermedio de la construcción de <strong>modelos computacionales
				y su implementación</strong>. Su trabajo exige una constante interacción con la <strong>comunidad científica</strong>, con el fin de desarrollar
				nuevos conocimientos y técnicas computacionales.</div>
		</div><!--//container-->

		<div class="container">
			<h3 class="section-heading text-center mb-3">Sobre la Semana</h3>
			<div class="section-intro single-col-max mx-auto mb-4">
				La Semana de Ciencia de la Computación es un evento organizado anualmente por la Escuela Profesional de Ciencia de la Computación de la
				Universidad Nacional de San Agustín de Arequipa, en la cual se exponen los distintos trabajos y logros
				de estudiantes y docentes, además de contar con una serie de charlas y conferencias de
				<strong>ponencias nacionales e internacionales</strong>. No bastando con las actividades académicas, también se realizan
				una serie de Actividades Sociales y Competitivas, como el concurso de programación y los concursos de talentos.</div>
			<div class="benefits-list text-center mb-3">
				<h4 class="text-center mb-4">¿Por qué participar?</h4>
				<ul class="list-unstyled text-left d-inline-block">
					<li><i class="fas fa-check-circle mr-2"></i>Tendrás la oportunidad para conocer más sobre nosotros como escuela</li>
					<li><i class="fas fa-check-circle mr-2"></i>Recibirás charlas de los mejores ponentes nacionales e internacionales en Computación</li>
					<li><i class="fas fa-check-circle mr-2"></i>Descubrirás el estado del arte de las distintas áreas de interés en Computación</li>
					<li><i class="fas fa-check-circle mr-2"></i>Conocerás nuevas personas y tendrás nuevos contactos de distintos lugares</li>
					<li><i class="fas fa-check-circle mr-2"></i>Tendrás la oportunidad de participar en los distintos concursos</li>
					<li><i class="fas fa-check-circle mr-2"></i>Podrás participar de las actividades de confraternización</li>
					<li><i class="fas fa-check-circle mr-2"></i>Si eres alumno, podrás presentar tus proyectos y así iniciarte como investigador</li>
				</ul>
			</div><!--//benefits-list-->
			<div class="event-countdown text-center mb-3">
				<h4 class="countdown-intro mb-2 text-center mb-3">El Evento Inicia En:</h4>
				<div id="countdown-box" class="countdown-box"></div>
			</div><!--//event-countdown-->
			<!-- Register -->
			<div class="about-cta text-center mb-5"><a class="btn btn-secondary btn-lg  mb-5" href="#" target="_blank">¡Regístrate Hoy!</a></div>
		</div><!--//container-->

		<div class="media-block theme-bg-primary py-5">
			<div class="container">
				<h4 class="text-white text-center mb-3">Antes de Comenzar</h4>
				<div class="section-intro text-center single-col-max mx-auto text-white mb-5">
					Antes de comenzar, te proponemos revisar el video de nuestra Primera Semana de Ciencia de la Computación, la cual se dio en el año 2018 de forma presencial.
					Debido a la situación actual, esta Tercera Semana de Ciencia de la Computación será de forma virtual, pero a pesar de ello, esta misma se hará de la mejor
					forma posible gracias a la preparación que venimos realizando previamente.
				</div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-6 offset-lg-3 mb-3">
						<div class="embed-responsive embed-responsive-16by9">

							<iframe width="560" height="315" src="https://www.youtube.com/embed/TThtTUnP0z4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div><!--//embed-responsive -->
					</div><!--//col-->
				</div><!--//row-->
			</div><!--//container-->
		</div><!--//media-block-->
	</section><!--//about-section-->

	<section id="speakers-section" class="speakers-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Ponentes</h3>
			<div class="section-intro text-center single-col-max mx-auto mb-5">Los ponentes que estarán presentes para esta Semana de Ciencia de la Computación son:</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-1" data-toggle="modal" data-target="#modal-speaker-1"><img src="/images/speakers/luciano-romero.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Luciano Romero</h5>
							<div class="card-text mb-3">
								<div class="meta">Estudiante de Ph. D. en Computer Science</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-1" data-toggle="modal" data-target="#modal-speaker-1">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-2" data-toggle="modal" data-target="#modal-speaker-2"><img src="/images/speakers/lizeth-fuentes.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Lizeth Fuentes</h5>
							<div class="card-text mb-3">
								<div class="meta">Estudiante de Ph. D. en Computer Science</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-2" data-toggle="modal" data-target="#modal-speaker-2">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-3" data-toggle="modal" data-target="#modal-speaker-3"><img src="/images/speakers/marcelo-flores.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Marcelo Flores</h5>
							<div class="card-text mb-3">
								<div class="meta">MSc. Informatica</div>
								<div class="meta">Senior Developer</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-3" data-toggle="modal" data-target="#modal-speaker-3">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-4" data-toggle="modal" data-target="#modal-speaker-4"><img src="/images/speakers/jesus-mena.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Jesús Mena</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science - IME/USP/Brasil</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-4" data-toggle="modal" data-target="#modal-speaker-4">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-5" data-toggle="modal" data-target="#modal-speaker-5"><img src="/images/speakers/jorge-poco.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Jorge Poco</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">New York University</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-5" data-toggle="modal" data-target="#modal-speaker-5">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-6" data-toggle="modal" data-target="#modal-speaker-6"><img src="/images/speakers/pablo-calcina.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Pablo Calcina</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">Universidad de São Paulo</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-6" data-toggle="modal" data-target="#modal-speaker-6">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-7" data-toggle="modal" data-target="#modal-speaker-7"><img src="/images/speakers/edward-pacheco.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Edward Pacheco</h5>
							<div class="card-text mb-3">
								<div class="meta">MSc. en Informatica</div>
								<div class="meta">PUC-RJ, Brasil</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-7" data-toggle="modal" data-target="#modal-speaker-7">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-8" data-toggle="modal" data-target="#modal-speaker-8"><img src="/images/speakers/omar-flores.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Omar Florez</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">Investigador en Machine Learning, Twitter</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-8" data-toggle="modal" data-target="#modal-speaker-8">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-9" data-toggle="modal" data-target="#modal-speaker-9"><img src="/images/speakers/yamilet-serrano.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Yamilet Serrano</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">National University of Singapore</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-9" data-toggle="modal" data-target="#modal-speaker-9">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-10" data-toggle="modal" data-target="#modal-speaker-10"><img src="/images/speakers/lizeth-tapia.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Lizeth Tapia</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">Universidad de Oslo</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-10" data-toggle="modal" data-target="#modal-speaker-10">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-11" data-toggle="modal" data-target="#modal-speaker-11"><img src="/images/speakers/ernesto-cuadros.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Ernesto Cuadros</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">Fundador de la Sociedad Peruana de Computación</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-11" data-toggle="modal" data-target="#modal-speaker-11">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-12" data-toggle="modal" data-target="#modal-speaker-12"><img src="/images/speakers/cristian-lopez.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Cristian Lopez</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">Universidad Nacional de San Agustin</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-12" data-toggle="modal" data-target="#modal-speaker-12">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-13" data-toggle="modal" data-target="#modal-speaker-13"><img src="/images/speakers/juan-vilca.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Juan Vilca</h5>
							<div class="card-text mb-3">
								<div class="meta">Software Developer</div>
								<div class="meta">Amazon</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-13" data-toggle="modal" data-target="#modal-speaker-13">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-14" data-toggle="modal" data-target="#modal-speaker-14"><img src="/images/speakers/alexander-benavides.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Alexander Benavides</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta">Universidad Federal de Rio Grande do Sul</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-14" data-toggle="modal" data-target="#modal-speaker-14">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-15" data-toggle="modal" data-target="#modal-speaker-15"><img src="/images/speakers/daniel-aliaga.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Daniel Aliaga</h5>
							<div class="card-text mb-3">
								<div class="meta">Ph. D. en Computer Science</div>
								<div class="meta"> University of North Carolina at Chapel Hill</div>
							</div><!--//card-text-->
							<a href="#modal-speaker-15" data-toggle="modal" data-target="#modal-speaker-15">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
			</div><!--//row-->
			<!-- Register -->
			<div class="speakers-cta text-center py-3"><a class="btn btn-primary btn-lg" href="#" target="_blank">Registrarse</a></div>
		</div><!--//container-->

	</section><!--//speakers-section-->

	<div class="container">
		<hr>
	</div>

	<section id="schedule-section" class="schedule-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-5">Cronograma</h3>

			<!-- Nav tabs -->
			<ul class="schedule-nav nav nav-pills nav-fill" id="myTab" role="tablist">
				<li class="nav-item mr-2">
					<a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-1-content" role="tab" aria-controls="tab-1-content" aria-selected="true">
						<span class="heading">Día 1</span>
						<span class="meta">(Lun 26, Oct)</span>
					</a>
				</li>
				<li class="nav-item mr-2">
					<a class="nav-link" id="tab-2" data-toggle="tab" href="#tab-2-content" role="tab" aria-controls="tab-2-content" aria-selected="false">
						<span class="heading">Día 2</span>
						<span class="meta">(Mar 27, Oct)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tab-3" data-toggle="tab" href="#tab-3-content" role="tab" aria-controls="tab-3-content" aria-selected="false">
						<span class="heading">Día 3</span>
						<span class="meta">(Mie 28, Oct)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tab-4" data-toggle="tab" href="#tab-4-content" role="tab" aria-controls="tab-4-content" aria-selected="false">
						<span class="heading">Día 4</span>
						<span class="meta">(Jue 29, Oct)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tab-5" data-toggle="tab" href="#tab-5-content" role="tab" aria-controls="tab-5-content" aria-selected="false">
						<span class="heading">Día 5</span>
						<span class="meta">(Vie 30, Oct)</span>
					</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="schedule-tab-content tab-content">
				<div class="tab-pane active" id="tab-1-content" role="tabpanel" aria-labelledby="tab-1">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-speaker-16" data-toggle="modal" data-target="#modal-speaker-16"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/wilber-ramos.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-16" data-toggle="modal" data-target="#modal-speaker-16">Wilber Ramos</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Inauguración A Cargo Del Director Wilber Ramos Lovón</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-speaker-1" data-toggle="modal" data-target="#modal-speaker-1"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/luciano-romero.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-1" data-toggle="modal" data-target="#modal-speaker-1">Luciano Romero</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Primeros pasos como Científico de la Computación</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#modal-speaker-2" data-toggle="modal" data-target="#modal-speaker-2"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/lizeth-fuentes.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-2" data-toggle="modal" data-target="#modal-speaker-2">Lizeth Fuentes</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Juntas Construímos - Grace Hopper Celebration 2020</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#modal-speaker-3" data-toggle="modal" data-target="#modal-speaker-3"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/marcelo-flores.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-3" data-toggle="modal" data-target="#modal-speaker-3">Marcelo Flores</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Procesamiento Distribuido de Big data aplicado a IoT usando microservicios</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 16:00</h4>
							<div class="profile">
								<a href="#modal-speaker-17" data-toggle="modal" data-target="#modal-speaker-17"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/jimmy-tullume.png" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-17" data-toggle="modal" data-target="#modal-speaker-17">Jimmy Túllume</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">ICACIT - Jimmy Túllume</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google  Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">16:00 - 17:00</h4>
							<div class="profile">
								<a href="#modal-speaker-18" data-toggle="modal" data-target="#modal-speaker-18"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/edward-hinojosa.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-18" data-toggle="modal" data-target="#modal-speaker-18">Edward Hinojosa</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Acreditación - Edward Hinojosa</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google  Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">17:30 - 18:00</h4>
							<div class="profile">
								<a href="#modal-speaker-19" data-toggle="modal" data-target="#modal-speaker-19"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/juan-carlos-gutierrez.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-19" data-toggle="modal" data-target="#modal-speaker-19">Juan Carlos Gutiérrez</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Perspectiva - Juan Carlos Gutiérrez</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google  Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-1-content-->
				<div class="tab-pane no-timeline" id="tab-2-content" role="tabpanel" aria-labelledby="tab-2">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-speaker-4" data-toggle="modal" data-target="#modal-speaker-4"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/jesus-mena.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-4" data-toggle="modal" data-target="#modal-speaker-4">Jesús Mena</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Genealogia academica: Caracterización y análisis usando métodos computacionales</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-speaker-5" data-toggle="modal" data-target="#modal-speaker-5"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/jorge-poco.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-5" data-toggle="modal" data-target="#modal-speaker-5">Jorge Poco</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Towards Automatic Chart Interpretation</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								Charts and graphs are commonly used to present quantitative information. They are pervasive in scientific papers,
								textbooks, economic reports, news articles and webpages. In many cases these visualizations are the only publicly
								available representation of the underlying data. When well-designed, visualizations leverage human visual processing
								to convey information efficiently and effectively. Yet, while people can easily interpret data from charts and graphs,
								machines cannot directly access it. Today, a vast trove of information is locked inside data-driven diagrams.
								First, I will show computational models for interpreting data-driven diagrams to extract the underlying data, graphical marks,
								and mappings that relate the data to mark attributes. We aim to build generalized computational models that can accurately
								extract data from diagrams and also mimic the way people decode information from charts. Then, I will show some applications
								were we applied our automated diagram interpretation techniques: i) automatic recoloring to improve perceptual effectiveness, ii)
								interactive overlays to enable improved reading of static visualizations, and iii) use voices instead of text to generate overlays
								on a chart in real-time.
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#" data-toggle="modal" data-target="#"><img class="profile-image rounded-circle  mb-2" src="/images/cslogos/kusisqa.png" alt=""></a>
								<div class="name"><a class="theme-link" href="#" data-toggle="modal" data-target="#">Kusisqa</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Proyecto Kusisqa</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#" data-toggle="modal" data-target="#"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/default.png" alt=""></a>
								<div class="name"><a class="theme-link" href="#" data-toggle="modal" data-target="#">Ponente</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Ponencia de Alto Impacto</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 18:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Concurso de Programación</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-2-content-->
				<div class="tab-pane no-timeline" id="tab-3-content" role="tabpanel" aria-labelledby="tab-3">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-speaker-16" data-toggle="modal" data-target="#modal-speaker-16"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/wilber-ramos.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-16" data-toggle="modal" data-target="#modal-speaker-16">Wilber Ramos</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Convenio Cyted - Director Wilber Ramos Lovón</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-speaker-6" data-toggle="modal" data-target="#modal-speaker-6"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/pablo-calcina.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-6" data-toggle="modal" data-target="#modal-speaker-6">Pablo Calcina</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Internet de las Cosas: pasado, presente y futuro</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#modal-speaker-7" data-toggle="modal" data-target="#modal-speaker-7"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/edward-pacheco.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-7" data-toggle="modal" data-target="#modal-speaker-7">Edward Pacheco</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Container-based platforms: a research perspective</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								Aplicaciones modernas exigen ambientes avanzados de deployment que oculten la complejidad de mantenerlas 24/7
								y al mismo tiempo que minimicen la dependencia humana. Plataformas basadas en containers, representado principalmente
								por Kubernetes, han automatizado operaciones entre containers (escalabilidad, self-healing, etc.) y por tanto simplificando
								la gestión del ciclo de vida de aplicaciones. Su papel de orquestador de containers continúa creciendo en diferentes dominios
								al mismo tiempo que viabiliza nuevas oportunidades de investigación.
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#modal-speaker-8" data-toggle="modal" data-target="#modal-speaker-8"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/omar-flores.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-8" data-toggle="modal" data-target="#modal-speaker-8">Omar Flores</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Sobre los límites de la Inteligencia Artificial</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 18:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Trabajos de Investigación de Pregrado</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-3-content-->
				<div class="tab-pane no-timeline" id="tab-4-content" role="tabpanel" aria-labelledby="tab-4">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-speaker-9" data-toggle="modal" data-target="#modal-speaker-9"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/yamilet-serrano.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-9" data-toggle="modal" data-target="#modal-speaker-9">Yamilet Serrano</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Yamilet Serrano</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-speaker-10" data-toggle="modal" data-target="#modal-speaker-10"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/lizeth-tapia.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-10" data-toggle="modal" data-target="#modal-speaker-10">Lizeth Tapia</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Modelos Ejecutables</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-speaker-11" data-toggle="modal" data-target="#modal-speaker-11"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/ernesto-cuadros.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-11" data-toggle="modal" data-target="#modal-speaker-11">Ernesto Cuadros</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Arquitectura digital del estado Peruano (Minedu)</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								El estado peruano actualmente cuenta con 48 mil colegios, +15 centros hospitalarios, +5000 comisarías,
								1900 municipios distritales, +190 provinciales entre otros. Todas estas instituciones generan información
								que debe ser procesada y consumida por un número potencial de 32 millones de habitantes. Esta charla presenta
								una propuesta de cómo deberíamos interconectar y procesar información en todo nuestro país para que sea posible
								que un dato generado en Tacna esté disponible en cualquier tablero de control de nuestras autoridades un segundo
								después en el otro extremo del país.
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#" data-toggle="modal" data-target="#"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/default.png" alt=""></a>
								<div class="name"><a class="theme-link" href="#" data-toggle="modal" data-target="#">Ponente</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Ponencia de Alto Impacto</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 16:00</h4>
							<div class="profile">
								<a href="#modal-speaker-12" data-toggle="modal" data-target="#modal-speaker-12"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/cristian-lopez.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-12" data-toggle="modal" data-target="#modal-speaker-12">Cristian Lopez</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Cristian Lopez</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">16:00 - 17:00</h4>
							<div class="profile">
								<a href="#modal-speaker-13" data-toggle="modal" data-target="#modal-speaker-13"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/juan-vilca.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-13" data-toggle="modal" data-target="#modal-speaker-13">Juan Vilca</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Arquitecturas serverless en AWS</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">17:00 - 18:00</h4>
							<div class="profile">
								<a href="#modal-speaker-14" data-toggle="modal" data-target="#modal-speaker-14"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/alexander-benavides.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-14" data-toggle="modal" data-target="#modal-speaker-14">Alexander Benavides</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Alexander Benavides</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-4-content-->
				<div class="tab-pane no-timeline" id="tab-5-content" role="tabpanel" aria-labelledby="tab-5">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#" data-toggle="modal" data-target="#"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/default.png" alt=""></a>
								<div class="name"><a class="theme-link" href="#" data-toggle="modal" data-target="#">Ponente</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Ponencia</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#" data-toggle="modal" data-target="#"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/default.png" alt=""></a>
								<div class="name"><a class="theme-link" href="#" data-toggle="modal" data-target="#">Ponente</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Ponencia de Alto Impacto</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#modal-speaker-15" data-toggle="modal" data-target="#modal-speaker-15"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/daniel-aliaga.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-speaker-15" data-toggle="modal" data-target="#modal-speaker-15">Daniel Aliaga</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Daniel Aliaga</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Cierre de la Ceremonia</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-5-content-->
			</div><!--//schedule-tab-content-->
			<!-- Register -->
			<div class="schedule-cta text-center mx-auto"><a href="#" class="btn btn-primary btn-lg mr-md-2 d-block d-md-inline-block mb-3 mb-md-0" target="_blank">Descargar Cronograma</a><a href="#" class="btn btn-secondary btn-lg d-block d-md-inline-block" target="_blank">Registrarse</a></div>
		</div><!--//container-->
	</section><!--//schedule-section-->

	<section id="venue-section" class="venue-section section  theme-bg-primary text-white">
		<div class="container">
			<h3 class="section-heading text-center mb-5 text-white">Participación</h3>
			<div class="row py-lg-5">
				<div class="col-12 col-lg-7 h-100">
					<div class="desc">
						<h4 class="text-white mb-3">Cómo participar de la 3ra Semana de Ciencia de la Computación</h4>
						<p>
							Para poder participar de la 3ra Semana de Ciencia de la Computación podrás realizarlo vía Google Forms.
							De esta forma podremos tener registro de tu e-mail y poder Agendarte y Notificarte gracias a la herramienta Google Calendar,
							donde se estarán gestionando las invitaciones y los links correspondientes de las videoconferencias que se darán
							via Google Meet. Además, podrás sincronizar tu Google Drive con los posters o informaciones adicionales gratuitas que se
							brindarán. A continuación te presentamos los links de las plataformas para que puedas familiarizarte un poco
							más con ellas. Al final se encuentra un botón que te permitirá registrarte via Google Forms.
						</p>

						<div class="row pt-3">
							<div class="col-12 col-md-6 mb-4">
								<div class="grid-item p-4">
									<h5 class="text-white mb-3 title"><i class="fab fa-wpforms mr-2"></i>Google Forms</h5>
									<p>Google Forms es un aplicativo de gestión de información lanzado por Google.</p>
									<a class="text-white" href="https://www.google.com/forms/about/">Google Forms &rarr;</a>
								</div><!--//grid-item-->
							</div><!--col-->
							<div class="col-12 col-md-6 mb-4">
								<div class="grid-item p-4">
									<h5 class="text-white mb-3 title"><i class="fas fa-calendar mr-2"></i>Google Calendar</h5>
									<p>Google Calendar es un servicio de agendado y calendario on-line ofrecido por Google.</p>
									<a class="text-white" href="https://www.google.com/calendar/about/">Google Calendar &rarr;</a>
								</div><!--//grid-item-->
							</div><!--col-->
							<div class="col-12 col-md-6 mb-4">
								<div class="grid-item p-4">
									<h5 class="text-white mb-3 title"><i class="fab fa-google-drive mr-2"></i>Google Drive</h5>
									<p>Google Drive es un servicio de almacenamiento y sincronización de archivos ofrecido por Google.</p>
									<a class="text-white" href="https://www.google.com/drive/">Google Drive &rarr;</a>
								</div><!--//grid-item-->
							</div><!--col-->
							<div class="col-12 col-md-6 mb-4">
								<div class="grid-item p-4">
									<h5 class="text-white mb-3 title"><i class="fas fa-video mr-2"></i>Google Meet</h5>
									<p>Google Meet es un servicio de comunicación por video desarrollado por Google.</p>
									<a class="text-white" href="https://meet.google.com/">Google Meet &rarr;</a>
								</div><!--//grid-item-->
							</div><!--col-->
						</div><!--//row-->
						<h4 class="text-white mb-4 mt-3 mt-lg-5">Facilidades &amp; Registro</h4>
						<p>¡Utiliza este botón para registrarte!</p>
						<a class="btn btn-ghost" href="#">Registrarse con Google Forms</a>
					</div><!--//desc-->
				</div><!--//col-->
				<div class="col-12 col-lg-4 offset-lg-1 position-relative h-100 mt-5 mt-lg-0">
					<div class="figures-holder">
						<div class="figure figure-1"><img class="shadow" src="/images/venue/venue-1.jpg" alt=""></div>
						<div class="figure figure-2"><img class="shadow" src="/images/venue/venue-2.jpg" alt=""></div>
						<div class="figure figure-3"><img class="shadow" src="/images/venue/venue-3.jpg" alt=""></div>
						<div class="figure figure-4"><img class="shadow" src="/images/venue/venue-4.jpg" alt=""></div>
					</div><!--//figures-holder-->
				</div><!--//col-->
			</div><!--//row-->
		</div><!--//container-->
	</section><!--//venue-section-->

	<section id="sponsors-section" class="sponsors-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Sponsors &amp; Patrones</h3>
			<div class="section-intro text-center single-col-max mx-auto mb-5">¿Gustarías formar parte de la familia de Computer Science UNSA? Haz click en el botón para más información.</div>
			<div class="row logos justify-content-center">
				<div class="logo-item col-6 col-md-4 col-lg-2"><img src="/images/cslogos/logo-black.png" alt=""></div>
				<div class="logo-item col-6 col-md-4 col-lg-2"><img src="/images/logos/paulonia.jpg" alt=""></div>
			</div><!--//row-->
			<div class="sponsors-cta text-center pt-5"><a class="btn-primary btn btn-lg" href="#">Convertirse en Sponsor</a></div>
		</div><!--//container-->
	</section><!--//sponsors-section-->

	<!-- Modal Speaker 1 -->
	<div class="modal modal-speaker modal-speaker-1" id="modal-speaker-1" tabindex="-1" role="dialog" aria-labelledby="speaker-1-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-1-ModalLabel" class="modal-title sr-only">‪Luciano Arnaldo Romero Calla</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/luciano-romero.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">‪Luciano Arnaldo Romero Calla</h2>
							<div class="meta">Estudiante de Doctorado en CS <br> Investigador ESR en el proyecto EVOCATION-ITN</div>
							<div class="meta mb-2">Universidad de Zúrich</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Luciano es estudiante de doctorado en Ciencia de la Computación en la Universidad de Zúrich (desde 2019) e investigador
							ESR en el proyecto EVOCATION-ITN (evocation.eu). Realizó su Maestría en Ciencia de la Computación en la Universidad
							Federal Fluminense, Niteroi - Brasil (2017).  Egresado y Bachiller de la primera promoción de la escuela de Ciencia de
							la Computación de la Universidad Nacional de San Agustín, Arequipa - Perú (2014). Su investigación actual se centra en
							los siguientes campos: real-time ray tracing, geometry processing, computational geometry, y geometric deep learning.
							Además, tiene interés en algoritmos, estructuras de datos, grafos, programación paralela y programación competitiva.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 2 -->
	<div class="modal modal-speaker modal-speaker-2" id="modal-speaker-2" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Lizeth Joseline Fuentes Pérez</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/lizeth-fuentes.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Lizeth Joseline Fuentes Pérez</h2>
							<div class="meta">Estudiante de Doctorado en CS <br> Investigador ESR en el proyecto EVOCATION-ITN</div>
							<div class="meta mb-2">Universidad de Zúrich</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Lizeth Fuentes es estudiante de doctorado en Ciencia de la Computación en la Universidad de Zúrich (desde 2019)
							e investigador ESR en el proyecto EVOCATION-ITN (evocation.eu). Ha sido becada para asistir a la conferencia más
							grande de mujeres en Computación Grace Hopper Celebration GHC  2020. Realizó su Maestría en Ciencia de la Computación
							en la Universidad Federal Fluminense, Niteroi - Brasil (2017).  Bachiller en Ciencia de la Computación en la Universidad
							Nacional de San Agustín, Arequipa - Perú (2014). Su investigación actual se centra en los siguientes campos: indoor
							reconstruction, geometry processing, machine learning y geometric deep learning.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 3 -->
	<div class="modal modal-speaker modal-speaker-3" id="modal-speaker-3" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Marcelo A. Flores Manrique</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/marcelo-flores.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Marcelo A. Flores Manrique</h2>
							<div class="meta">Msc Informatica, Senior Developer</div>
							<div class="meta mb-2">Universidade Federal do Rio de Janeiro</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Actualmente trabajando en el área de telemetria y IOT como desarrollador senior en la empresa
							VerizonConnect en Dublin, con experiencia en diversas áreas, como e-commerce (OLX Brasil),
							Petroleo (Schlumberger internacional) y censos nacionales en Brasil (IBGE). Foco profesional
							en big data, IOT, devops y programación backend.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 4 -->
	<div class="modal modal-speaker modal-speaker-4" id="modal-speaker-4" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Jesús P. Mena-Chalco</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/jesus-mena.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Jesús P. Mena-Chalco</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Professor Adjunto - CMCC - UFABC</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Ex aluno de Ingeniería de Sistemas - UNSA/Perú, Magister y Doctor en Ciencia de la Computación
							- IME/USP/Brasil, y Profesor en el Departamento de Ciência de la Computação en la Universidade
							Federal do ABC - São Paulo/Brasil.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 5 -->
	<div class="modal modal-speaker modal-speaker-5" id="modal-speaker-5" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Jorge Luis Poco Medina</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/jorge-poco.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Jorge Luis Poco Medina</h2>
							<div class="meta">Associate Professor at FGV EMAp School of Applied Mathematics</div>
							<div class="meta mb-2">Fundação Getúlio Vargas - FGV, Rio de Janeiro, Brazil</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Jorge Poco is an Associate Professor at FGV EMAp School of Applied Mathematics, Fundação Getúlio Vargas - FGV, Rio de Janeiro, Brazil.
							Previously he was an assistant professor at the San Pablo Catholic University and a research associate at the University of Washington.
							He obtained his Ph.D. in Computer Science from New York University, an M.S. in Computer Science from the University of São Paulo, and a
							B.E. in System Engineering from the National University of San Agustin. As part of his professional life, he worked in zAgile, Google,
							Kitware, Oak Ridge National Laboratory, and Xerox Research. His research has focused on data visualization, data science, and machine
							learning. He has participated in projects on information visualization, scientific visualization, and visual analytics. His works include
							interdisciplinary collaborations that focused on the development of novel visualization methods to enable both climate and urban data analysis.
							He also has an interest in techniques for automatic chart interpretation.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 6 -->
	<div class="modal modal-speaker modal-speaker-6" id="modal-speaker-6" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Pablo César Calcina Ccori</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/pablo-calcina.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Pablo César Calcina Ccori</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad de São Paulo, Brasil</div>
							<div class="meta mb-2">Professor Adjunto - Universidad Nacional de San Agustin</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Pablo Calcina Ccori estudió Ingeniería de Sistemas en la Universidad Nacional de San Agustín.
							Obtuvo los grados de master y doctor en Ciencia de la Computación por la Universidad de São Paulo, Brasil.
							Durante su trayectoria profesional ha liderado diversos proyectos de desarrollo de software en startups y
							empresas de tecnología. Sus principales líneas de investigación son inteligencia artificial e Internet de las Cosas.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 7 -->
	<div class="modal modal-speaker modal-speaker-7" id="modal-speaker-7" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Edward Jose Pacheco Condori</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/edward-pacheco.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Edward Jose Pacheco Condori</h2>
							<div class="meta">MSc. en Informatica</div>
							<div class="meta mb-2">PUC-RJ, Brasil</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Estudió Ingenieria de Sistemas y maestría en informatica en la PUC-RJ, Brasil. Fue investigador en el
							"Brazil Research and Development Center" de la empresa DellEMC donde participó en varios proyectos de
							investigación aplicada en la industria del petróleo, en sistemas de almacenamiento y procesamiento distribuidos,
							e infraestructura on-premises.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 8 -->
	<div class="modal modal-speaker modal-speaker-8" id="modal-speaker-8" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Omar U. Florez</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/omar-flores.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Omar U. Florez</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta">Investigador en Machine Learning</div>
							<div class="meta mb-2">Twitter</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Dr. Omar U. Flórez es un divulgador científico del aprendizaje de máquinas. Obtuvo su PhD en Computer Science
							en Utah State University y el pregrado en la Universidad Nacional de San Agustín de Arequipa. Actualmente es
							Investigador Científico en Machine Learning en Twitter. Su experiencia profesional también incluye Senior
							Research Manager en Capital One y Research Scientist en Intel Labs en el Silicon Valley. Ha sido recientemente
							reconocido como Role Model in AI por AI4ALL y ha recibido el premio Democracia Digital en Perú por el primer
							diccionario Inglés-Español de términos técnicos en Inteligencia Artificial. En el 2010, IBM Research le otorgó
							el Premio a la Innovación por su tesis de doctorado: “Real-Time Extraction of Rules to Explain Vehicle Interactions
							from Traffic Cameras”. Omar también forma parte de LatinX in AI, una organización que crea oportunidades en educación
							e investiga los efectos de la Inteligencia Artificial en la comunidad latinos en Estados Unidos. Omar ha publicado 20+
							papers y 8 patentes y sus intereses incluyen el uso de las Redes Neuronales Artificiales y la Matemática para decodificar
							el lenguaje humano.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 9 -->
	<div class="modal modal-speaker modal-speaker-9" id="modal-speaker-9" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Yamilet Rosario Serrano Llerena</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/yamilet-serrano.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Yamilet Rosario Serrano Llerena</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">National University of Singapore</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Doctora en Ciencia de Computación otorgado por el departamento de Ciencia de la Computación de la
							Universidad Nacional de Singapur (NUS). Primera peruana en obtener el grado de doctor en NUS.
							Experta en verificación probabilística de softwares críticos, testeo y verificación de software.
							Actualmente sus proyectos están enfocados en la exploración y minería de datos utilizando técnicas
							de Inteligencia Artificial. Sus áreas de investigación son Ingeniería de Software, Computación Sostenible,
							Inteligencia Artificial, Ciencia de Datos y proyectos relacionados con las áreas de Ciencia de Computación.
							Ha sido parte del equipo de desarrollo académico de la herramienta de trazado de contacto del aplicativo
							Perú en tus manos junto a más de 40 investigadores del Perú y el extranjero. Actualmente, es coordinadora
							de la carrera de Ciencia de Datos y docente investigadora de la carrera de Ciencia de la Computación de
							Universidad de Ingeniería y Tecnología (UTEC). Además, se encuentra a cargo de la coordinación de las
							maestrías de Ciencia de la Computación en la Escuela de Posgrado de dicha institución. Miembro activa
							del centro de Investigación de Computación Sostenible (COMPSUST) y de IEEE Women in Engineering.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 10 -->
	<div class="modal modal-speaker modal-speaker-10" id="modal-speaker-10" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">S. Lizeth Tapia Tarifa</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/lizeth-tapia.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">S. Lizeth Tapia Tarifa</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad de Oslo</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							S. Lizeth Tapia Tarifa (Ph.D. 2014) es investigadora senior en el Departamento de Informática de la
							Universidad de Oslo. Lizeth tiene un proyecto propio llamado ADAPt, con una beca del programa Young
							Research Talent del Consejo de Investigación de Noruega, la única beca ganada en informática para
							esta convocatoria en 2017, es parte del consorcio del HORIZON 2020 REMARO y del proyecto en software
							y servicios de innovación Smart Journey Mining. Lizeth también lidera el programa de Análisis de Sistemas
							Complejos en el Centro de Innovación SIRIUS. Su área de investigación principal es Métodos Formales para
							sistemas paralelos y distribuidos.  Ella ha contribuido en varios proyectos de investigación financiados
							por la Union Europea, incluidos FP7 ENVISAGE, FP7 FET UpScale y FP7 FET HATS. Tuvo una estancia de investigación
							en el Imperial College de Londres en 2016 y una pasantía en la Universidad de las Naciones Unidas, Instituto
							Internacional de Tecnología de Software en Macao, China en 2007. Lizeth ha impartido cursos a nivel de maestría
							y actualmente supervisa estudiantes de maestría y doctorado. Lizeth tiene reconocimiento internacional en su area,
							por lo que ha servido como presidenta del comité de programa de la conferencia international iFM’19 y es miembro
							de comités de programas en conferencia internaciones tales como FASE2021, ICE2020, SEFM2020, iFM2020, DV-SOTA2020,
							DISE2020, FASE'19, ICE’19, F-IDE’19, FMAS’19, DISE’19, DEVOPS’18, DISE’18. Lizeth también es editora temporal y
							revisora de revistas internaciones tales como FAOC (Formal Aspects of Computing - Springer) y STTT (International
							Journal on Software Tools for Technology Transfer - Springer).
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 11 -->
	<div class="modal modal-speaker modal-speaker-11" id="modal-speaker-11" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Ernesto Cuadros Vargas</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/ernesto-cuadros.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Ernesto Cuadros Vargas</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta">Fundador de la Sociedad Peruana de Computación</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Ernesto Cuadros-Vargas recibió su Doctorado en Ciencia de la Computación en el ICMC de la Universidad de Sao Paulo
							(Brasil) en 2004 con proyectos y estudios en conjunto con Carnegie Mellon University (USA) en 2001 y la Technischen
							Universitat Berlin de Alemania en 2002. Fue fundador y miembro de la Sociedad Peruana de Computación y ha ocupado
							la presidencia en los periodos 2001 al 2007 y en 2009. El Prof. Cuadros-Vargas también ha sido Secretario Ejecutivo
							del Centro Latinoamericano de Informática (CLEI) (2009-2016). Miembro del Board of Governors of IEEE Computer Society
							(2020-2022. En este momento también es el único miembro latinoamericano en el Steering Committee de ACM/IEEE-CS Computing
							Curricula (CC2020). El Dr Cuadros también fue el único miembro latinoamericano en el Steering Committee de ACM/IEEE-CS
							Computing Curricula for Computer Science (CS2013). Ernesto Cuadros-Vargas ha sido Director de la carrera de Ciencia de
							la Computación en la Universidad de Ingeniería y Tecnología en Lima-Perú (2016-2020). El Profesor Cuadros ha sido invitado
							como expositor en diversos eventos internacionales en Brasil, Chile, Colombia, Estados Unidos, Canadá, Rusia, Japón, China,
							India, España, entre otros.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 12 -->
	<div class="modal modal-speaker modal-speaker-12" id="modal-speaker-12" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Cristian Lopez del Alamo</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/cristian-lopez.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Cristian Lopez del Alamo</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad Nacional de San Agustin</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Cristian López Del Alamo, es Dr. en ciencias de la computación, con Felicitaciones públicas, por la Universidad Nacional
							de San Agustín, y Magister en Ingeniería de Software con Máxima distinción por la Universidad de Tarapacá de Chile.
							Actualmente, es Director del grupo de Investigación Image Processing and Data Mining (IPRODAM) y profesor investigador
							a tiempo completo por la Universidad La Salle de Arequípa, además es profesor en Ciencias de la Computación en la Universidad
							Nacional de San Agustín. A realizado una pasantía en el grupo Prisma de la Universidad de Chile y varios cursos en Brasil.
							También, ha sido ponente en diversos lugares del Perú y américa Latina. Sus intereses de investigación están centrados en
							análisis de curpos no Rígidos, minería de datos y algoritmia.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 13 -->
	<div class="modal modal-speaker modal-speaker-13" id="modal-speaker-13" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Juan Marquinho Vilca Castro</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/juan-vilca.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Juan Marquinho Vilca Castro</h2>
							<div class="meta">Software Developer</div>
							<div class="meta mb-2">Amazon</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Soy egresado de la EPIS UNSA promoción 2002-2006, tengo 14 años de experiencia como Ingeniero de Software
							y actualmente me desempeño como Ingeniero de Software II en Amazon en el tech hub de Madrid.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 14 -->
	<div class="modal modal-speaker modal-speaker-14" id="modal-speaker-14" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Alexander Javier Benavides Rojas</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/alexander-benavides.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Alexander Javier Benavides Rojas</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad Federal de Rio Grande do Sul</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Bachiller en Ingeniería de Sistemas de la Universidad Nacional de San Agustín de Arequipa (2002),
							Mestre (2010) y Doutor (2015) em Ciência da Computação de la Universidad Federal de Rio Grande do Sul.
							Actualmente es investigador de pos-doctorado en Ciencia de la Computación a tiempo completo en la Universidad
							Federal de Rio Grande do Sul. Tiene experiencia en Ciencia de la Computación, con foco en Análisis de Algoritmos
							y Complejidad Computacional, actuando en los siguientes tópicos: Programación de tareas (shop scheduling) y de horarios
							(timetabling), Heurísticas y Metaheurísticas.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 15 -->
	<div class="modal modal-speaker modal-speaker-15" id="modal-speaker-15" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Daniel Aliaga</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/daniel-aliaga.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Daniel Aliaga</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Associate Professor, Purdue University</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Dr. Aliaga’s research is primarily in the area of 3D computer graphics but overlaps with computer vision and
							visualization while also having strong multi-disciplinary collaborations outside of computer science.
							His research activities are divided into three groups: a) his pioneering work in the multi-disciplinary area
							of inverse modeling and design; b) his first-of-its-kind work in codifying information into images and surfaces,
							and c) his compelling work in a visual computing framework including high-quality 3D acquisition methods.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->

	<!-- Modal Speaker 16 -->
	<div class="modal modal-speaker modal-speaker-16" id="modal-speaker-16" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Wilber Roberto Ramos Lovón</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/wilber-ramos.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Wilber Roberto Ramos Lovón</h2>
							<div class="meta">Lic. en Matemática</div>
							<div class="meta">MSc. en Computer Science</div>
							<div class="meta mb-2">Director de la Escuela Profesional de Ciencia de la Computación de la UNSA</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Pionero y Promotor de la Ciencia de la Computación en Arequipa, participó en el Diseño de la
							COMPUTER SCIENCE CURRICULA FOR PERUVIAN UNIVERSITIES, ha sido fundador y director de la Escuela Profesional
							de Ciencia de la Computación de la UNSA, Coordinador de la Cátedra en la FCIFF de la UCSM, Se ha capacitado
							en Semánticas y Aplicaciones en Montevideo Uruguay, Matemáticas Discretas en el Instituto de Sistemas Complejos
							de Valparaíso Chile, Evaluación para la Acreditación en Programas de Ingeniería de ICACIT Perú, estudio su Maestría
							en Matemática en la Pontificia Universidad Catolica del Perú, actualmente es Candidato a Doctor en la Universidad
							Nacional de San Agustín.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 17 -->
	<div class="modal modal-speaker modal-speaker-17" id="modal-speaker-17" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Jimmy Jefferson Túllume Salazar</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/jimmy-tullume.png" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Jimmy Jefferson Túllume Salazar</h2>
							<div class="meta">BS. en Systems Engineering</div>
							<div class="meta">MSc. en Mención en Evaluación y Acreditación de la Calidad de la Educación</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Jimmy Túllume holds a BS in Systems Engineering from Universidad Señor de Sipán. His
							professional career started in 2009 at EKAM PERU S.A.C. (Business Consulting in
							informatics Projects) as Systems Analyst. In 2010 he joined the Regional Government
							of Lambayeque, where he worked in the project for migration to free software of the
							Informatics Management Office. At the moment, he develops IS projects as a
							freelance.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 18 -->
	<div class="modal modal-speaker modal-speaker-18" id="modal-speaker-18" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Edward Hinojosa Cárdenas</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/edward-hinojosa.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Edward Hinojosa Cárdenas</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Ingeniero de Sistemas en la Universidad Católica de Santa María - Arequipa. Magister en Ciencias de
							la Computación en la Universidad Federal de San Carlos – Brasil y becado por el CAPES ( Coordenação
							de Aperfeiçoamento de PEssoal de nivel Superior). Doctor en Ciencias de la Computación en la Universidad
							Nacional de San Agustín y becado por el CONCYTEC (Consejo Nacional de Ciencia, Tecnología e Innovación Tecnológica).
							Interés en Inteligencia Computacional, específicamente en algoritmos evolutivos y generación de sistemas difusos.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker 19 -->
	<div class="modal modal-speaker modal-speaker-19" id="modal-speaker-19" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Juan Carlos Gutierrez Cáceres</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/juan-carlos-gutierrez.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Juan Carlos Gutierrez Cáceres</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Doctor en Ciencias de la Computación por la Cátedra CONCYTEC de la Universidad Nacional de San Agustín (Perú).
							Master en Ciencias de la Computación y Matemática Computacional, realizado en el Instituto de Ciencias Matemáticas
							y de Computación (ICMC) de la Universidad de São Paulo (Brasil). Miembro fundador de la Sociedad Peruana de Computación
							(SPC) Perú. Actualmente desempeña el cargo de Director de Escuela Profesional de Ciencia de la Computación de la Universidad
							Nacional de San Agustín (Arequipa - Perú). Profesor en el Programa Profesional de Ingeniería Informática en la Universidad
							Católica San Pablo (Arequipa - Perú) Profesor en Escuela Profesional de Ingeniería de Sistemas en la Universidad Nacional
							San Agustín (Arequipa - Perú) Áreas de interés: Redes Complejas Reconocimiento de Patrones, Redes Neuronales, Sistemas
							dinámicos no lineales, Procesamiento de Imágenes.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->

	<!-- Javascript -->
	<script src="/plugins/jquery-3.4.1.min.js"></script>
	<script src="/plugins/popper.min.js"></script>
	<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/plugins/back-to-top.js"></script>
	<script src="/plugins/jquery.scrollTo.min.js"></script>
	<script src="/js/devConf/main.js"></script>

@endsection
