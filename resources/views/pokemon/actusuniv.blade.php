@extends('layouts.app')
@section('pageTitle', 'Page Title')
@section('content')
<html>
	<head>
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">
									<!-- Logo -->
										<h1><a href="{{ url('/') }}" id="logo">House of Trading Cards</a></h1>
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="{{ url('/') }}">Accueil</a></li>
												<li>
													<a href="{{ url('/') }}">Pokemon</a>
													<ul>
														<li><a href="{{ url('/pk/accar') }}">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="{{ url('/pk/li') }}">Liste complete</a></li>
																<li><a href="{{ url('/pk/top') }}">Top de la semaine</a></li>
																<li><a href="{{ url('/pk/mo') }}">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="{{ url('/pk/act') }}">Actualités</a></li>
																<li><a href="{{ url('/pk/jv') }}">Jeux vidéos</a></li>
																<li><a href="{{ url('/pk/cl') }}">Coin Lecture</a></li>
																<li><a href="{{ url('/pk/fo') }}">Forums</a></li>
															</ul>
														</li>
														<li><a href="{{ url('/boutique') }}">Boutique</a></li>
													</ul>
												</li>
												<li>
													<a href="{{ url('/') }}">Yu Gi Oh</a>
													<ul>
														<li><a href="#">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="{{ url('/') }}">Liste complete</a></li>
																<li><a href="{{ url('/') }}">Top de la semaine</a></li>
																<li><a href="{{ url('/') }}">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="{{ url('/') }}">Actualités</a></li>
																<li><a href="{{ url('/') }}">Jeux vidéos</a></li>
																<li><a href="{{ url('/') }}">Coin Lecture</a></li>
																<li><a href="{{ url('/') }}">Forums</a></li>
															</ul>
														</li>
														<li>
															<a href="#">Boutique</a>
															<ul>
																<li><a href="{{ url('/') }}">Cartes</a></li>
																<li><a href="{{ url('/') }}">Goodies</a></li>
															</ul>
														</li>
														
													</ul>
												</li>
												<li>
													<a href="{{ url('/') }}">Magic</a>
													<ul>
														<li><a href="#">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="#">Liste complete</a></li>
																<li><a href="#">Top de la semaine</a></li>
																<li><a href="#">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="#">Actualités</a></li>
																<li><a href="#">Jeux vidéos</a></li>
																<li><a href="#">Coin Lecture</a></li>
																<li><a href="#">Forums</a></li>
															</ul>
														</li>
														<li>
															<a href="#">Boutique</a>
															<ul>
																<li><a href="#">Cartes</a></li>
																<li><a href="#">Goodies</a></li>
															</ul>
														</li>
														
													</ul>
												</li>
												<li>
													<a href="{{ url('/') }}">Final Fantasy</a>
													<ul>
														<li><a href="#">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="#">Liste complete</a></li>
																<li><a href="#">Top de la semaine</a></li>
																<li><a href="#">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="#">Actualités</a></li>
																<li><a href="#">Jeux vidéos</a></li>
																<li><a href="#">Coin Lecture</a></li>
																<li><a href="#">Forums</a></li>
															</ul>
														</li>
														<li>
															<a href="#">Boutique</a>
															<ul>
																<li><a href="#">Cartes</a></li>
																<li><a href="#">Goodies</a></li>
															</ul>
														</li>
														
													</ul>
												</li>
											</ul>
										</nav>

								</div>
							</header>

						<!-- Banner -->
							<div id="banner">
								<h2>Votre site d'actualité 
								<br />
								et d'échange de cartes<strong> INTER-JEU</strong></h2>
								<!-- <p>ACCUEIL</p> -->
								<!-- <a href="#" class="button large icon fa-check-circle">Yes it does</a> -->
							</div>
					</div>
				</div>

			<!-- Main Wrapper -->
			<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="col-8 col-12-medium">
										<div id="content">

											<!-- Content -->

												<article>
													<header class="major">
														<h3>04 déc. 2018</h3>
														<h2>Le moment est venu d’en découdre avec Pokémon GO</h2>
														<p>Pokemon GO</p>
													</header>

													<span class="image featured"><img src="images/pokemon-go-169.jpg" alt="" /></span>

													<p>Bientôt, vous pourrez défier un autre Dresseur à tout moment dans Pokémon GO. Dans les Combats de Dresseurs, en utilisant un Code Combat,
														 vous pourrez vous mesurer à un autre Dresseur et lui faire face avec une équipe de trois Pokémon. À la fin du match, les participants 
														 recevront des récompenses, dont une chance d'obtenir des objets d'Évolution rares. Afin que le combat soit équitable, les Dresseurs 
														 devront combattre dans la même Ligue Combat de Dresseurs qui détermine le PC le plus élevé des Pokémon participants.
													Ces combats rapides prennent place en temps réel et vos Pokémon pourront utiliser à la fois leurs Attaques Immédiates et leurs Attaques 
													Chargées. Vous pourrez également utiliser des Poussières Étoiles et des Bonbons avant le combat pour déverrouiller une Attaque Chargée 
													supplémentaire pour votre Pokémon.
													</p>

													<h3>Démontrez vos compétences en affrontant d’autres joueurs dans les nouveaux Combats de Dresseurs de Pokémon GO.</h3>
													<p>Les combats ne se limitent pas à la force des Pokémon et à leurs attaques. La synchronisation est importante également. Gardez l'œil 
													sur les attaques de votre adversaire, et vous pourrez peut-être déployer un Bouclier Protecteur pour protéger votre Pokémon de dégâts 
													critiques. Une fois le nombre de Boucliers Protecteurs à votre disposition épuisé, votre Pokémon sera sans défense contre les grosses attaques.
													Votre adversaire devra être à proximité pour que vous puissiez commencer un Combat de Dresseurs. Par contre, vous pourrez défier les 
													Dresseurs avec lesquels vous êtes Excellents amis où que vous soyez.
													Entrainez-vous avec les capitaines, Spark, Candela et Blanche, pour améliorer vos compétences en Combat de Dresseurs. En vous entraînant 
													avec les capitaines, vous pourrez gagner des récompenses quotidiennes, dont des Poussières Étoiles qui donneront du punch à votre Pokémon.
													 Cela vous permettra également de progresser vers la médaille Topdresseur.
													Commencez votre entraînement et découvrez de nouvelles façons de mettre vos stratégies à l'épreuve dans les Combats de Dresseurs de Pokémon
													 GO.</p>
												</article>
												<article>
													<header class="major">
														<h3>03 déc. 2018</h3>
														<h2>Écoutez la musique revisitée de Kanto !</h2>
														<p>Musique</p>
													</header>

													<span class="image featured"><img src="images/lets-go-soundtrack-announce-169.jpg" alt="" /></span>

													<p>Emportez la musique de vos aventures à Kanto partout où vous allez avec The Pokémon: Let's Go, Pikachu! & Pokémon: Let's Go, Eevee! 
														Super Music Collection ! Cette impressionnante bande originale contient plus de 60 chansons et effets sonores des jeux, ainsi que 
														50 pistes remastérisées de Pokémon Version Jaune : Édition Spéciale Pikachu ! Écoutez enfin les nouvelles versions des chansons que 
														vous aimiez tant !
													</p>

													<h3>The Pokémon: Let’s Go, Pikachu! & Pokémon: Let’s Go, Eevee! Super Music Collection est disponible dès maintenant sur iTunes..</h3>
													<p>Retrouvez The Pokémon: Let's Go, Pikachu! & Pokémon: Let's Go, Eevee! Super Music Collection sur l'iTunes Store pour 8,99 € ! Chaque
														 piste peut aussi être achetée séparément pour 0,99 €.</p>
												</article>
												<article>
													<header class="major">
														<h3>29 nov. 2018</h3>
														<h2>Découvrez les surprises des Phases d’Études de décembre</h2>
														<p>Which means the sidebar is on the right</p>
													</header>

													<span class="image featured"><img src="images/pokemon-go-170.jpg" alt="" /></span>

													<p>Les Études de terrain de décembre mettent à l'honneur certains des Pokémon et des tâches d'études les plus appréciés de l'année. 
													C'est l'occasion de vous rattraper si vous avez pris du retard.</p>

													<h3>Achevez une Phase d’Étude en décembre pour rencontrer l’un des Pokémon légendaires.</h3>
													<p>Chaque fois que vous achèverez une Phase d'Étude en décembre, vous rencontrerez l'un des six Pokémon légendaires suivants : Artikodin,
														 Électhor, Sulfura, Raikou, Entei ou Suicune. Vous pourrez également entreprendre certaines des tâches d'Études de terrain préférées 
														 des mois passés en faisant tourner les PhotoDisques des PokéStops. En décembre, les Dresseurs assidus dans leurs recherches auront 
														 de nombreuses occasions de remporter des récompenses comptant parmi les plus rares de l'année.</p>
													<p>Les Phases d'Études donneront droit à un Munja jusqu'à 13h PST (UTC -8) le 1er décembre, donc pensez à compléter vos Études de terrain
														 si vous souhaitez ajouter le Pokémon Exuvie à votre collection. Vous devrez récupérer sept tampons en complétant des tâches d'Études
														  de terrain afin d'effectuer une Phase d'Étude, et vous ne pourrez gagner qu'un tampon par jour. Des Pokémon rares seront de sortie
														   en décembre, donc en avant toutes, et capturez-les avant qu'il ne soit trop tard !</p>
												</article>

										</div>
									</div>
									<div class="col-4 col-12-medium">
										<div id="sidebar">

											<!-- Sidebar -->

												<section>
													<header class="major">
														<h2>Compte Premium</h2>
													</header>
													<p>Devenez Premium dès aujourd'hui et béneficiez de tous les avantages de cette offre. Pour l'ouverture du site, <strong>nous vous offrons jusqu' à un mois d'abonnement !!!</strong></p>
													<footer>
														<a href="#" class="button icon fa-info-circle">Devenir Premium</a>
													</footer>
												</section>

												<section>
													<header class="major">
														<h2>Notre Boutique</h2>
													</header>
													<ul class="style2">
														<li><a href="#">Rowlet [Fury Attack]</a></li>
														<li><a href="#">Scizor GX [Steel Wing] (Version 3)s</a></li>
														<li><a href="#">Jirachi</a></li>
														<li><a href="#">Lycanroc [Dangerous Rogue | Accelerock]</a></li>
														<li><a href="#">Lapras</a></li>
														<li><a href="#">Giovanni's Nidoking</a></li>
														<li><a href="#">Seviper</a></li>
														<li><a href="#">Garbodor [Trashalanche | Acid Bomb] (Version 2)</a></li>
														<li><a href="#">Naganadel GX [Beast Raid | Jet Needle] (Version 1)</a></li>
													</ul>
													<footer>
														<a href="{{ url('/boutique') }}" class="button icon fa-arrow-circle-o-right">Allez à la Boutique</a>
													</footer>
												</section>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- Footer Wrapper -->
		</div>
	</body>
</html>
<!-- Scripts -->
<script src="{{asset('js/jquery.min.js') }}"></script>
			<script src="{{asset('js/jquery.dropotron.min.js') }}"></script>
			<script src="{{asset('js/browser.min.js') }}"></script>
			<script src="{{asset('js/breakpoints.min.js') }}"></script>
			<script src="{{asset('js/util.js') }}"></script>
			<script src="{{asset('js/main.js') }}"></script>
@endsection
