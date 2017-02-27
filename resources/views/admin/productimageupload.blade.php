@extends("crudbooster::admin_template")
@section("content")
	<?php $page_title = "Upload Product Images"; ?>

	<!-- Show alert -->
    @foreach (['danger', 'warning', 'success', 'info'] as $msg) 
        @if(Session::has('alert-' . $msg))
            <div class="flash-message">
                <div class="alert alert-{{$msg}}">{{ Session::get('alert-' . $msg) }}
                    <!-- show errors messages panel -->
                    @if ($errors->has(''))
                      <ul>
                        @foreach( $errors->all() as $message )
                          <li>{{ $message }}</li>
                        @endforeach
                      </ul>
                    @endif
                </div>
            </div>
        @endif
    @endforeach          
	<!-- End Show Alert -->
   	<div>
	<button type="button" class="btn btn-default btn-sm">
		<a href="{!! URL::asset('admin/products') !!}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back</a>
	</button>
	</div>
	<br/>
	 
	 <h3>Upload image for {{$product->name}}</h3>
	 <style type="text/css">
		.imgcontainer {
			height:150px;
			width:100%;
			overflow-x:scroll;
			overflow-y:hidden;
		}
		
		.imgcontainersingle {
			height:150px;
			width: 120px;
			float:left;
			margin-right:30px;
		}
		
		.imgproduct {
			height:100px;
			max-width:120px;
		}
		
		.default {
			border:1px solid #ff0000;
		}
	 </style>
	 <hr/>
	{!! Form::open(array('url'=>'admin/multipleupload','method'=>'POST', 'files'=>true)) !!}
	<table>
		<tr>
			<td>
				{!! Form::hidden('productid', $product->id) !!}

				{!! Form::file('images[]', array('multiple'=>true)) !!}
			</td>
			
			<td>
				{!! Form::submit('Upload', array('class'=>'send-btn')) !!}
			</td>
		</tr>
	</table>
	
	
	{!! Form::close() !!}
	<hr/>
	 <div class="imgcontainer">
		@if($productimages)
			@foreach($productimages as $productimage)
				<div class="imgcontainersingle">
					<img class="imgproduct <?php if($productimage->default == 1) { echo "default";} ?>" src="{!! URL::asset('') !!}{{$productimage->image_products}}">
					<p><a href="javascript:deleteProductImage({{$productimage->id}})">Delete</a> &nbsp;|&nbsp; <a href="javascript:defaultProductImage({{$productimage->id}})">Set Default</a></p>
				</div>
			@endforeach
		@endif
	 </div>
	 
	 <br/>
	 <div>
	<button type="button" class="btn btn-default btn-sm">
		<a href="{!! URL::asset('admin/products') !!}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back</a>
	</button>
	</div>
	
	<script type="text/javascript">
		function deleteProductImage(id){
			$.ajax({
				headers: {
				   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type: "POST",
				url: "{!!URL::asset('admin/imageproductdelete')!!}",
				data: {id: id },
				success: function(msg){
					//toastr.error('Product Image deleted!', 'Success');
					window.location = "{{URL::asset('admin/uploadimages')}}/{{$product->id}}";
				},
				error: function(msg){
					//toastr.error('Error occured. Image delete error', 'Error');
					alert(msg.responseText);
				}
			});	
		}
		
		function defaultProductImage(id){
			$.ajax({
				headers: {
				   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type: "POST",
				url: "{!!URL::asset('admin/imageproductdefault')!!}",
				data: {id: id },
				success: function(msg){
					//toastr.error('Product Image deleted!', 'Success');
					window.location = "{{URL::asset('admin/uploadimages')}}/{{$product->id}}";
				},
				error: function(msg){
					//toastr.error('Error occured. Image delete error', 'Error');
					alert(msg.responseText);
				}
			});	
		}
	</script>
	
@endsection