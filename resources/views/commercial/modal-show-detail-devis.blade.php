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
                        <h6>Nom : <b style="color: #035479;"> {{$devis->first_name}}</b></h6>
                        <h6>Prénom : <b style="color: #035479;"> {{$devis->last_name}}</b></h6>
                        <h6>Téléphone : <b style="color: #035479;"> {{$devis->phone}}</b></h6>
                        <h6>Email : <b style="color: #035479;"> {{$devis->email}}</b></h6>
                        <h6>Entreprise : <b style="color: #035479;"> {{$devis->entreprise}}</b></h6>
                    </div>
                    <div class="col-6">
                        <h6>RC :</h6> <a href="{{url('storage/images/identity-pro/'.$devis->RC)}}"> <img src="{{url('storage/images/identity-pro/'.$devis->RC)}}"  height="100px" width="250px" alt=""> </a>
                        <h6>NIF :</h6><a href="{{url('storage/images/identity-pro/'.$devis->NIF)}}"> <img src="{{url('storage/images/identity-pro/'.$devis->NIF)}}"  height="100px" width="250px" alt=""> </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
