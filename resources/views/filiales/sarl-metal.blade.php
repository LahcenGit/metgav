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
            <h2>SARL Metal et Metal</h2>
            <ul>
                <li>
                    <a href="#" style="font-size: 25px !important">Fabrication des structures en charpente légères , Maisonnettes , Villas , bungalows...</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <h2>Présentation</h2>
                    <p>SARL Métal et Métal se distingue dans la fabrication de structures en charpente légères, spécialisées dans la création de maisonnettes, villas et bungalows. Notre expertise réside dans la conception et la réalisation de structures durables, alliant fonctionnalité et esthétique. Choisissez SARL Metal et Metal pour des constructions solides et élégantes, adaptées à vos besoins résidentiels.
                </div>
            </div>
        </div>

        <div class="row align-items-center d-flex justify-content-center " style="background-color: aliceblue; padding:20px;">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <div class="article-carousel owl-carousel owl-theme mt-3">
                        <div class="item">
                            <img src="{{ asset('filiales/sarl-metal.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="tab product-details-tab pt-100">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Coordonnées fiscaux :</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Gérant : </b> Mr. Merad Boudia Lotfi Abderrahman</li>
                                    <li><b>RC :</b>23B0119621-00/13</li>
                                    <li><b>NIF : </b>002331011962151</li>
                                    <li><b>Siege social : </b> Hai Khemisti N°16 Res Ammar BT G Lot 39.</li>
                                </ul>
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
@section('filiales-active', 'active')
