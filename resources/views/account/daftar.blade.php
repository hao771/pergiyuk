@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/loginform.css') !!}" type="text/css">
@endsection

@include('layout.header')

<!-- Sign Up Form -->     
<div class="container">
	<div class="login-signup-form">
		
		<!-- show errors messages panel -->
		@if ($errors->has(''))
			<p>The following errors have occurred:</p>
	      <ul>
	        @foreach( $errors->all() as $message )
	          <li>{{ $message }}</li>
	        @endforeach
	      </ul>
	    @endif

		<div class="panel panel-default">
			{!! Form::open(array('action' => 'AccountController@register', 'role' => 'form')) !!}
				<div class="panel-body">
			    	<h2 class="sub-heading">Daftar</h2>
			    	<div class="form-group">
			    		{!! Form::text('username','', array('class' => 'form-control', 'placeholder' => 'Username')) !!}
					</div>
                    
					<div class="form-group">
						{!! Form::text('email','', array('class' => 'form-control', 'placeholder' => 'Your Email')) !!}
					</div>
					
                    <div class="form-group">
                    	{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
					</div>
                    
					<div class="form-group">
						{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Re-enter Password')) !!}
					</div>
                    <div class="checkbox">
						<input type="checkbox" name="agree" value="1"/>Saya setuju dengan <a href="{!! URL::asset('bantuan/policy') !!}">Ketentuan</a> dan <a href="{!! URL::asset('bantuan/privacy') !!}">Kebijakan Privasi</a>
                    </div>    
                    
                    <div class="form-group">
                    {!! Form::submit('Daftar', array('class' => 'btn btn-lg btn-block btn-primary')) !!}
                    <br />
                    </div>
				</div>
                
				<div class="panel-footer">
					
                    Sudah punya akun? <a href="{!! URL::asset('account/login') !!}">Login, yuk!</a>
				</div>
                
			{!! Form::close() !!}
		</div>
	
	</div>
</div>


@include('layout.footer')