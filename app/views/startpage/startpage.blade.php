@extends('layouts.startpage')

@section('header')

    @include('startpage.partials.header')

@stop

@section('login-form')

    @include('include.forms.login')

@stop

@section('signup-form')

    @include('include.forms.signup')

@stop