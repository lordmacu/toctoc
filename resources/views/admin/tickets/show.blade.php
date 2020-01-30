@extends('layouts.app')
@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Ticket {{ $ticket->id }}</h3>
</div>
<div class="content-header-right col-md-6 col-12">
     <div class="dropdown float-md-right">
        <a href="{{ url('/admin/tickets/' . $ticket->id . '/edit') }}" class="btn btn-success round btn-glow px-2" id="dropdownBreadcrumbButton"   >Editar</a>
    </div>
 
</div>
@endsection


@section('content')
            <div class="card-content collapse show">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/admin/tickets') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <form method="POST" action="{{ url('admin/tickets' . '/' . $ticket->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Ticket" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ticket->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $ticket->title }} </td></tr><tr><th> Description </th><td> {{ $ticket->description }} </td></tr><tr><th> Status Id </th><td> {{ $ticket->status_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
