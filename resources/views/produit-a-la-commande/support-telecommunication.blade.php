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
            <h2>Supports de télécommunication</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Supports de télécommunication</a>
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
                            <img src="{{ asset('front/assets/images/products/st/img-2.png') }}" alt="Image">
                        </div>

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/st/img-3.png') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/st/img-1.png') }}" alt="Image">
                        </div>
                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Les supports de télécommunication</h3>
                    <p>Les supports de télécommunication industrielle sont des équipements qui permettent la transmission de données, de voix ou d'images dans un environnement industriel. Ces supports sont conçus pour résister aux conditions difficiles que l'on peut rencontrer dans les installations industrielles, telles que les vibrations, les températures extrêmes, l'humidité, la poussière et les interférences électromagnétiques.

                        Il existe différents types de supports de télécommunication industrielle, tels que les câbles en fibre optique, les câbles en cuivre, les antennes sans fil, les réseaux Ethernet et les modems industriels. Chaque type de support a ses propres avantages et inconvénients en fonction des exigences de l'installation industrielle.

                        Les supports de télécommunication industrielle sont utilisés dans de nombreux secteurs industriels, tels que la fabrication, la production d'énergie, la gestion des déchets, le traitement de l'eau et de l'air, ainsi que dans les transports. Ils sont essentiels pour assurer la communication entre les différentes parties d'une installation industrielle et pour permettre la surveillance et le contrôle à distance des processus industriels.</p>
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
                                <p>Les supports de télécommunication industrielle sont des équipements qui permettent la transmission de données, de voix ou d'images dans un environnement industriel. Ces supports sont conçus pour résister aux conditions difficiles que l'on peut rencontrer dans les installations industrielles, telles que les vibrations, les températures extrêmes, l'humidité, la poussière et les interférences électromagnétiques.

                                    Il existe différents types de supports de télécommunication industrielle, tels que les câbles en fibre optique, les câbles en cuivre, les antennes sans fil, les réseaux Ethernet et les modems industriels. Chaque type de support a ses propres avantages et inconvénients en fonction des exigences de l'installation industrielle.

                                    Les supports de télécommunication industrielle sont utilisés dans de nombreux secteurs industriels, tels que la fabrication, la production d'énergie, la gestion des déchets, le traitement de l'eau et de l'air, ainsi que dans les transports. Ils sont essentiels pour assurer la communication entre les différentes parties d'une installation industrielle et pour permettre la surveillance et le contrôle à distance des processus industriels.</p>
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
