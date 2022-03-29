<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$art->TITULO}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Logo -->
						<h1 id="logo"><a href="{{route('inicio')}}">SITIO DEL CORAZON</a></h1>

						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a class="icon solid fa-home" href="{{route('inicio')}}"><span>LOBBY</span></a></li>
								<li>
									<a href="#" class="icon fa-chart-bar"><span>TEMAS</span></a>
									<ul>
										@foreach($art1 as $cora)
										<li><a href="{{route('temas', $cora['slug'])}}">{{$cora['TITULO']}}</a></li>
										@endforeach
									</ul>
								</ul>
						</nav>

					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">Marzo 31</span>
																<h3><a href="{{$coraAl->slug}}">{{$coraAl->TITULO}}</a></h3>
															</header>
															<p>{{$coraAl->DESCRIPCION}}</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">Marzo 31</span>
																<h3><a href="{{$coraAl2->slug}}">{{$coraAl2->TITULO}}</a></h3>
															</header>
															<p>{{$coraAl2->DESCRIPCION}}</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">Marzo 31</span>
																<h3><a href="{{$coraAl3->slug}}">{{$coraAl3->TITULO}}</a></h3>
															</header>
															<p>{{$coraAl3->DESCRIPCION}}</p>
														</article>

												</li>
											</ul>
										</section>
								</div>

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium imp-medium">

									<!-- Post -->
									<article class="box post">
										<header>
											<h2>{{$art->TITULO}}</h2>
										</header>
										<span class="image featured"><img src="{{$art->IMAGEN}}" alt="" /></span>
										<p>{{$art->ARTICULO1}}</p>
										<p>{{$art->ARTICULO2}}</p>
										<p>{{$art->ARTICULO3}}</p>
										<p>{{$art->ARTICULO4}}</p>
										<p></p>{{$art->ARTICULO5}}</p>

									</article>

								</div>

						</div>
					</div>
				</section>

			<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header>
						<h2>Quedamos a sus ordenes para resolver cualquier duda.</h2>
					</header>
					<div class="row">
						<div class="col-6 col-12-medium">
							<section>
								<form method="post" action="mailto:cesaryairlopez48@gmail.com">
									<div class="row gtr-50">
										<div class="col-6 col-12-small">
											<input name="name" placeholder="Nombre" type="text" required="required">
										</div>
										<div class="col-6 col-12-small">
											<input name="email" placeholder="Email" type="text" required>
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Mensaje" required></textarea>
										</div>
										<div class="col-12">
											<a href="mailto:crisbautista311@gmail.com" class="form-button-submit button icon solid fa-envelope">Enviar Mensaje</a>
										</div>
									</div>
								</form>
							</section>
						</div>
						<div class="col-6 col-12-medium">
							<section>
								<p>EXAMEN DEL CORAZON</p>
								<div class="row">
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon solid fa-home">
												Prolongación 5 de Mayo #10,<br />
												Colonia Felipe Villanueva, Centro Tecámac,<br />
												Estado de México  
											</li>
											<li class="icon solid fa-phone">
												<a href="tel:+7713792345">(77) 1379-2345</a>
											</li>
											<li class="icon solid fa-envelope">
												<a href="mailto:crisbautista311@gmail.com">crisbautista311@gmail.com</a>
											</li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon brands fa-twitter">
												<a href="https://twitter.com/github">@Github</a>
											</li>
											<li class="icon brands fa-facebook-f">
												<a href="https://www.facebook.com/criis.bautista.96">Criis Bautista</a>
											</li>
										</ul>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div id="copyright" class="container">
					<ul class="links">
						<li>&copy; leones con flow. Todos los derechos reservados.</li>
					</ul>
				</div>
			</section>

		</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>