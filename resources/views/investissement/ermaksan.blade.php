@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>ERMAKSAN CUTTING MACHINE</h2>
            <ul>
                <li>
                    <a href="#">Investissement</a>
                </li>
                <li>
                    ERMAKSAN CUTTING MACHINE
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
                            <img src="{{ asset('front/assets/images/img-32.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/img-33.png') }}" class="blog-details-main-img" alt="Image">
                        </div>
                    </div>


                    <ul>
                        <li>
                            <i class="icofont-user-alt-3"></i>
                            <a href="javascript:void(0)">Administrateur</a>
                        </li>
                    </ul>
                    <p>Machine de découpe au plasma EPL 3 AXIS XPR La machine de découpe au plasma continue d’offrir des solutions larges et flexibles avec ses avantages en termes de coûts d’investissement et d’exploitation, étant adaptée aux lignes de production et à l’automatisation, une qualité de découpe plus précise. La série EPL sera le centre de profit de votre atelier grâce à ses coûts d’entretien et de pièces consommables minimes et au fait qu’elle ne perdra pas sa précision pendant de longues années. ÉQUIPEMENT STANDARD – Hypertherm EDGE® Pro CNC – * 15 » LCD Sanayi Tipi Dokunmatik Ekran – * Ecran tactile LCD 15 » de type industriel – * Panneau de commande Hypertherm – * Entrée et sortie du module de sécurité – * Système de communication Hypernet – * Interface de connexion à distance – * Interface Phoenix –
                        * Jauges métriques et en pouces. – Source de plasma HyPerformance® HPR130XD – * Console manuelle de gaz Hypertherm – * Marquage au plasma – Arc Glide™ Système de contrôle automatique de la hauteur THC – * Système de communication Hypernet – * Module d’interface entrée-sortie de sécurité – * Capteur de buse – Capteur de collision – * Course standard de 220 mm – * Pointeur de lazer – Logiciel Cad/Cam TurboNest – 3 Axes (X,Y,Z) – * 3 pièces Mitsubishi AC servo moteur et driver – * Boîte de vitesses Neugart à 3 pièces de type planétaire – * Rails linéaires de haute précision – * Une crémaillère silencieuse Atlanta Helis de haute précision – * Plateau de câbles silencieux de la marque X,Y, Z Axis Igus – Table de coupe avec système pneumatique – Système de panneau de contrôle mobile – 2 Boutons d’urgence – 6 Arrêts mécaniques.
                    </p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="about-us-img">
                        <img src="{{ asset('front/assets/images/about-img.jpg') }}" alt="Image">

                        <div class="experience">
                            <div class="experience-bg">
                                <span>Depuis 2014</span>
                            </div>
                        </div>
                    </div>
                    <div class="categories">
                        <h3>Voir plus</h3>
                        <ul>
                            <li>
                                <a href="{{ asset('/presse-plieuse-hydraulique-SPEED-BEND-PRO') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    Presse plieuse hydraulique SPEED-BEND PRO
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/OPW-750-la-soudeuse-automatique') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    OPW 750 la soudeuse automatique
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('/vernet-behringer-Scie-à-ruban-HBP-series') }}">
                                    <i class="icofont-long-arrow-right"></i>
                                    Vernet Behringer Scie à ruban HBP series
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
