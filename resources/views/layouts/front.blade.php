<!doctype html>
<html lang="zxx">
    <head>
		<!--=== Required Meta Tags ======-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--=== CSS Link ===-->
		<link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/icofont.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">

		<!--=== Favicon ===-->
		<link rel="icon" type="image/png" href="{{asset('front/assets/images/favicon.png')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!--=== Title ===-->
		<title>METGAV INDUSTRY, Usine de Galvanisation à Chaud & Transformation Métallique</title>
    </head>

    <style>
        .owl-carousel{
            display: flex !important;
            flex-direction: row;
            justify-content: center;
        }

		.popup {
    display: none;
    position: fixed;
    background: white;
    border: 2px solid #29A9E1;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 80%;
    max-height: 80%;
    overflow-y: auto;
    border-radius: 8px;
    z-index: 999;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
}

.popup-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    border-bottom: 2px solid #29A9E1;
    background-color: #29A9E1; /* Nouvelle couleur de fond */
    color: white; /* Texte blanc */
    padding: 10px 20px; /* Espacement du texte */
    border-top-left-radius: 8px; /* Coins arrondis */
    border-top-right-radius: 8px;
}

.popup-title {
    font-size: 1.2em;
    font-weight: bold;
}

.close-btn {
    cursor: pointer;
    font-size: 1.2em;
}

