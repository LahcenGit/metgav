@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, Bienvenue!</h4>
                    <span>Articles</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Articles</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ajouter article</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{url('admin/articles')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Titre* :</label>
                                        <input type="text" class="form-control input-default " name="title" placeholder="Titre" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Date* :</label>
                                        <input type="date" class="form-control input-default " name="date"  required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Image principale * :</label>
                                        <div class="basic-form custom_file_input">
                                            <div class="input-group mb-3">
                                                <input type="file" class="image" multiple name="photo" accept="image/*" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Photos* :</label>
                                        <div class="basic-form custom_file_input">
                                            <div class="input-group mb-3">
                                                <input type="file" class="image" multiple name="photos[]" accept="image/*"  multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-xxl-12">
                                        <textarea class="summernote" class="form-control " name="description" >{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <button type="submit"  class="btn btn-primary mt-3">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
