@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-7"style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Demander un devis</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
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

                        <form class="form-contact"  action="{{asset('/demande-devis')}}" method="POST" enctype='multipart/form-data'>
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"  name="first_name" placeholder="Nom *" required>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"  placeholder="Prenom *"  required>
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Téléphone *"  required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email *"  required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('entreprise') is-invalid @enderror" name="entreprise" placeholder="Entreprise *"  required>
                                        @error('entreprise')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Registre de commerce* :</label>
                                        <input type="file" class="form-control mt-2 @error('file_one') is-invalid @enderror" name="file_one" placeholder="Registre commerce"  required>
                                        @error('file_one')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>NIF* :</label>
                                        <input type="file" class="form-control mt-2 @error('file_two') is-invalid @enderror" name="file_two" placeholder="NIF"  required>
                                        @error('file_two')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select name="product" class="form-control" id="product" required>
                                         <option value="" disabled selected>Vous êtes intéressé par...</option>
                                         <option value="Supports BS">Supports BS</option>
                                         <option value="Supports Tubulaires">Supports Tubulaires</option>
                                         <option value="Armements de supports">Armements de supports</option>
                                         <option value="Charpentes métaliques">Charpentes métaliques</option>
                                         <option value="autre">autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea cols="30" name="detail" rows="10" class="form-control" placeholder="Plus de détails..."></textarea>
                                    </div>
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
@section('devis-active', 'active')
{{--
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
--}}
