 <!-- Footer -->
<div class="footer-area">
    <div class="container">
        <div class="col-md-4">
            <h3>Company</h3>
            <li><a href="{!! URL::asset('company/about') !!}">Tentang Kami</a></li>
            <li><a href="{!! URL::asset('company/tips') !!}">Travel Tips</a></li>
            <li><a href="{!! URL::asset('company/contact') !!}">Hubungi Kami</a></li>
        </div>
        <div class="col-md-4">
            <h3>Bantuan</h3>
            <li><a href="{!! URL::asset('bantuan/privacy') !!}">Kebijakan Privasi</a></li>
            <li><a href="{!! URL::asset('bantuan/policy') !!}">Syarat & Ketentuan</a></li>
            
        </div>
        <div class="col-md-4">
            <h3>Ikuti kami</h3>
           		<div class="social-button">
            	  <ul>
                	<li><a href="https://www.facebook.com/pergiyukcom"><i class="fa fa-lg fa-facebook"></i></a></li>
                	<li><a href="https://www.twitter.com/pergiyukcom"><i class="fa fa-lg fa-twitter"></i></a></li>
                	<li><a href="https://www.instagram.com/pergiyuk"><i class="fa fa-lg fa-instagram"></i></a></li>
      		  	  </ul>
           		</div>
    	</div>
	</div>
</div>

<div class="footer-area-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <span class="copyright">2016 &copy; pergiyuk!</span>
            </div>
            <div class="col-md-8" style="text-align:right">
            <span class="copyright">2015 &copy; PT. XXXXXXX XXXXXXX XXXXXXX </span>
            </div>
        </div>
    </div>
</div>
<a href="#0" class="back-top">Top</a>
        

   		<script src="{!! URL::asset('assets/js/jquery.min.js') !!}"></script>
		<script src="{!! URL::asset('assets/js/bootstrap.min.js') !!}"></script>
        <script src="{!! URL::asset('assets/js/main.js') !!}"></script> 
       	
        
</body>
</html>

<script>


function follow($id)
{
    $(document).ready(function ($){
        $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
            type: "POST",
            url: '{{URL::asset('member')}}/follow',
            data: {id : $id},
            success: function(msg){
                 // Success message
                if(msg == 'following'){
                    document.getElementById("followtext").innerHTML = "Following";    
                }else{
                    document.getElementById("followtext").innerHTML = "Follow";    
                }
                
                
            }
        });
    });
}


</script>