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

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>OPW 750 la soudeuse automatique</h2>
            <ul>
                <li>
                    <a href="#">Investissement</a>
                </li>
                <li>
                    OPW 750 la soudeuse automatique
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Blog Details Section ===-->
<section class="blog-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">

                    <div class="article-carousel owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ asset('front/assets/images/img-4.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/img-5.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/img-6.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                    </div>


                    <p>La machine automatique élevée de soudure de Polonais de mât est utilisée pour le poteau de poteau / puissance élevé de poteau de mât assemblent la soudure. Avec le contrôleur de PLC, la machine peut tenir automatiquement le corps de poteau (le corps de poteau peut être 2 ou plusieurs morceaux soudés par plat) et souder automatiquement. Le taux de slops de pôle peut être programmable selon la conception. Pour le soudage de la plaque d’une grande épaisseur de poteau de poteau / poteau de puissance élevé, le soudage de submersion est appliqué.
                    </p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="about-us-img">
                        <img src="{{ asset('front/assets/images/about-img.jpg') }}" alt="Image">

                        <div class="experience">
                            <div class="experience-bg">
                                <span>Depuis 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="categories">
                        <h3>Voir plus</h3>
                        <ul>
                            <li>
                                <a href="{{ asset('/presse-plieuse-hydraulique-SPEED-BEND-PRO') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    Presse plieuse hydraulique SPEED-BEND PRO
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/ermaksan-cutting-machine') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    ERMAKSAN CUTTING MACHINE
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/vernet-behringer-Scie-à-ruban-HBP-series') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    Vernet Behringer Scie à ruban HBP series
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog Details Section ===-->

@endsection
