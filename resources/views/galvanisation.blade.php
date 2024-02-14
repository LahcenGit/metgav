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
            <h2>Galvanisation à chaud</h2>
            <ul>
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    galvanisation à chaud
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
                <h1>Une protection durable et une finition esthétique !</h1>
              <p class="mt-2">
                La galvanisation a émergé en tant que standard et impératif dans l'industrie métallurgique en raison de son rôle crucial dans la protection contre la corrosion. C'est dans cette optique que METGAV INDUSTRY intègre des lignes de galvanisation à chaud à ses ateliers, adoptant ainsi le procédé prédominant à l'échelle mondiale. METGAV INDUSTRY se positionne comme fournisseur de solutions adaptées à divers secteurs tels que le bâtiment, le mobilier urbain, la construction navale, l'énergie renouvelable, et bien d'autres.
              </p>
              <p>Par conséquent, METGAV INDUSTRY s'est équipée d'un procédé industriel hautement technologique, combinant efficacité, respect des normes environnementales et bien-être des travailleurs.</p>
            </div>

          
        </div>
    </div>
</section>
<!--=== End Projects Details Section ===-->

<!--=== Start Counter Section ===-->
<section class="counter-section pb-50 mt-4">
    
    <div class="container">
        <h1 class="mb-2">NOS BAINS DE ZINC (02) </h1>
        <div class="counter-wrap" style="background-image:none!important; padding-top:40px; padding-bottom:40px;" >
            <div class="row  mt-4">
                <div class="col-lg-3 col-3">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">10</h2>
                        <h2 class="point">m</h2>
                        <h3>de longueur</h3>
                        <h5>Suite ain fezza 1</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="main-counter-item wow fadeInUp delay-0-2s">
                        <h2 class="counter">7</h2>
                        <h2 class="point">m</h2>
                        <h3>de longueur</h3>
                        <h5>Suite ain fezza 2</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="main-counter-item wow fadeInUp delay-0-4s">
                        <h2 class="counter">2</h2>
                        <h2 class="point">m</h2>
                        <h3>de profondeur</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="main-counter-item wow fadeInUp delay-0-6s">
                        <h2 class="counter">1.5</h2>
                        <h2 class="point">m</h2>
                        <h3>de largeur</h3>
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
        <div class="main-section-title-wrap mb-4">
            <div class="row">
                <div class="col-lg-12 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title white-title left-title">
                        <span class="up-title">application</span>
                        <h2>Procédé d’application</h2>
                    </div>
                    <div class=" wow fadeInRight delay-0-2s">
                        <p class="p-style">Nos deux bains de zinc, mesurant respectivement 10 mètres et 7 mètres, représentent des équipements de pointe essentiels à notre processus de galvanisation à chaud. Ces installations permettent une immersion complète des pièces métalliques dans le bain de zinc fondu, assurant ainsi une couverture uniforme et une protection efficace contre la corrosion. Grâce à notre expertise avancée en galvanisation et à l'utilisation de ces bains de zinc modernes, nous sommes en mesure de fournir des produits d'une qualité exceptionnelle, conformes aux normes les plus strictes en termes de résistance à la corrosion et de durabilité.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <section class="features-section ">
                <div class="container">
                    <div class="row d-flex justify-content-between">

                        <div class="col-lg-4 col-sm-6">
                            <div class="main-features-item wow fadeInUp delay-0-2s">
                                <img src="{{asset('front/assets/images/icons/icon-1.jpg')}}" alt="">
                               
                                <h3>1.Dégraissage</h3>
                                <p class="lh-sm  mt-2">
                                    Le dégraissage a pour objectif d'éliminer toutes les salissures et les graisses qui entravent la dissolution des oxydes de fer à la surface.
                                    </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-sm-6">
                            <div class="main-features-item wow fadeInUp delay-0-4s">
                                <img src="{{asset('front/assets/images/icons/icon-4.jpg')}}" alt="">
                                <h3>
                                    2.Rinçage
                                    </h3>
                                <p class="lh-sm  mt-2"> Après le dégraissage, un rinçage est effectué pour éviter toute contamination des solutions ultérieures.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="main-features-item wow fadeInUp delay-0-6s">
                                <img src="{{asset('front/assets/images/icons/icon-3.jpg')}}" alt="">
                                <h3>
                                    3.Décapage
                                    </h3>
                                <p class="lh-sm  mt-2">
                                    Le décapage vise à éliminer la calamine et les résidus d'oxydes présents à la surface de l'acier.
                                    </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <div class="row align-items-center">
            <section class="features-section ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-4 col-sm-6 ">
                            <div class="main-features-item wow fadeInUp delay-0-2s">
                                <img src="{{asset('front/assets/images/icons/icon-4.jpg')}}" alt="">
                                <h3>
                                    4.Rinçage
                                    </h3>
                                <p class="lh-sm  mt-2">
                                    
