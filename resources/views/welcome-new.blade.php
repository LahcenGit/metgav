@extends('layouts.front')
@section('content')


<style>

.owl-carousel  {
    position: relative;
}
.owl-carousel .owl-nav {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
}

.owl-carousel .owl-nav button.owl-prev,
.owl-carousel .owl-nav button.owl-next {
  font-size: 20px;
  background-color: #035479;
    width: 2rem;
    height: 2rem;
    color: #ffff;
  border: none;
  outline: none;
  cursor: pointer;
  opacity: 0.5;
}
.owl-carousel .owl-nav button.owl-prev:hover,
.owl-carousel .owl-nav button.owl-next:hover {
  opacity: 1;
  transition: 0.5s;
}


.owl-carousel .owl-nav button.owl-prev {
  position: relative;
  left: -5px;
}

.owl-carousel .owl-nav button.owl-next {
  position: relative;
  right: -5px;
}

.owl-carousel .owl-item.fadeOut {
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.owl-carousel .owl-item.fadeIn {
  opacity: 1;
  transition: opacity 1s ease-in-out;
}

.overflow-section{
    line-height: 1.5 !important;
    height: 4.5em !important;
    overflow: hidden !important;
}

.controller{
    display: none;
}

.new-product  {
            background-color: red;
            color: white;
            padding: 20px;
        }
.new-product-text {
           font-size: 22px;
        }

.new-product-text a {
           text-decoration: none;
        }
   

</style>


<!--=== Start Banner Section ===-->
<div class="slider-carousel owl-carousel">

    <div class="item">
        <section class="banner-section bg-1">
            <div class="container">
                <div class="item">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp delay-0-2s">METGAV INDUSTRY ,</h1>
                        <p class="wow fadeInUp delay-0-4s">Transformation Métallique & Galvanisation à Chaud</p>

                        <a href="{{asset('/a-propos-metgav')}}" class="main-btn wow fadeInUp delay-0-8s">
                            <span>
                                En savoir plus
                                <i class="icofont-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="item">
        <section class="banner-section bg-1" style="background-image: url('/front/assets/images/banner/banner-bg-2.jpg')">
            <div class="container">
                <div class="item">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp delay-0-2s">Infrastructure moderne  ,</h1>
                        <p class="wow fadeInUp delay-0-4s">Pour assurer une production efficace et un service de qualité</p>

                        <a href="{{asset('/a-propos-metgav')}}" class="main-btn wow fadeInUp delay-0-8s">
                            <span>
                                En savoir plus
                                <i class="icofont-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="item">
        <section class="banner-section bg-1" style="background-image: url('/front/assets/images/banner/banner-bg-3.jpg')">
            <div class="container">
                <div class="item">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp delay-0-2s">Engagement qualité</h1>
                        <p class="wow fadeInUp delay-0-4s">pour garantir une collaboration fructueuse avec nos clients</p>

                        <a href="{{asset('/a-propos-metgav')}}" class="main-btn wow fadeInUp delay-0-8s">
                            <span>
                                En savoir plus
                                <i class="icofont-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="item">
        <section class="banner-section bg-1" style="background-image: url('/front/assets/images/banner/banner-bg-4.jpg')">
            <div class="container">
                <div class="item">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp delay-0-2s">Des machines de pointe,</h1>
                        <p class="wow fadeInUp delay-0-4s">pour garantir une finition de haute qualité</p>

                        <a href="{{asset('/a-propos-metgav')}}" class="main-btn wow fadeInUp delay-0-8s">
                            <span>
                                En savoir plus
                                <i class="icofont-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<div class="owl-dots"></div>


<!--=== End Banner Section ===-->


<!--=== Start Services Section ===-->
<section class="services-section bg-color-251f1a ptb-50 mt-4">
    <div class="container">
        <div class="main-section-title white-title wow fadeInUp delay-0-2s">
            <span class="up-title">Cours</span>
            <h2>Cours actuels du zinc et de l'acier</h2>
        </div>

        <div class="services-slider owl-carousel owl-theme " >
            @foreach($settings as $setting)
            <div class="main-services-item wow fadeInUp delay-0-4s">
                <h2 style="color: #f3f3f3; line-height: normal;">
                    {{ $setting->name }}
                    <span style="font-weight: 300;">
                        @if($loop->first)
                            LME
                        @else
                            Boursorama
                        @endif
                    </span>
                </h2>
                <h3 style="color: #f3f3f3;">
                    {{ $setting->value_1 }} <span style="font-size: 16px;">USD</span>
                </h3>
                <p style="line-height: normal;">
                    valeur indicative {{ $setting->value_2 }} EUR
                </p>

                @php
                    // Conversion inline pour valeur 3
                    $value3 = floatval(str_replace(['%', '+'], '', $setting->value_3));
                @endphp

                <!-- Utilisation de la variable $value3 pour déterminer la couleur -->
                <p style="font-size: 25px; color: {{ $value3 < 0 ? '#ff4848' : 'green' }};">
                    {{ $setting->value_3 }}
                </p>
            </div>
        @endforeach
        </div>
       <div class="main-section-title white-title wow fadeInUp delay-0-2s" style="margin-bottom:5px;">
            <span class="up-title">Taux de change</span>
        </div>

        <div class="d-flex justify-content-center text-center" >
             <span class="text-white"> <img src="https://s.brsimg.com/static/i/flags/EUR.png" > 1,00 € =  <img src="https://s.brsimg.com/static/i/flags/USA.png" > 1,0857 $ =
                <img src="https://s.brsimg.com/static/i/flags/GBR.png" > 0,8554 £ =  <img src="https://s.brsimg.com/static/i/flags/JPN.png" >  163,4234 ¥ =
                <img src="https://s.brsimg.com/static/i/flags/CHE.png" > 0,9608 SFr </span>
        </div>
    </div>

    <img src="{{asset('front/assets/images/services-bg-shape.png')}}" class="services-bg-shape" alt="Image">
</section>
<!--=== End Services Section ===-->



<!--=== Start Features Section ===-->
<section class="features-section pt-100 pb-70">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-3 col-sm-6">
                <div class="main-features-item wow fadeInUp delay-0-6s">
                    <i class="main-icon icofont-light-bulb"></i>
                    <i class="shape-icon icofont-light-bulb"></i>
                    <h3>Technologie de pointe</h3>
                    <p class="lh-sm  mt-2">Un usine équipé des technologies les plus avancées pour garantir des résultats précis et cohérents.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="main-features-item wow fadeInUp delay-0-4s">
                    <i class="main-icon icofont-star-shape"></i>
                    <i class="shape-icon icofont-star-shape"></i>
                    <h3>Qualité supérieure</h3>
                    <p class="lh-sm  mt-2"> Metgav s&apos;engager à fournir des produits de qualité supérieure et à respecter les normes de l&apos;industrie.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 ">
                <div class="main-features-item wow fadeInUp delay-0-2s">
                    <i class="main-icon icofont-connection"></i>
                    <i class="shape-icon icofont-connection"></i>
                    <h3>Flexibilité </h3>
                    <p class="lh-sm  mt-2"> Nous sommes en mesure de répondre aux besoins spécifiques de nos clients grâce à notre flexibilité.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="main-features-item wow fadeInUp delay-0-8s">
                    <i class="main-icon icofont-eco-environmen"></i>
                    <i class="shape-icon icofont-eco-environmen"></i>
                    <h3>Environnement</h3>
                    <p class="lh-sm  mt-2">Metgav utilise des méthodes et adopte des pratiques écologiques pour minimiser les impacts environnementaux.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Features Section ===-->

<!--=== Start About Us Section ===-->
<section class="about-us-section pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-us-img me-15 wow fadeInLeft delay-0-2s site-slider  owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset('front/assets/images/about-img.jpg')}}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{asset('front/assets/images/about-img2.jpg')}}" alt="Image">
                    </div>




                    <div class="item">
                        <img src="{{asset('front/assets/images/about-img3.jpg')}}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{asset('front/assets/images/about-img4.jpg')}}" alt="Image">
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ms-15 wow fadeInRight delay-0-2s">
                    <span class="up-title">un savoir-faire inégalé</span>
                    <h2>METGAV INDUSTRY</h2>
                    <p class="mt-2">
                        <b>METGAV INDUSTRY </b>  est une entreprise spécialisée dans la transformation métallique et la galvanisation à chaud. Notre entreprise se positionne comme une force novatrice, s'engageant dans une démarche durable.
                       <p> METGAV est dotée des technologies les plus avancées afin de répondre aux normes internationales en matière de qualité et de sécurité. Nous sommes fiers de notre expertise technique et de notre capacité à satisfaire les demandes de nos clients, quelles que soient leurs exigences..</p>
                      </p>
                    <ul>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            METGAV  adopte une approche systématique de la gestion de la qualité en adéquation avec la
                            norme ISO 9001-2015.
                        </li>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            METGAV possède quatre usines d'une superficie total de <span style="color:#035479"> 69.305m<sup>2</sup></span>
                        </li>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            Notre entreprise continue de croître, <span style="color:#035479">900 emplois directs </span> et <span style="color:#035479">2000 emplois indirects </span>  en 2023.
                        </li>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                                METGAV membre de l'Association Galvazinc europe depuis janvier 2019
                        </li>
                    </ul>

                    <a href="{{asset('/a-propos-metgav')}}" class="main-btn">
                        <span>
                            En savoir plus
                            <i class="icofont-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End About Us Section ===-->

<!--=== Start Services Section ===-->
<section class="services-section bg-color-251f1a ptb-100">
    <div class="container">
        <div class="main-section-title white-title wow fadeInUp delay-0-2s">
            <span class="up-title">Nos Services</span>
            <h2>Conçus pour répondre à tous vos besoins en matière de métallurgie</h2>
        </div>

        <div class="services-slider owl-carousel owl-theme " >
            <div class="main-services-item wow fadeInUp delay-0-4s ">
                <i class="icofont-building"></i>
                <h3>
                    <a href="{{asset('/transformation-metalique')}}">Transformation métallique</a>
                </h3>
                <p>De l'idée à la réalité métallique - explorez notre expertise exceptionnelle dans l'étude, la conception et la fabrication. Plongez dans l'excellence métallique avec METGAV. </p>

                <a href="{{asset('/transformation-metalique')}}" class="main-detail-btn">
                    <i class="icofont-plus"></i>
                    Découvrir davantage...
                </a>
                <img src="{{asset('front/assets/images/services-card-shape.png')}}" class="services-card-shape" alt="Image">
            </div>

            <div class="main-services-item wow fadeInUp delay-0-2s">
                <i class="icofont-fire-burn"></i>
                <h3>
                    <a href="{{asset('/galvanisation-a-chaud')}}">Galvanisation à chaud</a>
                </h3>
                <p>Transformez vos métaux en chefs-d'œuvre durables ! Découvrez comment notre galvanisation à chaud, plus qu'un slogan, est une nécessité dans l'industrie métallurgique. </p>

                <a href="{{asset('/galvanisation-a-chaud')}}" class="main-detail-btn">
                    <i class="icofont-plus"></i>
                    Explorez maintenant...
                </a>
                <img src="{{asset('front/assets/images/services-card-shape.png')}}" class="services-card-shape" alt="Image">
            </div>

        </div>
    </div>

    <img src="{{asset('front/assets/images/services-bg-shape.png')}}" class="services-bg-shape" alt="Image">
</section>
<!--=== End Services Section ===-->

<!--=== Start Projects Section ===-->
{{--<section class="projects-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Nos projets</span>
                        <h2>Découvrez nos réalisations les plus récentes</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Des projets innovants et variés, tous conçus sur mesure pour répondre aux besoins de nos clients en matière de galvanisation à chaud et de transformation métallique. Explorez nos réussites pour vous inspirer et voir comment nous pouvons répondre à vos propres besoins en métallurgie.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-2s">
                    <a href="#" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-1.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Grande mosquée d'Alger </a>
                            </h3>
                            <p>Montage de la Moucharabieh réalisé en tôle galvanisé par Metgav Industry</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-4s">
                    <a href="#" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-2.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Galvanisation des citernes</a>
                            </h3>
                            <p>Une meilleur galvanisation de vos citerne chez Metgav en terme de qualité et prix</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a href="#" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-3.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Projet Armement</a>
                            </h3>
                            <p>Un projet récent de Metgav s'agit de la réalisations des armement </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>--}}
<section class="projects-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Nos invesstissements</span>
                        <h2>Equipements de haute technologie</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Nous disposons d'une vaste gamme d'équipements de haute technologie, y compris des machines de découpe, de planage, de pliage et de soudage, ainsi que des équipements spécialisés pour notre atelier de galvanisation à chaud. Nous utilisons des technologies avancées pour surveiller et contrôler la qualité</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-2s">
                    <a href="{{asset('/ermaksan-cutting-machine')}}" class="projects-img">
                        <img src="{{asset('front/assets/images/machines/ERMAKSAN.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="{{asset('/ermaksan-cutting-machine')}}">ERMAKSAN CUTTING MACHINE </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-4s">
                    <a href="{{asset('/presse-plieuse-hydraulique-speed-bend-pro')}}" class="projects-img">
                        <img src="{{asset('front/assets/images/machines/SPEED-BEND.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="{{asset('/presse-plieuse-hydraulique-speed-bend-pro')}}">SPEED-BEND PRO Presse plieuse</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a href="{{asset('/opw-750-la-soudeuse-automatique')}}" class="projects-img">
                        <img src="{{asset('front/assets/images/machines/OPW-750.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="{{asset('/opw-750-la-soudeuse-automatique')}}">OPW 750 soudeuse automatique</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a href="{{asset('/vernet-behringer-scie-a-ruban-hbp-series')}}" class="projects-img">
                        <img src="{{asset('front/assets/images/machines/HBP.jpg')}}" alt="Image">
                    </a>
                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="{{asset('/vernet-behringer-scie-a-ruban-hbp-series')}}">Vernet Behringer Scie à ruban</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--=== End Projects Section ===-->
<div class="new-product text-center d-flex justify-content-center align-items-center">
    <p class="new-product-text mb-0 me-3">Nouveau produit 2024 : <b>Kiosque multiservices</b></p>
    <a href="{{asset('/produit-a-la-commande/kiosque-multiservices')}}" class="btn btn-light ms-3">Découvrir !</a>
</div>
<!--=== Start Team Section ===-->
<section class="team-section bg-1 bg-color-f2f3f5 pt-100 pb-70">
    

    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">
                        <span class="up-title">Découvrez nos produits de haute qualité</span>
                        <h2>Produits à la chaine</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">

            <div class="product-typeone-carousel owl-carousel ">
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-chaine/Bs')}}" class="team-img">
                                <img src="{{ asset('front/assets/images/products/bs-exemple.jpg') }}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-chaine/Bs')}}">Supports BS</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-chaine/tubulaire')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/tub-exemple.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-chaine/tubulaire')}}">Supports tubulaires</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-chaine/armements-electriques')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/armement-exemple.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-chaine/armements-electriques')}}">Armements électriques</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>


        <div class="main-section-title-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">
                        <h2>Produits à la commande</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">

            <div class="product-carousel owl-carousel ">

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-legere-bungalow')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/Ah-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-legere-bungalow')}}">Ateliers hangar en charpente légère Bungalow</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-metallique')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/am-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-metallique ')}}">Ateliers, hangar en charpente métallique</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/catenaires')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/ct-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/catenaires')}}">Caténaires </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-eclairage-en-lampe-classique')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/sel-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-eclairage-en-lampe-classique')}}">Supports d’éclairage en lampe classique</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-eclairage-photovoltaique')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/ses-example.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-eclairage-photovoltaique')}}">Supports d'éclairage photovoltaïque </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-telecommunication')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/st-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-telecommunication')}}">Supports de télécommunication </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/pivot-irrigation')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/pivot-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/pivot-irrigation')}}">Pivots d'irrigation </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/fabrication-des-citernes')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/fc-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/fabrication-des-citernes')}}">Fabrication des citernes  </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-haute-tension')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/sht.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-haute-tension')}}">Supports haute tension</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/construction-navale')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/cn-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/construction-navale')}}">La construction navale </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/portes-et-fenetres-en-œuvre-d art')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/fp-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/portes-et-fenetres-en-œuvre-d art')}}">Portes et fenêtres en œuvre d'art</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/caillebotis')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/caillebotis-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/caillebotis')}}">Caillebotis </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/chassis-vehicules')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/chassis-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/chassis-vehicules')}}">Châssis véhicules </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/mat-eclairage-stade-portuaire')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/msp-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/mat-eclairage-stade-portuaire')}}">Mat d'éclairage des stades, portuaire et aéroportuaire </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/chassis-metallique-panneau')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/cmp-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/chassis-metallique-panneau')}}">Châssis métallique pour panneau photovoltaique </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-camera')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/sc-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-camera')}}">Mat support pour camera de télésurveillance</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/boulons-et-ecrous') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/be-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/boulons-et-ecrous') }}">Boulons et écrous</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/fil-galvanisé') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/fg-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/fil-galvanisé') }}">Fil galvanisé</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/treillis-soudé') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/ts-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/treillis-soudé') }}">Treillis soudé</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/roulottes-de-chantiers ') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/rc-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/roulottes-de-chantiers ') }}">Roulottes de chantiers</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/panneau-publicitaire ') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/support-pub.jpg')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/panneau-publicitaire  ') }}">Panneaux publicitaires</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/glissiere-securite') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/glissiere.jpg')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/glissiere-securite') }}">Glissières de sécurité</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/kiosque-multiservices') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/kiosque.jpg')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/kiosque-multiservices') }}">Kiosque multiservices</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        <div class="main-section-title-wrap mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">
                        <h2>Prestations de service</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">

            <div class="product-typeone-carousel owl-carousel ">
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('prestation/galvanisation-a-chaud') }}" class="team-img">
                                <img src="{{ asset('front/assets/images/products/presta-1.jpg') }}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('prestation/galvanisation-a-chaud') }}">Galvanisation à chaud (unité Tlemcen)</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/prestation/galvanisation-par-centrifugation-des-boulons-et-des-visses') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/presta-2.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/prestation/galvanisation-par-centrifugation-des-boulons-et-des-visses') }}">Galvanisation par centrifugation des boulons et des visses</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('prestation/galvanisation-a-chaud-ain-defla') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/presta-3.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('prestation/galvanisation-a-chaud-ain-defla') }}">Galvanisation à chaud (unité Ain Defla)</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>


    </div>
