@extends('layout.default')

<!-- Specific stylesheets for this layout -->
@section('stylesheets')
    <link href="/css/home.css" rel="stylesheet">
@stop


@section('test-content')
    {{BootstrapForm::openInline()}}

    {{BootstrapForm::text('username')}}
    {{BootstrapForm::text('password')}}



@stop
