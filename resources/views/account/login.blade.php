@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/loginform.css') !!}" type="text/css">
@endsection

@include('layout.header')

<!-- Login Form -->   
<div class="container">

	<!-- Show alert -->
	    @foreach (['danger', 'warning', 'success', 'info'] as $msg) 
	        @if(Session::has('alert-' . $msg))
	            <div class="flash-message">
	                <div class="alert alert-success">{{ Session::get('alert-' . $msg) }}</div>
	            </div>
	        @endif
	    @endforeach

	    <!-- show errors messages panel -->
		@if ($errors->has(''))
			<p>The following errors have occurred:</p>
	      <ul>
	        @foreach( $errors->all() as $message )
	          <li>{{ $message }}</li>
	        @endforeach
	      </ul>
	    @endif
	    
    <!-- End Show Alert -->


	<div class="login-signup-form">
		<div class="panel panel-default">
			{!! Form::open(array('action' => 'LoginPageController@frontEndLogin', 'role' => 'form')) !!}
				<div class="panel-body">
				    	<h2 class="sub-heading">Login</h2>
				    	<div class="form-group">
				    		{!! Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Username')) !!}
						</div>							
                        <div class="form-group">
                        	{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
						</div>
                        
						
				<div class="form-group">
				{!! Form::submit('Login', array('class' => 'btn btn-lg btn-block btn-primary')) !!}
                <br />
                    <a href="{!! URL::asset('account/forgotpassword') !!}">Lupa password?</a>
                 </div>   
                 
                </div>    
				
                <div class="panel-footer">
                    Belum punya akun? <a href="{!! URL::asset('account/daftar') !!}">Daftar, yuk!</a>
				</div>
			{!! Form::close() !!}
		</div>
	
	</div>
</div>

 @include('layout.footer')