</section>
<!--=== End Team Section ===-->

<!--=== Start Counter Section ===-->
<section class="counter-section ">
    <div class="container">
        <div class="counter-wrap pt-100 pb-70">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">69305 </h2>
                        <h2 class="point">m<sup>2</sup></h2>
                        <h3>superficie totale</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="main-counter-item wow fadeInUp delay-0-4s">
                        <h2 class="counter">900</h2>
                        <h3>emplois directs</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="main-counter-item wow fadeInUp delay-0-6s">
                        <h2 class="counter">2000</h2>
                        <h3>emplois indirects</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="main-counter-item wow fadeInUp delay-0-8s">
                        <h2 class="counter">1400</h2>
                        <h2 class="point">+</h2>
                        <h3>clients</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Counter Section ===-->

<!--=== Start Testimonial Section ===-->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Nos partenaires</span>
                        <h2>Explorez notre réseau de partenaires de confiance</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Nous sommes honorés de travailler en collaboration avec des entreprises éminentes, couvrant une gamme diversifiée d'industries. Ces partenaires jouent un rôle essentiel dans la réalisation de notre engagement envers l'excellence, en fournissant des produits et des services de qualité supérieure à nos clients.</p>
                </div>
            </div>
        </div>

        <div class="testimonial-slider owl-carousel owl-theme">
            <div >
                <img src="{{asset('front/assets/images/logos/sonalgaz.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/cpa.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/arm.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/civital.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/boliden.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/unisteel.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/hadjar.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/alzinc.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/naftal.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/lamoa.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/galvazinc.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/sirio.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/sonatrach.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/orsim.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/aon.jpg')}}" alt="Image">
            </div>
        </div>
    </div>
