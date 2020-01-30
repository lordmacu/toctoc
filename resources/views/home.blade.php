@extends('layouts.app')

@section("actions")
 <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Basic Tables</h3>
        <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Tables</a>
                    </li>
                    <li class="breadcrumb-item active">Basic Tables
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">
            <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
            <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
                <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
                <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

<section class="row">
    <div class="col-xl-3 col-md-6 col-12">
        <div class="card">
            <div class="text-center">
                <div class="card-body">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" class="rounded-circle  height-150" alt="Card image">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Michelle Howard</h4>
                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
                    <a href="#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="la la-linkedin font-medium-4"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
