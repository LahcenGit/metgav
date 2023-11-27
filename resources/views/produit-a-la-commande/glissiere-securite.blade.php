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
            <h2>Glissières de sécurité</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Glissières de sécurité</a>
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
                        <img src="{{ asset('front/assets/images/products/glissiere-product.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Glissières de sécurité</h3>
                    <p>Nos glissières de sécurité sont conçues pour offrir une protection optimale sur les routes et autoroutes. Fabriquées à partir de matériaux de haute qualité, elles garantissent une résistance exceptionnelle aux chocs et une durabilité à long terme. Leur conception intelligente assure une installation facile et rapide, tout en offrant une visibilité maximale, même dans des conditions de faible luminosité. Optez pour nos glissières de sécurité pour une solution fiable et efficace dans la préservation de la sécurité sur les voies de circulation</p>
                </div>
                <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span>
                </a>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Clés de nos Mats d'Éclairage : </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Matériaux de Haute Qualité :</b>  Fabriquée en acier galvanisé ou en alliage d'aluminium résistant à la corrosion pour une durabilité accrue.</li>
                                    <li><b>Conception Robuste :  </b> Structure solide et résistante conçue pour absorber et minimiser l'impact en cas de collision.</li>
                                    <li><b>Finition Résistante à la Corrosion : </b> Un revêtement de haute qualité pour une protection contre la corrosion, même dans des conditions environnementales difficiles.</li>
                                    <li><b>Compatibilité Universelle: </b> S'adapte à divers types de routes et d'environnements routiers.</li>
                                    <li><b>Normes de Sécurité Conformes : </b> Fabriqués en conformité avec les normes de sécurité en vigueur, garantissant ainsi la sécurité des installations.</li>
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
