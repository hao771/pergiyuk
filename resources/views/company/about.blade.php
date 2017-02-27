@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/profile.css') !!}" type="text/css">
@stop

@include('layout.header')
@include('layout.navigation')

<div class="header"> 
<div id="slider" class="carousel slide" data-ride="carousel">
            
            
            <!-- slider content -->
            <div class="carousel-inner">
               
                <div class="item active">
                    <img src="{!! URL::asset('assets/img/candi3.jpg') !!}" alt="Mount" class="img-responsive">
                </div>
                
                <div class="header-content">
                    
                        <div class="header-content-inner">
                            <h2>Temukan semua  informasi dan <br/>
                            pengalaman menarik wisata<br/>dari seluruh pelosok Indonesia
                            </h2>
                            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                         </div>
               </div>
            </div>
            
</div>          
</div>

<section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Apa itu Pergi, Yuk! ?</h2>
                    <hr class="light">
                    <p class="text-faded">Pergi, Yuk! merupakan platform bagi Anda yang suka berwisata untuk berbagi pengalaman wisatamu kepada teman-teman yang ingin berwisata</p>
                    <a href="{{ URL::asset('account/daftar') }}" class="btn btn-default btn-xl">Daftar, Yuk!</a>
                </div>
            </div>
        </div>
    </section>

@include('layout.footer')