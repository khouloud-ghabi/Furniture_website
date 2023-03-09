<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Meuble Khaled </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Meuble Khaled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="css/swipebox.css"> <!-- gallery css -->

<!-- testimonials css -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!--//fonts-->
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href="css/owl.carousel.css" rel="stylesheet">

</head>

<body>

<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<h1 class="logo1 me-auto">

						<img src="images/logo1.png" alt=""class="img-fluid" style="height: 80px; width: 80px;">
						 Meuble Khaled
					</h1>

			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About</a></li>
						<li><a href="#services" class="effect-3 scroll">Services</a></li>
						<li><a href="#portfolio" class="effect-3 scroll">Portfolio</a></li>
						<li><a href="#team" class="effect-3 scroll">Team</a></li>
						<li><a href="#client" class="effect-3 scroll">Clients</a></li>
						<li><a href="#contact" class="effect-3 scroll">Contact Us</a></li>
                    <li>
                        @if (Route::has('login'))

                            @auth

                                <x-app-layout>

                               </x-app-layout>

                            @else
                            <li> <a href="/login" role="button" class="btn btn-primary btn-lg" {{ auth()->check() ? 'disabled' : '' }}>Login</a>
                                </li>

                                @if (Route::has('register'))
                                <li> <a class="btn btn-success btn-lg" role="button" href="/register" {{ auth()->check() ? 'disabled' : '' }}>Register</a></li>
                                @endif
                            @endauth

                    @endif
                </li>


					</ul>
				</nav>
			</div>
		</nav>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>

<div class="banner_top">
	<div class="slider">
		<div class="wrapper">

			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
				<li>
					<div class="agile_banner_text_info">
						<h2>Intérieure<span>Conception</span> </h2>
						<p><b>Meuble khaled propose une large gamme de produits, avec une capacité de production et un rapport qualité/prix hautement concurrentiels.</b></p>

						<a href="#contact" class="scroll">Nous Contacter</a>
					</div>
				</li>
				<li>
					<div class="agile_banner_text_info">
						<h3>Accueil <span class="slide2">Décoration</span> </h3>
						<p><b>Meuble khaled propose une large gamme de produits, avec une capacité de production et un rapport qualité/prix hautement concurrentiels.</b></p>
						<a href="#contact" class="scroll">Nous Contacter</a>
					</div>
				</li>
				<li>
					<div class="agile_banner_text_info">
						<h3>Luxueuse <span class="slide3">Conception</span> </h3>
						<p><b>Meuble khaled propose une large gamme de produits, avec une capacité de production et un rapport qualité/prix hautement concurrentiels.</b></p>

						<a href="#contact" class="scroll">Nous Contacter</a>
					</div>
				</li>
				<li>
					<div class="agile_banner_text_info">
						<h3>Simplicité <span class="slide4">conception</span> </h3>
						<p><b>Meuble khaled propose une large gamme de produits, avec une capacité de production et un rapport qualité/prix hautement concurrentiels.</b></p>

						<a href="#contact" class="scroll">Nous Contacter</a>
					</div>
				</li>
			</ul>
			<!-- Slideshow 3 Pager -->

		</div>
	</div>
</div>
<!-- //banner -->

<!-- About -->
<div class="about" id="about">
	<div class="container">
		<h3 class="heading">À propos de <span>nous</span></h3>
		<div class="about_grids">
			<div class="col-md-6 about_left">
				<h4><b>Meuble Khaled est une enseigne de meubles design qui conçoit des meubles de qualité, élégants et faciles à vivre. Vous trouverez de quoi meubler toutes les pièces de votre maison. Rendez votre
				 salon accueillant en choisissant un canapé aussi design que confortable pour l'ensemble de vos convives. </b></h4>

				 <p><b>Vous aurez le choix dans les matières : en tissu ou un canapé cuir? C'est à vous de choisir.
					Pour bien compléter votre salon, posez votre télé sur un meuble tv à la fois design et pratique grâce à de multiples rangements intégrés.</b></p>


					<p class="second_para"> <b> Meuble Khaled, c'est la garantie de trouver le mobilier design dont vous avez besoin pour décorer toute votre maison à des prix abordables. Trouvez des meubles design qui correspondent à vos goûts et pour toutes les pièces de votre maison sans oublier les objets
					déco qui mettront des touches design dans votre intérieur à des prix abordables.</b></p>

			</div>
			<div class="col-md-6 about_right">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">

						<div class="item active">
								<img src="images/img1.jpg" alt="Los Angeles" style="width:100%;">
							<div class="carousel-caption banner-dott">
							</div>
						</div>

						<div class="item">
								<img src="images/img14.jpg" alt="Chicago" style="width:100%;">
							<div class="carousel-caption banner-dott">
							</div>
						</div>

						<div class="item">
								<img src="images/img3.jpg" alt="New York" style="width:100%;">
							<div class="carousel-caption banner-dott">
							</div>
						</div>
					</div>



					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="fa fa-angle-left"></span>
						<span class="sr-only">Précédent</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="fa fa-angle-right"></span>
						<span class="sr-only">Suivant</span>
					</a>
				</div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //About -->

