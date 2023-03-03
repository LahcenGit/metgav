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
            <h2>Presse plieuse hydraulique SPEED-BEND PRO</h2>
            <ul>
                <li>
                    <a href="#">Investissement</a>
                </li>
                <li>
                    Presse plieuse hydraulique SPEED-BEND PRO
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Blog Details Section ===-->
<section class="blog-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">

                    <div class="article-carousel owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ asset('front/assets/images/img-1.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/img-2.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/img-3.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                    </div>


                    <p>rein de presse hydraulique synchronisé SPEED-BEND PRO Les vitesses de chute libre, de flexion et de retour des presses plieuses de la série Speed-Bend constituent le meilleur choix pour répondre aux exigences des marchés concurrentiels actuels. La série Speed-Bend offre une capacité de production deux fois plus rapide que les presses plieuses CNC conventionnelles. ÉQUIPEMENT STANDARD – Monobloc, cadre en acier soudé, rigide à la flexion et à haute résistance à la traction, en matériau ST44 A1. – 6 axes (Y1, Y2, X, R, Z1, Z2) – Système de jauge arrière avec axes X, R, Z1, Z2 pilotés par un servo AC avec graphiques colorés. – Système servo-hydraulique HOERBIGER. – Système anti-déflexion motorisé commandé par CNC. – Outils supérieurs et inférieurs de section standard trempés et rectifiés (section de 835 mm). – Système de maintien des outils facile à serrer avec outils supérieurs et inférieurs. – Les contrôleurs graphiques standard peuvent être sélectionnés parmi : ER-90 Plus contrôleur graphique 3D à écran tactile couleur avec logiciel hors ligne, Cybelec ModEva 15T graphique 3D couleur avec logiciel PC-ModEva hors ligne, Delem DA-66T 2D avec graphiques colorés. – Panneau électrique avec système de refroidissement conçu pour répondre aux normes CE et composé d’automatismes et d’équipements électriques à la marque SIEMENS. – Panneau de commande ergonomique et convivial, suspendu. – Protecteurs de feux arrière (catégorie 4) – Couvertures frontales avec interrupteurs de sécurité. – Synchronisation des axes Y1+Y2 assurée par des codeurs linéaires avec des tolérances de 0,01 mm. – Pédale de commande conforme à la réglementation CE. – Bras de support avant coulissants avec rainure en T et règles en mm/pouce. – Profondeur de la gorge de 410 mm.
                       <br>
                        <h2>CARACTÉRISTIQUES</h2>
                        <b>Actionnement</b> : hydraulique<br>
                        <b>Type de commande </b> CNC<br>
                        <b>Autres caractéristiques</b><br>3 axes<br>
                        <b>Force de pression</b>:<br>
                        Min: 392 kN<br>
                        Max: 3 923 kN<br>
                        Longueur de pliage:<br>
                        Min: 1 270 mm (50 in)<br>
                        Max: 12200 mm (240,2 in).
                    </p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="about-us-img">
                        <img src="{{ asset('front/assets/images/about-img.jpg') }}" alt="Image">

                        <div class="experience">
                            <div class="experience-bg">
                                <span>Depuis 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="categories">
                        <h3>Voir plus</h3>
                        <ul>
                            <li>
                                <a href="{{ asset('/vernet-behringer-Scie-à-ruban-HBP-series') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    Vernet Behringer Scie à ruban HBP series
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/ermaksan-cutting-machine') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    ERMAKSAN CUTTING MACHINE
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/OPW-750-la-soudeuse-automatique') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    OPW 750 la soudeuse automatique
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog Details Section ===-->

@endsection
