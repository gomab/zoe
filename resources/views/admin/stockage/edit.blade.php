<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 3/17/19
 * Time: 12:32 AM
 */

?>

@extends('layouts.backend.app')

@section('title', 'Stockage-MAJ')

@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
@endpush

@section('content')

    <div class="container-fuild">
        <h2>
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">home</i> Acceuil</a></li>
                <li class="active"><i class="material-icons">library_books</i> Gestion des sites de stockage</li>
                <li class="active"><i class="material-icons">library_books</i> Structure de stockage</li>
                <li class="active"><i class="material-icons">library_books</i> Mise à jour d'une structure de stockage</li>

            </ol>
        </h2>
        <!-- Vertical Layout | With Floating Label -->
        <form action="{{ route('admin.stockage.update', $stockage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">

                            <!-- Nom du stockage -->
                            <div class="form-group form-float">
                                <p>
                                    <b>Libellé de la structure de stockage</b>
                                </p>
                                <div class="form-line">
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $stockage->name }}">
                                    <label class="form-label">Libellé de la structure de stockage</label>
                                </div>
                            </div>


                            <!-- Statut-->
                            <div class="form-group">
                                <input type="checkbox" id="publish" class="filled-in" name="status" value="1" {{ $stockage->status == true ? 'checked' : '' }}>
                                <label for="publish">Indisponible</label>
                            </div>



                            <!-- Description de l'espèce -->

                            <div class="form-group">
                                <p>
                                    <b>Description</b>
                                </p>
                                <textarea name="description" id="tinymce" cols="10" rows="10">
                                    {!! $stockage->description !!}
                                </textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">

                            <!--Site -->
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('sites') ? 'focused error' : '' }}">
                                    <label for="site">Sites de stockage</label>
                                    <select name="sites[]" id="site" class="form-control show-tick" data-live-search="true">
                                        @foreach($sites as $site)
                                            <option
                                                    @foreach($stockage->sites as $stockageSite)
                                                            {{ $stockageSite->id == $site->id ? 'selected' : '' }}
                                                    @endforeach
                                                    value="{{ $site->id }}">{{ $site->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--end Site-->

                            <!--Site -->
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('conditions') ? 'focused error' : '' }}">
                                    <label for="conditions">Conditions de stockage</label>
                                        <select name="conditions[]" id="conditions" class="form-control show-tick" data-live-search="true" multiple>
                                            @foreach($conditions as $condition)
                                                <option
                                                    @foreach($stockage->conditions as $stockageCondition)
                                                            {{ $stockageCondition->id == $condition->id ? 'selected' : '' }}
                                                    @endforeach
                                                        value="{{ $condition->id }}">{{ $condition->name }}
                                                </option>
                                            @endforeach
                                        </select>


                                </div>
                            </div>

                            <br>

                            <a href="{{ route('admin.stockage.index') }}" class="btn btn-danger m-t-15 waves-effect">Retour</a>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Enregistrer</button>

                        </div>
                    </div>
                </div>
            </div>



        </form>
        <!-- Vertical Layout | With Floating Label -->
    </div>

@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/public/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>

    <script>
        $(function () {
            //CKEditor
            // CKEDITOR.replace('ckeditor');
            //CKEDITOR.config.height = 300;

            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


@endpush


