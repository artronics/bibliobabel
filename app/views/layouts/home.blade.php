@extends('layouts.base')

@section('body')

    <div class="container">

        <header id="home-header">
            <div class="logo" id="header-logo">
                <span id="logo-img-span"></span>
                <img id="main-logo-img" src="http://www.placehold.it/250x50 alt="Bibliobabel Logo"/>
            </div>
            <nav id="main-nav">
                <div id="header-main-table">
                    <div id="header-main-row">
                        <div class="header-main" id="header-home">
                            <a href="#"><img class="img-icons" src="/img/icons/home.svg"></a>
                        </div>
                        <div class="header-main" id="header-library">
                            <a href="#"><img class="img-icons" src="/img/icons/library.svg"></a>
                        </div>
                        <div class="header-main" id="header-messages">
                            <a class="header-icon-a" href="#"><img class="img-icons" src="/img/icons/message.svg"><span class="counter-icon">5</span></a>
                        </div>
                        <div class="header-main" id="header-notifications">
                            <a class="header-icon-a" href="#"><img class="img-icons" src="/img/icons/notification.svg"><span class="counter-icon">99</span></a>
                        </div>
                    </div>
                </div>
            </nav>
            <nav id="user">
                <div id="user-table">
                    <div id="user-row">
                        <div class="user-header" id="user-name">
                            <a href="#"><h2 id="header-user-heading">{{Auth::user()->name}}</h2></a>
                        </div>
                        <div class="user-header" id="user-caret">
                            <a href="#"><img class="img-icons" src="/img/icons/caret.svg" alt=""/></a>
                        </div>
                        <div class="user-header" id="user-setting">
                            <a href="#"><img class="img-icons"  src="/img/icons/setting.svg" alt=""/></a>
                        </div>
                    </div>
                </div>
            </nav>
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