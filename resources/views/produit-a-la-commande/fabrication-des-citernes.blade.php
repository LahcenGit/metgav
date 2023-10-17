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
            <h2>Fabrication des citernes</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Fabrication des citernes</a>
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
                            <img src="{{ asset('front/assets/images/products/fc/img-1.png') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Fabrication des citernes </h3>
                    <p>La fabrication de citernes est un processus essentiel qui permet de créer des réservoirs robustes et durables pour le stockage de liquides, de matières en vrac, de produits chimiques et plus encore. Chez Metgav industry, nous sommes spécialisés dans la conception et la fabrication de citernes de haute qualité, offrant une solution de stockage fiable pour une variété d'applications industrielles et commerciales.</p>
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
                                    <li><b>Matériaux de Qualité  :</b>Nous utilisons des matériaux de première qualité, tels que l'acier inoxydable, l'acier au carbone ou le plastique renforcé de verre, pour garantir la durabilité et la résistance chimique.</li>
                                    <li><b>Conception sur Mesure: </b>Chaque citerne est conçue sur mesure pour répondre aux spécifications et aux besoins de stockage spécifiques de nos clients.</li>
                                    <li><b>Options de Revêtement : </b>Nous offrons des options de revêtement pour garantir la compatibilité du réservoir avec les matériaux stockés, minimisant ainsi la corrosion et la contamination.</li>
                                    <li><b>Accessoires et Équipements :</b>Nos citernes peuvent être équipées de pompes, de jauges, de systèmes de contrôle de niveau et d'autres accessoires pour faciliter la manipulation et le suivi des matériaux stockés.</li>
                                    <li><b>Normes de Sécurité : </b>Toutes nos citernes sont construites conformément aux normes de sécurité et de qualité les plus strictes.</li>
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
