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
            <h2>Boulons et écrous</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Boulons et écrous</a>
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
                            <img src="{{ asset('front/assets/images/products/boulons/Boulons.jpg') }}" alt="Image">
                        </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Boulons et écrous</h3>
                    <p>Les boulons et les écrous sont les éléments essentiels et souvent sous-estimés qui maintiennent ensemble de nombreux aspects de la construction, de l'assemblage de structures massives aux petits projets de bricolage. </p>
                    <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Clés</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Résistance et Durabilité :</b>  Fabriqués à partir de matériaux de première qualité, nos boulons et écrous sont conçus pour résister aux charges les plus lourdes et aux environnements exigeants.</li>
                                    <li><b>récision de Fabrication : </b>Chaque boulon et chaque écrou est fabriqué avec une grande précision pour garantir un ajustement parfait et une fixation solide.</li>
                                    <li><b>Variété de Tailles et de Types : </b> Nous proposons une vaste gamme de boulons et d'écrous, y compris des écrous hexagonaux, des boulons à tête hexagonale, des boulons à tête fraisée, des écrous à ailettes, et bien d'autres, pour répondre à vos besoins spécifiques.</li>
                                    <li><b>Protection contre la Corrosion : </b>Les revêtements spéciaux et les traitements anti-corrosion assurent une longue durée de vie, même dans des environnements exposés à l'humidité ou aux intempéries.</li>
                                    <li><b>Polyvalence  : </b>Nos boulons et écrous sont adaptés à une grande variété d'applications, de la construction de bâtiments aux projets industriels et résidentiels.</li>
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
