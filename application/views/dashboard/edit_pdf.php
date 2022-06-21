<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
              
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                     <center>
                   
                                <a target="_blank"  href="<?= $this->load->config->base_url()  ?>dashboard/pcontract/<?= $rec[0]['id'] ?>" class=" btn btn-secondary-rgba">Contract PDF</a>
                              
                                <a  href="<?= $this->load->config->base_url()  ?>dashboard/edit_contract/<?= $rec[0]['id'] ?>/<?= $this->uri->segment(4) ?>" class=" btn btn-secondary-rgba">Edit Contract</a>
                                <a  href="<?= $this->load->config->base_url()  ?>dashboard/contract_detail/<?= $this->uri->segment(4) ?>/<?= $rec[0]['id'] ?>/" class=" btn btn-secondary-rgba"> Contract Details</a>
                                
                               
                                <br /><br />
                    </center>
                        <div class="card m-b-30">
                          	 <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Edit Contract ( <?php if($rec[0]['contract_type']==0): ?>
                                             Web Based
                                            <?php else: ?>
                                           Custom
                                            <?php endif ?> )</h5>
                                <p>
                                
                                </p>
                            </div>
                            <div class="card-body ">
                            <form method="post" action="<?= $this->load->config->base_url() ?>dashboard/update_contractpdf_data">
                            <table class="table">
                            	
                              <tr>
                              <script type="text/javascript">
    CKEDITOR.replace("editor1");
</script>
                               	<td colspan="3">
                                <label>Contract</label>
                                 <input type="hidden" class="form-control" dir="rtl" value="<?= $rec[0]['id'] ?>" name="id" required="">
                                     <input type="hidden" class="form-control" dir="rtl" value="<?= $this->uri->segment(4) ?>" name="url" required="">
                                    <textarea class="ckeditor " name="contract"><?= $rec[0]['contract'] ?></textarea>
                                </td>
                                
                                
                               </tr>
                                <tr>
                               	<td>
                                    <input type="submit" value="Update" class="btn btn-primary" dir="rtl"  required="">
                                </td>
                                
                                
                               </tr>
                                
                            </table>
                            </form>
                            
                            
                            
                            
                        </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>