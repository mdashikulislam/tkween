<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                            <h5 class="card-title">
                            	Branches 
                                 <a href="#" style="float:left"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> Add New
                                            </a>
                                            </h5>
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Add Branch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_branch_data">
                                <div class="modal-body">
                                <input type="text" name="name" required class="form-control">
                                
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Name</th>
                                           <th>Last Updated</th>
                                           
                                             <th width="15%">Action </th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        
                                        <td><?= $rr['name'] ?></td>
                                        	 
                                              <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                           
                                            <td>
                                            
                                            <a href="#"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction_<?= $rr['id'] ?>">
                                          Edit
                                            </a>
                                <div class="modal fade" id="correction_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Edit Branch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_branch_data">
                                <div class="modal-body">
                                <input type="text" required name="name" value="<?= $rr['name'] ?>" class="form-control">
                                <input type="hidden" value="<?= $rr['id'] ?>" name="id">
                                
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                            
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                  <br />
                                 
                                      <?php echo $this->pagination->create_links() ?>
                                    
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>