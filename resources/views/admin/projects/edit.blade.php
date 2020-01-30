@extends('layouts.app')
@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Editar Proyecto</h3>
</div>
@endsection

@section("javascriptSrc")

<script src="{{asset("css/admin/vendors/js/pickers/pickadate/picker.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/pickadate/picker.date.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/pickadate/picker.time.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/pickadate/legacy.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/dateTime/moment-with-locales.min.js")}}" type="text/javascript"></script>
<script src="{{asset("css/admin/vendors/js/pickers/daterange/daterangepicker.js")}}" type="text/javascript"></script>

<script src="{{asset("css/admin/vendors/js/forms/select/select2.full.min.js")}}" type="text/javascript"></script>

<script>

var selectedProviders = [];

window.onload = function (e) {
     
    @foreach($providers as $provider)
            selectedProviders.push({name: "{{$provider->name}}", id: {{$provider->id}}})
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

    $('.js-data-example-ajax').select2({
        ajax: {
            url: '/providers/getAllProviders',
            method: "post",
            data: function (params) {
                return {
                    _token: CSRF_TOKEN,
                    search: params.term // search term
                };
            },
            dataType: 'json'
                    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
        }
    });

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

    if (!checkSeachByName($('.js-data-example-ajax').text())) {
        
        $.ajax('/providers/addProviderProject', 
        {
            dataType: 'json', 
            method:"post", 
            data:{id:$('.js-data-example-ajax').val(),project:{{$project->id}}},
            success: function (data,status,xhr) {   
                
                if(!data.success){
                    swal("Hay un error",data.message, "error");
                    return false;
                }else{
                    swal("Correcto",data.message, "success");
                }

                selectedProviders.push({name: $('.js-data-example-ajax').text(), id: $('.js-data-example-ajax').val()})
                $('.js-data-example-ajax').val(null).trigger('change');
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
        providersLocalTheme += '<div class="input-group mb-2"><input disabled type="text" value="' + selectedProviders[i].name + '" class="form-control"  aria-describedby="button-addon2"><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="removeProvider(' + i + ')">X</button></div></div>';
    }

    $(".show-providers").html(providersLocalTheme);
}

function removeProvider(index) {

     $.ajax('/providers/deleteProviderProject', 
        {
            dataType: 'json', 
            method:"post", 
            data:{id:selectedProviders[index].id,project:{{$project->id}}},
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
@section("cssSrc")
<link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/forms/selects/select2.min.css")}}">

<link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/pickers/daterange/daterangepicker.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/pickers/pickadate/pickadate.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("css/admin/css/plugins/pickers/daterange/daterange.css")}}">
@endsection



@section('content')
<div class="card-content collapse show">
    <div class="row">

        <div class="col-md-7">
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

                    <form method="POST" action="{{ url('/admin/projects/' . $project->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        @include ('admin.projects.form', ['formMode' => 'edit'])

                    </form>

                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Proveedores</label>
                        <div class="input-group mb-3">
                            <select class="js-data-example-ajax form-control"></select>
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
