@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, Bienvenue!</h4>
                    <span>Paramètres</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('/editeur') }}">Editeur</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Paramètres</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modifier paramètre</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{url('admin/settings/'.$setting->id)}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom* :</label>
                                        <input type="text" class="form-control input-default " name="name" value="{{ $setting->name }}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>USD* :</label>
                                        <input type="text" class="form-control input-default " name="value_1" value="{{ $setting->value_1 }}"  required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Euro * :</label>
                                        <input type="text" class="form-control input-default " name="value_2" value="{{ $setting->value_2 }}"  required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Pourcentage* :</label>
                                        <input type="text" class="form-control input-default " name="value_3" value="{{ $setting->value_3 }}" required>
                                    </div>
                                </div>
                                <button type="submit"  class="btn btn-primary mt-3">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