<!-- Services -->
<div class="services" id="services">
	<div class="container">
		<h3 class="heading">Ce Que Nous <span>Faisons</span></h3>
		<div class="servicegrids">
			<div class="col-md-3 ser_grid1 icon1">
				<span class="glyphicon glyphicon-lamp"></span>
				<h3>Design d'intérieur</h3>
				<p><b>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
				nec orci semper ultrices et sed libero.</b></p>
				<!--a href="#">Lire la suite <span class="fa fa-angle-right"></span></a-->
			</div>
			<div class="col-md-3 ser_grid1 icon2">
				<span class="glyphicon glyphicon-blackboard"></span>
				<h3>Décoration d'intérieur</h3>
				<p><b>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
				nec orci semper ultrices et sed libero.</b></p>
				<!--a href="#">Lire la suite <span class="fa fa-angle-right"></span></a-->
			</div>
			<div class="col-md-3 ser_grid1 icon3">
				<span class="glyphicon glyphicon-bell"></span>
				<h3>Salons</h3>
				<p><b>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
				nec orci semper ultrices et sed libero.</b></p>
				<!--a href="#">Lire la suite <span class="fa fa-angle-right"></span></a-->
			</div>
			<div class="col-md-3 ser_grid1 icon4">
				<span class="glyphicon glyphicon-picture"></span>
				<h3>Mur en bois</h3>
				<p><b>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
				nec orci semper ultrices et sed libero.</b></p>
				<!--a href="#">Lire la suite<span class="fa fa-angle-right"></span></a-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //Services -->

<!-- services bottom -->
<div class="bottom">
	<div class="bottom_grids">
		<div class="col-md-3 bottom_left">
			<img src="images/img2.jpg" alt="" />
		</div>
		<div class="col-md-6 bottom_middle">
			<div id="typed-strings" class="agileits_w3layouts_strings">
				<p>Nous faisons de la <i>décoration</i></p><br> à la maison
                <p>Nous faisons de la <i>conception<br> de bureau</i></p>
                <p>Nous faisons de la <i>conception <br>d'intérieur</i></p>
                <p>Nous faisons de la <i>conception</i></p> <br>commerciale
                <p>Nous réalisons la conception <br>de <i>salons</i></p>
                <p>Nous réalisons la conception de<br> <i>murs en bois</i></p>
			</div>
			<span id="typed" style="white-space:pre;"></span>
			<p class="typing_bottom"><span> <b>nouveau regard
				La déco joue à fond la carte de la couleur avec des détails réjouissants et surprenants.
				 Des objets qui ne se plient à aucune règle et changent la perspective de nos intérieurs.</b></p>
			<h4>Regardez Notre Vidéo Ici</span></h4>
			<a class="#" data-toggle="modal" data-target="#myModal1">
				<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
			</a>
		</div>
		<!-- Modal5 -->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" >
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<iframe src="https://player.vimeo.com/video/122016314"></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- //Modal5 -->
		<!-- //model-video -->
	</div>
	<div class="col-md-3 bottom_right">
		<img src="images/img15.jpg" alt="" />
	</div>
	<div class="clearfix"></div>
</div>
<!-- //services bottom -->

