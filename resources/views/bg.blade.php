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
            <div class="mdr-content animated fadeInUp delayp3">
                <p>Untuk meningkatkan reputasi Anda di mata counter party, kami memfasilitasi jaminan transaksi bisnis berupa Bank Garansi dan Standby LC yang dapat digunakan untuk transaksi lokal maupun internasional dengan efisiensi biaya modal karena tidak perlu menyediakan jaminan tunai ke counter party.</p>
                <p>Format jaminan yang kami berikan dapat disesuaikan dengan kebutuhan dan beberapa jenis yang kami sediakan antara lain: Jaminan Penawaran, Jaminan Uang Muka, Jaminan Pelaksanaan, dan Jaminan Pemeliharaan.</p>
                
                <h4>Syarat Penerbitan Bank Garansi :</h4>
                <ul>
                    <li>Sudah memiliki rekening Bank Mandiri</li>
                    <li>Mengisi & Menandatangani Aplikasi Penerbitan BG</li>
                    <li>Menyerahkan Underlying Dokumen</li>
                    <li>Menyediakan Cover Jaminan Penerbitan</li>
                    <li>Menggunakan Format Standar/Customized Bank Garansi</li>
                </ul>

                <h4>Hal-Hal yang Tidak Boleh dalam Penerbitan BG :</h4>
                <ul>
                    <li>Tanggal Terbit Tidak Sesuai dengan Tanggal Penerbitan </li>
                    <li>Bersifat Revocable</li>
                    <li>Bersifat Conditional</li>
                    <li>Tidak Mencantumkan Tanggal Berakhirnya BG</li>
                    <li>Klaim yang dilakukan dari Beneficiary, Tidak Mencantumkan Pernyataan Wanprestasi yang dilakukan oleh Applicant</li>
                </ul>

                <h4>Cover Penerbitan Bank Garansi :</h4>
                <ul>
                    <li>Setoran Tunai 100% </li>
                    <li>Fasilitas : 
                        <ol type="a">
                            <li>Blokir Rekening Giro / Jaminan</li>
                            <li>Blokir Deposito</li>
                            <li>Fixed Assets (Tanah, Bangunan)</li>
                        </ol>
                    </li>
                    <li>Asuransi</li>
                    <li>Counter Guarantee</li>
                </ul>

                <h4>Tarif Penerbitan Bank Garansi :</h4>
                <ul>
                    <li>Asuransi :
                        <img src="{{ asset('img/rumus_bg.png') }}">
                    </li>
                    <li>Selain Asuransi : 0,25% x total nilai BG x pq (per quarter) dengan minimal Rp 700.000</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="overview" id="overview">
        <div class="container">
            <hr class="topic-hat">
            <div class="topic">
                <h2>Info Lanjut</h2>
                <p class="quotes"><i>"tak kenal maka tak sayang"</i></p>
                <p>Kalau gitu isi formnya ya biar kenalan...</p>
                <div class="center">
                    <a href="https://forms.gle/y4inQ4XcPyVfDwPB7">
                        <button type="submit" class="btn btn-primary submit-btn">Isi Form</button>
                    </a>
                </div>
                <p>Untuk wholesale kok coba-coba, ya <b>Bank Mandiri</b> aja!</p>
            </div>
        </div>
    </section>
@endsection

@section('extra-js')
@endsection
