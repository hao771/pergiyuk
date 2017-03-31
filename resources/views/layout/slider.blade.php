 <!-- Slider -->
    <div id="carouseIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouseIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouseIndicators" data-slide-to="1"></li>
            <li data-target="#carouseIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{!! URL::asset('assets/img/slider1.jpg') !!}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{!! URL::asset('assets/img/slide2.jpg') !!}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{!! URL::asset('assets/img/slider3.jpg') !!}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouseIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouseIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
     </div>
     
     <!-- Search Box -->
     <div class="searchbox">
         <div class="container">
             <div class="row justify-content-center">
                 
                     <div class="input-group col col-sm-8 input-group-lg">
                      <span class="input-group-addon">
                       <i class="fa fa-search"></i>
                      </span>
                      	<input type="text" class="form-control" placeholder="Cari tempat wisata">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Search</button>
                      </span>
                    </div>
              </div>
         </div>
     </div>