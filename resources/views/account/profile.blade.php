@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/contactform.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/style2.css') !!}" type="text/css">
@endsection

@include('layout.header')
@include('layout.navigation')




<div class="a text-right">
    <div class="container">     
    <!-- Show alert -->
    @foreach (['danger', 'warning', 'success', 'info'] as $msg) 
        @if(Session::has('alert-' . $msg))
            <div class="flash-message">
                <div class="alert alert-success">{{ Session::get('alert-' . $msg) }}</div>
            </div>
        @endif
    @endforeach
    @if($sameuser)
         <ul class="list-inline">
              <a href="{{ URL::asset('profile/') }}/{{ $username }}/edit"><button type="button" class="btn btn-success btn-md"><span class="fa fa-wrench"></span> Edit Profile</button></a>
              <button type="button" class="btn btn-info btn-md"><span class="fa fa-pencil-square-o"></span> Post</button>
         </ul>
    @endif
               </div>
</div>
<div class="profile-header">
    <div class="container">
		<div class="content-container">
	   		 <div class="col-sm-12 col-sm-3">
             
              <div class="profile-img">
              <img src="http://api.randomuser.me/portraits/women/21.jpg" alt="" class="center-block img-circle img-thumbnail img-responsive">
              </div>
              
              @if($sameuser)
                <!-- If Same user then do not show follow button utk test jadi sementara di aktifkan -->
                @if($following)
                  <button class="btn btn-success btn-block follow-btn" onclick="javascript:follow({{$userid}})" ><span  class="fa fa-plus-circle"></span> <span id='followtext'>Following</span> </button>
                @else
                  <button class="btn btn-success btn-block follow-btn" onclick="javascript:follow({{$userid}})" ><span  class="fa fa-plus-circle"></span> <span id='followtext'>Follow</span> </button>
                @endif
              @else
                @if($following)
                  <button class="btn btn-success btn-block follow-btn" onclick="javascript:follow({{$userid}})" ><span  class="fa fa-plus-circle"></span> <span id='followtext'>Following</span> </button>
                @else
                  <button class="btn btn-success btn-block follow-btn" onclick="javascript:follow({{$userid}})" ><span  class="fa fa-plus-circle"></span> <span id='followtext'>Follow</span> </button>
                @endif
              @endif
            </div>
            
            <div class="col-sm-12 col-sm-8">
            <div class="profile-info">
              <h2>{{ $memberdata->firstname }} {{$memberdata->lastname}}  ({{$memberdata->username}})</h2>
              <p><strong>Joined: </strong>  {{date('d-F-Y', strtotime($memberdata->created_at)) }} </p>
              <p><strong>About: </strong> {{$memberdata->aboutme}} </p>
              <p><strong>Hobbies: </strong> {{$memberdata->hobby}} </p>
            
              <div class="social-button">
            	  <ul>
                	<li><a href="{{URL::asset('https://www.facebook.com')}}/{{$memberdata->facebook}}"><i class="fa fa-lg fa-facebook"></i></a></li>
                	<li><a href="{{URL::asset('https://www.twitter.com')}}/{{$memberdata->twitter}}"><i class="fa fa-lg fa-twitter"></i></a></li>
                	<li><a href="{{URL::asset('https://www.instagram.com')}}/{{$memberdata->instagram}}"><i class="fa fa-lg fa-instagram"></i></a></li>
      		  	  </ul>
           		</div>
              
              
            </div>
            </div>
        </div>
     </div>
</div>



    <div class="container">
		<div class="content-container">
        <div class="profile-follower">
	   		<div class="col-xs-12 col-md-4">
              <h3><strong> 20,7K </strong></h3>
              <p><small>Followers</small></p>
             
            </div>
            <!--/col-->
            <div class="col-xs-12 col-md-4">
              <h3><strong>245</strong></h3>
              <p><small>Following</small></p>
              
            </div>
            <!--/col-->
            <div class="col-xs-12 col-md-4">
              <h3><strong>8</strong></h3>
              <p><small>Posts</small></p>
              
            </div>
        </div>
        </div>
     </div>



    <div class="container">
		<div class="content-container">
	   		<h3>Lastest Post</h3>
            <hr>
             <div class="table-responsive">
				<table id="mytable" class="table table-borderless">
              @if($sameuser)
                <div class="a text-right">
                  <a href="{!! URL::asset('article/add') !!}">
                	   <button type="button" class="btn btn-info btn-md"><span class="fa fa-pencil-square-o"></span> Post</button>
                   </a>
                 </div>
              @endif    
                	<thead>
                           <th class="col-lg-8">Judul</th>
                           <th class="col-lg-2">Tanggal</th>
                           <th class="col-lg-2">Action</th>
                   </thead>
                   
                   <tbody>
                         <tr>
                            <td><a href="articledetail.html">3 hari 2 malam di Pantai Kuta</a></td>
                            <td>25 June 2016</td>
                            <td>
                           
                            	<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                <span class="glyphicon glyphicon-pencil"></span> Edit
                                </button>
                           
                          
                            	<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                           
                            </td>
                        </tr>
                        
                        <tr>
                            <td><a href="articledetail.html">3 hari 2 malam di Pantai Kuta</a></td>
                            <td>25 June 2016</td>
                            <td>
                           
                            	<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                <span class="glyphicon glyphicon-pencil"></span> Edit
                                </button>
                           
                          
                            	<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                           
                            </td>
                        </tr>
                        
                        <tr>
                            <td><a href="articledetail.html">3 hari 2 malam di Pantai Kuta</a></td>
                            <td>25 June 2016</td>
                            <td>
                           
                            	<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                <span class="glyphicon glyphicon-pencil"></span> Edit
                                </button>
                           
                          
                            	<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                           
                            </td>
                        </tr>
                  </tbody>
               </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>
                
            </div>
        </div>
     </div>
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                      <div class="modal-dialog">
                   		  <div class="modal-content">
                                  <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                        <h4 class="modal-title custom_align" id="Heading">3 hari 2 malam di Pantai Kuta</h4>
                                  </div>
                                  <div class="modal-body">
                                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>  Anda ingin menghapus artikel ini?</div>
                               
                                  </div>
                                <div class="modal-footer ">
                                    <button type="button" class="btn btn-danger" >
                                        <span class="glyphicon glyphicon-ok-sign"></span> Hapus
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span> Batal
                                    </button>
                                </div>
                    	   </div>
                 	 </div>
                 </div>

@include('layout.footer')