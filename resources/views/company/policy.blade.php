<!-- ini untuk dynamic css -->
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    
@stop

@include('layout.header')
@include('layout.navigation')


<div class="container tos-page">
	<div class="content-container">
        <h3>Syarat dan Ketentuan</h3>
        <hr>
        <p>Selamat datang di pergiyuk!</p>
        <p>Halaman ini berisi seluruh syarat dan ketentuan bagi para pengguna layanan pergiyuk!. Dengan mengakses pergiyuk!, Pengguna dianggap telah membaca dan  setuju untuk mengikuti syarat dan ketentuan yang terdapat dihalaman ini. Syarat dan ketentuan diantara lainnya: </p>
        <p><b>Informasi Umum</b></p>
        	<ul>
            	<li>pergiyuk! adalah sarana bagi para wisatawan dan pengguna untuk berbagi informasi wisata kepada pengguna lainnya.</li>
            	<li>pergiyuk! beralamat situs http://pergiyuk.com.</li>
                <li>pergiyuk! adalah sebagai pemberi sarana, sehingga kami tidak memberikan jaminan dan tanggungjawab apapun untuk konten atau komentar yang ditulis oleh Pengguna.</li>
                <li>pergiyuk! berwenang untuk mengubah atau menghapus konten member atau komentar pengguna  yang berisi isu SARA, pornografi, promosi illegal, atau informasi yang tidak berhubungan dengan topik utama pergiyuk! yaitu wisata.</li>
            	<li>pergiyuk! berwenang untuk menghapus member yang melanggar syarat dan ketentuan situs pergiyuk!.</li>
            	<li>Syarat dan ketentuan ini berlaku mutlak dan dapat ubah sewaktu-waktu tanpa pemberitahuan terlebih dahulu.</li>
            </ul>
        
        
        <p><b>Pengguna</b></p>
        	<ul>
            	<li>Pengguna adalah pengunjung dan member.</li>
            	<li>Pengunjung adalah semua orang yang mengakses situs pergiyuk!.</li>
                <li>Member adalah semua orang yang mendaftar diri dan memiliki akun di pergiyuk!.</li>
                <li>Pengunjung wajib mengisi data pribadi secara lengkap dan jujur saat pendaftaran member.</li>
            	<li>Member wajib mengisi data pribadi secara lengkap dan jujur di halaman profil.</li>
            	<li>Member bertanggung jawab atas keamanan dari akun termasuk penggunaan e-mail dan password.</li>
                <li>Pengguna tidak diperbolehkan menggunakan pergiyuk! untuk melanggar peraturan yang ditetapkan oleh hukum di Indonesia maupun di negara lainnya.</li>
                <li>Pengguna dilarang keras menyampaikan konten atau komentar yang palsu, menyesatkan, memfitnah, atau mencemarkan nama baik, mengandung atau bersinggungan dengan unsur SARA, diskriminasi, dan/atau menyudutkan pihak lain.</li>
            	<li>Pengguna bertanggung jawab atas segala risiko yang timbul atas informasi yang diberikannya di dalam pergiyuk!, termasuk  hal-hal yang berkaitan dengan hak cipta, merek, dan lainnya.</li>
            	<li>Pengguna akan mendapatkan beragam informasi  melalui email. Namun, Pengguna dapat berhenti berlangganan (unsubscribe) email jika tidak ingin menerima informasi tersebut.</li>
            </ul>
            
        <p><b>Pembatasan Tanggung Jawab</b></p>
       		<ul>
            	<li>pergiyuk! tidak bertanggung jawab atas segala risiko dan kerugian yang timbul dari dan dalam kaitannya dengan informasi yang dituliskan oleh pengguna pergiyuk!.</li>
            	<li>pergiyuk! tidak bertanggung jawab atas segala pelanggaran hak cipta, hak paten, atau hak-hak pribadi lain yang berhubungan dengan segala informasi yang dibuat/ditulis oleh Pengguna pergiyuk!.</li>
                <li>pergiyuk! tidak bertanggung jawab atas segala risiko dan kerugian yang timbul berkenaan dengan diaksesnya akun member oleh pihak lain.</li>
            </ul>
        
        <br>
        <p>Jika terdapat masukan, kritik maupun saran, silahkan <a href="{!! URL::asset('company/contact') !!}">hubungi kami</a> atau email ke @pergiyuk.com.</p>
    </div>
</div>



@include('layout.footer')