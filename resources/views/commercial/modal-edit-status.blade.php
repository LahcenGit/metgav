<div class="modal fade" id="modalEditStatus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier le statut</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form id="sbmitF">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Statut :</label>
                                    <select class="form-control selectpicker" id="status" data-live-search="true" name="status">
                                        <option value="0" @if ($devis->status == 0) selected @endif>En Attente</option>
                                        <option value="1" @if ($devis->status == 1) selected @endif>En cours de traitement</option>
                                        <option value="2" @if ($devis->status == 2) selected @endif>Traité</option>
                                        <option value="3" @if ($devis->status == 3) selected @endif>Cloturé</option>

                                    </select>
                                </div>
                                <input type="hidden" value="{{ $devis->id }}" id="id">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Fermer</button>
                    <button type="button" id="save-status" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
