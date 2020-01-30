@extends('layouts.app')

@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Crear Nuevo Proyecto</h3>
</div>
@endsection


@section("javascriptSrc")

<script src="{{asset("css/admin/vendors/js/pickers/pickadate/picker.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/pickadate/picker.date.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/pickadate/picker.time.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/pickadate/legacy.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/dateTime/moment-with-locales.min.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/daterange/daterangepicker.js")}}" type="text/javascript"></script>

<script>


window.onload = function (e) {
    $('.daterange').daterangepicker({

        locale: {
            applyLabel: "Guardar",
            cancelLabel: 'Cancelar',
            startLabel: 'Fecha Inicial',
            endLabel: 'Fecha Limite',
            customRangeLabel: 'Sélectionner une date',
            // daysOfWeek: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi','Samedi'],
            daysOfWeek: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            firstDay: 1
        }
    });
}
</script>
@endsection
@section("cssSrc")
<link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/pickers/daterange/daterangepicker.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/pickers/pickadate/pickadate.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("css/admin/css/plugins/pickers/daterange/daterange.css")}}">
@endsection

@section('content')
            <div class="card-content collapse show">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/projects') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/projects') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.projects.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
