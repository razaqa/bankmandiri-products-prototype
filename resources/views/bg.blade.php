@extends('base')

@section('title', 'Bank Garansi')

@section('extra-meta')
@endsection

@section('extra-fonts')
@endsection

@section('prerender-js')
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/bg.css') }}" />
    <style>
        .headline-pict::before {
            background-image: url("{{ asset('img/bg_banner.jpg') }}");
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
                <h2>Bank Garansi</h2>
                <p></p>
            </div>
        </div>
    </section>

    <section class="mdr-article">
        <div class="container">
            <i>Insert Text Here</i>
        </div>
    </section>
@endsection

@section('extra-js')
@endsection
