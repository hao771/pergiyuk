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
        <h3>Kebijakan Privasi</h3>
        <hr>
        <p>Dengan mengunjungi dan menggunakan situs pergiyuk!, maka Anda telah menyetujui Kebijakan Privasi yang berlaku di pergiyuk!. Kebijakan-kebijakan tersebut diantara lainnya: </p>
        <ul>
        	<li>pergiyuk! melindungi segala informasi yang diberikan <i>member</i> pada saat pendaftaran, mengakses, dan menggunakan seluruh layanan di situs pergiyuk!.</li>
            <li>pergiyuk! melindungi segala hak pribadi yang muncul atas informasi <i>member</i> yang ditampilkan oleh <i>member</i> di layanan pergiyuk!, baik berupa username, foto, dan data lainnya.</li>
            <li>pergiyuk! menerima konten yang ditulis oleh para <i>member</i>, namun konten yang ditulis menjadi tanggungjawab pribadi bagi penulis. pergiyuk! tidak akan bertanggung jawab atas kebenaran konten dan foto yang dimasukkan oleh <i>member</i>.</li>
            <li>pergiyuk! tidak bertanggung jawab atas pertukaran data yang dilakukan sendiri di antara pengguna situs.</li>
            <li>pergiyuk! berhak menggunakan data dan informasi para pengguna situs demi meningkatkan mutu dan pelayanan di situs pergiyuk!.</li>
            
        </ul>
        <p>Kebijakan yang ada di atas ini suatu waktu bisa berubah tanpa pemberitahuan terlebih dahulu demi peningkatan layanan pergiyuk! kepada pengguna. Jika terdapat masukan, kritik maupun saran, silahkan <a href="{!! URL::asset('company/contact') !!}">hubungi kami</a> atau email ke @pergiyuk.com.</p>
    </div>
</div>



@include('layout.footer')