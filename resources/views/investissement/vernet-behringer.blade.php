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
            <h2>Vernet Behringer Scie à ruban HBP series</h2>
            <ul>
                <li>
                    <a href="#">Investissement</a>
                </li>
                <li>
                    Vernet Behringer Scie à ruban HBP series
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
                            <img src="{{ asset('front/assets/images/img-7.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                    </div>
                   
                    <p>Une gamme de scies ruban, alliant coupes prcises et vitesses leves, adapte tous les types de profils utiliss dans la « Construction Mtallique » Reconnues internationalement pour leur robustesse, leur prcision et leur vitesse d’excution,les scies Behringer permettent la coupe droite et en angle de tous types de profils. Complment naturel de nos portiques de perage rapide HD, cette ligne ainsi constitue est l’lment clef de la performance de tout atelier de charpente mtallique.
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
                                <a href="{{ asset('/OPW-750-la-soudeuse-automatique') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    OPW 750 la soudeuse automatique
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
