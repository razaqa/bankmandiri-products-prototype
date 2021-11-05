@extends('base')

@section('title', 'Mandiri Cash Management (MCM)')

@section('extra-meta')
@endsection

@section('extra-fonts')
@endsection

@section('prerender-js')
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/mcm.css') }}" />
    <style>
        .headline-pict::before {
            background-image: url("{{ asset('img/mcm_banner.jpg') }}");
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
                <h2>Mandiri Cash Management (MCM)</h2>
                <p></p>
            </div>
        </div>
    </section>

    <section class="mdr-article">
        <div class="container">
            <div class="mdr-content animated fadeInUp delayp3">
                <p>Mandiri Cash Management (MCM) merupakan Internet banking untuk perusahaan yang dapat diakses 24 jam dan bersifat Web Based (dimana saja bisa dilakukan transaksi melalui MCM), fleksibel dalam mengatur limit & flow transaksi serta mudah digunakan.</p>

                <h4>Feature :</h4>

                <ul>
                    <li style="list-style-type:decimal;">
                        <i>Account Information</i>
                
                        <ul>
                            <li>Balance Inquiry : untuk melihat posisi saldo pada periode tertentu</li>
                            <li>Transaction Inquiry : untuk melakukan monitoring mutasi rekening berdasarkan pencatatan aktivitas transaksi</li>
                            <li>Account Statement : untuk melihat dan mengunduh rekening koran dari rekening yang terdaftar di MCM</li>
                            <li>Advice Printing : untuk melakukan pencetakan dan pengiriman advise sebagai notifikasi transaksi tertulis bagi pihak ketiga</li>
                        </ul>
                    </li>
                    <br>

                    <li style="list-style-type:decimal;">
                        <i>Payment Management</i>
                        
                        <ul>
                            <li>Inhouse Transfer : untuk melakukan transfer dana antar rekening Bank Mandiri</li>
                            <li>Domestic Transfer : untuk melakukan aktivitas transfer dana rupiah antar bank di Indonesia baik melalui jalur SKN, RTGS, atau online transfer</li>
                            <li>International Payment : untuk melakukan aktivitas transfer dana valuta asing baik antar domestic bank maupun</li>
                            <li>Payroll : untuk pembayaran payroll/gaji baik dengan tujuan antar rekening Mandiri atau ke rekening bank lain</li>
                        </ul>
                    </li>
                    <br>

                    <li style="list-style-type:decimal;">
                        <i>Receivables Management</i>

                        <p>Auto Debit untuk melakukan pendebetan terhadap rekening yang telah didaftarkan di Bank Mandiri dengan disertai Surat Kuasa Pemilik Rekening</p>
                    </li>

                    <li style="list-style-type:decimal;">
                        <i>Liquidity Management</i>

                        <ul>
                            <li>Cash Pooling : Perpindahan dana secara otomatis ke main account berdasarkan maximum retained amount pada sub account</li>
                            <li>Cash Distribution : Perpindahan dana secara otomatis dari main account ke sub account berdasarkan nominal yang ditentukan</li>
                            <li>Range Balance : Perpindahan dana secara otomatis dari main account ke sub account berdasarkan target balance sub account</li>
                        </ul>
                    </li>
                    <br>

                    <li style="list-style-type:decimal;">
                        <i>Transaction type : Single & Bulk</i>
                    </li>
                    <br>

                    <li style="list-style-type:decimal;">
                        <i>Waktu Transaksi</i>

                        <ul>
                            <li>Immediate : transaksi yang dapat dijalankan secara langsung pada saat proses eksekusi berhasil</li>
                            <li>Standing Instruction : transaksi yang dapat dijalankan sesuai dengan tanggal yang ditentukan oleh nasabah</li>
                            <li>Reccuring : transaksi yang dapat dijalankan secara periodic yang dapat ditentukan oleh nasabah, misalnya daily, weekly, yearly</li>
                        </ul>
                    </li>
                </ul>

                <h4>Benefit :</h4>

                <ol type="1">
                    <li>Fleksibilitas dan efisiensi dalam hal waktu. Proses transaksi perbankan dilakukan secara realtime online</li>
                    <li>Transaction security : proses melakukan dan mengotorisasi transaksi bersifat hierarkis</li>
                    <li>Penyimpanan data elektronik, yang memfasilitasi pemantauan dan pengarsipan data transaksi</li>
                </ol>

                <h4>Syarat & persyaratan :</h4>

                <ol type="1">
                    <li>Formulir Aplikasi diisi dan ditandatangani sesuai kewenangan perusahaan</li>
                    <li>Melengkapi dokumen sesuai Syarat dan Ketentuan dalam Form Aplikasi</li>
                    <li>Formulir pembukaan rekening Giro</li>
                    <li>Surat kuasa pihak ke 3 (jika mendaftarkan diluar rekening perusahaan)</li>
                </ol>
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
