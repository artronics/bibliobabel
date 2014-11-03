@extends('layouts.base')

@section('body')

    <div class="container">

        <header id="home-header">
            <div class="logo" id="header-logo">
                <h2>LOGO</h2>
            </div>
            <nav id="main-nav">
                <ul class="header-icons" id="link-icons">
                    <li class="header-icon-list"><a href="#"><img class="img-icons" src="/img/icons/home.svg"></a></li>
                    <li class="header-icon-list"><a href="#"><img class="img-icons" src="/img/icons/library.svg"></a></li>
                </ul>
                <ul class="header-icons" id="popup-icons">
                    <li class="header-icon-list"><a href="#"><img class="img-icons" src="/img/icons/message.svg"></a></li>
                    <li class="header-icon-list"><a href="#"><img class="img-icons" src="/img/icons/notification.svg"></a></li>
                </ul>
            </nav>
            <div  id="user">
                <h2>USER</h2>
            </div>
        </header>

        <section id="main-section">
            <aside class="links-aside" id="links-section">
                <h2>LINKS</h2>
                <div class="links">
                    <h2>LINKS2</h2>
                </div>
                <div class="links">
                    <h2>LINKS2</h2>
                </div>
            </aside>

            <section id="posts-section">
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
                </article>
            </section>

            <aside class="links-aside" id="subnav-section">
                    <h2>SUB NAV</h2>
                    <nav class="subnav">
                        <h2>SUB NAV1</h2>
                    </nav>
                    <nav class="subnav">
                        <h2>SUB NAV1</h2>
                    </nav>
            </aside>
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