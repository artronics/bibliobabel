@extends('layouts.base')


@section('stylesheets')
<link rel="stylesheet" href="/assets/stylesheets/home.css" />
<link rel="stylesheet" href="/assets/fonts/css/font-awesome.css" />
@stop

@section('scripts')
<script src="/assets/bower_components/modernizr/modernizr.js"></script>
@stop

@section('footer_scripts')
<script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/assets/bower_components/foundation/js/foundation.js"></script>
<script src="/assets/bower_components/foundation/js/foundation/foundation.topbar.js"></script>
<script src="/assets/bower_components/foundation/js/foundation/foundation.dropdown.js"></script>
<script src="/assets/js/app.js"></script>
@stop

@section('body')
    @include('include.header')

    <div class="row">
        <div class="small-12 medium-8 large-9 columns">
           @yield('main')
        </div>

        <div class="large-3 medium-4 hide-for-small-down columns">
           @yield('side')
        </div>
    </div>

@stop