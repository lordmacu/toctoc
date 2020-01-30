<!doctype html>


<html class="loaded" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
        <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="PIXINVENT">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="apple-touch-icon" href="css/admin/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="css/admin/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
        <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/css/vendors.css")}}">
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/css/app.css")}}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/css/core/menu/menu-types/vertical-menu-modern.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/css/pages/dashboard-ecommerce.css")}}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/css/style.css")}}">
        <!-- END Custom CSS-->


        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/editors/quill/katex.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/editors/quill/monokai-sublime.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/editors/quill/quill.snow.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/editors/quill/quill.bubble.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/admin/vendors/css/extensions/sweetalert.css")}}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('cssSrc')

    </head>
    <body class="vertical-layout vertical-menu-modern 2-columns fixed-navbar  menu-expanded pace-done" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
               
                
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div></div>
        <!-- fixed-top-->
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item mr-auto">
                            <a class="navbar-brand" href="index.html">
                                <img class="brand-logo" alt="modern admin logo" src="{{asset("/css/admin/images/logo/logo.png")}}">
                                <h3 class="brand-text">Toc Toc</h3>
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                        <li class="nav-item d-md-none">
                            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav mr-auto float-left">
                            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                            <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                                <ul class="mega-dropdown-menu dropdown-menu row">
                                    <li class="col-md-2">
                                        <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>
                                        <div id="mega-menu-carousel-example">
                                            <div>
                                                <img class="rounded img-fluid mb-1" src="css/admin/images/slider/slider-2.png" alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>
                                                <p class="news-content">
                                                    <span class="font-small-2">January 26, 2018</span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Drill down menu</h6>
                                        <ul class="drilldown-menu sliding-menu" style="height: 214px;"><div class="sliding-menu-wrapper" style="width: 636px;"><ul id="menu-panel-w92uo" class="menu-panel-root" style="width: 212px;">
                                                    <li>
                                                        <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i> Page layouts &amp; Templates</a>
                                                    </li>
                                                    <li><a href="#menu-panel-t4njj" class="nav-has-children dropdown-item"><i class="ft-align-left"></i> Multi level menu<i class="ft-arrow-right children-in"></i></a>

                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="sk-2-columns.html"><i class="ft-edit"></i> Page starter kit</a></li>
                                                    <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                                                    <li>
                                                        <a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Customer support center</a>
                                                    </li>
                                                </ul><ul id="menu-panel-t4njj" class="menu-panel" style="width: 212px;"><a class="nav-has-parent back primary dropdown-item" href="#menu-panel-back"></a>
                                                    <li><a class="dropdown-item" href="#"><i class="la la-bookmark-o"></i>  Second level</a></li>
                                                    <li><a href="#menu-panel-1jdv6" class="nav-has-children dropdown-item"><i class="la la-lemon-o"></i> Second level menu<i class="ft-arrow-right children-in"></i></a>

                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i class="la la-hdd-o"></i> Second level, third link</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="la la-floppy-o"></i> Second level, fourth link</a></li>
                                                </ul><ul id="menu-panel-1jdv6" class="menu-panel" style="width: 212px;"><a class="nav-has-parent back primary dropdown-item" href="#menu-panel-back"></a>
                                                    <li><a class="dropdown-item" href="#"><i class="la la-heart-o"></i>  Third level</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="la la-file-o"></i> Third level</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Third level</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="la la-clock-o"></i> Third level</a></li>
                                                </ul></div></ul>
                                    </li>
                                    <li class="col-md-3">
                                        <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>
                                        <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                                            <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                                                <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                                                <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                                                    <div class="card-content">
                                                        <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon.
                                                            Jelly wafer jelly beans. Caramels chocolate cake liquorice
                                                            cake wafer jelly beans croissant apple pie.</p>
                                                    </div>
                                                </div>
                                                <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                                                <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                                    <div class="card-content">
                                                        <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu
                                                            dessert pie. Tiramisu macaroon muffin jelly marshmallow
                                                            cake. Pastry oat cake chupa chups.</p>
                                                    </div>
                                                </div>
                                                <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                                                <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="card-content">
                                                        <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes
                                                            lollipop macaroon. Cake dragée jujubes donut chocolate
                                                            bar chocolate cake cupcake chocolate topping.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                                                            <div class="form-control-position pl-1"><i class="la la-user"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                                                            <div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative has-icon-left">
                                                            <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                                                            <div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 mb-1">
                                                        <button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                                <div class="search-input">
                                    <input class="input" type="text" placeholder="Explore Modern...">
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <span class="mr-1">Hello,
                                        <span class="user-name text-bold-700">John Doe</span>
                                    </span>
                                    <span class="avatar avatar-online">
                                        <img src="css/admin/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                                    <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                                    <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>

                                    @guest
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>

                                    @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>

                                    @endif
                                    @else
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                        <i class="ft-power"></i>  {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endguest


                                </div>
                            </li>
                            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                                </div>
                            </li>
                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                                    <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Notifications</span>
                                        </h6>
                                        <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100 ps-container ps-theme-dark" data-ps-id="72556df7-6b94-c992-c14f-90ee4977fe42">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading red darken-1">99% Server load</h6>
                                                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Complete the task</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Generate monthly report</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Messages</span>
                                        </h6>
                                        <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100 ps-container ps-theme-dark" data-ps-id="9bf99bde-8fd7-0c02-73a5-d5ce4596a6b6">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-online rounded-circle">
                                                        <img src="css/admin/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Margaret Govan</h6>
                                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-busy rounded-circle">
                                                        <img src="css/admin/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Bret Lezama</h6>
                                                    <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-online rounded-circle">
                                                        <img src="css/admin/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Carie Berra</h6>
                                                    <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-away rounded-circle">
                                                        <img src="css/admin/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Eric Alsobrook</h6>
                                                    <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="main-menu-content ps-container ps-theme-light ps-active-y" data-ps-id="09f370ba-1917-4fbd-4055-742e70e36365">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    @include("menus.menu")
                    <!-- Authentication Links -->

                </ul>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 160px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 6px;"></div></div></div>
        </div>
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                    @yield('actions')
                </div>
                <div class="content-body" id="app">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <footer class="footer footer-static footer-light navbar-border navbar-shadow">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
                <span class="float-md-left d-block d-md-inline-block">Copyright © 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span>
                <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted &amp; Made with <i class="ft-heart pink"></i></span>
            </p>
        </footer>
        <!-- BEGIN VENDOR JS-->
        <script src="{{asset("css/admin/vendors/js/vendors.min.js")}}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->


        <!-- BEGIN MODERN JS-->
        <script src="{{asset("css/admin/js/core/app-menu.js")}}" type="text/javascript"></script>
        <script src="{{asset("css/admin/js/core/app.js")}}" type="text/javascript"></script>
        <!-- END MODERN JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{asset("css/admin/js/scripts/pages/dashboard-ecommerce.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
          <script src="{{asset("css/admin/vendors/js/extensions/sweetalert.min.js")}}" type="text/javascript"></script>

        <script>
var quill = new Quill('.editor', {
    theme: 'snow'
});
        </script>

        @yield('javascriptSrc')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
    </body>
</html>
