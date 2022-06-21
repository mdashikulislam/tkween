<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
              
                    <!-- Start col -->
                    <div class="col-lg-12">
                    <a href="<?= $this->load->config->base_url() ?>dashboard/regenerate_pdf" onClick="return confirm('Want to Re-generate?')" class="btn btn-primary" dir="rtl" style="float:left;    background: #830b0d !important; border:none" >Re-generate all PDF Contracts</a>
                    <br> <br>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                   
                        <div class="card m-b-30">
                          	 <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Edit ePDF Contract </h5>
                               <?php $erec =  $this->db->where('type',1)->get('pdf_contract')->result_array() ?>
                            </div>
                            <div class="card-body ">
                            <form method="post" action="<?= $this->load->config->base_url() ?>dashboard/update_pdf_data">
                            <input type="hidden" value="<?= $erec[0]['id'] ?>" name="id">
                             <textarea class="ckeditor " name="contract"><?= $erec[0]['contract'] ?></textarea>
                           <br>
                              
                                    <input type="submit" value="Update" class="btn btn-primary" dir="rtl"  required="">
                               
                            </form>
                            
                            
                            
                            
                        </div>
                        </div>
                        
                    </div>
                    
                    <div class="card m-b-30">
                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Edit pPDF Contract </h5>
                               <?php $erec =  $this->db->where('type',0)->get('pdf_contract')->result_array() ?>
                            </div>
                            <div class="card-body ">
                            <form method="post" action="<?= $this->load->config->base_url() ?>dashboard/update_pdf_data">
                            <input type="hidden" value="<?= $erec[0]['id'] ?>" name="id">
                             <textarea class="ckeditor " name="contract"><?= $erec[0]['contract'] ?></textarea>
                           <br>
                              
                                    <input type="submit" value="Update" class="btn btn-primary" dir="rtl"  required="">
                               
                            </form>
                            
                            
                            
                            
                        </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>