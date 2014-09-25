@extends('layouts.default')

<!-- Specific stylesheets for this layout -->
@section('stylesheets')
    <link href="/css/home.css" rel="stylesheet">
@stop

<!--
    This section will add top level
    layout for the home page.
    A non-registered user will see this page
-->
@section('container-fluid')

    <div class="row header">
        <div class="col-md-4 col-md-offset-1 logo">

        </div>
        <div class="col-md-5 col-md-offset-2 signin">

        </div>
    </div>

    <div class="row menue">
        <div class="col-md-12">

        </div>
    </div>

    <div class="row main">
        <div class="col-md-6 signup">
            <p>Having read this I believed it was rather informative. I appreciate you taking
            the time and effort to put this information together. I once again find myself
            personally spending a significant amount of time both reading and
            posting comments. But so what, it was still</p>
        </div>
        <div class="col-md-6 slideshow">

            @include('include.create-user')
        </div>
    </div>

    <div class="row features">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature">
                <p>Having read this I believed it was rather informative. I appreciate you taking
                the time and effort to put this information together. I once again find myself
                personally spending a significant amount of time both reading and
                posting comments. But so what, it was still</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature">
                 <p>Having read this I believed it was rather informative. I appreciate you taking
                the time and effort to put this information together. I once again find myself
                personally spending a significant amount of time both reading and
                posting comments. But so what, it was still</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature">
                  <p>Having read this I believed it was rather informative. I appreciate you taking
                the time and effort to put this information together. I once again find myself
                personally spending a significant amount of time both reading and
                posting comments. But so what, it was still</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature">
                  <p>Having read this I believed it was rather informative. I appreciate you taking
                the time and effort to put this information together. I once again find myself
                personally spending a significant amount of time both reading and
                posting comments. But so what, it was still</p>
            </div>
        </div>
    </div>

    <div class="row links">

    </div>

    <div class="row copyright">

    </div>
@stop
