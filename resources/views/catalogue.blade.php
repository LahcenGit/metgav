@extends('layouts.front')
@section('content')

<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Catalogue technique des produits</h2>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                    Catalogue
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Blog Details Section ===-->
<section class="blog-details-section ptb-100">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="blog-details-content">
                    <iframe src="https://publuu.com/flip-book/256225/604761/page/1?embed" width="100%" height="700" scrolling="no" frameborder="0" allowfullscreen="" allow="clipboard-write" class="publuuflip"></iframe>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 mt-3">
               <a href="http://" class="btn btn-primary btn-lg" style="background-color: #29A9E1;">Télécharger le catalogue PDF</a>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog Details Section ===-->

@endsection
@section('catalogue-active', 'active')
