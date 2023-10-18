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
                            <img src="{{ asset('front/assets/images/products/Ah/bangalow-et-maisonnette.jpg') }}" alt="Image">
                        </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Ateliers hangar en charpente légère Bungalow</h3>
                    <p> Nos ateliers hangar en charpente légère de type bungalow sont la solution idéale pour répondre à vos besoins en matière d'espace de travail polyvalent. Chez Metgav industry, nous vous offrons des bâtiments durables et fonctionnels qui allient esthétique et praticité pour répondre à une variété d'applications, que ce soit pour la fabrication, le stockage, le commerce ou d'autres activités professionnelles.
                    </p>
                    <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span>
                    </a>
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
                                    <li><b>Durabilité Supérieure :</b>Fabriqués à partir de matériaux de qualité, nos bâtiments sont conçus pour résister aux intempéries, à la corrosion et à l'usure.</li>
                                    <li><b>Polyvalence d'Utilisation : </b> Les ateliers bungalow sont adaptés à une gamme variée d'applications, des activités industrielles aux espaces de stockage et plus encore.</li>
                                    <li><b>Personnalisation : </b>Chaque bâtiment peut être personnalisé en termes de taille, de design et d'aménagement intérieur pour répondre à vos besoins spécifiques.</li>
                                    <li><b>Installation Rapide:</b> La charpente légère permet une installation rapide, économisant ainsi du temps et de l'argent.</li>
                                    <li><b>Esthétique Agréable : </b> Nos ateliers hangar en charpente légère offrent un aspect soigné et professionnel qui s'intègre harmonieusement dans divers environnements.</li>
                                    <li><b>Entretien Facile  : </b>Les matériaux utilisés sont simples à entretenir, assurant une longue durée de vie de votre bâtiment.</li>
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
