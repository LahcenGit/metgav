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
    
    .special-offer {
      color: #ffffff; /* Rouge */
      font-size: 45px;
      font-weight: bold;
      text-align: center;
      opacity: 0;
      animation: fade-in-out 1s ease-in-out infinite alternate; /* Animation en boucle */
    }

    @keyframes fade-in-out {
      0%, 100% {
        opacity: 0; /* Début et fin de l'animation, le texte est invisible */
      }
      50% {
        opacity: 1; /* Au milieu de l'animation, le texte est complètement visible */
      }
    }
</style>

<!-- Start Page Banner Section !-->
<section class="page-banner-section" style="background-color: #ED1C24; ">
    <div class="container">
        <div class="page-banner-content">
          <h1 class="special-offer">Remises Exceptionnelles !</h1>
            
           <p style="font-size: 25px !important; color:white"> Valable du 15 Avril au 31 Mai 2024 </p>
              
        </div>
    </div>
</section>
<!-- End Page Banner Section !-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">



        <div class="container text-center">
            <h3>Annonce de l'offre</h3>
            <p>Nous avons le plaisir de vous annoncer une offre spéciale, réservée exclusivement à nos clients. <br>Cette offre spéciale est valable du 15 Avril au 31 Mai 2024, et vous permettra de bénéficier d'une remise avantageuse sur vos commandes. Pour profiter de cette opportunité, il vous suffit de passer commande comme d'habitude en contactant notre équipe commerciale</p>
        

            <h3>PRIX SUPPORTS TUBULAIRES</h3>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Désignation</th>
                  <th scope="col">Prix HORS TAXE</th>
                  <th scope="col">Prix T.T.C</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>SUPPORT TUBULAIRE 9 T 250</td>
                  <td>26 000.00 DA</td>
                  <td>30 940.00 DA</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>SUPPORT TUBULAIRE 9 T 400</td>
                  <td>27 600.00 DA</td>
                  <td>32 844.00 DA</td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>SUPPORT TUBULAIRE 9 T 630</td>
                  <td>38 000.00 DA</td>
                  <td>45 220.00 DA</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>SUPPORT TUBULAIRE 9 T 800</td>
                  <td>66 500.00 DA</td>
                  <td>79 135.00 DA</td>
                </tr>
              </tbody>
            </table>

            <h3>PRIX SUPPORT BS</h3>
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Désignation</th>
                <th scope="col">Prix HORS TAXE</th>
                <th scope="col">Prix T.T.C</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>01</td>
                <td>SUPPORT 67 BS 45</td>
                <td>29 000.00 DA</td>
                <td>34 510.00 DA</td>
                </tr>
                <tr>
                <td>02</td>
                <td>SUPPORT 67 BS 66</td>
                <td>43 000.00 DA</td>
                <td>51 170.00 DA</td>
                </tr>
                <tr>
                <td>03</td>
                <td>SUPPORT 67 BS 77</td>
                <td>58 000.00 DA</td>
                <td>69 020.00 DA</td>
                </tr>
                <tr>
                <td>04</td>
                <td>SUPPORT 96 BS 55</td>
                <td>50 000.00 DA</td>
                <td>59 500.00 DA</td>
                </tr>
                <tr>
                <td>05</td>
                <td>SUPPORT 96 BS 66</td>
                <td>59 000.00 DA</td>
                <td>70 210.00 DA</td>
                </tr>
                <tr>
                <td>06</td>
                <td>SUPPORT 96 BS 99</td>
                <td>121 000.00 DA</td>
                <td>143 990.00 DA</td>
                </tr>
                <tr>
                <td>07</td>
                <td>SUPPORT 106 BS 66</td>
                <td>62 000.00 DA</td>
                <td>73 780.00 DA</td>
                </tr>
                <tr>
                <td>08</td>
                <td>SUPPORT 106 BS 88</td>
                <td>97 000.00 DA</td>
                <td>115 430.00 DA</td>
                </tr>
                <tr>
                <td>09</td>
                <td>SUPPORT 126 BS 77</td>
                <td>97 000.00 DA</td>
                <td>115 430.00 DA</td>
                </tr>
                <tr>
                <td>10</td>
                <td>SUPPORT 146 BS 77</td>
                <td>110 900.00 DA</td>
                <td>131 971.00 DA</td>
                </tr>
            </tbody>
            </table>

            <h3>PRIX PRIX NAPPE VOUTE</h3>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Désignation</th>
                    <th scope="col">Prix HORS TAXE</th>
                    <th scope="col">Prix T.T.C</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>NVS 170/34 SANS GIVRE</td>
                    <td>11 900.00 DA</td>
                    <td>14 161.00 DA</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>NVS 170/34 AVEC GIVRE</td>
                    <td>17 900.00 DA</td>
                    <td>21 301.00 DA</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>NVS 170/93 SANS GIVRE</td>
                    <td>15 900.00 DA</td>
                    <td>18 921.00 DA</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>NVS 170/93 AVEC GIVRE</td>
                    <td>22 900.00 DA</td>
                    <td>27 251.00 DA</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>NVS 200/93 A/S GIVRE</td>
                    <td>28 300.00 DA</td>
                    <td>33 677.00 DA</td>
                  </tr>
                </tbody>
              </table>

            <h3>PRIX NAPPE D’ARRET</h3>
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Désignation</th>
                    <th scope="col">Prix HORS TAXE</th>
                    <th scope="col">Prix T.T.C</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>NAH 1700 U 80 SOUDÉE</td>
                    <td>28 450.00 DA</td>
                    <td>33 855.50 DA</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>NAH 1700 U 100 SOUDÉE</td>
                    <td>33 200.00 DA</td>
                    <td>39 508.00 DA</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>NAH 2000 U 80 SOUDÉE</td>
                    <td>29 800.00 DA</td>
                    <td>35 462.00 DA</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>NAH 2000 U 100 SOUDÉE</td>
                    <td>38 900.00 DA</td>
                    <td>46 291.00 DA</td>
                  </tr>
                </tbody>
              </table>


              <h3>PRIX BRAS DE RENVOIS ET DÉRIVATION</h3>

              <table class="table table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Désignation</th>
                        <th>Prix HORS TAXE</th>
                        <th>Prix T.T.C</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>BRAS DE RENVOIS 1700 U 80</td>
                        <td>15 700.00 DA</td>
                        <td>18 683.00 DA</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>BRAS DE RENVOIS 1700 U 100</td>
                        <td>16 995.00 DA</td>
                        <td>20 224.05 DA</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>BRAS DE RENVOIS 2000 U 80</td>
                        <td>18 800.00 DA</td>
                        <td>22 372.00 DA</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>BRAS DE RENVOIS 2000 U 100</td>
                        <td>20 000.00 DA</td>
                        <td>23 800.00 DA</td>
                    </tr>
                </tbody>
            </table>

            <h3>PRIX POSTES ACC ET POTENCES</h3>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Désignation</th>
                    <th>Prix H.T</th>
                    <th>Prix T.T.C</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>CHAISE TRANSFO 160 KVA</td>
                    <td>18 000,00 DA</td>
                    <td>21 420,00 DA</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>POTENCE</td>
                    <td>4 000,00 DA</td>
                    <td>4 760,00 DA</td>
                  </tr>
                </tbody>
              </table>
        </div>
       

        
    

      <div class="row align-items-center d-flex justify-content-center mt-4">
        <div class="col-lg-8 text-center">
            <div class="product-details-main-content" style="background-color: #29A9E1; padding:15px;">
                <b style="color: #ffffff">Prix destiné au PAIEMENT 100% A LA LIVRAISON / PAIEMENT CASH</b>
                <p style="color: #ffffff"> Contactez le service commercial : <b>0655 51 95 15 / 0655 51 95 27 / 0655 51 20 48</b>
                </p>
            </div>
        </div>
      </div>

   

        
    </div>
</div>
<!--=== End Product Details Section ===-->


@endsection
@section('filiales-active', 'active')
