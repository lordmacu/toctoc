@extends('layouts.app')
@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Contactos</h3>
</div>

<div class="content-header-right col-md-6 col-12">
    <div class="dropdown float-md-right">
        <a href="{{ url('/admin/contacts/create') }}" class="btn btn-success round btn-glow px-2" id="dropdownBreadcrumbButton"   ><i class="fa fa-plus" aria-hidden="true"></i>Agregar</a>
    </div>
   
</div>

@endsection
@section('content')
        <div class="card-content collapse show">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="{{ url('/admin/contacts') }}" accept-charset="UTF-8" class="form-inline my-2 float-right mb-2" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="la la-search text-size-base"></i>
                                    </button>
                                </span>
                            </div>
                                

                        </form>

                       
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombres</th><th>Apellidos</th><th>Teléfono</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->last_name }}</td><td>{{ $item->phone }}</td>
                                        <td>
                                            <a href="{{ url('/admin/contacts/' . $item->id) }}" title="Ver Contacto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/contacts/' . $item->id . '/edit') }}" title="Editar Contacto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/contacts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Borrar Contacto" onclick="return confirm(&quot;Realmente quieres borrar este item?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $contacts->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
