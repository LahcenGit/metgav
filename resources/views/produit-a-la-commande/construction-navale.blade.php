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
            <h2>Construction navale</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Construction navale</a>
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
                            <img src="{{ asset('front/assets/images/products/cn/img-1.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>La construction navale</h3>
                    <p>La construction navale est l'art de concevoir, de fabriquer et d'assembler des navires, des bateaux et des embarcations de toutes tailles et pour une variété d'applications, qu'il s'agisse de navires de guerre, de bateaux de pêche, de paquebots de croisière ou de navires de recherche.</p>
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
                                    <li><b>Conception Spécialisée :</b>Chaque navire est conçu sur mesure en fonction de son utilisation prévue, en tenant compte de la navigation, de la charge utile, de la stabilité et d'autres facteurs clés.</li>
                                    <li><b>Matériaux de Qualité : </b>Nous utilisons des matériaux marins de haute qualité, tels que l'acier inoxydable, l'aluminium et la fibre de verre, pour garantir la durabilité et la résistance à la corrosion.</li>
                                    <li><b>Ingénierie de Pointe : </b>Nos équipes d'ingénieurs et de concepteurs utilisent des logiciels de pointe pour assurer la performance, la sécurité et l'efficacité de chaque navire.</li>
                                    <li><b>Construction Méticuleuse :</b>Chaque élément du navire est construit avec précision, de la coque au pont, en passant par les systèmes mécaniques et électroniques.</li>
                                    <li><b>Conformité aux Normes : </b>Tous les navires sont construits conformément aux réglementations et aux normes de sécurité internationales.</li>
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
