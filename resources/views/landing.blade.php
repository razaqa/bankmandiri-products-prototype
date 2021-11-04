@extends('base')

@section('title', 'Terdepan, Terpercaya, Tumbuh Bersama Anda')

@section('extra-meta')
@endsection

@section('extra-fonts')
@endsection

@section('prerender-js')
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
    <style>
        .headline-pict::before {
            background-image: url("{{ asset('img/banner.jpg') }}");
        }
    </style>
@endsection

@section('content')
    <section class="headline" id="headline">
        <div class="headline-pict">
            <div class="headline-inside">
                <div class="text-center headline-texts"></div>
            </div>
        </div>
    </section>

    <section class="overview" id="overview">
        <div class="container">
            <hr class="topic-hat">
            <div class="topic">
                <h2>products</h2>
                <p></p>
            </div>
        </div>
    </section>

    <section class="mx-4 services" id="services">
        <div class="container">
            <div class="cards">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="/bg">
                            <img class="img-card" src="{{ asset('img/bg_banner.jpg') }}">
                            <p class="img-desc">Bank Garansi</p>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="/mcm">
                            <img class="img-card" src="{{ asset('img/mcm_banner.jpg') }}">
                            <p class="img-desc">Mandiri Cash Management (MCM)</p>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="/mib">
                            <img class="img-card" src="{{ asset('img/mib_banner.jpg') }}">
                            <p class="img-desc">Mandiri Internet Bisnis (MIB)</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('extra-js')
@endsection
