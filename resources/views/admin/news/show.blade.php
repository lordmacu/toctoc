@extends('layouts.app')
@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">News {{ $news->id }}</h3>
</div>
<div class="content-header-right col-md-6 col-12">
     <div class="dropdown float-md-right">
        <a href="{{ url('/admin/news/' . $news->id . '/edit') }}" class="btn btn-success round btn-glow px-2" id="dropdownBreadcrumbButton"   >Editar</a>
    </div>
 
</div>
@endsection


@section('content')
            <div class="card-content collapse show">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/admin/news') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <form method="POST" action="{{ url('admin/news' . '/' . $news->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete News" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $news->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $news->title }} </td></tr><tr><th> Image </th><td> {{ $news->image }} </td></tr><tr><th> Description </th><td> {{ $news->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
