@extends('layouts.app')

@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Tareas</h3>
</div>
<div class="content-header-right col-md-6 col-12">
    @if(count($tasks)>0) 
    <div class="dropdown float-md-right">
        <a href="/tasks/create" class="btn btn-success round btn-glow px-2" id="dropdownBreadcrumbButton"   >Agregar</a>

    </div>
    @endif
</div>
@endsection

@section('content')

<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show" style="">
                @if (Session::has('message'))
                <div class="card-body card-dashboard ">

                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                </div>
                @endif
                @if (Session::has('error'))
                <div class="card-body card-dashboard ">

                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                </div>
                @endif

                @if(count($tasks)>0)  
                <div class="table-responsive mt-2">
                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Prioridad</th>
                                <th>Status</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Visibilidad</th>

                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->subject}}</td>
                                <td>{{$task->priorities->name}}</td>
                                <td>{{$task->statuses->name}}</td>
                                <td>{{$task->start_date}}</td>
                                <td>{{$task->end_date}}</td>
                                <td>{{$task->privacies->name}}</td>

                                <td>
                                    <a href="/tasks/{{$task->id}}/edit/" class="btn btn-warning btn-sm">Editar</a>
                                    {{ Form::open(array('url' => 'tasks/' . $task->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger btn-sm')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-center mb-3">
                    <h1>No se encontraron tareas...</h1>
                    <a class="btn btn-success" href="/tasks/create">Crear Una</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
