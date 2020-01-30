@extends('layouts.app')
@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Inventary {{ $inventary->id }}</h3>
</div>
<div class="content-header-right col-md-6 col-12">
     <div class="dropdown float-md-right">
        <a href="{{ url('/admin/inventaries/' . $inventary->id . '/edit') }}" class="btn btn-success round btn-glow px-2" id="dropdownBreadcrumbButton"   >Editar</a>
    </div>
 
</div>
@endsection


@section('content')
            <div class="card-content collapse show">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/admin/inventaries') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <form method="POST" action="{{ url('admin/inventaries' . '/' . $inventary->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Inventary" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $inventary->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $inventary->name }} </td></tr><tr><th> Code </th><td> {{ $inventary->code }} </td></tr><tr><th> Brand </th><td> {{ $inventary->brand }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
