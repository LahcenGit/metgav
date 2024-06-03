<div class="modal fade" id="modalDetailDevis">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Détails demande devis</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h6><b>{{  $devis->entreprise }}  </b> </h6> <br><h7>{{$devis->details}}</h7>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mt-3">
                        <a href="{{ asset('storage/images/identity-pro/'.$devis->RC) }}" download target="_blank" type="button" class="btn btn-primary">RC
                        </a>
                        <a href="{{ asset('storage/images/identity-pro/'.$devis->NIF) }}" download  type="button" class="btn btn-primary">NIF
                        </a>
                    </div>
                </div>
                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
