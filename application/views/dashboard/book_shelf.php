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
                            	Book Shelfs 
                                 <a href="#"  class="btn btn-secondary-rgba" style="float:left" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i>  Add New
                                            </a>
                                            </h5>
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Add Shelf</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_shelf_data">
                                <div class="modal-body">
                                <label>Name</label>
                                <input type="text" required name="shelf_name" class="form-control">
                                <br />
                                <label>Number</label>
                                <input type="text" required name="number" class="form-control">
                              
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
                                            <th>Number</th>
                                             <th>Last Updated</th>
                                            <th>Books</th>
                                             <th width="15%">Action </th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        
                                        <td><?= $rr['shelf_name'] ?></td>
                                         <td><?= $rr['number'] ?></td>
                                           <td>
                                          <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                          </td>
                                           <td>
                                           <a href="<?= $this->load->config->base_url() ?>dashboard/shelf_data/<?= $rr['id'] ?>">
                                           (<?= $this->db->where('shelf_id',$rr['id'])->get('shelfs_data')->num_rows(); ?>)
                                           </a>
                                           </td>
                                            <td>
                                            
                                            <a href="#"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction_<?= $rr['id'] ?>">
                                            Edit
                                            </a>
                                <div class="modal fade" id="correction_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Edit Shelf</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/edit_shelf_data">
                                <div class="modal-body">
                                <input type="hidden" value="<?= $rr['id'] ?>" name="id">
                                <label>Name</label>
                                <input type="text"  required name="shelf_name" value="<?= $rr['shelf_name'] ?>" class="form-control">
                                <br />
                                <label>Number</label>
                                <input type="text" required name="number"  value="<?= $rr['number'] ?>" class="form-control">
                               
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                            
                                            <a href="<?= $this->load->config->base_url() ?>dashboard/delete_shelf/<?= $rr['id'] ?>" onclick="return confirm('want to delete?')" class="btn  btn-danger-rgba">Delete</a>
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