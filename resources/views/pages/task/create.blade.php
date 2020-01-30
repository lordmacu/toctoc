@extends('layouts.app')

@section("actions")

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

<section class="row">
    <div class="col-md-12">
        <div class="card" >
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Agregar Tarea</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="card-text">
                        <p>Esta es la descripcio ndel modulo de tareas</p>
                    </div>
                    <form class="form" action="/tasks" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="projectinput1">Nombre de la Tarea</label>
                                        <input type="text" id="projectinput1" class="form-control" name="subject" placeholder="Escribe el nombre de la tarea">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput2">Prioridad</label>
                                        <select id="projectinput2" name="priority" class="form-control">
                                            @foreach($priorties as $key=>$priority)
                                            <option value="{{$key}}">{{$priority}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput2">Estado</label>
                                        <select id="projectinput2" name="status" class="form-control">
                                            @foreach($statuses as $key=>$status)
                                            <option value="{{$key}}">{{$status}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_end_task">Fechas de la tarea</label>
                                        <div class='input-group'>
                                            <input type='text' id="start_end_task" name="start_end_task" class="form-control daterange" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <span class="la la-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput2">Visibilidad</label>
                                        <select id="projectinput2" name="privacy_id" class="form-control">
                                            @foreach($privacies as $key=>$privacy)
                                            <option value="{{$key}}" >{{$privacy}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="projectinput8">Descripción</label>
                                <textarea id="projectinput8" rows="5" class="form-control" name="description" placeholder="Sobre la Tarea"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <a href="/tasks" type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
