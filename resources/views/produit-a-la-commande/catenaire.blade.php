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
            <h2>Caténaires</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Caténaires</a>
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
                            <img src="{{ asset('front/assets/images/products/catenaire/img-1.png') }}" alt="Image">
                        </div>

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/catenaire/img-2.png') }}" alt="Image">
                        </div>
                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Les caténaires</h3>
                    <p>Les caténaires sont des systèmes de câbles et de supports utilisés pour fournir une alimentation électrique aux véhicules électriques tels que les trains, les tramways et les trolleybus. Les caténaires se composent d'un fil conducteur aérien en métal, généralement en cuivre ou en aluminium, qui est suspendu au-dessus de la voie de transport à l'aide de supports isolants.

                        Le fil conducteur est alimenté par une source d'alimentation électrique à une extrémité de la ligne, généralement une sous-station électrique, qui fournit l'électricité nécessaire pour alimenter les véhicules. Les véhicules sont équipés d'un dispositif de captage, appelé pantographe, qui se connecte au fil conducteur et permet de capter l'énergie électrique nécessaire pour alimenter les moteurs électriques du véhicule.

                        Les caténaires sont largement utilisées dans les réseaux de transport en commun, tels que les tramways, les métros et les trolleybus, ainsi que dans les réseaux ferroviaires. Elles permettent une alimentation électrique continue et fiable des véhicules électriques, en évitant la nécessité de transporter des batteries lourdes et coûteuses à bord des véhicules.</p>
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
                                <p>Les caténaires sont des systèmes de câbles et de supports utilisés pour fournir une alimentation électrique aux véhicules électriques tels que les trains, les tramways et les trolleybus. Les caténaires se composent d'un fil conducteur aérien en métal, généralement en cuivre ou en aluminium, qui est suspendu au-dessus de la voie de transport à l'aide de supports isolants.

                                    Le fil conducteur est alimenté par une source d'alimentation électrique à une extrémité de la ligne, généralement une sous-station électrique, qui fournit l'électricité nécessaire pour alimenter les véhicules. Les véhicules sont équipés d'un dispositif de captage, appelé pantographe, qui se connecte au fil conducteur et permet de capter l'énergie électrique nécessaire pour alimenter les moteurs électriques du véhicule.

                                    Les caténaires sont largement utilisées dans les réseaux de transport en commun, tels que les tramways, les métros et les trolleybus, ainsi que dans les réseaux ferroviaires. Elles permettent une alimentation électrique continue et fiable des véhicules électriques, en évitant la nécessité de transporter des batteries lourdes et coûteuses à bord des véhicules.</p>

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
