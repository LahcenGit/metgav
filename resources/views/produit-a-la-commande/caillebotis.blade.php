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
            <h2>Caillebotis</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Caillebotis</a>
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
                            <img src="{{ asset('front/assets/images/products/caillebotis/img-1.png') }}" alt="Image">
                        </div>

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/caillebotis/img-2.png') }}" alt="Image">
                        </div>
                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Caillebotis</h3>
                    <p>Les caillebotis, également connus sous le nom de grilles ou de grilles de sol, sont des éléments architecturaux et fonctionnels qui apportent à la fois esthétique et durabilité à divers espaces. </p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Clés :</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Durabilité Exceptionnelle :</b>Fabriqués à partir de matériaux de première qualité tels que l'acier, l'aluminium ou le plastique renforcé de verre, nos caillebotis résistent à l'usure, à la corrosion et aux conditions environnementales difficiles.</li>
                                    <li><b>Sécurité Maximale : </b> Les caillebotis offrent une surface antidérapante, garantissant la sécurité des piétons et des véhicules, même dans des conditions humides ou glissantes.</li>
                                    <li><b>Design Polyvalent :  </b>Disponibles dans une variété de designs, de tailles, de formes et de finitions, nos caillebotis s'adaptent à une large gamme d'applications, de l'industrie aux espaces publics.</li>
                                    <li><b>Entretien Facile :</b>Les caillebotis sont simples à entretenir, ce qui les rend idéaux pour des zones à fort trafic ou des environnements exigeants.</li>
                                    <li><b>Installation Simple : </b>La conception de nos caillebotis permet une installation rapide et efficace, économisant ainsi du temps et des coûts.</li>
                                    <li><b>Applications Multiples : </b> Nos caillebotis sont couramment utilisés dans la construction, l'industrie, les parcs, les espaces commerciaux et bien d'autres lieux.</li>
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
