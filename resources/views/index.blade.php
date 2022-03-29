<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>EXAMEN DEL CORAZON</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="homepage is-preload">
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
											@foreach($art as $cora)
											<li><a href="{{route('temas', $cora['slug'])}}">{{$cora['TITULO']}}</a></li>
											@endforeach
										</ul>
									</ul>
							</nav>

					</div>
				</section>

			<!-- Features -->
			<section id="features">
				<div class="container">
					<header>
						<h2>TEMAS</h2>
					</header>
					
					<div class="row aln-center">
						@php
						$count =0;
						@endphp
							@foreach ($art as $cora)
							@break($count==3)
								<div class="col-4 col-6-medium col-12-small">
											<section>
												<a href="{{route('temas', $cora['slug'])}}" class="image featured"><img src="{{$cora['IMAGEN']}}" alt="" /></a>
												<header>
													<h3>{{$cora['TITULO']}}</h3>
												</header>
												<p>{{$cora['DESCRIPCION']}}</p>
											</section>
								</div>
								@php
								$count ++;
								@endphp
							@endforeach	
					</div>
				</div>
			</section>

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p>ALUMNO: {{$nombres[0]['NOMBRE']}} {{$nombres[1]['NOMBRE']}} {{$nombres[2]['NOMBRE']}} {{$nombres[3]['NOMBRE']}}</p>
						<p>DOCENTE: {{$nombres[4]['NOMBRE']}} {{$nombres[5]['NOMBRE']}} {{$nombres[6]['NOMBRE']}}</p>
						<p>1522IS</p>
					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
							<div id="content" class="col-8 col-12-medium">
								@php
								$count =0;
								@endphp
								@foreach ($art1 as $cora1)
								@break($count==2)
									<!-- Post -->
									<article class="box post">
										<header>
											<h2>{{$cora1['TITULO']}}</h2>
										</header>
										<a href="{{route('temas', $cora1['slug'])}} " class="image featured2"><img src="{{$cora1['IMAGEN']}}" alt="" /></a>
										<h3>{{$cora1['DESCRIPCION']}}</h3>
										<p>{{$cora1['ARTICULO2']}}</p>
										<ul class="actions">
											<li><a href="{{route('temas', $cora1['slug'])}}" class="button icon solid fa-file">SEGUIR LEYENDO...</a></li>
										</ul>
									</article>
								@php
								$count ++;
								@endphp
								@endforeach
							</div>
							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts -->
									<section>
										<ul class="divided">
											<li>
												@php
												$count =0;
												@endphp
												@foreach ($art2 as $cora2)
												@break($count==3)
													<!-- Excerpt -->
													<article class="box excerpt">
														<header>
															<h3><a href="{{route('temas', $cora2['slug'])}}">{{$cora2['TITULO']}}</a></h3>
														</header>
														<p>{{$cora2['ARTICULO1']}}</p>
													</article>
												@php
												$count ++;
												@endphp
												@endforeach
											</li>
										</ul>
									</section>

									<!-- Highlights -->
									<section>
										<ul class="divided">
											<li>
												@php
												$count =0;
												@endphp
												@foreach ($art3 as $cora3)
												@break($count==2)
													<!-- Highlight -->
													<article class="box highlight">
														<header>
															<h3><a href="{{route('temas', $cora3['slug'])}} ">{{$cora3['TITULO']}}</a></h3>
														</header>
														<a href="{{route('temas', $cora3['slug'])}}" class="image left"><img src="{{$cora3['IMAGEN']}}" alt="" /></a>
														<p>{{$cora3['ARTICULO5']}}</p>
														<ul class="actions">
															<li><a href="{{route('temas', $cora3['slug'])}}" class="button icon solid fa-file">SEGUIR LEYENDO...</a></li>
														</ul>
													</article>
												@php
												$count ++;
												@endphp
												@endforeach
											</li>
			
										</ul>
									</section>

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