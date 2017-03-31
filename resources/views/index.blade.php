@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
@endsection

@include('layout.header')
@include('layout.navigation')
@include('layout.slider')
 <div class="home-main">
    <div class="row">
@include('layout.leftmenu')
@include('layout.maincontent')
@include('layout.rightmenu')
</div>
    </div>
@include('layout.footer')


