@extends('layout.default')

<!-- Specific stylesheets for this layout -->
@section('stylesheets')
    <link href="/css/home.css" rel="stylesheet">
@stop


@section('test-content')
    {{Form::open(array('role' => 'form',
    ))}}
        {{Form::label('First Name')}}
        {{FORM::input('firstname','hh')}}
    {{Form::close()}}


@stop