<!-- Stats -->
<div class="section-w3ls stats">
	<div class="col-md-4 team_grid1">
		<h3 class="heading">Amusement <span>Les Faits</span></h3>
		<h4>Architectes d'intérieur Faits</h4>
	<p><b>L'essence du design d'intérieur concernera toujours les gens et leur mode de vie</b></p>
	</div>
	<div class="stats-agileinfo about-main">
		<div class="col-sm-2 col-xs-3 stats-grid text-center">
			<div class="stats-icon">
				<span class="fa fa-clock-o" aria-hidden="true"></span>
			</div>
			<div class="stats-right">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1073' data-delay='.5' data-increment="1">1073</div>
				<h6>Heures De Travail</h6>
			</div>
		</div>
		<div class="col-sm-2 col-xs-3 stats-grid text-center">
			<div class="stats-icon">
				<span class="fa fa-shield" aria-hidden="true"></span>
			</div>
			<div class="stats-right">
				<div class='numscroller numscroller-big-bottom'  data-slno='1' data-min='0' data-max='780' data-delay='.5' data-increment="1">780</div>
				<h6>Projets</h6>
			</div>

		</div>
		<div class="col-sm-2 col-xs-3 stats-grid text-center">
			<div class="stats-icon">
				<span class="fa fa-external-link" aria-hidden="true"></span>
			</div>
			<div class="stats-right">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='630' data-delay='.5' data-increment="1">630</div>
				<h6>Dessins</h6>
			</div>
		</div>
		<div class="col-sm-2 col-xs-3 stats-grid text-center">
			<div class="stats-icon">
				<span class="fa fa-barcode" aria-hidden="true"></span>
			</div>
			<div class="stats-right">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='623' data-delay='.5' data-increment="1">623</div>
				<h6>Autres</h6>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //Stats -->

<!-- gallery -->
<div class="gallery" id="portfolio">
	<div class="container">
	<h3 class="heading">Notre <span>Galerie</span></h3>
		<div class="gallery_gds">
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
						<img class="img-responsive img-style row2" src="images/img5.jpg" alt=""  />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img6.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img6.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img7.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img8.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
						<img src="images/img8.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img9.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img10.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img10.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
				<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img11.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
						<img src="images/img11.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img12.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img12.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img13.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img13.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img14.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img14.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img1.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img1.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
			<div class="col-md-3 gal-w3l">
				<div class="agileits-img">
					<a href="images/img16.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
						<img src="images/img16.jpg" alt="" class="img-responsive img-style row2" />
					</a>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //gallery -->




<!--Buy-now -->
<div class="buy-now">
	<div class="container">
	<div class="heading-setion-w3ls">
		<h3 class="title-w3layouts">Sélectionnez Votre Favori Meuble </h3>
	</div>
			<div class="team-grids">
				<!-- Bottom to top-->
				<div class="details-top-w3ls">
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/d1.jpg" alt="img"></div>
							<div class="info">
								<h3>3300 DT</h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/d2.jpg" alt="img"></span></div>
							<div class="info">
								<h3>2300 DT<span>2500 DT</span></h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/d3.jpg" alt="img"></div>
							<div class="info">
								<h3>2800 DT</h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/d4.jfif" alt="img"></div>
							<div class="info">
								<h3>3100 DT<span>3500 DT</span></h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
				</div>
				<div class="details-mid-w3ls">
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/img3.jpg" alt="img"></div>
							<div class="info">
								<h3>1500 DT<span>1900 DT</span></h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/img12.jpg" alt="img"></div>
							<div class="info">
								<h3>2200 DT</h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/d6.jpg" alt="img"></div>
							<div class="info">
								<h3>3200 DT<span>3600 DT</span></h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/img6.jpg" alt="img"></div>
							<div class="info">
								<h3>3900 DT</h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					</div>
					<div class="details-last-w3ls">
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/d7.png" alt="img"></div>
							<div class="info">
								<h3>1800 DT</h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/img8.jpg" alt="img"></div>
							<div class="info">
								<h3>2100 DT<span>2300 DT</span></h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/img4.jfif" alt="img"></div>
							<div class="info">
								<h3>2700 DT</h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
					<div class="col-md-3 team-grid">
						<!-- normal -->
						<div class="ih-item circle effect10 bottom_to_top">
							<div class="img"><img src="images/img6.jpg" alt="img"></div>
							<div class="info">
								<h3>3500 DT<span>4000 DT</span></h3>
								<ul>
									<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
									<li class="cary-li-w3-agileits">
										<div class="snipcart-details top_brand_home_details">

										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- end normal -->
					</div>
				</div>
				<!-- end Bottom to top-->
			</div>
		</div>
