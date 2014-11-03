@extends('layouts.default')


@section('container-fluid')
        <!-- This yield is for test purpose. extend it to whatever file you want -->
        <div class="row login">
            <div class="col-md-6 col-md-offset-3">
                @include('include.login-user')
            </div>
        </div>



@stop