Un deuxième rinçage est réalisé après le décapage pour éliminer les sels de fer et les traces d'acide qui pourraient éventuellement contaminer l'opération suivante.

                                    </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-sm-6">
                            <div class="main-features-item wow fadeInUp delay-0-4s">
                                <img src="{{asset('front/assets/images/icons/icon-5.jpg')}}" alt="">
                                <h3>
                                    5.Fluxage
                                    </h3>
                                <p class="lh-sm  mt-2"> 
                                    Le fluxage a pour objectif de protéger la pièce métallique contre une éventuelle ré-oxydation et d'optimiser l'adhérence du zinc à la surface du métal.
                                    </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="main-features-item wow fadeInUp delay-0-6s">
                                <img src="{{asset('front/assets/images/icons/icon-7.jpg')}}" alt="">
                                <h3>6.Séchage</h3>
                                <p class="lh-sm  mt-2">
                                    Le séchage s'effectue dans une enceinte fermée où circule un flux d'air chaud provenant du bain de fusion, afin d'éviter les chocs thermiques et les projections de zinc lors de l'immersion de la pièce.
                                    </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <div class="row align-items-center">
            <section class="features-section ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-4 col-sm-6 ">
                            <div class="main-features-item wow fadeInUp delay-0-2s">
                                <img src="{{asset('front/assets/images/icons/icon-8.jpg')}}" alt="">
                                <h3>
                                    7.Zingage
                                    </h3>
                                <p class="lh-sm  mt-2">

                                    Les pièces sont immergées dans le bain de zinc fondu à 450 c° et les temps de trempage varient selon l’importance des charges, les dimensions, et l’épaisseur des pièce
                                    </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-sm-6">
                            <div class="main-features-item wow fadeInUp delay-0-4s">
                                <img src="{{asset('front/assets/images/icons/icon-6.jpg')}}" alt="">
                                <h3> 8.Refroidissement & contrôle</h3>
                                <p class="lh-sm  mt-2"> 
                                    Les pièces galvanisées sont ensuite refroidies et soumises à un contrôle approfondi dans un laboratoire bien équipé, assurant un suivi rigoureux en matière d'analyse physico-chimique avant et après le bain de zingage.
                                    </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="main-features-item wow fadeInUp delay-0-6s">
                                <img src="{{asset('front/assets/images/icons/icon-2.jpg')}}" alt="">
                                <h3>
                                    9.Passivation
                                    </h3>
                                <p class="lh-sm  mt-2">

                                    La passivation vise à donner un aspect éclatant au produit fini.
                                    </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
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
                        <h2>Voir nos Ateliers de Galvanisation à chaud</h2>
                    </div>
                    <p>Découvrez notre équipement de pointe en action, et observez comment nous préparons méticuleusement chaque pièce pour garantir une application uniforme et durable du revêtement de zinc.</p>

                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3bI7UZc6aI8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                </div>
            </div>
        </div>

    </div>
</section>
<!--=== End Testimonial Section ===-->





@endsection
