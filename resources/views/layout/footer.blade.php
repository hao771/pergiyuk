<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 social-button">
                <h3 class="footer-menu-title">Ikuti Kami</h3>
                <ul class="list-unstyled footer-menu-list">
                    <li><a href="https://www.facebook.com/pergiyukid"><i class="fa fa-lg fa-facebook"></i></a></li>
                	<li><a href="https://www.twitter.com/"><i class="fa fa-lg fa-twitter"></i></a></li>
                	<li><a href="https://www.instagram.com/"><i class="fa fa-lg fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 column">
                <h3 class="footer-menu-title">Company</h3>
                <ul class="list-unstyled footer-menu-list">
                    <li><a href="#" data-toggle="modal" data-target="#alertModal" >Tentang Kami</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#alertModal" >Travel Blog</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#alertModal" >Hubungi Kami</a></li>
                   
                </ul>
            </div>
             <div class="col-12 col-sm-3 column">
                <h3 class="footer-menu-title">Bantuan</h3>
                <ul class="list-unstyled footer-menu-list">
                    <li><a href="#" data-toggle="modal" data-target="#alertModal" >Kebijakan Privasi</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#alertModal" >Syarat & Ketentuan</a></li>
                    
                </ul>
            </div>
            <div class="col-12 col-sm-3 column">
                <h3 class="footer-menu-title">Newsletter</h3>
                <form>
                   <div class="input-group">
                     <input type="text" class="form-control" placeholder="Email">
                      <div class="input-group-btn">
                        <button class="btn btn-primary" type="button"><span class="fa fa-arrow-right"></span ></button>
                      </div>
                   </div>
                </form>
            </div>
            
        </div>
        <br>
       
    </div>
</footer>
        
		 <!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="{!! URL::asset('assets/js/jquery-1.11.2.min.js') !!}"></script>
		<script src="{!! URL::asset('assets/js/bootstrap.min.js') !!}"></script>
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