<div id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target = "#slider" data-slide-to ="0" class="active"></li>
        <li data-target = "#slider" data-slide-to ="1"></li>
        <li data-target = "#slider" data-slide-to ="2"></li>
    </ol>
    
    <!-- slider content -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{!! URL::asset('assets/img/slider1.jpg') !!}" alt="slider1" class="img-responsive">
        </div>
        <div class="item">
            <img src="{!! URL::asset('assets/img/slide2.jpg') !!}" alt="slider2" class="img-responsive">
        </div>
        <div class="item">
            <img src="{!! URL::asset('assets/img/slide3.jpg') !!}" alt="slider3" class="img-responsive">
        </div>		
    </div>
</div>   


<!-- Search Box-->
<div class="search-box">
    <div class="container">
        <div class="search-content-container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-md" placeholder="Cari tempat wisata yang Anda inginkan!" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                     </div>
                   </div>
              </div>
         </div>     
    </div>
</div>