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
            <h2>A propos de METGAV</h2>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                    a propos 
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

	<!--=== Start Projects Details Section ===-->
    <section class="project-details-section  " style="margin-top:50px;">
        <div class="container">
            <h1 >Metgav industry, <span style="color: #29A9E1"> Metal & Galvanizing !</span></h1>

            <div class="row mt-4">
                <div class="col-lg-8">
                    <div class="article-carousel owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ asset('front/assets/images/apropos/a1.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/apropos/a2.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/apropos/a3.jpg') }}" alt="Image">
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-left-sidebar">
                        
                        <div class="row align-items-center d-flex justify-content-center">
                            <div class="col">
                                <div class="about-us-img me-15 wow fadeInLeft delay-0-2s">
                                    <img height="300px" width="400px" src="{{asset('front/assets/images/ceo-metgav.jpg')}}" alt="Image">
                
                                </div>
                            </div>
                            
                        </div>

                        <div class="row align-items-center d-flex justify-content-center">
                            <div class="col">
                                    <div class="about-content ms-15 wow fadeInRight delay-0-2s">
                                        <span class="up-title">Directeur général</span>
                                        <h2>Mr Abid Reda</h2>
                    
                                        <a href="#section1" class="main-btn">
                                            <span>
                                                Mot du Directeur général
                                                <i class="icofont-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>

            <div class=" row project-details-cntent ptb-50">
                <div class="col-md-8">
                    <p class="mt-2">
                        <b>Depuis 2014,</b> Metgav s'est engagée à fournir des produits de qualité supérieure à nos clients en Algérie et dans d'autres pays. Nous sommes spécialisés dans la production de produits métalliques tels que des profilés en acier, des tubes en acier, des poutrelles en acier et des produits de galvanisation à chaud.
                       <p> Notre usine est équipée des technologies les plus avancées pour répondre aux normes internationales de qualité et de sécurité. Nous sommes fiers de notre expertise technique et de notre capacité à répondre aux demandes des clients, quels que soient leurs besoins.</p>
                      </p>
                </div>
                <div class="col-md-4" style="background-color: #29A9E1; padding:20px;">
                    <h4 style="color: #ffff">Engagement envers l'environnement</h4>
                    <p style="color: #ffff; line-height:1.5">Chez Metgav, nous sommes conscients de l'impact que notre activité peut avoir sur l'environnement. C'est pourquoi nous nous engageons à minimiser cet impact en mettant en place des pratiques environnementales durables.</p>

                </div>
            </div>
        </div>
    </section>
    <!--=== End Projects Details Section ===-->


<!--=== Start FAQ Section ===-->
<section class="faq-section " id="section1" style="padding-top:30px;padding-bottom:30px;margin-bottom: 20px;" >
    <div class="container">
        <div class="main-section-title-wrap mb-4">
            <div class="row">
                <div class="col-lg-12 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title white-title left-title">
                        <span class="up-title">Message du Directeur général</span>
                        <h2>Mr Abid Reda</h2>
                    </div>
                    <div class=" wow fadeInRight delay-0-2s">
                        <p class="p-style">Je suis ravi de vous adresser ce message depuis l'usine de galvanisation à chaud et de transformation métallique située à Tlemcen en Algérie. En tant que Directeur général, je suis fier de diriger une équipe de travailleurs passionnés et dévoués qui sont déterminés à fournir des produits de qualité supérieure à nos clients.</p>
                        <p class="p-style">Notre usine de galvanisation à chaud et de transformation métallique est équipée des technologies les plus avancées pour produire des produits de haute qualité répondant aux normes internationales. Nous sommes fiers de notre expertise technique et de notre capacité à répondre aux demandes des clients, quels que soient leurs besoins.</p>
                        <p class="p-style">Nous sommes engagés à maintenir les plus hauts niveaux de qualité et de sécurité pour tous nos produits et services. Nous sommes également déterminés à innover et à améliorer continuellement nos processus pour répondre aux besoins changeants du marché.</p>
                        <p class="p-style">En tant que Directeur général, je suis convaincu que notre usine de galvanisation à chaud et de transformation métallique est bien positionnée pour répondre aux défis du marché et pour continuer à croître dans les années à venir.</p>
                        <p class="p-style">Je tiens à remercier tous nos clients et partenaires pour leur confiance continue envers notre entreprise. Nous sommes impatients de continuer à travailler avec vous et de fournir les produits de qualité supérieure que vous attendez de nous.</p>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</section>
<!--=== End FAQ Section ===-->


<!--=== Start Testimonial Section ===-->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s mb-4">
                    <div class="main-section-title left-title">
                        <span class="up-title">Vidéo</span>
                        <h2>Découvrez notre usine et son positionnement </h2>
                    </div>
                    <p>vous pourrez découvrir notre usine et son positionnement géographique, ainsi que la structure de notre site de production. Vous pourrez également voir notre équipement de pointe et notre personnel qualifié en action, montrant les différentes étapes de notre processus de production, de la fabrication à la galvanisation à chaud.</p>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Rhrjh6JXOHo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                </div>
            </div>
        </div>

    </div>
</section>
<!--=== End Testimonial Section ===-->





@endsection
