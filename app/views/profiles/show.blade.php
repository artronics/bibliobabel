@extends('layouts.master')

@section('body')
    <h2>Profile</h2>
    <h3>Profile Picture:</h3>
    <p>{{$profile->image}}</p>
    <h3>Name:</h3>
{{--    <p>{{dd($profile->user()->get()->name)}}</p>--}}
    <h3>Username:</h3>
    <h3>Location:</h3>
    <h3>Facebook Account:</h3>
    <h3>Twitter Account:</h3>
    <h3>About:</h3>
    <p>{{$profile->about}}</p>
@stop