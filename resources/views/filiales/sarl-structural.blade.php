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
            <h2>SARL Structural Industry</h2>
            <ul>
                <li>
                    <a href="#" style="font-size: 25px !important">Fabrication d'accessoires en Aluminium  et en PVC</a>
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
                    <p> SARL Structural Industry est une entreprise spécialisée dans la fabrication d'accessoires en aluminium et en PVC. Nous proposons des solutions de haute qualité pour les secteurs de la construction, de l'architecture et de la menuiserie. Notre engagement envers l'innovation et la qualité se reflète dans chaque produit que nous fabriquons. Choisissez SARL Structural Industry pour des accessoires durables, esthétiques et fonctionnels.
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center d-flex justify-content-center " style="background-color: aliceblue; padding:20px;">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <div class="article-carousel owl-carousel owl-theme mt-3">
                        <div class="item">
                            <img src="{{ asset('filiales/sarl-structural.jpg') }}" alt="Image">
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
                                    <li><b>Gérant : </b> Mr. Hakem Sofiane</li>
                                    <li><b>RC :</b> 22B0265804-00/13</li>
                                    <li><b>NIF : </b> 002213026580475</li>
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


@endsection
@section('filiales-active', 'active')
