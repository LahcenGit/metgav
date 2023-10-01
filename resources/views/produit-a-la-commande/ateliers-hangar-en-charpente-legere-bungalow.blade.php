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
            <h2>Bungalow et maisonnette en charpente légère</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Bungalow et maisonnette en charpente légère</a>
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
                            <img src="{{ asset('front/assets/images/products/ah/img-1.png') }}" alt="Image">
                        </div>

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/ah/img-2.png') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/ah/img-3.png') }}" alt="Image">
                        </div>

                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Ateliers hangar en charpente légère Bungalow</h3>
                    <p> Les ateliers et hangars en charpente légère sont des constructions modulaires et légères qui sont faciles à assembler et à démonter. Ils sont généralement construits à partir de cadres en acier et de panneaux en métal, et peuvent être utilisés pour stocker des véhicules, du matériel ou pour abriter des activités industrielles ou artisanales. Les ateliers et hangars en charpente légère peuvent être personnalisés en fonction de vos besoins spécifiques en matière de taille, de forme et d'équipements.
                        Les bungalows sont des constructions préfabriquées qui sont conçues pour une installation rapide et facile. Ils peuvent être utilisés comme bureaux temporaires, salles de classe mobiles ou logements temporaires pour le personnel. Les bungalows peuvent être équipés de tout le nécessaire pour une habitation confortable, comme des systèmes de chauffage et de climatisation, des salles de bains et des cuisines.
                    </p>
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
                                <p>Les ateliers et hangars en charpente légère sont des constructions modulaires et légères qui sont faciles à assembler et à démonter. Ils sont généralement construits à partir de cadres en acier et de panneaux en métal, et peuvent être utilisés pour stocker des véhicules, du matériel ou pour abriter des activités industrielles ou artisanales. Les ateliers et hangars en charpente légère peuvent être personnalisés en fonction de vos besoins spécifiques en matière de taille, de forme et d'équipements.
                                    Les bungalows sont des constructions préfabriquées qui sont conçues pour une installation rapide et facile. Ils peuvent être utilisés comme bureaux temporaires, salles de classe mobiles ou logements temporaires pour le personnel. Les bungalows peuvent être équipés de tout le nécessaire pour une habitation confortable, comme des systèmes de chauffage et de climatisation, des salles de bains et des cuisines.</p>
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