</section>
<!--=== End Testimonial Section ===-->


<!--=== Start Team Section ===-->
<section class="team-section bg-1 bg-color-f2f3f5 pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">
                        <h2>Annuaire d'Entreprises</h2>
                        <span class="up-title">Metgav figure sur plusieurs plateformes commerciales renommées</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">

            <div class="product-typeone-carousel owl-carousel ">
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="https://dz.kompass.com/c/metgav-industry-sarl/dz272263/" class="team-img">
                                <img src="{{ asset('front/assets/images/logos/kompass.png') }}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="https://dz.kompass.com/c/metgav-industry-sarl/dz272263/">Kompass</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="https://www.pagesmaghreb.com/entreprise/metgav-industry-244685/tlemcen-49/algerie" class="team-img">
                                <img src="{{asset('front/assets/images/logos/maghreb.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="https://www.pagesmaghreb.com/entreprise/metgav-industry-244685/tlemcen-49/algerie">PAGES MAGHREB</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="https://www.europages.fr/" class="team-img">
                                <img src="{{asset('front/assets/images/logos/europage.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="https://www.europages.fr/">Europages</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>


        <div class="main-section-title-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">

                        <h2>Adhésions</h2>
                        <span class="up-title">METGAV s'inscrit dans une démarche collaborative</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
                <div class="col-md-6" >
                    <div class="main-team-item fadeInUp delay-0-2s">
                        <img  src="{{ asset('members/cci-tafna.jpg') }}" alt="Image">
                    </div>
                </div>
        </div>


        <div class="main-section-title-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">

                        <h2>Liens outils</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
                <div class="col-sm-2" >
                    <div class="main-team-item fadeInUp delay-0-2s text-center">
                       <a href="https://sidjilcom.cnrc.dz"><img width="100" src="{{ asset('/cnrc.png') }}" alt="Image"></a> 
                    </div>
                </div>
                <div class="col-sm-2" >
                    <div class="main-team-item fadeInUp delay-0-2s text-center">
                       <a href="https://www.algex.dz"><img  width="100"  src="{{ asset('/algex.png') }}" alt="Image"></a> 
                    </div>
                </div>
        </div>

    </div>
