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
</style>


<!--=== Start Banner Section ===-->
<div class="slider-carousel owl-carousel">

    <div class="item">
        <section class="banner-section bg-1">
            <div class="container">
                <div class="item">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp delay-0-2s">METGAV INDUSTRY ,</h1>
                        <p class="wow fadeInUp delay-0-4s"> Usine de Galvanisation à Chaud & Transformation Métallique</p>

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
                    

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ms-15 wow fadeInRight delay-0-2s">
                    <span class="up-title">un savoir-faire inégalé</span>
                    <h2>METGAV INDUSTRY</h2>
                    <p class="mt-2">
                        <b>Depuis 2019,</b> Metgav s'est engagée à fournir des produits de qualité supérieure à nos clients en Algérie et dans d'autres pays. Nous sommes spécialisés dans la production de produits métalliques tels que des profilés en acier, des tubes en acier, des poutrelles en acier et des produits de galvanisation à chaud.
                       <p> Notre usine est équipée des technologies les plus avancées pour répondre aux normes internationales de qualité et de sécurité. Nous sommes fiers de notre expertise technique et de notre capacité à répondre aux demandes des clients, quels que soient leurs besoins.</p>
                      </p>
                    <ul>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            METGAV  adopte une approche systématique de la gestion de la qualité en adéquation avec la
                            norme ISO 9001-2015.
                        </li>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            METGAV possède quatre usines d'une superficie total de <span style="color:#035479"> 32.405m<sup>2</sup></span>
                        </li>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            Notre entreprise continue de croître, avec une équipe de <span style="color:#035479">900 employés</span>  en 2023.
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
            <div class="main-services-item wow fadeInUp delay-0-2s">
                <i class="icofont-fire-burn"></i>
                <h3>
                    <a href="{{asset('/galvanisation-a-chaud')}}">Galvanisation à chaud</a>
                </h3>
                <p>La galvanisation est devenue à la fois un slogan et une exigence pour le secteur métallurgique vu son importance en ...</p>

                <a href="{{asset('/galvanisation-a-chaud')}}" class="main-detail-btn">
                    <i class="icofont-plus"></i>
                    Lire plus
                </a>
                <img src="{{asset('front/assets/images/services-card-shape.png')}}" class="services-card-shape" alt="Image">
            </div>

            <div class="main-services-item wow fadeInUp delay-0-4s ">
                <i class="icofont-building"></i>
                <h3>
                    <a href="{{asset('/transformation-metalique')}}">Transformation métallique</a>
                </h3>
                <p>Spécialisée dans l’étude, la conception et la fabrication, METGAV dispose d’un atelier de transformation métallique...</p>

                <a href="{{asset('/transformation-metalique')}}" class="main-detail-btn">
                    <i class="icofont-plus"></i>
                    Lire plus
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
                                        <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-legere-bungalow')}}">Ateliers, hangar en charpente métallique</a>
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
                                        <a href="{{asset('/produit-a-la-commande/chassis-metallique-panneau')}}">chassis métallique pour panneau photovoltaique </a>
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
                            <a href="#" class="team-img">
                                <img src="{{asset('front/assets/images/products/be-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="#">Boulons et écrous</a>
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
                            <a href="#" class="team-img">
                                <img src="{{asset('front/assets/images/products/fg-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="#">Fil galvanisé</a>
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
                            <a href="#" class="team-img">
                                <img src="{{asset('front/assets/images/products/ts-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="#">Treillis soudé</a>
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
                            <a href="#" class="team-img">
                                <img src="{{asset('front/assets/images/products/rc-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="#">Roulottes de chantiers</a>
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

<!--=== Start Testimonial Section ===-->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Nos partenaires</span>
                        <h2>Découvrez nos partenaires de confiance</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Nous sommes fiers de collaborer avec des entreprises renommées dans l'industrie de la galvanisation à chaud et de la transformation métallique pour offrir des produits et des services de qualité supérieure à nos clients. Explorez notre liste de partenaires pour en savoir plus sur nos relations commerciales solides et durables.</p>
                </div>
            </div>
        </div>

        <div class="testimonial-slider owl-carousel owl-theme">
            <div >
                <img src="{{asset('front/assets/images/logos/chi1-150x150.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/cma_logo-150x150.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/sonalgaz.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/gk.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/mobilis-150x150.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/famag.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/kahrif-2-150x150.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/cpa.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/arm.png')}}" alt="Image">
            </div>



        </div>
    </div>
</section>
<!--=== End Testimonial Section ===-->

<!--=== Start Video Section ===-->
<section class="video-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video-content wow fadeInLeft delay-0-2s">
                    <span class="up-title">Video</span>
                    <h2>Plongez dans l'univers de notre usine </h2>
                    <p>Observez la structure de notre usine et les processus de production en action pour mieux comprendre notre savoir-faire en matière...</p>

                    <a href="{{asset('/a-propos-metgav')}}" class="main-btn wow fadeInUp delay-0-8s">
                        <span>
                            En savoir plus
                            <i class="icofont-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Rhrjh6JXOHo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                        <span class="up-title">section Articles</span>
                        <h2>Une variété d'articles pertinents.</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p style="line-height: 1.5">Dans cette section, vous trouverez une variété d'articles pertinents et informatifs sur la galvanisation à chaud et la transformation métallique. Nous partageons notre expertise et nos connaissances pour vous aider à mieux comprendre les avantages de la galvanisation à chaud et ses applications dans différents secteurs.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="main-blog-item wow fadeInUp delay-0-2s">
                        <a href="{{asset('article/'.$article->slug)}}" class="blog-img">
                            <img src="{{asset('storage/images/articles/'.$article->images[0]->link)}}" alt="Image">
                        </a>

                        <div class="blog-content hover-style">
                            <div class="inner-border">
                                <ul>
                                    <li>février 12, 2023</li>
                                </ul>
                                <h3>
                                    <a href="{{asset('article/'.$article->slug)}}">{{$article->title}}</a>
                                </h3>
                                <p class="overflow-section">{{$article->description }}...</p>
                                <a href="{{asset('article/'.$article->slug)}}" class="main-detail-btn">
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
