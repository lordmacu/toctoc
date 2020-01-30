@extends('layouts.app')
@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Edit Survey #{{ $survey->id }}</h3>
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

var selectedProviders = [];

window.onload = function (e) {
  @foreach($survey->questions as $question)
            selectedProviders.push({name: "{{$question->text}}", id: "{{$question->text}}"})
    @endforeach
    paintProviders();
    
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
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


}

function checkSeachByName(name) {
    for (var i = 0; i < selectedProviders.length; i++) {
        if (selectedProviders[i].name == name) {
            return true;
        }
    }

    return false;
}

function addProvider() {

    if (!checkSeachByName($('#questionAdd').val())) {
        
        $.ajax('/surveys/addQuestionSurvey', 
        {
            dataType: 'json', 
            method:"post", 
            data:{id:$('#questionAdd').val(),survey:{{$survey->id}}},
            success: function (data,status,xhr) {   
                
                if(!data.success){
                    swal("Hay un error",data.message, "error");
                    return false;
                }else{
                    swal("Correcto",data.message, "success");
                }

                selectedProviders.push({name: $('#questionAdd').val(), id:$('#questionAdd').val()})
                $('#questionAdd').val("")
                paintProviders();
            },
            error: function (jqXhr, textStatus, errorMessage) { // error callback 

            }
        });

    }

}
function paintProviders() {
    var providersLocalTheme = "";
    for (var i = 0; i < selectedProviders.length; i++) {
        providersLocalTheme += '<div class="input-group mb-2"><input disabled type="text" value="' + selectedProviders[i].name + '" class="form-control"  aria-describedby="button-addon2"><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="removeQuestion(' + i + ')">X</button></div></div>';
    }

    $(".show-providers").html(providersLocalTheme);
}

function removeQuestion(index) {

     $.ajax('/surveys/deleteQuestionSurvey', 
        {
            dataType: 'json', 
            method:"post", 
            data:{id:selectedProviders[index].id,survey:{{$survey->id}}},
            success: function (data,status,xhr) {   
                
                if(!data.success){
                    swal("Hay un error",data.message, "error");
                    return false;
                }else{
                    swal("Correcto",data.message, "success");
                }

                  selectedProviders.splice(index, 1);
                    paintProviders();
            },
            error: function (jqXhr, textStatus, errorMessage) { // error callback 

            }
        });

  
}
</script>
@endsection

@section('content')
            <div class="card-content collapse show">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/surveys') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/surveys/' . $survey->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.surveys.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Opciones de la encuesta</label>
                        <div class="input-group mb-3">
                            <textarea id="questionAdd" class="form-control"></textarea>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-success" onclick="addProvider();" type="button" id="button-addon2">Agregar</button>
                            </div>
                        </div>
                    </div>
                    <div class="show-providers">

                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