</section>
<!--=== End Team Section ===-->





<!--=== Start Video Section ===-->
<section class="video-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video-content wow fadeInLeft delay-0-2s">
                    <span class="up-title">Video</span>
                    <h2>Plongez dans l'univers de notre usine </h2>
                    <p>Observez la structure de nos usines et les processus de production en action pour mieux comprendre notre savoir-faire en matière...</p>

                    <a href="{{asset('/a-propos-metgav')}}" class="main-btn wow fadeInUp delay-0-8s">
                        <span>
                            En savoir plus
                            <i class="icofont-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bbQP7-YzGGg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!--=== End Video Section ===-->

<!--=== Start Blog Section ===-->
<section class="blog-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">section Actualités</span>
                        <h2>Les dernières actualités </h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p style="line-height: 1.5">Dans cette section, vous trouverez une variété d'articles pertinents et instructifs couvrant une gamme de sujets d'actualité. Notre objectif est de vous tenir informé des derniers développements et des informations essentielles pour rester au courant des événements importants.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            @foreach ($actualites as $actualite)
                <div class="col-lg-4 col-md-6">
                    <div class="main-blog-item wow fadeInUp delay-0-2s">
                        <a href="{{asset('actualite/'.$actualite->slug)}}" class="blog-img">
                            <img src="{{asset('storage/images/actualites/'.$actualite->images[0]->link)}}" alt="Image">
                        </a>

                        <div class="blog-content hover-style">
                            <div class="inner-border">
                                <ul>
                                    <li>{{ $actualite->date }}</li>
                                </ul>
                                <h3>
                                    <a href="{{asset('actualite/'.$actualite->slug)}}">{{$actualite->title}}</a>
                                </h3>
                                <p class="overflow-section">{{$actualite->description }}...</p>
                                <a href="{{asset('actualite/'.$actualite->slug)}}" class="main-detail-btn">
                                    Lire plus
                                    <i class="icofont-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
