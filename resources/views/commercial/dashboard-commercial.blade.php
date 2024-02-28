@extends('layouts.dashboard-commercial')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Commercial</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Demandes Devi</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Demandes Devi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Téléphone</th>
                                        <th>Entreprise</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($devis as $devi)
                                    <tr>
                                        <td>{{ $devi->first_name }}</td>
                                        <td>{{ $devi->last_name }}</td>
                                        <td>{{ $devi->phone }}</td>
                                        <td>{{ $devi->entreprise }}</td>
                                        <td>{{ $devi->created_at }}</td>
                                        @if($devi->status == 0)
                                        <td id="td-status-{{$devi->id}}"><span class="badge badge-warning">En attente</span></td>
                                        @else
                                        <td id="td-status-{{$devi->id}}"><span class="badge badge-success">Validé</span></td>
                                        @endif
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp mr-1 edit-status" data-id="{{ $devi->id }}"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1 show-detail-devis" data-id="{{ $devi->id }}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-section-devis">

</div>
@endsection
@push('modal-show-detail-devis')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$("body").on('click','.show-detail-devis',function() {

  var id = $(this).attr("data-id");

  $.ajax({
    url: '/show-detail-devis/'+id,
    type: "GET",
    success: function (res) {

      $('#modal-section-devis').html(res);
      $("#modalDetailDevis").modal('show');
    }
  });

});
</script>
@endpush