.popup-content {
    text-align: center;
}
    </style>

    <body>
		<!--=== Start Preloader Section ===-->
		<div class="preloader">
            <div class="content">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
		<!--=== End Preloader Section ===-->

		<!--=== Start Header Section ===-->
		<header class="header-section">
			<div class="up-header-content bg-color-150f03">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8">
							<ul class="header-info-content bg-color-f55e1a">
								<li class="ps-0">
									Bienvenue sur METGAV INDUSTRY
								</li>
								<li>
									<i class="icofont-envelope"></i>
									<a href="mailto:contact@metgav.dz">
										contact@metgav.dz
									</a>
								</li>
								<li>
									<i class="icofont-phone"></i>
									+213 (0) 43 41 42 42
								</li>
							</ul>
						</div>

						<div class="col-lg-4">
							<ul class="header-social-content">
								<li>
									<a href="https://www.facebook.com/metgav/" target="_blank">
										<i class="icofont-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://www.youtube.com/channel/UCN-SDfWsyrNOqLmEKsbUXmw" target="_blank">
										<i class="icofont-youtube-play"></i>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company/metgav-industry" target="_blank">
										<i class="icofont-linkedin"></i>
									</a>
								</li>

							</ul>

						</div>
						</div>
					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand" href="{{asset('/')}}">
						<img src="{{asset('front/assets/images/logo.png')}}" alt="Logo">
					</a>

                    <div class="for-mobile-options">
						<div class="menu-right-options d-flex align-items-center">
                            @auth
                                @if(Auth::user()->type == 'professional')
                                    <a href="{{asset('/professional')}}" class="main-btn">
                                        <span>
                                            {{ Auth::user()->name }}
                                            <i class="icofont-arrow-right"></i>
                                        </span>
                                    </a>
                                @else
                                    <a href="{{asset('/admin')}}" class="main-btn">
                                        <span>
                                            {{ Auth::user()->name }}
                                            <i class="icofont-arrow-right"></i>
                                        </span>
                                    </a>
                                @endif
                            @else
                                <a href="{{asset('/login-pro')}}" class="main-btn">
                                    <span>
                                        Connexion
                                        <i class="icofont-arrow-right"></i>
                                    </span>
                                </a>
                            @endauth

						</div>
					</div>

					<a href="javascript:void(0);" class="mobile-menu">
						<div class="mobile-menu-btn">
							<div class="mobile-menu-bar"></div>
						</div>
					</a>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">

							<li class="nav-item">
								<a href="{{asset('/')}}" class="nav-link  active">Accueil</a>
							</li>

                            <li class="nav-item">
								<a href="#" class="nav-link dropdown-toggles">Services</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{asset('/galvanisation-a-chaud')}}" class="nav-link">Galvanisation à chaud </a>
									</li>

									<li class="nav-item">
										<a href="{{asset('/transformation-metalique')}}" class="nav-link">Transformation métallique</a>
									</li>
								</ul>
							</li>

                            <li class="nav-item">
								<a href="{{asset('/products')}}" class="nav-link">Produits</a>
							</li>
                            <li class="nav-item">
								<a href="{{asset('/catalogue')}}" class="nav-link">Catalogue</a>
							</li>
                            <li class="nav-item">
								<a href="#" class="nav-link dropdown-toggles">Filiales</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{asset('/filiales/sarl-structural-industry')}}" class="nav-link">SARL Structural Industry</a>
									</li>

									<li class="nav-item">
										<a href="{{asset('/filiales/sarl-cylex-industry')}}" class="nav-link">SARL Cylex Industry</a>
									</li>
                                    <li class="nav-item">
										<a href="{{asset('/filiales/sarl-metal-et-metal')}}" class="nav-link">SARL Métal et Métal</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="{{asset('/actualites')}}" class="nav-link">Actualités</a>
							</li>
                            <li class="nav-item">
								<a href="{{asset('/articles')}}" class="nav-link">Articles</a>
							</li>
                            <li class="nav-item">
								<a href="{{asset('/a-propos-metgav')}}" class="nav-link">A propos</a>
							</li>
							<li class="nav-item">
								<a href="{{asset('/demande-devis')}}" class="nav-link">Devis</a>
							</li>
						</ul>


                        <div class="menu-right-options mr-3">
                            @auth
                            @if(Auth::user()->type == 'professional')
                                <a href="{{asset('/professional')}}" class="main-btn">
                                    <span>
                                        {{ Auth::user()->name }}
                                        <i class="icofont-arrow-right"></i>
                                    </span>
                                </a>
                            @else
                                <a href="{{asset('/admin')}}" class="main-btn">
                                    <span>
                                        {{ Auth::user()->name }}
                                        <i class="icofont-arrow-right"></i>
                                    </span>
                                </a>
                            @endif
                        @else
                            <a href="{{asset('/login-pro')}}" class="main-btn">
                                <span>
                                    Connexion
                                    <i class="icofont-arrow-right"></i>
                                </span>
                            </a>
                        @endauth
						</div>
					</div>

				</div>
			</nav>
		</header>
		<!--=== End Header Section ===-->

		<!--=== Start Menu Slide Bar ===-->
		<aside class="menu-slide-bar">
			<div class="close-mobile-menu">
				<div class="mobile-logo">
					<a href="{{asset('/')}}" class="mobile-logo">
						<img src="{{asset('front/assets/images/logo.png')}}" alt="Logo">
					</a>
				</div>

				<a href="javascript:void(0);" class="close-btn">
					<i class="icofont-close-line"></i>
				</a>
			</div>

			<nav class="side-mobile-menu">
				<ul id="mobile-menu-active">

                    <li class="nav-item">
                        <a href="{{asset('/')}}" class="nav-link  active">Accueil</a>
                    </li>


                    <li class="nav-item has-children">
                        <a href="#" class="nav-link dropdown-toggles">Services</a>

                        <ul class="sub-menu">
                            <li class="nav-item">
								<a href="{{asset('/galvanisation-a-chaud')}}" class="nav-link">Galvanisation à chaud </a>
							</li>

							<li class="nav-item">
								<a href="{{asset('/transformation-metalique')}}" class="nav-link">Transformation métallique</a>
							</li>
                        </ul>
                    </li>



					<li class="nav-item">
						<a href="{{asset('/produits')}}" class="nav-link">Produits</a>
					</li>
					<li class="nav-item">
						<a href="{{asset('/catalogue')}}" class="nav-link">Catalogue</a>
					</li>
					<li class="nav-item">
						<a href="{{asset('/a-propos-metgav')}}" class="nav-link">A propos</a>
					</li>

					<li class="nav-item">
						<a href="{{asset('/actualites')}}" class="nav-link">Actualités</a>
					</li>
                    <li class="nav-item">
                        <a href="{{asset('/articles')}}" class="nav-link">Articles</a>
                    </li>
					<li class="nav-item">
						<a href="{{asset('/demande-devis')}}" class="nav-link">Devis</a>
					</li>

                    @auth
                            @if(Auth::user()->type == 'professional')
                                <a href="{{asset('/professional')}}" class="main-btn">
                                    <span>
                                        {{ Auth::user()->name }}
                                        <i class="icofont-arrow-right"></i>
                                    </span>
                                </a>
                            @else
                                <a href="{{asset('/admin')}}" class="main-btn">
                                    <span>
                                        {{ Auth::user()->name }}
                                        <i class="icofont-arrow-right"></i>
                                    </span>
                                </a>
                            @endif
                        @else
                            <a href="{{asset('/login-pro')}}" class="main-btn">
                                <span>
                                    Connexion
                                    <i class="icofont-arrow-right"></i>
                                </span>
                            </a>
                        @endauth

				</ul>



			</nav>
		</aside>
		<div class="body-overlay"></div>
		<!--=== End Menu Slide Bar ===-->



		@yield('content')

		<!--=== Start Footer Section ===-->
		<section class="footer-section pt-100 pb-70">
			<div class="container">
				<div class="back-to-top text-center">
					<i class="icofont-simple-up"></i>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="main-footer-item wow fadeInUp delay-0-2s">
							<a href="#" class="footer-logo">
								<img src="{{asset('front/assets/images/logo-white.png')}}" alt="Image">
							</a>
							<p> Usine de Galvanisation à Chaud & Transformation Métallique </p>

							<ul class="footer-social-content">
                                <li>
									<a href="https://www.facebook.com/metgav/" target="_blank">
										<i class="icofont-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://www.youtube.com/channel/UCN-SDfWsyrNOqLmEKsbUXmw" target="_blank">
										<i class="icofont-youtube-play"></i>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company/metgav-industry" target="_blank">
										<i class="icofont-linkedin"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-footer-item wow fadeInUp delay-0-4s">
							<h3>Services</h3>

							<ul class="import-link">
								<li>
									<a href="#">Galvanisation à Chaud</a>
								</li>
								<li>
									<a href="#">Transformation Métallique</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-footer-item wow fadeInUp delay-0-6s">
							<h3>Liens rapides</h3>

							<ul class="import-link">
								<li>
									<a href="{{ asset('/products') }}">Produits</a>
								</li>
								<li>
									<a href="{{ asset('/a-propos-metgav') }}">A propos</a>
								</li>
								<li>
									<a href="#">Tlemcen</a>
								</li>

							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-footer-item wow fadeInUp delay-0-8s">
							<h3>Contact</h3>

							<ul class="contact-info">
								<li>
									<i class="icofont-envelope"></i>
									<span>contact@metgav.dz</span>
								</li>
								<li>
									<i class="icofont-location-pin"></i>
									<span>Route Nationale N° 07 Ain Fezza, Tlemcen ALGERIE. </span>
								</li>
								<li>
									<i class="icofont-phone"></i>
									<a href="tel:+213 (0) 43 41 46 04"> Tel : +213 (0) 43 41 42 42 / Fax +213 (0)43 41 49 32 </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=== End Footer Section ===-->

		<!--=== Start Copy Right Section ===-->
		<div class="copy-right-section">
			<div class="container">
				<p>Copyright © 2023 Metgav. All Rights Reserved.</p>
			</div>
		</div>


		<!--=== End Copy Right Section ===-->

        <!--=== JS Link ===-->
        <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('front/assets/js/mobile-menu.js')}}"></script>
		<script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('front/assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('front/assets/js/counterup.min.js')}}"></script>
        <script src="{{asset('front/assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('front/assets/js/countdown.min.js')}}"></script>
		<script src="{{asset('front/assets/js/main.js')}}"></script>


		<script>

		document.addEventListener("DOMContentLoaded", function() {
			if (window.innerWidth < 768) {
			const popup = document.getElementById("popup");
			popup.style.display = "block";
			}
		});

		function closePopup() {
			const popup = document.getElementById("popup");
			popup.style.display = "none";
			const video = document.querySelector('video');
			video.pause();
		}

			$(document).ready(function() {
			  $('.slider-carousel').owlCarousel({
				loop: true,
				autoplay: true,
				autoplayTimeout: 4000,
				autoplayHoverPause: true,
				items: 1,
				nav:true,
				smartSpeed: 2000,
			  });
			});

			$('.article-carousel').owlCarousel({
				loop:true,
				margin:10,
				autoplay: true,
				dots:true,
				autoplayTimeout: 3000,
				smartSpeed: 2000,
				nav:true,
				autoplayHoverPause: true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});

			$('.product-carousel').owlCarousel({
				loop:true,
				margin:20,
				autoplay: true,
				dots:false,
				autoplayTimeout: 3000,
				smartSpeed: 2000,
				nav:true,
				autoplayHoverPause: true,
				items: 4,
				responsive: {
					0: {

						items: 2
					},
					768: {
						items: 2
					},
					992: {
						items: 4
					}
				}

		    });

			$('.product-typeone-carousel').owlCarousel({
				loop:false,
				margin:20,
				items: 3,
				responsive: {
					0: {

						items: 1
					},
					768: {
						items: 1
					},
					992: {
						items: 3
					}
				}

		    });
	    </script>

<script>

	document.addEventListener('DOMContentLoaded', function() {
		var audio = document.createElement('audio');
		audio.src = '{{ asset('music-metgav.mp3') }}';
		audio.autoplay = true;
		audio.loop = true;
		audio.volume = 0.2; // Réglez le volume selon vos préférences (0.0 - 1.0)
		document.body.appendChild(audio);
	});
			</script>

@stack('contact-scripts')

    </body>
</html>
