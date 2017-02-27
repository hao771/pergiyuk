@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/contactform.css') !!}" type="text/css">
@stop

@include('layout.header')
@include('layout.navigation')
<div class="container main-content">
	<div class="col-md-4 c-info">
      <div class="content-container">
            <h2 class="sub-heading">Alamat Kantor</h2>
            <p><i class="glyphicon glyphicon-map-marker"></i>Akashpuram, Bareilly, India, 243005</p>
            <p><i class="glyphicon glyphicon-phone"></i> +00 0123456789</p>
            <p><i class="glyphicon glyphicon-envelope"></i> email@example.com</p>
            <p>
            	<div class="social-button">
            	  <ul>
                	<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                	<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                	<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
      		  	  </ul>
           		</div>
            </p>
            <p></p>
            
            
           </div> 
      </div>
     
      <div class="col-md-8">
       <div class="content-container">
          <h2 class="sub-heading">Hubungi Kami</h2>
          
          <form action="youractionlink" method="yourmethord" role="form">
              <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" class="form-control" placeholder="Nama">
              </div>
              
               <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" placeholder="Email">
              </div>
              
              <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
              <textarea class="form-control" placeholder="Pesan" rows="5" required></textarea>
              </div>
              
              <div class="input-group input-group-lg">
              <input type="button" class="form-control btn-primary" value="Kirim">
              </div>
          
          </form>
          
          <div class="alert alert-success"><span class="glyphicon glyphicon-send"></span> &nbsp; Success! Message sent.</div>
         
          <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign"></span> &nbsp; Please check the inputs.</div>
     
      </div>
  </div>
</div>


@include('layout.footer')