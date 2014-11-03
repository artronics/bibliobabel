@extends('layouts.base')

@section('body')

    <div class="container">

        <header class="header" id="header">
            <div class="logo">
                <h2>LOGO</h2>
            </div>
            <nav class="main-nav" id="main-nav">
                <ul id="icons">
                    <li><a href="#"><img src="/img/icons/home.svg"></a></li>
                </ul>
            </nav>
            <div class="user" id="user">
                <h2>USER</h2>
            </div>
        </header>

        <section id="main-section">
            <aside class="aside-links" id="links-section">
                <h2>LINKS</h2>
                <div class="links">
                    <h2>LINKS2</h2>
                </div>
                <div class="links">
                    <h2>LINKS2</h2>
                </div>
            </aside>

            <section class="posts-section" id="posts-section">
                <h2>POSTS</h2>
                <article class="posts">
                    <h2>POST-1</h2>
                </article>
                <article class="posts">
                    <h2>POST-2</h2>
                </article>
                <article class="posts">
                    <h2>POST-3</h2>
                </article>
                <article class="posts">
                    <h2>POST-1</h2>
                </article>
                <article class="posts">
                    <h2>POST-2</h2>
                </article>
                <article class="posts">
                    <h2>POST-3</h2>
            </section>

            <div class="subnav-section">
                    <h2>SUB NAV</h2>
                    <div class="subnav">
                        <h2>SUB NAV1</h2>
                    </div>
                    <div class="subnav">
                        <h2>SUB NAV1</h2>
                    </div>
            </div>
        </section>
    </div>

    {{--<div class="container">--}}
        {{--<div class="header">--}}
            {{--@include('include.home.header')--}}

        {{--</div>--}}

        {{--<div class="nav">--}}
            {{--@include('include.home.nav')--}}
        {{--</div>--}}

        {{--<div class="left-sidebar">--}}
            {{--@include('include.home.left-sidebar')--}}
        {{--</div>--}}

        {{--<div class="main">--}}
            {{--@include('include.home.main')--}}
            {{--@include('include.home.main')--}}
            {{--@include('include.home.main')--}}

        {{--</div>--}}
    {{--</div>--}}

@stop