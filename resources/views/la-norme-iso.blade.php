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

<!--=== Start Preloader Section ===-->
<div class="preloader">
    <div class="content">
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
    </div>
</div>
<!--=== End Preloader Section ===-->




<!--=== Start Page Banner Section ===-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>La norme ISO 1461</h2>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                    La norme ISO 1461
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

	<!--=== Start Projects Details Section ===-->
    <section class="project-details-section  " style="margin-top:50px;">
        <div class="container">
            <h1 >La norme ISO<span style="color: #29A9E1"> 1461</span></h1>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="article-carousel owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ asset('front/assets/images/iso/iso.webp') }}" alt="Image">
                        </div>
                    </div>
                </div>

            </div>

            <div class=" row project-details-cntent ptb-50">
                <div class="col-md-12">
                    <p class="mt-2">
                        <b>La norme NF EN ISO 1461 (Juillet 2009)</b>
                        définit les propriétés et caractéristiques du revêtement de galvanisation par immersion de produits finis en fonte et en acier (y compris les pièces moulées) dans un bain de zinc (ne contenant pas plus de 2% d'autres métaux), avec les méthodes d'essai permettant de contrôler l'épaisseur de zinc par unité de surface, l'aspect et l'adhérence et les critères de conformité. Elle détermine aussi les obligations respectives du client et du galvanisateur.

                        La norme NF EN ISO 1461 ne s'applique pas :
                        <ul>
                        <li>aux tôles, aux fils et produits en treillis tissés ou soudés, galvanisés à chaud en continu.</li>
                        <li>aux tubes et canalisations galvanisés à chaud dans des installations automatisées.</li>
                        <li>aux produits galvanisés à chaud (par exemple les éléments de fixation) pour lesquels des normes spécifiques existent, pouvant inclure des exigences supplémentaires ou différentes par rapport à celles contenues dans la norme NF EN ISO 1461.</li>
                        <li>Les post-traitements et revêtements sur produits galvanisés à chaud ne sont pas traités dans la norme NF EN ISO 1461.</li>
                        </ul>
                      </p>
                </div>
            </div>
        </div>
    </section>
    <!--=== End Projects Details Section ===-->
@endsection
