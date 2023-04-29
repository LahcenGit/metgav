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
            <h2>Supports haute tension</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Supports haute tension</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">

                <div class="article-carousel owl-carousel owl-theme">

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/shq/img1.png') }}" alt="Image">
                        </div>

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/shq/img2.png') }}" alt="Image">
                        </div>
                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Les supports haute tension</h3>
                    <p>Les supports haute tension sont des structures conçues pour supporter les câbles électriques à haute tension. Ils sont utilisés pour transporter l'électricité sur de longues distances, généralement à des tensions supérieures à 1000 volts. Ces structures peuvent prendre différentes formes et tailles, mais elles ont toutes en commun leur capacité à supporter des charges électriques importantes.

                        Les supports haute tension peuvent être fabriqués à partir de divers matériaux, tels que l'acier, le béton armé ou le bois traité. Ils sont conçus pour résister aux conditions météorologiques difficiles, comme les vents forts, la pluie, la neige et la glace. Les supports peuvent être équipés d'isolateurs en céramique pour éviter les décharges électriques.

                        Les supports haute tension peuvent être installés à différents endroits, y compris sur des pylônes, des mâts, des tours ou des poteaux. Le choix de la structure dépend de facteurs tels que la distance à parcourir, la charge électrique transportée et les conditions environnementales.</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <p>Les supports haute tension sont des structures conçues pour supporter les câbles électriques à haute tension. Ils sont utilisés pour transporter l'électricité sur de longues distances, généralement à des tensions supérieures à 1000 volts. Ces structures peuvent prendre différentes formes et tailles, mais elles ont toutes en commun leur capacité à supporter des charges électriques importantes.

                                    Les supports haute tension peuvent être fabriqués à partir de divers matériaux, tels que l'acier, le béton armé ou le bois traité. Ils sont conçus pour résister aux conditions météorologiques difficiles, comme les vents forts, la pluie, la neige et la glace. Les supports peuvent être équipés d'isolateurs en céramique pour éviter les décharges électriques.

                                    Les supports haute tension peuvent être installés à différents endroits, y compris sur des pylônes, des mâts, des tours ou des poteaux. Le choix de la structure dépend de facteurs tels que la distance à parcourir, la charge électrique transportée et les conditions environnementales.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Product Details Section ===-->


@endsection
