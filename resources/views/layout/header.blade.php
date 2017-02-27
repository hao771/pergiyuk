<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>pergiyuk! - Tempat Berbagi Pengalaman Wisatamu!</title>
    <meta name="description" content="pergiyuk! merupakan situs bagi Anda yang suka berwisata untuk berbagi pengalaman wisatamu kepada teman-teman yang ingin berwisata/travelling!">
    <meta name="keyword" content="tempat wisata, wisata, jalan jalan, pariwisata, travelling, travel, pengalaman wisata, cara wisata, solo travelling, solo travel, wisata murah, travelling murah, jalan murah, pantai indah, forum wisata, forum travelling, forum travel, pergi wisata, candi, danau, air terjun, komunitas,diskusi, cerita, tanya, jawab, tour,travel,hotel murah,tiket murah">
    <meta name="language" content="id-ID" />
    <meta name="author" content="pergiyuk!"/>
    <meta name="geo.region" content="ID" />
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
   	
    <!-- og tag --> 
    <meta property="og:url" content="http://pergiyuk.com"/>
    <meta property="og:title" content="pergiyuk! - Tempat Berbagi Pengalaman Wisatamu!" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="pergiyuk! merupakan situs bagi Anda yang suka berwisata untuk berbagi pengalaman wisatamu kepada teman-teman yang ingin berwisata/travelling!" />

	<link rel="icon" href="{!! URL::asset('assets/img/favicon.png') !!}">
    <link rel="canonical" href="http://pergiyuk.com" />
    <link rel="alternate" href="pergiyuk.com" hreflang="id" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
    </script>

    <!-- CSS -->
	@yield('css')
	

</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-THP9QD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-THP9QD');</script>
<!-- End Google Tag Manager -->