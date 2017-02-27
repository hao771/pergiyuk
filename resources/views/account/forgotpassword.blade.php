@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/loginform.css') !!}" type="text/css">
@endsection

@include('layout.header')



<div class="container">
	<div class="login-signup-form">
		<div class="panel panel-default">
			<form method="post" action="" role="login">
				<div class="panel-body">
				    	<h3 class="sub-heading" align="center">Lupa Password?</h3>
                        <div style="font-size:13px">Masukkan email login Anda di bawah ini. Kami akan mengirimkan pesan email beserta link untuk mengubah password Anda.</div>
                        <hr>
				    	<div class="form-group">
				    		<input type="email" name="email" placeholder="email" class="form-control" />
						</div>							
				<div class="form-group">
                <button type="submit" name="go" class="btn btn-lg btn-block btn-primary">Kirim</button><br />
                
                 </div>   
                 
                </div>    
				
              
			</form>
		</div>
	
	</div>
</div>


@include('layout.footer')