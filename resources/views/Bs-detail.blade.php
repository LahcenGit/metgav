@extends('layouts.front')
@section('content')
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
                <div class="product-main-image">
                    <img src="{{ asset('front/assets/images/products/product-1.jpg') }}" alt="Image">
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

                        <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <tbody>
                                            <tr>
                                                <td>Specialty</td>
                                                <td>Themeforest</td>
                                            </tr>
                                            <tr>
                                                <td>Ingredient Type</td>
                                                <td>Themeforest</td>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td>Crop Theme</td>
                                            </tr>
                                            <tr>
                                                <td>Package Information</td>
                                                <td>Box</td>
                                            </tr>
                                            <tr>
                                                <td>Manufacturer</td>
                                                <td>Prayagh Nutri Product Crop Theme Ltd</td>
                                            </tr>
                                            <tr>
                                                <td>Item part number</td>
                                                <td>LE 014 - 20pcs Crème Bakes (Pack of 2)</td>
                                            </tr>
                                            <tr>
                                                <td>Net Quantity</td>
                                                <td>40.00 count</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="instuctions" role="tabpanel" aria-labelledby="instuctions-tab">
                            <div class="product-instructions-info">
                                <ul>
                                    <li>
                                       <a href="#"> Bs-support.pdf</a>
                                      
                                    </li>
                                    <li>
                                        <a href="#"> Bs-models.pdf</a>
                                    </li>
                                   
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
