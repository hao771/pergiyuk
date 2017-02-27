@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,500,400,300" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/main.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/style2.css') !!}" type="text/css">
    
@stop

@include('layout.header')
@include('layout.navigation')

<div class="container">
    <div class="row">
        <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-star"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        
            <form role="form">
                <div class="tab-content">
                <!-- Step Deskripsi -->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Deskripsi</h3>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label">Judul</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" required="required" class="form-control" placeholder="Judul" title="Tips" data-toggle="popover" data-placement="right" data-content="Judul harus menarik seperti mengandung nama kota tujuan."/>
                            </div>
                        </div>
                        
                       
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label">Kategori</label>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="kategori" id="kategori" title="Tips" data-toggle="popover" data-placement="right" data-content="Pilih yang kategori sesuai dengan perjalanan wisatamu." >
                                      <option value="">- Pilih Kategori -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label">Jumlah Hari Perjalanan</label>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input type="text" required="required" class="form-control" placeholder="Jumlah Hari"  />
                                    <span class="input-group-addon">Hari</span>
                                </div> 
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input type="text" required="required" class="form-control" placeholder="Jumlah Malam"  />
                                    <span class="input-group-addon">Malam</span>
                                </div> 
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label">Jumlah Biaya</label>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="text" required="required" class="form-control" placeholder="Perkiraan Minimum"  />
                                    
                                </div> 
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="text" required="required" class="form-control" placeholder="Perkiraan Maksimum"  />
                                    
                                </div> 
                            </div>
                        </div>        
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label">Kota Asal</label>
                            </div>
                             <div class="col-lg-3">
                                 <select class="form-control" name="country-to" id="country-to">
                                      <option value="">- Pilih Negara -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="provinsi-from" id="provinsi-from">
                                      <option value="">- Pilih Provinsi -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="kab-from" id="kab-from">
                                      <option value="">- Pilih Kabupaten -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="kota-from" id="kota-from" title="Tips" data-toggle="popover" data-placement="top" data-content="Jika kota tidak dalam pilihan, pilih kota yang terdekat denganmu.">
                                      <option value="">- Pilih Kota -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                        </div>
                         
                       <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label">Kota Tujuan</label>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="country-to" id="country-to">
                                      <option value="">- Pilih Negara -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="provinsi-to" id="provinsi-to">
                                      <option value="">- Pilih Provinsi -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="kab-to" id="kab-to">
                                      <option value="">- Pilih Kabupaten -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                 <select class="form-control" name="kota-to" id="kota-to">
                                      <option value="">- Pilih Kota -</option>
                                      <option value="">Pantai</option>
                                      <option value="">Danau</option>
                                      <option value="">Gunung</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label">Deskripsi</label>
                             </div>
                              <div class="col-lg-9">
                              <textarea rows="20" class="form-control border-input" placeholder="Deskripsi Perjalanan" title="Tips" data-toggle="popover" data-placement="right" data-content="Berisi detail perjalanan wisatamu yaitu lokasi, transportasi, biaya, dan waktu yang digunakan." data-html="true"> 
                              
                            </textarea>
                            
                            </div>
                            
                         </div>     
                         
                         <div class="col-lg-12">
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Simpan & Lanjut</button></li>
                        </ul>
                        </div>
                    </div>
                    
                    
                    
                    <!-- Step Rekomendasi -->
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Rekomendasi</h3>
             <div data-role="dynamic-fields">
                <div class="form-horizontal">
                       <div class="form-group">
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                <label class="control-label">Kategori</label>
                                </div>
                                <div class="col-lg-9">
                                <label class="control-label">Detail Rekomendasi</label>
                                </div>
                             </div>
                              <div class="col-lg-3">
                                  <select class="form-control" name="provinsi-to" id="provinsi-to">
                                      <option value="">- Pilih Kategori -</option>
                                      <option value="">Oleh-oleh</option>
                                      <option value="">Tempat</option>
                                      <option value="">Pusat Belanja</option>
                                      <option value="">Kuliner</option>
                                      <option value="">Transportasi</option>
                                  </select>
                            
                            </div>  
                       
                              <div class="col-lg-6">
                              <textarea rows="5" class="form-control border-input" placeholder="Deskripsi Perjalanan" title="Tips" data-toggle="popover" data-placement="right" data-content="Berisi rekomendasi dan tips/trick sesuai kategori rekomendasi yang kamu pilih." data-html="true"> 
                              
                            </textarea>
                            
                            </div>
                            <button class="btn btn-danger" data-role="remove">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                            <button class="btn btn-primary" data-role="add">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                      
                      
                      </div>  
                  </div>  <!-- /div.form-inline -->
            </div>  <!-- /div[data-role="dynamic-fields"] -->
                         
                        
                        
                        
                        <div class="col-lg-12">
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">< Kembali</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Simpan & Lanjut</button></li>
                        </ul>
                         </div>
                    </div>
                    
                    
                    <!-- Step Gallery -->
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Gallery</h3>
                        <div class="container">
                            <div class="row">    
                                <div class="col-lg-6 ">  
                                    
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                        <span class="input-group-btn">
                                          
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                           
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> 
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">< Kembali</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Simpan & Lanjut</button></li>
                        </ul>
                    </div>
                    
                    
                    <!-- Step Complete -->
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
                    </div>
                    <div class="clearfix"></div>
               </div>     
            </form>
        

        </div>
    </section>
   </div>
</div>



@include('layout.footer')
