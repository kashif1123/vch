<!DOCTYPE html>
<html lang="en" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <title>{{credentials()->company_name}}</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Asap+Condensed:500"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <style>
        input:read-only{
            background-color: rgba(158, 158, 158, 0.21) !important;
        }
    </style>
    <!--end::Fonts -->
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/ng-tags-input/3.2.0/ng-tags-input.bootstrap.min.cssnpm install" rel="stylesheet" type="text/css" />--}}
    <!--end::Page Vendors Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{url('assets/vendors/global/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/demo10/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->
{{--    <link rel="shortcut icon" href="{{url('assets/media/logos/favicon.ico')}}" />--}}

    <link rel="stylesheet" type="text/css" href="{{ url('custom/main.css') }}">

    @yield('css')
    <style>
        .dt-buttons{
            margin-bottom: 10px !important;
        }
    </style>
</head>
<!-- end::Head -->
<!-- begin::Body -->
<body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >
<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
    {{--<div class="kt-header-mobile__logo">--}}
        {{--<a href="#">--}}
            {{--<img alt="Logo" src="{{url('assets/media/logos/logo-10-sm.png')}}"/>--}}
        {{--</a>--}}
        {{--<div class="dropdown">--}}
            {{--<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                {{--<i class="flaticon2-layers"></i>--}}
            {{--</button>--}}
            {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">--}}
                {{--<ul class="kt-nav kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20">--}}
                    {{--<li class="kt-nav__item">--}}
                        {{--<a class="kt-nav__link active" href="#">--}}
                            {{--<span class="kt-nav__link-icon"><i class="flaticon2-user"></i></span>--}}
                            {{--<span class="kt-nav__link-text">Human Resources</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="kt-nav__item">--}}
                        {{--<a class="kt-nav__link" href="#">--}}
                            {{--<span class="kt-nav__link-icon"><i class="flaticon-feed"></i></span>--}}
                            {{--<span class="kt-nav__link-text">Customer Relationship</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="kt-nav__item">--}}
                        {{--<a class="kt-nav__link" href="#">--}}
                            {{--<span class="kt-nav__link-icon"><i class="flaticon2-settings"></i></span>--}}
                            {{--<span class="kt-nav__link-text">Order Processing</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="kt-nav__item">--}}
                        {{--<a class="kt-nav__link" href="#">--}}
                            {{--<span class="kt-nav__link-icon"><i class="flaticon2-chart2"></i></span>--}}
                            {{--<span class="kt-nav__link-text">Accounting</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="kt-nav__separator"></li>--}}
                    {{--<li class="kt-nav__item">--}}
                        {{--<a class="kt-nav__link" href="#">--}}
                            {{--<span class="kt-nav__link-icon"><i class="flaticon-security"></i></span>--}}
                            {{--<span class="kt-nav__link-text">Finance</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="kt-nav__item">--}}
                        {{--<a class="kt-nav__link" href="#">--}}
                            {{--<span class="kt-nav__link-icon"><i class="flaticon2-cup"></i></span>--}}
                            {{--<span class="kt-nav__link-text">Administration</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{----}}
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        {{--<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>--}}
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed "  data-ktheader-minimize="on" >
                <div class="kt-header__top">
                    <div class="kt-container ">
                        <!-- begin:: Brand -->
                        <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                            <div class="kt-header__brand-logo">
                                <a href="#">
                                    {{--<img alt="Logo" src="{{ url('assets/media/logos/logo-10.png') }}" class="kt-header__brand-logo-default"/>--}}
                                </a>
                            </div>

                            {{--<div class="kt-header__brand-nav">--}}
                                {{--<div class="dropdown">--}}
                                    {{--<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                                        {{--Dashboard--}}
                                    {{--</button>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">--}}
                                        {{--<ul class="kt-nav kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20">--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a class="kt-nav__link active" href="#">--}}
                                                    {{--<span class="kt-nav__link-icon"><i class="flaticon2-user"></i></span>--}}
                                                    {{--<span class="kt-nav__link-text">Human Resources</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a class="kt-nav__link" href="#">--}}
                                                    {{--<span class="kt-nav__link-icon"><i class="flaticon-feed"></i></span>--}}
                                                    {{--<span class="kt-nav__link-text">Customer Relationship</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a class="kt-nav__link" href="#">--}}
                                                    {{--<span class="kt-nav__link-icon"><i class="flaticon2-settings"></i></span>--}}
                                                    {{--<span class="kt-nav__link-text">Order Processing</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a class="kt-nav__link" href="#">--}}
                                                    {{--<span class="kt-nav__link-icon"><i class="flaticon2-chart2"></i></span>--}}
                                                    {{--<span class="kt-nav__link-text">Accounting</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__separator"></li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a class="kt-nav__link" href="#">--}}
                                                    {{--<span class="kt-nav__link-icon"><i class="flaticon-security"></i></span>--}}
                                                    {{--<span class="kt-nav__link-text">Finance</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a class="kt-nav__link" href="#">--}}
                                                    {{--<span class="kt-nav__link-icon"><i class="flaticon2-cup"></i></span>--}}
                                                    {{--<span class="kt-nav__link-text">Administration</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>

                        @if(Auth::user())
                        <div style="float: right; padding-top: 20px;" class="dropdown">
                            <a href="#" style="font-size: 18px; color: rgba(0,0,0,0.61)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="{{url("/setting/setting")}}">Edit Credentials</a></li>
                                <li><a href="{{url("/reset_software_page")}}">Reset Software</a></li>
                                <li><a href="{{url("/b-ledger/ledger1")}}">Bank Ledger</a></li>
                                <li><a href="{{url("/profit_reconciliation")}}">Profit Reconciliation</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" style="font-size: 13px;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endif
                        <!-- end:: Brand -->			<!-- begin:: Header Topbar -->
                        {{--<div class="kt-header__topbar kt-grid__item kt-grid__item--fluid">--}}
                            {{--<!--begin: Search -->--}}
                            {{--<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">--}}
                                {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
                                    {{--<span class="kt-header__topbar-icon kt-header__topbar-icon--brand" ><i class="flaticon2-search-1"></i></span>--}}
                                {{--</div>--}}
                                {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">--}}
                                    {{--<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">--}}
                                        {{--<form method="get" class="kt-quick-search__form">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>--}}
                                                {{--<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">--}}
                                                {{--<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                        {{--<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--end: Search -->--}}
                            {{--<!--begin: Notifications -->--}}
                            {{--<div class="kt-header__topbar-item dropdown">--}}
                                {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
                                    {{--<span class="kt-header__topbar-icon kt-header__topbar-icon--success"><i class="flaticon2-bell-alarm-symbol"></i></span>--}}
                                    {{--<span class="kt-hidden kt-badge kt-badge--danger"></span>--}}
                                {{--</div>--}}
                                {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">--}}
                                    {{--<form>--}}
                                        {{--<!--begin: Head -->--}}
                                        {{--<div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">--}}
                                            {{--<h3 class="kt-head__title">--}}
                                                {{--User Notifications--}}
                                                {{--&nbsp;--}}
                                                {{--<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>--}}
                                            {{--</h3>--}}
                                            {{--<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">--}}
                                                {{--<li class="nav-item">--}}
                                                    {{--<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="nav-item">--}}
                                                    {{--<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="nav-item">--}}
                                                    {{--<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<!--end: Head -->--}}
                                        {{--<div class="tab-content">--}}
                                            {{--<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">--}}
                                                {{--<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-line-chart kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New order has been received--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--2 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-box-1 kt-font-brand"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New customer is registered--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--3 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-chart2 kt-font-danger"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--Application has been approved--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--3 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-image-file kt-font-warning"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New file has been uploaded--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--5 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-bar-chart kt-font-info"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New user feedback received--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--8 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-pie-chart-2 kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--System reboot has been successfully completed--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--12 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-favourite kt-font-danger"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New order has been placed--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--15 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item kt-notification__item--read">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-safe kt-font-primary"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--Company meeting canceled--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--19 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-psd kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New report has been received--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--23 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon-download-1 kt-font-danger"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--Finance report has been generated--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--25 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon-security kt-font-warning"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New customer comment recieved--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--2 days ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-pie-chart kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New customer is registered--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--3 days ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">--}}
                                                {{--<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-psd kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New report has been received--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--23 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon-download-1 kt-font-danger"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--Finance report has been generated--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--25 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-line-chart kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New order has been received--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--2 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-box-1 kt-font-brand"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New customer is registered--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--3 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-chart2 kt-font-danger"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--Application has been approved--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--3 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-image-file kt-font-warning"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New file has been uploaded--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--5 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-bar-chart kt-font-info"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New user feedback received--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--8 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-pie-chart-2 kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--System reboot has been successfully completed--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--12 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-favourite kt-font-brand"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New order has been placed--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--15 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item kt-notification__item--read">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-safe kt-font-primary"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--Company meeting canceled--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--19 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-psd kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New report has been received--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--23 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon-download-1 kt-font-danger"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--Finance report has been generated--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--25 hrs ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon-security kt-font-warning"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New customer comment recieved--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--2 days ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="kt-notification__item">--}}
                                                        {{--<div class="kt-notification__item-icon">--}}
                                                            {{--<i class="flaticon2-pie-chart kt-font-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-notification__item-details">--}}
                                                            {{--<div class="kt-notification__item-title">--}}
                                                                {{--New customer is registered--}}
                                                            {{--</div>--}}
                                                            {{--<div class="kt-notification__item-time">--}}
                                                                {{--3 days ago--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">--}}
                                                {{--<div class="kt-grid kt-grid--ver" style="min-height: 200px;">--}}
                                                    {{--<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">--}}
                                                        {{--<div class="kt-grid__item kt-grid__item--middle kt-align-center">--}}
                                                            {{--All caught up!--}}
                                                            {{--<br>No new notifications.--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--end: Notifications -->--}}
                            {{--<!--begin: Quick actions -->--}}
                            {{--<div class="kt-header__topbar-item dropdown">--}}
                                {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
                                    {{--<span class="kt-header__topbar-icon kt-header__topbar-icon--warning"><i class="flaticon2-gear"></i></span>--}}
                                {{--</div>--}}
                                {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">--}}
                                    {{--<form>--}}
                                        {{--<!--begin: Head -->--}}
                                        {{--<div class="kt-head kt-head--skin-light">--}}
                                            {{--<h3 class="kt-head__title">--}}
                                                {{--User Quick Actions--}}
                                                {{--<span class="kt-space-15"></span>--}}
                                                {{--<span class="btn btn-success btn-sm btn-bold btn-font-md">23 tasks pending</span>--}}
                                            {{--</h3>--}}
                                        {{--</div>--}}
                                        {{--<!--end: Head -->--}}
                                        {{--<!--begin: Grid Nav -->--}}
                                        {{--<div class="kt-grid-nav kt-grid-nav--skin-light">--}}
                                            {{--<div class="kt-grid-nav__row">--}}
                                                {{--<a href="#" class="kt-grid-nav__item">--}}
                                             {{--<span class="kt-grid-nav__icon">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">--}}
                                                   {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                                      {{--<rect id="bound" x="0" y="0" width="24" height="24"/>--}}
                                                      {{--<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>--}}
                                                      {{--<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" id="C" fill="#000000"/>--}}
                                                   {{--</g>--}}
                                                {{--</svg>--}}
                                             {{--</span>--}}
                                                    {{--<span class="kt-grid-nav__title">Accounting</span>--}}
                                                    {{--<span class="kt-grid-nav__desc">eCommerce</span>--}}
                                                {{--</a>--}}
                                                {{--<a href="#" class="kt-grid-nav__item">--}}
                                             {{--<span class="kt-grid-nav__icon">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">--}}
                                                   {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                                      {{--<rect id="bound" x="0" y="0" width="24" height="24"/>--}}
                                                      {{--<path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>--}}
                                                      {{--<path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" id="Combined-Shape" fill="#000000"/>--}}
                                                   {{--</g>--}}
                                                {{--</svg>--}}
                                             {{--</span>--}}
                                                    {{--<span class="kt-grid-nav__title">Administration</span>--}}
                                                    {{--<span class="kt-grid-nav__desc">Console</span>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-grid-nav__row">--}}
                                                {{--<a href="#" class="kt-grid-nav__item">--}}
                                             {{--<span class="kt-grid-nav__icon">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">--}}
                                                   {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                                      {{--<rect id="bound" x="0" y="0" width="24" height="24"/>--}}
                                                      {{--<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" id="Combined-Shape" fill="#000000"/>--}}
                                                      {{--<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" id="Path" fill="#000000" opacity="0.3"/>--}}
                                                   {{--</g>--}}
                                                {{--</svg>--}}
                                             {{--</span>--}}
                                                    {{--<span class="kt-grid-nav__title">Projects</span>--}}
                                                    {{--<span class="kt-grid-nav__desc">Pending Tasks</span>--}}
                                                {{--</a>--}}
                                                {{--<a href="#" class="kt-grid-nav__item">--}}
                                             {{--<span class="kt-grid-nav__icon">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">--}}
                                                   {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                                      {{--<polygon id="Shape" points="0 0 24 0 24 24 0 24"/>--}}
                                                      {{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
                                                      {{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>--}}
                                                   {{--</g>--}}
                                                {{--</svg>--}}
                                             {{--</span>--}}
                                                    {{--<span class="kt-grid-nav__title">Customers</span>--}}
                                                    {{--<span class="kt-grid-nav__desc">Latest cases</span>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!--end: Grid Nav -->--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--end: Quick actions -->--}}
                            {{--<!--begin: Cart -->--}}

                            {{--<!--end: Cart-->--}}
                            {{--<!--begin: Quick panel toggler -->--}}
                            {{--<div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="top">--}}
                                {{--<div class="kt-header__topbar-wrapper">--}}
                                    {{--<span class="kt-header__topbar-icon kt-header__topbar-icon--success" id="kt_quick_panel_toggler_btn"><i class="flaticon2-menu-2"></i></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--end: Quick panel toggler -->--}}
                            {{--<!--begin: Language bar -->--}}
                            {{--<div class="kt-header__topbar-item kt-header__topbar-item--langs">--}}
                                {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
                                 {{--<span class="kt-header__topbar-icon kt-header__topbar-icon--info">--}}
                                 {{--<img class="" src="{{ url('assets/media/flags/012-uk.svg') }}" alt="" />--}}
                                 {{--</span>--}}
                                {{--</div>--}}
                                {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">--}}
                                    {{--<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">--}}
                                        {{--<li class="kt-nav__item kt-nav__item--active">--}}
                                            {{--<a href="#" class="kt-nav__link">--}}
                                                {{--<span class="kt-nav__link-icon"><img src="{{ url('assets/media/flags/020-flag.svg') }}" alt="" /></span>--}}
                                                {{--<span class="kt-nav__link-text">English</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}

                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--end: Language bar -->--}}
                            {{--<!--begin: User bar -->--}}
                            {{--<div class="kt-header__topbar-item kt-header__topbar-item--user">--}}
                                {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
                                    {{--<span class="kt-hidden kt-header__topbar-welcome">Hi,</span>--}}
                                    {{--<span class="kt-hidden kt-header__topbar-username">Nick</span>--}}
                                    {{--<img class="kt-hidden-" alt="Pic" src="{{ url('assets/media/users/300_21.jpg') }}"/>--}}
                                    {{--<span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-hidden"><b>S</b></span>--}}
                                {{--</div>--}}
                                {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">--}}
                                    {{--<!--begin: Head -->--}}
                                    {{--<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">--}}
                                        {{--<div class="kt-user-card__avatar">--}}
                                            {{--<img class="kt-hidden-" alt="Pic" src="{{ url('assets/media/users/300_25.jpg') }}" />--}}
                                            {{--<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->--}}
                                            {{--<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-user-card__name">--}}
                                            {{--Sean Stone--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-user-card__badge">--}}
                                            {{--<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--end: Head -->--}}
                                    {{--<!--begin: Navigation -->--}}
                                    {{--<div class="kt-notification">--}}
                                        {{--<a href="#" class="kt-notification__item">--}}
                                            {{--<div class="kt-notification__item-icon">--}}
                                                {{--<i class="flaticon2-calendar-3 kt-font-success"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-notification__item-details">--}}
                                                {{--<div class="kt-notification__item-title kt-font-bold">--}}
                                                    {{--My Profile--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-time">--}}
                                                    {{--Account settings and more--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                        {{--<a href="#" class="kt-notification__item">--}}
                                            {{--<div class="kt-notification__item-icon">--}}
                                                {{--<i class="flaticon2-mail kt-font-warning"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-notification__item-details">--}}
                                                {{--<div class="kt-notification__item-title kt-font-bold">--}}
                                                    {{--My Messages--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-time">--}}
                                                    {{--Inbox and tasks--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                        {{--<a href="#" class="kt-notification__item">--}}
                                            {{--<div class="kt-notification__item-icon">--}}
                                                {{--<i class="flaticon2-rocket-1 kt-font-danger"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-notification__item-details">--}}
                                                {{--<div class="kt-notification__item-title kt-font-bold">--}}
                                                    {{--My Activities--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-time">--}}
                                                    {{--Logs and notifications--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                        {{--<a href="#" class="kt-notification__item">--}}
                                            {{--<div class="kt-notification__item-icon">--}}
                                                {{--<i class="flaticon2-hourglass kt-font-brand"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-notification__item-details">--}}
                                                {{--<div class="kt-notification__item-title kt-font-bold">--}}
                                                    {{--My Tasks--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-time">--}}
                                                    {{--latest tasks and projects--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                        {{--<a href="#" class="kt-notification__item">--}}
                                            {{--<div class="kt-notification__item-icon">--}}
                                                {{--<i class="flaticon2-cardiogram kt-font-warning"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-notification__item-details">--}}
                                                {{--<div class="kt-notification__item-title kt-font-bold">--}}
                                                    {{--Billing--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-time">--}}
                                                    {{--billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                        {{--<div class="kt-notification__custom kt-space-between">--}}
                                            {{--<a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>--}}
                                            {{--<a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--end: Navigation -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--end: User bar -->--}}
                        {{--</div>--}}
                        <!-- end:: Header Topbar -->
                    </div>
                </div>
                <?php
                function begnWith($str, $begnString) {
                    $len = strlen($begnString);
                    return (substr($str, 0, $len) === $begnString);
                }
                ?>
                <div class="kt-header__bottom">
                    @if(Auth::user())
                    <div class="kt-container ">
                        <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                <ul class="kt-menu__nav">
                                    @if(Auth::user()->user_permissions['standard_dashboard']=="true")
                                    <li class="kt-menu__item   @if(request()->url() == url('/')) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif "  aria-haspopup="true"><a  href="{{url('/')}}" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a></li>
                                    @endif
                                        @if(Auth::user()->user_permissions['standard_sale']=="true")
                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('sale/saleproduct'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif "  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href="{{ url('sale/saleproduct') }}" class="kt-menu__link "><span class="kt-menu__link-text">Sale</span></a>
                                        </li>
                                        @endif
                                        @if(Auth::user()->user_permissions['standard_product']=="true")
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('product/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif "  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Product</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('product/newproduct') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">New Product</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('product/allcategories') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Categories</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('product/allcompany') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Company</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('product/allproducts') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Products</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('product/product_sale') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Products Sale</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                        @endif
                                            {{--                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('dispose/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif "  data-ktmenu-submenu-toggle="click" aria-haspopup="true">--}}
{{--                                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Dispose Management</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">--}}
{{--                                            <ul class="kt-menu__subnav">--}}
{{--                                                <li class="kt-menu__item">--}}
{{--                                                    <a  href="{{ url('dispose/dispose') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Dispose Analyzation</span></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="kt-menu__item">--}}
{{--                                                    <a  href="{{ url('dispose/dispose_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Dispose Report</span></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
                                        @if(Auth::user()->user_permissions['standard_account']=="true")
                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('supplier/'))) {{'kt-menu__item--active'}} @elseif(begnWith(request()->url(),url('bank/'))) {{'kt-menu__item--active'}}  @endif {{'kt-menu__item--rel'}}"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Accounts</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/newsupplier') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">New Supplier/Customer/Employee</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/allsupplier') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Suppliers</span></a>
                                                </li>
                                                @if(Auth::user()->id == 1)
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('user/newuser') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Register User</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('user/allusers') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Users</span></a>
                                                </li>
                                                @endif
                                                {{--<li class="kt-menu__item">--}}
                                                    {{--<a  href="{{ url('balance/supplierbalance') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Suppliers Balance</span></a>--}}
                                                {{--</li>--}}
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/allemployees') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Employees</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/allowners') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Owners</span></a>
                                                </li>
{{--                                                <li class="kt-menu__item">--}}
{{--                                                    <a  href="{{ url('supplier/supplierinvoices') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Supplier Invoices</span></a>--}}
{{--                                                </li>--}}
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/allcustomer') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Customers</span></a>
                                                </li>
                                                {{--<li class="kt-menu__item">--}}
                                                    {{--<a  href="{{ url('balance/customerbalance') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Customers Balance</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="kt-menu__item">--}}
                                                    {{--<a  href="{{ url('supplier/customercontacts') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Customer Contacts</span></a>--}}
                                                {{--</li>--}}
{{--                                                <li class="kt-menu__item">--}}
{{--                                                    <a  href="{{ url('supplier/customerinvoices') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Customer Invoices</span></a>--}}
{{--                                                </li>--}}
                                                <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Bank Accounts</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('bank/newbank') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">New Bank Account</span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('bank/allbank') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Bank Accounts</span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('bank/accounttopup') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Account Top Up</span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('bank/topupreport') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Account Top Up Report</span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('bank/transfermoney') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Transfer Money</span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('bank/transfermoneyreport') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Transfered Money Report</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                        @endif
                                        @if(Auth::user()->user_permissions['standard_pay_receive']=="true")
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('pay_receive/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif "  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Pay/Receive</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Pay Amount</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('pay_receive/payamount') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pay Supplier/Customer/Employee </span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('pay_receive/allpaiddamounts') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Paid Amounts</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Receive Amount</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('pay_receive/receiveamount') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Receive from Supplier/Customer </span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('pay_receive/allreceivedamounts') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Received Amounts</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Salary</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('pay_receive/pay_salary') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pay Employee Salary </span></a></li>
                                                            <li class="kt-menu__item "  aria-haspopup="true"><a  href="{{ url('pay_receive/allpaidsalaries') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Paid Salaries</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                        @endif
                                        @if(Auth::user()->user_permissions['standard_purchase_sale']=="true")

                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('purchase/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Purchase/Sale</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/purchaseproduct') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Purchase Products</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/purchasereport') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Purchase Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/allpurchase') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Purchases</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/returnpurchase') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Return Purchase</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/purchase_return_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Purchase Return Report</span></a>
                                                </li>
                                                {{--<li class="kt-menu__item">--}}
                                                    {{--<a  href="{{ url('sale/saleproduct') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Sale Products</span></a>--}}
                                                {{--</li>--}}
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/returnsale') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Return Sale</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/return_sale_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Sale Return Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('sale/salereport') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Sale Report<span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('sale/allsale') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Sold Products</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                        @endif
                                        @if(Auth::user()->user_permissions['standard_expenses']=="true")
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('expense/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Expenses</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('expense/expense') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">New Expense</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('expense/showexpenses') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Expenses</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('expense/showexpenseheads') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">All Expense Heads</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                        @endif
{{--                                        @if(Auth::user()->user_permissions['standard_ledger']=="true")--}}
{{--                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('b-ledger/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">--}}
{{--                                                <a  href='{{ url('b-ledger/ledger1') }}' class="kt-menu__link "><span class="kt-menu__link-text">Bank Ledger</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
                                        @if(Auth::user()->user_permissions['standard_ledger']=="true")
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('ledger/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href='{{ url('ledger/ledger1') }}' class="kt-menu__link "><span class="kt-menu__link-text">Ledger</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    </li>
                                        @endif
                                        @if(Auth::user()->user_permissions['standard_day_close']=="true")


{{--                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('profit_reconciliation'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">--}}
{{--                                        <a  href='{{ url('profit_reconciliation/') }}' class="kt-menu__link "><span class="kt-menu__link-text">Profit &nbsp; Rec.... & Month Close</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                    </li>--}}
                                        @endif
                                        @if(Auth::user()->user_permissions['standard_month_close']=="true")
{{--                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('monthclose/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">--}}
{{--                                        <a  href='{{ url('monthclose/report') }}' class="kt-menu__link "><span class="kt-menu__link-text">Month Close </span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                    </li>--}}
                                        @endif
                                            {{--<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('dispose/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">--}}
{{--                                        <a  href="{{ url('dispose/dispose_report') }}" class="kt-menu__link "><span class="kt-menu__link-text">Wet Stock Report</span></a>--}}
{{--                                    </li>--}}
                                        @if(Auth::user()->user_permissions['standard_reports']=="true")
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('expense/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('dayclose/'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                    <a  href='{{ url('dayclose/report') }}' class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Day Close </span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('monthclose/report'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                    <a  href='{{ url('monthclose/report') }}' class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Month Close Report</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('monthclose/mini_monthly_close'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                    <a  href='{{ url('monthclose/mini_monthly_close') }}' class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Mini Month Close Report</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('sale/allsale') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Sale Report</span></a>
                                                </li>
{{--                                                <li class="kt-menu__item">--}}
{{--                                                    <a  href="{{ url('dispose/dispose_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Wet Stock Report</span></a>--}}
{{--                                                </li>--}}
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/return_sale_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Sale Return Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/purchasereport') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Purchase Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('purchase/purchase_return_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Purchase Return Report</span></a>
                                                </li>
{{--                                                <li class="kt-menu__item">--}}
{{--                                                    <a  href="{{ url('dispose/dispose_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Dispose Report</span></a>--}}
{{--                                                </li>--}}
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('expense/showexpenses') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Expense Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/allsupplier') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Suppliers Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/allcustomer') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Customers Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('supplier/employee_commission') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Employee Commission Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('bank/allbank') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Bank Accounts Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('bank/topupreport') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Bank Accounts TopUp Report</span></a>
                                                </li>
                                                <li class="kt-menu__item">
                                                    <a  href="{{ url('profit_reconciliation/profit_reconciliation_report') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user-1"></i><span class="kt-menu__link-text">Profit Reconciliation Report</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                        @endif
                                            {{--                             <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel @if(begnWith(request()->url(),url('sms'))) {{'kt-menu__item--active'}} @else {{'kt-menu__item--rel'}} @endif"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">--}}
{{--                                        <a  href='{{ url('sms/sms_management') }}' class="kt-menu__link "><span class="kt-menu__link-text">SMS Management </span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}

{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                        <!-- end: Header Menu -->
                    </div>
                        @endif
                </div>
            </div>
            <!-- end:: Header -->
            <div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->

                    @yield('content')
                    <!--End::Row-->
                        <!--End::Dashboard 2-->	</div>
                    <!-- end:: Content -->
                </div></div>
            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item" id="kt_footer">
                <div class="kt-container ">
                    <div class="kt-footer__wrapper">
                        <div class="kt-footer__copyright">
                            2019&nbsp;&copy;&nbsp;<a href="http://brainiaccs.com" target="_blank" class="kt-link">Brainiac Creative Solutions (03032600069)</a>
                        </div>
                        {{--<div class="kt-footer__menu">--}}
                            {{--<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">About</a>--}}
                            {{--<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Team</a>--}}
                            {{--<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Contact</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <!-- end:: Footer -->
        </div>
    </div>
</div>
<!-- end:: Page -->
<!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
    <div class="kt-quick-panel__nav">
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
            </li>
        </ul>
    </div>
    <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-line-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been received
                            </div>
                            <div class="kt-notification__item-time">
                                2 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-box-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-chart2 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Application has been approved
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-image-file kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New file has been uploaded
                            </div>
                            <div class="kt-notification__item-time">
                                5 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-bar-chart kt-font-info"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New user feedback received
                            </div>
                            <div class="kt-notification__item-time">
                                8 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                System reboot has been successfully completed
                            </div>
                            <div class="kt-notification__item-time">
                                12 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-favourite kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been placed
                            </div>
                            <div class="kt-notification__item-time">
                                15 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item kt-notification__item--read">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-safe kt-font-primary"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Company meeting canceled
                            </div>
                            <div class="kt-notification__item-time">
                                19 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New report has been received
                            </div>
                            <div class="kt-notification__item-time">
                                23 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Finance report has been generated
                            </div>
                            <div class="kt-notification__item-time">
                                25 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-security kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer comment recieved
                            </div>
                            <div class="kt-notification__item-time">
                                2 days ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 days ago
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                <div class="kt-notification-v2">
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-bell kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                5 new user generated report
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-box kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                2 new items submited
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                by Grog John
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-psd kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                79 PSD files generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-supermarket kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                $2900 worth producucts sold
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Total 234 items
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-paper-plane-1 kt-font-success"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-information kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                Database server is down
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                10 mins ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-mail-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                System report has been generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                <form class="kt-form">
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Notifications:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--success kt-switch--sm">
                           <label>
                           <input type="checkbox" checked="checked" name="quick_panel_notifications_1">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Case Tracking:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--success kt-switch--sm">
                           <label>
                           <input type="checkbox"  name="quick_panel_notifications_2">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Support Portal:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--success kt-switch--sm">
                           <label>
                           <input type="checkbox" checked="checked" name="quick_panel_notifications_2">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Generate Reports:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--sm kt-switch--danger">
                           <label>
                           <input type="checkbox" checked="checked" name="quick_panel_notifications_3">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Report Export:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--sm kt-switch--danger">
                           <label>
                           <input type="checkbox"  name="quick_panel_notifications_3">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Allow Data Collection:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--sm kt-switch--danger">
                           <label>
                           <input type="checkbox" checked="checked" name="quick_panel_notifications_4">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Member singup:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--sm kt-switch--brand">
                           <label>
                           <input type="checkbox" checked="checked" name="quick_panel_notifications_5">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--sm kt-switch--brand">
                           <label>
                           <input type="checkbox"  name="quick_panel_notifications_5">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Enable Customer Portal:</label>
                        <div class="col-4 kt-align-right">
                           <span class="kt-switch kt-switch--sm kt-switch--brand">
                           <label>
                           <input type="checkbox" checked="checked" name="quick_panel_notifications_6">
                           <span></span>
                           </label>
                           </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Panel -->
<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->
<!-- begin::Sticky Toolbar -->
{{--<ul class="kt-sticky-toolbar" style="margin-top: 30px;">--}}
    {{--<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip"  title="Check out more demos" data-placement="right">--}}
        {{--<a href="#" class=""><i class="flaticon2-drop"></i></a>--}}
    {{--</li>--}}
    {{--<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">--}}
        {{--<a href="builder.html" ><i class="flaticon2-gear"></i></a>--}}
    {{--</li>--}}
    {{--<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">--}}
        {{--<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>--}}
    {{--</li>--}}
    {{--<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">--}}
        {{--<a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>--}}
    {{--</li>--}}
{{--</ul>--}}
<!-- end::Sticky Toolbar -->
<!-- begin::Demo Panel -->
<!-- end::Demo Panel -->
<!--Begin:: Chat-->
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    <span class="kt-chat__status">
                                 <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                 </span>
                                </div>
                            </div>
                            <div class="kt-chat__right">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Messaging
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-group"></i>
                                                    <span class="kt-nav__link-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                    <span class="kt-nav__link-text">Contacts</span>
                                                    <span class="kt-nav__link-badge">
                                          <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                          </span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                    <span class="kt-nav__link-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                    <span class="kt-nav__link-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                    <span class="kt-nav__link-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                                <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                    <i class="flaticon2-cross"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
                            <div class="kt-chat__messages kt-chat__messages--solid">
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                    <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
{{--                                    <img src="{{ url('assets/media/users/100_12.jpg') }}" alt="image">--}}
                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        How likely are you to recommend our company<br> to your friends and family?
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
{{--                                    <img src="{{ url('assets/media/users/300_21.jpg') }}" alt="image">--}}
                                    </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                    <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
{{--                                    <img src="{{ url('assets/media/users/100_12.jpg') }}" alt="image">--}}
                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
                                    <img src="{{ url('assets/media/users/300_21.jpg') }}" alt="image">
                                    </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                    <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
{{--                                    <img src="{{ url('assets/media/users/100_12.jpg') }}" alt="image">--}}
                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
{{--                                    <img src="{{ url('assets/media/users/300_21.jpg') }}" alt="image">--}}
                                    </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                    <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
{{--                                    <img src="{{ url('assets/media/users/100_12.jpg') }}" alt="image">--}}
{{--                                    <img src="{{ url('assets/media/users/100_12.jpg') }}" alt="image">--}}
                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
{{--                                    <img src="{{ url('assets/media/users/300_21.jpg') }}" alt="image">--}}
                                    </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea placeholder="Type here..." style="height: 50px"></textarea>
                            </div>
                            <div class="kt-chat__toolbar">
                                <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-link"></i></a>
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                </div>
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ENd:: Chat-->
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
</script>
<!-- end::Global Config -->
<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ url('assets/vendors/global/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/demo10/scripts.bundle.js') }}" type="text/javascript"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/ng-tags-input/3.2.0/ng-tags-input.min.js" type="text/javascript"></script>--}}
<!--end::Global Theme Bundle -->
<!--begin::Page Vendors(used by this page) -->
<script src="{{ url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
{{--<script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>--}}
{{--<script src="{{ url('assets/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>--}}
<script src="{{ url('bootstrap-tagsinput.js') }}" type="text/javascript"></script>
{{--<script src="{{ url('bootstrap-tagsinput-angular.js') }}" type="text/javascript"></script>--}}
<!--end::Page Vendors -->
@yield('scripts')
<!--begin::Page Scripts(used by this page) -->
<script>
    // $('.select2_for_datatable').select2();
    $('.c_l_o_s_e').datepicker()
        .on('changeDate', function(ev){
            $('.c_l_o_s_e').datepicker('hide');
        });
    $('.ana_date').datepicker()
        .on('changeDate', function(ev){
            $('.ana_date').datepicker('hide');
        });
    $('#daaa').datepicker({
        format: 'yyyy/mm/dd',
    });
    $("#kt_datetimepicker_1").datetimepicker({
        todayHighlight: 0,
        autoclose: !0,
        format: "yyyy/mm/dd hh:ii"
    })
</script>
<script src="{{ url('assets/js/demo10/pages/dashboard.js') }}" type="text/javascript"></script>
<!--end::Page Scripts -->
</body>
<!-- end::Body -->
<!-- Mirrored from keenthemes.com/metronic/preview/demo10/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2019 14:06:22 GMT -->
</html>