</div>







<!-- Team -->
<div class="team" id="team">
	<div class="team_grids">
		<div class="col-md-4 team_grid1">
			<h3 class="heading">Notre <span>équipe</span></h3>
			<h4>Équipe de designers d'intérieur</h4>
			<p><b>L'essence du design d'intérieur concernera toujours les gens et leur mode de vie</b></p>
			<p class="second_para"><b> le « Team » Meuble khaled constitue la force première de la société. Au diapason des normes internationales et constamment à la recherche des dernières tendances du design,
			 Meuble khaled offre une solution diversifiée et adaptée en termes de matières, de finitions et de choix.</b></p>
		</div>
			<div class="col-md-2 col-sm-6 col-xs-6 w3l_team_grid">
				<div class="view view-second">
					<img src="images/t1.jpg" alt=" " class="img-responsive" />
					<div class="mask"></div>
					<div class="content">
						<div class="w3l_social_icons w3l_social_icons1">
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#" class="pinterest"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<h4>Yassine</h4>
				<p>Interior Designer</p>
			</div>
			<div class="col-md-2 col-sm-6 col-xs-6 w3l_team_grid">
				<div class="view view-second">
					<img src="images/t2.jpg" alt=" " class="img-responsive" />
					<div class="mask"></div>
					<div class="content">
						<div class="w3l_social_icons w3l_social_icons1">
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#" class="pinterest"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<h4>Bilel</h4>
				<p>Interior Designer</p>
			</div>
			<div class="col-md-2 col-sm-6 col-xs-6 w3l_team_grid">
				<div class="view view-second">
					<img src="images/t3.jpg" alt=" " class="img-responsive" />
					<div class="mask"></div>
					<div class="content">
						<div class="w3l_social_icons w3l_social_icons1">
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#" class="pinterest"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<h4>Youssef</h4>
				<p>Charpentier</p>
			</div>
			<div class="col-md-2 col-sm-6 col-xs-6 w3l_team_grid">
				<div class="view view-second">
					<img src="images/t4.jpg" alt=" " class="img-responsive" />
					<div class="mask"></div>
					<div class="content">
						<div class="w3l_social_icons w3l_social_icons1">
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#" class="pinterest"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<h4>Mohamed</h4>
				<p>Charpentier</p>
			</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //Team -->

<!-- Clients -->
<div class="clients-main" id="client">
	<div class="container">
		<!-- Owl-Carousel -->
		<h3 class="heading">Clients <span>Mots</span></h3>
		<div class="cli-ent">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="item g1">
								<div class="agile-dish-caption">
								<img class="lazyOwl" src="images/cl1.png" alt="" />
									<h4>JAMEL ABDALLAH -Client</h4>
								</div>

								<div class="clearfix"></div>
								<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Sotufab Meubles tu es le meilleur N1 en kelibia</p>
							</div>
						</li>
						<li>
							<div class="item g1">
								<div class="agile-dish-caption">
								<img class="lazyOwl" src="images/cl1.png" alt="" />
									<h4>OMAR CHEBBI -Client</h4>
								</div>

								<div class="clearfix"></div>
								<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Entreprise très sérieuse, réclamation traitée sous 24h.sotufab est une enseigne très soucieuse de la satisfaction client. Bonne continuation.</p>
							</div>
						</li>
						<li>
							<div class="item g1">
								<div class="agile-dish-caption">
								<img class="lazyOwl" src="images/cl1.png" alt="" />
									<h4>CHAABANI BILEL -Client</h4>
								</div>

								<div class="clearfix"></div>
								<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Agents chaleureux, souriants et disponibles. sens de service au top. Sans la moindre force d'achat. Je suis hyper-satisfait. Merci à…</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<!--// Owl-Carousel -->
	</div>
