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

    .td-size{
       font-size: 14px !important;
    }
</style>

<!-- Start Page Banner Section !-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>SARL Cylexx Industry</h2>
            <ul>
                <li>
                    <a href="#" style="font-size: 25px !important">Fabrication des motocycles 2 roues et 3 roues</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Banner Section !-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <h2>Présentation</h2>
                    <p> SARL Cylexx Industry excelle dans la fabrication de motocycles 2 et 3 roues. Nos véhicules allient un design élégant à des performances exceptionnelles et une fiabilité à toute épreuve. Dotés de technologies avancées, nos motocycles offrent une expérience de conduite sécurisée et innovante. Optez pour la qualité et l'aventure avec SARL Cylexx Industry, où chaque détail est conçu pour une conduite inégalée.
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center d-flex justify-content-center " style="background-color: aliceblue; padding:20px;">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <h2>Nos Showrooms</h2>
                    <div class="article-carousel owl-carousel owl-theme mt-3">
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-1.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-2.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-3.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-4.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-5.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-6.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-7.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-8.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center d-flex justify-content-center mt-4">
            <div class="col-md-10 text-center">
                <div class="product-details-main-content mt-4">
                    <h2>Nos Revendeurs</h2>

                    <table class="table table-striped mt-4 td-size">
                        <thead>
                          <tr style="background-color:#29A9E1; color:#ffff;">
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">N° Tel</th>
                          </tr>
                        </thead>
                        <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>HAMDI ZOHEIR</td>
                                <td>MAGHNIA</td>
                                <td>0671 519 980</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>GRID DJAAFAR</td>
                                <td>COOPERATIVE IMMOBILIERE MOSTAKBALINE HΑΙ ΟΤΗΜΑNIA LOT Nº13 MARAVAL ORAN</td>
                                <td>0656 637 033</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>HADJ BOULANOUAR</td>
                                <td>N°10 GAZ EL BAROUD BENISAF</td>
                                <td>0792 102 841</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>EURL ELECTRO-MENAGER ELNOUR (BOUTALEB)</td>
                                <td>N°04 RUE ADDA GUERBI ORAN</td>
                                <td>0558 377 298</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>KHELAFI MOHAMED</td>
                                <td>Nº263 ILOT J ROUTE SIG MASCARA</td>
                                <td>0551 607 494</td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td>EURL EXTRA MULTI SERVICES</td>
                                <td>66 RUE LARBI BEN MHIDI ORAN</td>
                                <td>0660 070 006</td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <td>YAHIA OUALID DIHADJ</td>
                                <td>CITE EBOUKHORS 1056 LOGT TRANCHE K04 ESCALIER 04 N°01 RDC SAIDA</td>
                                <td>0773 863 886</td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <td>KARA ZAITRI RACHID</td>
                                <td>Nº12 RUE GARMOUCH SIDI BEL ABBES</td>
                                <td>0556 629 575</td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <td>BAMBRIK CHIHAB EDDINE</td>
                                <td>ORAN</td>
                                <td>0540 877 803</td>
                              </tr>
                              <tr>
                                <th scope="row">10</th>
                                <td>LABED ABDELKADER</td>
                                <td>SIDI BEL ABBES</td>
                                <td>0560 363 497</td>
                              </tr>
                              <tr>
                                <th scope="row">11</th>
                                <td>BENABDALLAH BENARMAS ACHRAF</td>
                                <td>RESIDENCE LES PLAN TERRE BIR ELDJIR ORAN</td>
                                <td>0540 749 330</td>
                              </tr>
                              <tr>
                                <th scope="row">12</th>
                                <td>BAMBRIK BENAMAR</td>
                                <td>TLEMCEN</td>
                                <td>0784 423 470</td>
                              </tr>
                              <tr>
                                <th scope="row">13</th>
                                <td>BENDIMERED ZOHEIR</td>
                                <td>BECHAR</td>
                                <td>-</td>
                              </tr>
                              <tr>
                                <th scope="row">14</th>
                                <td>CHAKOURI MAHMOUD</td>
                                <td>ORAN</td>
                                <td>0770 006 938</td>
                              </tr>
                              <tr>
                                <th scope="row">15</th>
                                <td>MALEK MIHAMED</td>
                                <td>CITE EL HAMRI ANGLE BD ALEXANDRE 1ER YOUGOSLAVIE N°16 ORAN</td>
                                <td>041 361 496</td>
                              </tr>
                              <tr>
                                <th scope="row">16</th>
                                <td>ZOUBID SLIMANE</td>
                                <td>58 RUE SMAIL MOHAMMED ORAN</td>
                                <td>0779 356 146</td>
                              </tr>
                              <tr>
                                <th scope="row">17</th>
                                <td>BENNANI AHMED</td>
                                <td>SIDI MOHAMMED EL MOHAMMADIA MASCARA</td>
                                <td>0559 040 910</td>
                              </tr>
                              <tr>
                                <th scope="row">18</th>
                                <td>TAIBI YAMINA</td>
                                <td>LOTISSEMENT ALI BOUMANDJEL MAGASIN 1 SAIDA</td>
                                <td>0775 625 373</td>
                              </tr>
                              <tr>
                                <th scope="row">19</th>
                                <td>ZAOUI EL AMINE</td>
                                <td>RUE BELDJILALI MILOUD N°28 NEDROMA TLEMCEN</td>
                                <td>0770 613 652</td>
                              </tr>
                              <tr>
                                <th scope="row">20</th>
                                <td>BENARBA SAID</td>
                                <td>SID EL BACHIR ORAN</td>
                                <td>0559 825 584</td>
                              </tr>
                              <tr>
                                <th scope="row">21</th>
                                <td>MEGHAGHI CHABANE</td>
                                <td>SOUANI TLEMCEN</td>
                                <td>0549 278 438</td>
                              </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="tab product-details-tab pt-100">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Coordonnées fiscaux :</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Gérants : </b> Mr. Reda Abid  / Mr. Mohammed El Hadi Bouabdallah</li>
                                    <li><b>RC :</b> 23B1124954</li>
                                    <li><b>NIF : </b> 002331112495474</li>
                                    <li><b>NIS : </b> 002331030080066</li>
                                    <li><b>Siege social : </b> Hai Khemisti N°16 Res Ammar BT G Lot 39.</li>
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
@section('filiales-active', 'active')
