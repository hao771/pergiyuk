@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/style2.css') !!}" type="text/css">
@endsection

@include('layout.header')
@include('layout.navigation')

<div class="container">
		<div class="content-container">
	   		<h3>Update Profile</h3>
            <hr>
          
   
				<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="{{URL::asset('assets/img/kuliner.jpg')}}" class="avatar img-circle" alt="avatar" width="110" height="110">
          <br>
          <br>     
          <input type="file"  class="form-control" >
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          <!-- show errors messages panel -->
            @if ($errors->has(''))
              <p>The following errors have occurred:</p>
                <ul>
                  @foreach( $errors->all() as $message )
                    <li>{{ $message }}</li>
                  @endforeach
                </ul>
            @endif
            
        </div>
        <h3>Personal info</h3>
        <hr>
        {!! Form::open(array('action' => 'ProfileController@update', 'role' => 'form', 'class' => 'form-horizontal')) !!}
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Depan*</label>
            <div class="col-lg-6">
              {!! Form::text('firstname',$memberdata->firstname, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Belakang</label>
            <div class="col-lg-6">
              {!! Form::text('lastname',$memberdata->lastname, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">About Me</label>
            <div class="col-lg-6">
              {!! Form::text('aboutme',$memberdata->aboutme, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Hobby</label>
            <div class="col-lg-6">
              {!! Form::text('hobby',$memberdata->hobby, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email*</label>
            <div class="col-lg-6">
              {!! Form::text('email',$memberdata->email, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
         
         <div class="form-group">
            <label class="col-lg-3 control-label">Kota*</label>
            <div class="col-lg-3">
              <select class="form-control" name="provinsi" id="provinsi">
                  <option value="">- Pilih Provinsi -</option>
                  <option value=""></option>
			  </select>
            </div>
            <div class="col-lg-3">
              <select class="form-control" name="kota" id="kota">
                  <option value="">- Pilih Kota -</option>
                  <option value=""></option>
			  </select>
            </div>
          </div>
         
         
          <h3>Social Media</h3>
         	<hr>
          <div class="form-group">
            <label class="col-lg-3 control-label">facebook.com/</label>
            <div class="col-lg-6">
                {!! Form::text('facebook',$memberdata->facebook, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">twitter.com/</label>
            
            <div class="col-lg-6">
                {!! Form::text('twitter',$memberdata->twitter, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
          
           <div class="form-group">
            <label class="col-lg-3 control-label">instagram.com/</label>
            <div class="col-lg-6">
                {!! Form::text('instagram',$memberdata->instagram, array('class' => 'form-control', 'placeholder' => '')) !!}
            </div>
          </div>
          
          
          
          
         <h3>Password</h3>  
         <hr>
          
         
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-6">
              <input class="form-control" value="11111122333" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Konfirmasi Password:</label>
            <div class="col-md-6">
              <input class="form-control" value="11111122333" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-6">
              <input class="btn btn-primary" value="Save" type="submit">
              <span></span>
              <input class="btn btn-default" value="Batal" type="reset">
            </div>
          </div>
        {!! Form::close() !!}
      </div>
  </div>


    </div>
 </div>

@include('layout.footer')