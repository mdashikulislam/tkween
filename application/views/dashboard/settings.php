<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-5">
                        <div class="card m-b-30">
                          	
                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Settings</h5>
                            </div>
                            <div class="card-body py-5">
                               
                                <form enctype="multipart/form-data" method="post" action="<?= $this->load->config->base_url() ?>dashboard/update_config_data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Site Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rec[0]['name'] ?>" name="name" aria-describedby="emailHelp" >
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Logo</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="logo"  aria-describedby="emailHelp" >
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Fevicon</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="fev"  aria-describedby="emailHelp" >
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>