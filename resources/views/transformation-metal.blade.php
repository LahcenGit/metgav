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
    .section-p{
        padding: 10px;
         background-color:#c1e8fa;
          line-height: 1.5 !important;
          font-size: 15px;
          margin-bottom: 5px;
    }
    </style>

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


<!--=== Start Page Banner Section ===-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Transformation Métallique</h2>
            <ul>
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    transformation métallique
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Projects Details Section ===-->
<section class="project-details-section pt-100 " >
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-4 mb-4">
                <div class="article-carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('front/assets/images/galva/g1.jpg') }}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{ asset('front/assets/images/galva/g2.jpg') }}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{ asset('front/assets/images/galva/g3.jpg') }}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{ asset('front/assets/images/galva/g4.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 mt-2 mb-2">
                <h1>De la conception à la fabrication !</h1>
              <p class="mt-2">
                Notre atelier de transformation métallique de pointe chez Metgav est équipé des dernières technologies en matière de planage, découpe, usinage et assemblage de pièces métalliques sur mesure. Nous sommes spécialisés dans la conception et la fabrication de produits métalliques de haute qualité pour une large gamme d'applications industrielles et commerciales.
              </p>
              <p class="mt-2">
                Grâce à notre équipe de professionnels hautement qualifiés et à notre équipement de pointe, nous sommes en mesure de produire des pièces métalliques de haute précision avec une efficacité optimale, tout en maintenant des normes de qualité strictes à chaque étape du processus de production.
              </p>
                  

            </div>



          
        </div>

        <h1>Notre équipement de pointe !</h1>

        <div class="row mt-2">
            <div class="col-md-6">
                <p class="section-p" >  Une ligne de planage, dressage et découpage de tôle à partir de bobines de différentes dimensions et épaisseurs allant de 2 à 6mm.</p>
                <p class="section-p" >Une ligne de découpe plasma de 12m de longueur et à 3 têtes d’oxycoupage qui permet de découper les tôles selon des figures géométriques précises telles les tôles trapézoïdales pour la fabrication des polygonaux et accessoires de différentes formes. </p>
                <p class="section-p">Les presses plieuses en tandem de (2×6) allant jusqu’à 12m et plus de longueur.</p>
                <p class="section-p">Une ligne de soudage semi automatique de haute performance pouvant souder des pylônes sur 12m et plus de longueur et 750mm de diamètre.</p>
                <p class="section-p">Une cisaille hydraulique pour couper des tôles allant jusqu’à 3m de longueur.</p>

            </div>
            <div class="col-md-6">
                <p class="section-p">Deux cisailles poinçonneuses universelles pour découper la tôle en ruban de petite taille et des pièces métalliques selon les poinçons désirés.</p>

                <p  class="section-p">Une ligne de perçage/ sciage moderne munie d’un automate programmable pour la confection de charpente métallique et tout type de profilés marchand (605mm)</p>
                <p  class="section-p">Une scie à ruban pour les coupes biaises des tôles et pièces métalliques</p>
                <p  class="section-p">Une perceuse radiale.</p>
                <p  class="section-p">Des équipements de soudage pour l’assemblage des produits semi-finis.</p>
            </div>
            
        </div>
    </div>
</section>
<!--=== End Projects Details Section ===-->

<!--=== Start Counter Section ===-->
<section class="counter-section pb-50 mt-4">
    
    <div class="container">
        <div class="counter-wrap" style="background-image:none!important; padding-top:40px; padding-bottom:40px;" >
            <div class="row  mt-4">
                <div class="col-lg-2 col-4">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">12</h2>
                        <h2 class="point">m</h2>
                        <h3>Découpe Tôles <br>
                            2 à 6mm</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">12</h2>
                        <h2 class="point">m</h2>
                        <h3>Ligne plasma <br>
                            à 3 têtes</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">12</h2>
                        <h2 class="point">m</h2>
                        <h3>Presse plieuse <br>
                            640 tonnes</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">13</h2>
                        <h2 class="point">m</h2>
                        <h3>Ligne soudage<br>
                            semi automatique</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">650</h2>
                        <h2 class="point">mm</h2>
                        <h3>Ligne charpente<br>
                            métallique</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">3</h2>
                        <h2 class="point">m</h2>
                        <h3>Guillotine<br>
                            16mm</h3>
                    </div>
                </div>
           

               
              
            </div>
        </div>
    </div>
</section>
<!--=== End Counter Section ===-->

<!--=== Start FAQ Section ===-->
<section class="faq-section " style="padding-top:30px;padding-bottom:30px;margin-bottom: 20px;" >
    

    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s mb-4">
                    <div class="main-section-title left-title">
                        <span class="up-title">Vidéo</span>
                        <h2 style="color:#ffff;">Voir l'atelier de transformation métallique</h2>
                    </div>
                    <p style="color:#ffff;">Dans cette vidéo, nous vous offrons un aperçu de nos capacités de production de pointe, de notre équipement de haute technologie et de notre équipe de professionnels qualifiés.</p>
                   
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Fafh6LTeusk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                </div>
            </div>
        </div>

    </div>

</section>
<!--=== End FAQ Section ===-->


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





@endsection
