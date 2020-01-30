@extends('layouts.app')
@section("actions")
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Survey {{ $survey->id }}</h3>
</div>
<div class="content-header-right col-md-6 col-12">
     <div class="dropdown float-md-right">
        <a href="{{ url('/admin/surveys/' . $survey->id . '/edit') }}" class="btn btn-success round btn-glow px-2" id="dropdownBreadcrumbButton"   >Editar</a>
    </div>
 
</div>
@endsection


@section('content')
            <div class="card-content collapse show">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/admin/surveys') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <form method="POST" action="{{ url('admin/surveys' . '/' . $survey->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Survey" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $survey->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $survey->title }} </td></tr><tr><th> Start End Question </th><td> {{ $survey->start_end_question }} </td></tr><tr><th> Question </th><td> {{ $survey->question }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