<!--=== End Blog Section ===-->

<!--=== Start iso ===-->
<section class="ptb-100" style="background-color:#f3f3f3">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Engagement qualité</span>
                        <h2>Des produits et services de haute qualité</h2>
                    </div>
                    <div >
                        <img style="border-radius:40px;" src="{{asset('front/assets/images/iso-300x85.jpg')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Notre usine de la galvanisation à Chaud & Transformation Métallique s'engage à fournir des produits et services de haute qualité, respectueux de l'environnement et sûrs pour tous les travailleurs impliqués dans le processus de production. Nous avons mis en place un système de gestion de la qualité conforme aux normes internationales ISO 9001 pour garantir la satisfaction de nos clients, un système de gestion environnementale conforme à la norme ISO 14001 pour minimiser l'impact environnemental de nos activités et un système de gestion de la santé et de la sécurité conforme à la norme ISO 45001 pour assurer la sécurité et la santé de nos employés. Avec ces systèmes, nous sommes en mesure de garantir la qualité et la durabilité de nos produits tout en préservant l'environnement et en offrant un environnement de travail sûr et sain pour nos employés.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!--=== End iso ===-->


<div class="popup" id="popup">
    <div class="popup-header">
        <div class="popup-title">Vidéo Présentation Metgav</div>
        <div class="close-btn" onclick="closePopup()">X</div>
    </div>
    <div class="popup-content">
        <video controls width="560" height="315">
            <source src="{{asset('/metgav.mp4')}}" type="video/mp4">

        </video>
    </div>
</div>


@endsection
@section('accueil-active', 'active')
