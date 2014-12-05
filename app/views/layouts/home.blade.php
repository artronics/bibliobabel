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

    @yield('header')

    <div class="row">
        <div class="small-12 medium-8 large-6 large-push-3 columns">
            <section class="posts">
                <article class="post" id="post_1">
                    @yield('post')
                </article>
            </section>
        </div>

        <div class="large-3 medium-4 large-push-3 hide-for-small-down columns">
            <h1>side right</h1>
            <p>my Air Service was formed in 1930, and became an independent air force in 1937. It had little involvement in the Second World War. From 1948 to 1973 it took part, with generally mediocre results, in four separate wars with Israel, as well as the quasi-War of Attrition. It also supported the Egyptian Army during the North Yemen Civil </p>
        </div>
        <div class="large-3 large-pull-9 hide-for-medium-down columns">
            <h1>side left</h1>
            <a href="#" class="button split">Split Button <span data-dropdown="drop"></span></a><br>
            <ul id="drop" class="f-dropdown" data-dropdown-content>
              <li><a href="#">This is a link</a></li>
              <li><a href="#">This is another</a></li>
              <li><a href="#">Yet another</a></li>
            </ul>
        </div>
    </div>

@stop