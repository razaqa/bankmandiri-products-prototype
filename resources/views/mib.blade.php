@extends('base')

@section('title', 'Mandiri Internet Bisnis (MIB)')

@section('extra-meta')
@endsection

@section('extra-fonts')
@endsection

@section('prerender-js')
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/mib.css') }}" />
    <style>
        .headline-pict::before {
            background-image: url("{{ asset('img/mib_banner.jpg') }}");
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
                <h2>Mandiri Internet Bisnis (MIB)</h2>
                <p></p>
            </div>
        </div>
    </section>

    <section class="mdr-article">
        <div class="container">
            <div class="mdr-content animated fadeInUp delayp3">

                <p>Mandiri Internet Bisnis (MIB) adalah layanan e-banking untuk melakukan transaksi finansial dan non finansial dengan aplikasi internet banking yang diperuntukkan bagi Nasabah bisnis dari segmen perorangan dan perusahaan khususnya kategori perusahaan kecil dan menengah.Fitur yang terdapat di dalam layanan mandiri internet bisnis antara lain informasi umum rekening, transfer, pembayaran, pembelian, admiminstrasi, infomasi bisnis dan aktivitas bisnis.</p>
                <p>Keuntungan Menggunakan Layanan mandiri Internet bisnis :</p>

                <ul>
                    <li style="list-style-type:disc;">Memudahkan Nasabah untuk mengatur transaksi keuangan perusahaan.</li>
                    <li style="list-style-type:disc;">Dapat digunakan Nasabah dimana saja dan kapan saja karena diakses menggunakan layanan internet.</li>
                    <li style="list-style-type:disc;">Hemat dan menguntungkan, karena Nasabah tidak dikenakan biaya bulanan dan limit harian setiap fitur transaksi yang dapat disesuaikan dengan kebutuhan usaha.&nbsp;</li>
                    <li style="list-style-type:disc;">Aman, karena aplikasi <strong>mandiri </strong>internet bisnis dilengkapi dengan sistem keaman SSL. Untuk masuk ke dalam layanan mandiri internet bisnis, Nasabah diminta untuk mengisi Company ID, User ID dan password. Untuk bertransaksi Nasabah diminta menggunakan token.</li>
                </ul>

                <h4>Registrasi Mandiri Internet Bisnis</h4>
                <ol type="1">
                    <li>
                        <i>Cara Mendapatkan fasilitas mandiri internet bisnis</i>
                        <ul>
                            <li style="list-style-type:disc;">Nasabah dapat melakukan pendaftaran <strong>mandiri</strong> internet bisnis di kantor cabang Bank Mandiri.</li>
                            <li style="list-style-type:disc;">Nasabah diwajibkan melampirkan surat-surat sebagai berikut :</li>
                            <li style="list-style-type:disc;">KTP, Buku Tabungan (Nasabah perorangan)</li>
                            <li style="list-style-type:disc;">KTP, Buku Tabungan, Surat Kepemilikan Perusahaan (Nasabah perusahaan)</li>
                            <li style="list-style-type:disc;">Nasabah diwajibkan mengisi form registrasi aplikasi <strong>mandiri</strong> internet bisnis.</li>
                            <li style="list-style-type:disc;">Setelah selesai mendaftar, Nasabah akan diberikan <em>starter pack</em> <strong>mandiri</strong> internet bisnis yang berisi buku petunjuk penggunaan dan token yang dapat diambil setelah 14 hari kerja (tergantung lokasi) di kantor cabang dimana Nasabah melakukan pendaftaran layanan <strong>mandiri</strong> internet bisnis.</li>
                            <li style="list-style-type:disc;">Nasabah juga akan diberikan Company ID, user ID dan password <em>first time login</em> yang akan dikirimkan ke email Nasabah.</li>
                            <li style="list-style-type:disc;">Untuk melakukan transaksi, Nasabah dapat mengakses alamat website <a href="https://mib.bankmandiri.co.id/sme">https://mib.bankmandiri.co.id/sme</a> yang kemudian dilanjutkan dengan mengisi field Company ID, User dan password.</li>
                        </ul>
                    </li>
                </ol>

                <h4>Syarat dan Ketentuan Layanan</h4>
                <ol type="1">
                    <li>
                        <i>Syarat Pendaftaran MIB</i>

                        <ul>
                            <li style="list-style-type:disc; ">Nasabah calon pengguna layanan MIB telah :
                            <ul>
                                <li style="list-style-type:decimal;">Memiliki rekening Mandiri Giro / Mandiri Tabungan Bisnis ;</li>
                                <li style="list-style-type:decimal;">Mengisi dan menandatangani formulir Aplikasi MIB pada Cabang pengelola rekening dan menyerahkan copy bukti kepemilikan rekening Mandiri Giro / Mandiri Tabungan Bisnis dan menunjukkan aslinya</li>
                            </ul>
                            </li>
                            <li style="list-style-type:disc;">Apabila dalam layanan ini akan diikutsertakan rekening pihak lain, maka Nasabah juga wajib menyerahkan asli surat kuasa dari pemilik rekening. Apabila rekening atas nama pihak lain yang digunakan untuk keperluan transaksi akan dibatalkan penggunaannya, maka Nasabah atau pemilik rekening wajib untuk memberitahukannya kepada Bank disertai dengan asli pencabutan dari pemilik rekening.</li>
                            <li style="list-style-type:disc;">Membaca, memahami, menandatangani Syarat dan Ketentuan MIB.</li>
                        </ul>
                    </li>
                    <br>

                    <li>
                        <i>Ketentuan Umum</i>
                        
                        <ul>
                            <li style="list-style-type:disc;">Nasabah tunduk pada ketentuan mengenai pengoperasian dan penggunaan MIB sebagaimana tercantum dalam Syarat dan Ketentuan ini.</li>
                            <li style="list-style-type:disc;">Sebelum menggunakan layanan MIB, Nasabah harus mengambil starter pack di Cabang. Dalam hal Nasabah tidak mengambil starter pack tersebut dalam jangka waktu 3 bulan sejak pendaftaran dilakukan, maka pendaftaran menjadi batal dengan sendirinya.</li>
                            <li style="list-style-type:disc;">Nasabah dapat menggunakan layanan MIB untuk memperoleh informasi dan atau melakukan transaksi perbankan yang telah ditentukan.</li>
                            <li style="list-style-type:disc;">Nasabah wajib mengoperasikan sendiri Layanan MIB dan tidak diperkenankan untuk menyerahkan pengoperasiannya kepada pihak lain yang tidak berhak, dan bertanggung jawab penuh terhadap penggunaan Company ID, User ID, Password dan Token.</li>
                            <li style="list-style-type:disc;">Sistem aplikasi MIB adalah milik Bank dan Bank berhak untuk mengubah atau memodifikasi sistem/<em>software </em>sesuai dengan kebutuhan.</li>
                            <li style="list-style-type:disc;">Nasabah wajib merahasiakan informasi/data di dalam MIB, teknis, sistem, software maupun Buku Pedoman MIB tersebut. Kewajiban tersebut tetap berlaku setelah perjanjian penggunaan Layanan MIB ini berakhir.</li>
                            <li style="list-style-type:disc;">Nasabah wajib mengajukan permohonan tertulis kepada Bank selambat-lambatnya 7 (tujuh) Hari Kerja sebelum tanggal efektif yang dikehendaki, atas setiap perubahan yang berkaitan dengan penggunaan Layanan MIB, termasuk tetapi tidak terbatas pada perubahan User ID, perubahan atau penambahan rekening-rekening yang akan digunakan untuk transaksi melalui Layanan MIB, dan perubahan limit transaksi serta perubahan alamat. Segala konsekuensi yang timbul sebagai akibat dari keterlambatan pemberitahuan tersebut menjadi tanggung jawab Nasabah sepenuhnya.</li>
                            <li style="list-style-type:disc;">Bank berhak untuk tidak melaksanakan perintah dari Nasabah apabila :
                            <ul>
                                <li style="list-style-type:decimal;">Saldo di rekening Nasabah tidak mencukupi.</li>
                                <li style="list-style-type:decimal;">Terdapat indikasi adanya tindak pidana dan atau perselisihan antara Nasabah dengan pemilik rekening (jika terdapat keterkaitan transaksi dengan pemilik rekening lainnya) dalam transaksi tersebut.</li>
                            </ul>
                            </li>
                            <li style="list-style-type:disc;">Segala konsekuensi yang timbul sebagai akibat penyalahgunaan Layanan MIB merupakan tanggungjawab Nasabah sepenuhnya dan Nasabah dengan ini membebaskan Bank dari segala tuntutan yang mungkin timbul dalam bentuk apapun dan dari pihak manapun.</li>
                            <li style="list-style-type:disc;">Nasabah dengan ini membebaskan Bank dari tanggung jawab berkaitan dengan kegagalan atau penundaan pelaksanaan perintah Nasabah, biaya-biaya yang timbul baik langsung maupun tidak langsung, hilangnya keuntungan Nasabah maupun kewajiban lainnya berkaitan dengan layanan MIB ini yang disebabkan :
                            <ul>
                                <li style="list-style-type:decimal; ">Force majeure sebagaimana diatur dalam butir 7.</li>
                                <li style="list-style-type:decimal; ">Kegagalan sistem aplikasi, sistem komunikasi/transmisi dan atau kegagalan peralatan elektronik yang terkait dengan layanan MIB.</li>
                                <li style="list-style-type:decimal; ">Penyalahgunaan MIB oleh Nasabah.</li>
                            </ul>
                            </li>
                            <li style="list-style-type:disc;">Dalam hal terjadi gangguan terhadap sistem MIB yang mengakibatkan sistem tersebut tidak berfungsi sebagaimana mestinya, maka Nasabah dapat menggunakan saluran distribusi lainnya yang dimiliki oleh Bank.</li>
                            <li style="list-style-type:disc;">Bank berhak menghentikan Layanan MIB untuk sementara waktu dalam rangka pembaharuan, pemeliharaan atau untuk tujuan lainnya.</li>
                        </ul>
                    </li>
                    <br>

                    <li>
                        <i>Ketentuan Khusus Pengguna Transaksi</i>

                        <ul>
                            <li style="list-style-type:disc;">Dalam pengoperasian Layanan MIB, Bank untuk pertama kali akan memberikan Password kepada Nasabah dan Nasabah wajib mengganti Password tersebut dengan Password baru yang hanya diketahui oleh Nasabah.</li>
                        </ul>
                        <p>Password tersebut wajib dijaga kerahasiaannya. Penggunaan Password dan User ID tersebut sepenuhnya menjadi tanggung jawab Nasabah.</p>
                        <ul>
                            <li style="list-style-type:disc;">Pejabat/petugas yang ditunjuk oleh Nasabah dalam mengoperasikan MIB dapat terdiri dari :
                            <ul>
                                <li style="list-style-type:decimal;">Level Pelaksana (Maker)</li>
                                <li style="list-style-type:decimal;">Level Supervisor / Approval (Approver)</li>
                            </ul>
                            </li>
                        </ul>
                        <p>Nasabah bertanggung jawab sepenuhnya terhadap penunjukan tersebut dan perubahannya dari waktu ke waktu.</p>
                        <ul>
                            <li style="list-style-type:disc;">Untuk melaksanakan transaksi melalui Layanan MIB, approver akan dilengkapi dengan Token yang telah diregistrasi.</li>
                            <li style="list-style-type:disc;">Perintah/instruksi pembayaran dan atau pemindahan dana secara elektronik yang dilakukan oleh Nasabah, merupakan bukti transaksi yang sah.</li>
                            <li style="list-style-type:disc;">Perintah/Instruksi pembayaran yang ditujukan kepada rekening penerima di bank lain/kliring harus disampaikan Nasabah sebelum jam kliring yang ditetapkan.</li>
                            <li style="list-style-type:disc;">Perintah/instruksi pembayaran yang diterima setelah jam kliring akan dilaksanakan pada hari kerja berikutnya.</li>
                            <li style="list-style-type:disc;">Perintah/instruksi pembayaran gaji harus sudah disampaikan Nasabah melalui Layanan MIB selambat-lambatnya pukul 13.00 setiap hari kerja. Nasabah wajib untuk menyediakan dana pada rekening yang akan digunakan sebagai sumber dana pembayaran gaji dengan nominal sesuai dengan total gaji yang akan dibayarkan.</li>
                            <li style="list-style-type:disc;">Perintah/instruksi pembayaran dan atau pemindahan dana elektronik dalam mata uang yang berbeda dengan mata uang dalam rekening Nasabah, maka kurs yang digunakan adalah kurs berlaku di Bank saat terjadinya transaksi dan Nasabah dengan ini membebaskan Bank dari tanggung jawab dan kerugian sebagai akibat perubahan kurs valuta dari transaksi-transaksi yang masih dalam proses transfer.</li>
                        </ul>
                    </li>
                    <br>

                    <li>
                        <i>User ID dan Password MIB</i>

                        <ul>
                            <li style="list-style-type:disc; ">User ID dan Password MIB merupakan identitas atau kode yang bersifat rahasia yang kewenangan penggunaannya ada pada Nasabah. Segala konsekuensi yang timbul sebagai akibat penyalahgunaan User ID dan Password merupakan tanggung jawab Nasabah sepenuhnya dan Nasabah dengan ini membebaskan Bank dari segala tuntutan yang mungkin timbul dalam bentuk apapun dan dari pihak manapun.</li>
                            <li style="list-style-type:disc; ">Nasabah wajib mengamankan User ID dan Password yang dimilikinya. Dalam kaitan tersebut Nasabah tidak diperkenankan untuk :
                            <ul>
                                <li style="list-style-type:decimal; ">memberitahukan User ID dan Password kepada orang lain</li>
                                <li style="list-style-type:decimal; ">menyimpan User ID dan Password pada sarana penyimpanan yang memungkinkan diketahui orang lain</li>
                            </ul>
                            </li>
                        </ul>
                        <p>Nasabah diwajibkan pula untuk mengganti Password secara berkala.</p>
                        <ul>
                            <li style="list-style-type:disc;">Penggunaan User ID dan Password mempunyai kekuatan hukum yang sama dengan perintah tertulis yang ditandatangani oleh Nasabah.</li>
                        </ul>
                    </li>
                    <br>

                    <li>
                        <i>Penghentian Akses Layanan MIB</i>
                
                        <ul>
                            <li style="list-style-type:disc; ">Layanan MIB akan dihentikan oleh Bank apabila :
                            <ul>
                                <li style="list-style-type:decimal;">Terdapat permintaan tertulis dari Nasabah.</li>
                                <li style="list-style-type:decimal;">Diharuskan oleh peraturan perundang-undangan yang berlaku dan atau putusan pengadilan.</li>
                                <li style="list-style-type:decimal;">Pengguna menutup seluruh rekening yang terkait dengan layanan MIB.</li>
                                <li style="list-style-type:decimal;">Nasabah salah memasukkan Password sebanyak 3 (tiga) kali berturut-turut.</li>
                            </ul>
                            </li>
                            <li style="list-style-type:disc;">Untuk mengaktifkan kembali layanan tersebut, Nasabah harus menghubungi Call Center <strong>1500150</strong> atau <strong>14000</strong> atau menghubungi Cabang yang melakukan pendaftaran MIB untuk pertama kali.</li>
                        </ul>
                    </li>
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
