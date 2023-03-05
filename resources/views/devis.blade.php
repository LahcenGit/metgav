@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-7"style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Demander un devis</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li>
                    Demander un devis
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Contact Section ===-->
<div class="contact-section ptb-100">
    <div class="container">
        <div class="contact-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form ptb-100">
                        <h2>Demander un devis facilement !</h2>
                        <p>Remplissez le formulaire ci-dessous pour recevoir un devis personnalisé pour vos besoins en galvanisation à chaud et transformation métallique.</p>

                        <form class="form-contact" id="contact-form" action="{{asset('/contact')}}" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom *" id="first_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Prenom *" id="last_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Téléphone *" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Entreprise *" id="entreprise" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Registre de commerce* :</label>
                                        <input type="file" class="form-control mt-2" placeholder="Registre commerce" id="file_one" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>NIF* :</label>
                                        <input type="file" class="form-control mt-2" placeholder="NIF" id="file_two" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select  class="form-control" id="product" required>
                                         <option value="" disabled selected>Selectionner un produit...</option>
                                         <option value="Bs">Bs</option>
                                         <option value="Tubulaires">Tubulaires</option>
                                         <option value="Armement">Armement</option>
                                         <option value="Charpente métaliqu">Charpente métalique</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="form-control" placeholder="Plus de détails..." id="message"></textarea>
                                    </div>
                                </div>

                                <div id="show_contact_msg" >

                                </div>
                                <div class="col-12">
                                    <button type="submit" class="main-btn">
                                        <span>Demander un devis</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!--=== End Contact Section ===-->
@endsection
@push('contact-scripts')
<script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $("#contact-form").on("submit", function (e)
    {
        $('#show_contact_msg').html('<div >En cours....</div>');
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var phone = $('#phone').val();
        var product = $('#product').val();
        var entreprise =  $('#entreprise').val();
        var file_one =  $('#file_one').val();
        var file_two=  $('#file_two').val();
        var message = $('#message').val();
        var formURL = $(this).attr("action");
        var data = {
            first_name: first_name,
            last_name: last_name,
            phone: phone,
            entreprise: entreprise,
            file_one: file_one,
            file_two: file_two,
            message: message
        };
        $.ajax(
                {
                    url: formURL,
                    type: "POST",
                    data: data,
                    success: function (res) {
                        if (res === '1') {
                            $('#show_contact_msg').html('<div class="alert alert-success mt-2" id="form-success" role="alert"> Votre messgae à été bien envoyer !</div>');
                        }


                    }
                });
        e.preventDefault();
    });

</script>

@endpush