</div>
<!--// Clients -->

<!-- contact -->
<div class="contact" id="contact">
	<div class="container">
		<h3 class="heading">Entrer <span>Touch</span></h3>
		<div class="agile-contact-form">
			<div class="col-md-6 contact-form-left">
				<div class="w3layouts-contact-form-top">
					<h3>Trouve Nous</h3>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12774.070487748892!2d11.0568585!3d36.8300775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84232bd45f258cbb!2sMeuble%20Khaled%20K%C3%A9libia!5e0!3m2!1sfr!2stn!4v1643119985485!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>		</div>

				<div class="contact-form-top">
					<h3>Adresse</h3>
				</div>
				<ul class="con_inner_text">
					<li><span class="fa fa-map-marker" aria-hidden="true"></span>SGEM, C27,<label> Kélibia</label></li>
					<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">MeubleKhaled@gmail.com</a></li>
					<li><span class="fa fa-phone" aria-hidden="true"></span> +216 26 551 200</li>
					<li><span class="fa fa-clock-o" aria-hidden="true"></span> 8am to 6pm</li>
					<li><span class="fa fa-globe" aria-hidden="true"></span> <a href="#">MeubleKhaled.com</a></li>
				</ul>
			</div>
			<div class="col-md-6 contact-form-right">
				<div class="contact-form-top">
					<h3>Envoie-nous un message</h3>
				</div>
				<div class="agileinfo-contact-form-grid">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<button class="btn1">Envoyer</button>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
			<div class="col-md-3 w3layouts_footer_grid" data-aos="fade-right">
				<h3>À propos de la société</h3>
				<p> <b>Une entreprise qui vend des meubles de maison de haute qualité dans la ville de Kelibia</b></p>
				<ul class="social_agileinfo">
					<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
			<div class="col-md-3 w3layouts_footer_grid" data-aos="fade-right">
				<h3>Nous contacter</h3>
					<ul class="con_inner_text">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>SGEM, C27, <label> Kélibia</label></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">MeubleKhled@gmail.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span> +216 26 551 200</li>
						<li><span class="fa fa-clock-o" aria-hidden="true"></span> 8am to 6pm</li>
						<li><span class="fa fa-globe" aria-hidden="true"></span> <a href="#">MeubleKhaled.com</a></li>
					</ul>

			</div>
			<div class="col-md-3 w3layouts_footer_grid" data-aos="fade-down">
				<h3> Bulletin </h3>
					<p><b> En vous inscrivant à notre liste de diffusion, vous recevrez toujours les dernières nouvelles et mises à jour de notre part.</b> </p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Enter your email..." required="">
					<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>
			</div>
			<div class="col-md-3 w3layouts_footer_grid" data-aos="fade-left">
				<h3>Instagram</h3>
				  <ul class="con_inner_text midimg">
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner33.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner44.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					 <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner33.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner44.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
				 </ul>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->


<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- banner-type-text -->
<script src="js/typed.js" type="text/javascript"></script>
<script>
	$(function(){

		$("#typed").typed({
			// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
			stringsElement: $('#typed-strings'),
			typeSpeed: 30,
			backDelay: 500,
			loop: false,
			contentType: 'html', // or text
			// defaults to false for infinite loop
			loopCount: false,
			callback: function(){ foo(); },
			resetCallback: function() { newTyped(); }
		});

		$(".reset").click(function(){
			$("#typed").typed('reset');
		});

	});

	function newTyped(){ /* A new typed object */ }

	function foo(){ console.log("Callback"); }
</script>
<!-- //banner-type-text -->

<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<!-- //flexSlider -->

<!-- swipe box js -->
<script src="js/jquery.adipoli.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		$('.row2').adipoli({
			'startEffect' : 'overlay',
			'hoverEffect' : 'sliceDown'
		});
	});

</script>
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
</script>
<!-- //swipe box js -->

<!-- Numscroller -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Numscroller -->

<!-- Responsive Slider script -->
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			manualControls: '#slider3-pager',
		});
	});
</script>
<!-- //Responsive Slider script -->

<script src="js/SmoothScroll.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- move to top-js-files -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script><!-- bootstrap js file -->

</body>
</html>
