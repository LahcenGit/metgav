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
            <h2>Charpentes Métalliquess</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">charpentes métalliques</a> 
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
                            <img src="{{ asset('front/assets/images/products/cm/cm-3.jpg') }}" alt="Image">
                        </div>
                  
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/cm/cm-1.jpg') }}" alt="Image">
                        </div>
                  
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/cm/cm-2.jpg') }}" alt="Image">
                        </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Les charpentes métalliques</h3>
                    <p>Nos charpentes métalliques sont fabriquées sur mesure pour répondre aux spécifications uniques de chaque projet, en utilisant des matériaux de qualité supérieure et les dernières technologies de fabrication. </p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional" type="button" role="tab" aria-controls="additional" aria-selected="true">Types</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instuctions-tab" data-bs-toggle="tab" data-bs-target="#instuctions" type="button" role="tab" aria-controls="instuctions" aria-selected="true">Fiches techniques</button>
                        </li>
                   
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <p>Les charpentes métalliques sont une solution de construction polyvalente pour les bâtiments industriels et commerciaux. Nos charpentes métalliques sont fabriquées sur mesure pour répondre aux spécifications uniques de chaque projet, en utilisant des matériaux de qualité supérieure et les dernières technologies de fabrication. Nous sommes fiers de notre capacité à concevoir et à fabriquer des charpentes métalliques de haute qualité, avec une précision et une efficacité optimales, pour garantir une construction rapide et facile sur site. Nos charpentes métalliques sont également traitées avec notre processus de galvanisation à chaud pour une protection maximale contre la corrosion, garantissant ainsi une longue durée de vie dans des environnements difficiles. Qu'il s'agisse de bâtiments industriels, d'entrepôts, de garages ou de tout autre type de bâtiment, nos charpentes métalliques offrent une solution de construction fiable et économique.</p>
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <tbody>
                                            <tr>
                                                <td>Types</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="instuctions" role="tabpanel" aria-labelledby="instuctions-tab">
                            <div class="product-instructions-info">
                                <ul>
                                  {{-- Cliquez sur le lien pour télécharger la fiche technique : 
                                    <li class="mt-4">
                                       <a href="{{asset('fiches-techniques/supports-tubulaires.pdf')}}"> supports-tubulaires.pdf</a>
                                    </li>
                                    <li class="mt-4">
                                       <a href="{{asset('fiches-techniques/supports-metallique-tubulaires.pdf')}}"> supports-metallique-tubulaires.pdf</a>
                                    </li>
                                    <li class="mt-4">
                                       <a href="{{asset('fiches-techniques/type-BSGHTA.pdf')}}"> type-BSGHTA.pdf</a>
                                    </li>
                                  --}} 
                                   
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
