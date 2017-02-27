<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-THP9QD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-THP9QD');</script>
<!-- End Google Tag Manager -->


  <header id="header-nav" class="navbar-fixed-top main-nav">
    	<div class="container">
    		<!-- <div class="row"> -->
                 <div class="navbar-header ">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{!! URL::asset('/') !!}">
                            <img src="{!! URL::asset('assets/img/logo.png') !!}" alt="" width="200" height="50">
                        </a>
                 </div><!--Navbar header End-->
                 	<nav class="collapse navbar-collapse navigation" id="navbar-collapse" role="navigation">
                        <ul class="nav navbar-nav navbar-right ">
                            <li><a class="active" href="{!! URL::asset('/') !!}">Home</a></li>
                            <li><a href="{!! URL::asset('company/tips') !!}">Travel Tips</a></li>
                            <li><a href="{!! URL::asset('company/contact') !!}">Hubungi Kami</a></li>
                            
                           @if($logged)
                            <li> <a href="{!! URL::asset('profile/') !!}/{{ $username }} " ><button class="nav-button login">Hi, {{ $username }}</button></a> </li>
                            <li> <a href="{!! URL::asset('account/logout') !!}"><button class="nav-button login">Logout</button></a> </li>
                           @else 
                            <li> <a href="{!! URL::asset('account/login') !!}"><button class="nav-button login">Login</button></a> </li>
                            <li><a href="{!! URL::asset('account/daftar') !!}"><button class="nav-button ">Daftar</button></a> </li>
                           @endif 
                           
                        </ul>
                     </nav>
                </div><!-- /.container-fluid -->
</header>