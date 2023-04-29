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
            <h2>Les supports BS</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">supports BS</a>
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
                            <img src="{{ asset('front/assets/images/products/bs/bs-1.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/bs/bs-5.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/bs/bs-2.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/bs/bs-3.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/bs/bs-4.jpg') }}" alt="Image">
                        </div>
                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Les support BS</h3>
                    <p>Les supports BS sont des structures métalliques spécialement conçues pour supporter les lignes électriques à haute tension. Chez notre usine Metgav, nous fabriquons des supports BS de haute qualité, conformes aux normes, pour répondre aux besoins de nos clients.</p>

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
                                <p>
                                    Les supports BS sont des structures métalliques spécialement conçues pour supporter les lignes électriques à haute tension. Chez notre usine de galvanisation à chaud et transformation métallique, nous fabriquons des supports BS de haute qualité, conformes aux normes britanniques, pour répondre aux besoins de nos clients.
                                </p>
                                <p>
                                    Nos supports BS sont fabriqués à partir de matériaux de première qualité, soigneusement sélectionnés pour leur durabilité, leur résistance et leur capacité à résister aux conditions climatiques et environnementales les plus difficiles. Nous utilisons des techniques de fabrication avancées pour assurer la qualité et la précision de chaque support BS que nous produisons.
                                </p>
                                <p>
                                    Nos supports BS sont disponibles dans une gamme de tailles et de designs pour répondre à une variété de besoins. Nous pouvons également personnaliser les supports BS selon les exigences spécifiques de nos clients, y compris la taille, le matériau, la forme et la couleur.
                                </p>
                                <p>
                                    Nous sommes fiers de fournir des supports BS de haute qualité et fiables qui répondent aux normes britanniques les plus strictes pour garantir la sécurité et la fiabilité des installations électriques. Contactez-nous pour plus d'informations sur nos supports BS et comment nous pouvons répondre à vos besoins de support de lignes électriques.
                                </p>

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
