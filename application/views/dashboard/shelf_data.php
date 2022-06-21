<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <?php $shelf =  $this->db->where('id',$this->uri->segment(3))->get('book_shelf')->result_array(); ?>
                     <?php $contract =  $this->db->where('printing_status',2)->get('submitted_form')->result_array(); ?>
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                            
                            <h5 class="card-title">
                            	 <?= $shelf[0]['shelf_name'] ?>-<?= $shelf[0]['number'] ?>  Data
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
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_shelfs_book_data">
                                <div class="modal-body">
                                <label>Select Book</label>
                                <select  name="book_id" required="" class="form-control"
                            aria-label="Search" aria-describedby="button-addonSearch">  
                            	 <?php foreach($contract as $cc): ?>
                                <option value="<?= $cc['id'] ?>"><?= $cc['book_name'] ?></option>
                                <?php endforeach ?>
                            </select> 
                                <br />
                                <label>Number of Copies</label>
                                <input  type="number" name="copies" required class="form-control">
                                  <input type="hidden" name="shelf_id"  value="<?= $shelf[0]['id'] ?>" class="form-control">
                              
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
                                           <th>Book</th>
                                            <th>Copies</th>
                                            <th>Last Updated</th>
                                             <th width="15%">Action </th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        
                                        <td>
										 <?php $book =  $this->db->where('id',$rr['book_id'])->get('submitted_form')->result_array(); ?>
										<a target="_blank" href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/printing/<?= $book[0]['id'] ?>"><?= $book[0]['book_name'] ?></a></td>
                                         <td><?= $rr['copies'] ?></td>
                                          
                                          
                                          <td>
                                          <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
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
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/edit_shelfs_book_data">
                                <div class="modal-body">
                                
                                <label>Copies</label>
                                <input type="number" required name="copies"  value="<?= $rr['copies'] ?>" class="form-control">
                                 <input type="hidden" name="shelf_id"  value="<?= $shelf[0]['id'] ?>" class="form-control">
                                  <input type="hidden" name="id"  value="<?= $rr['id'] ?>" class="form-control">
                               
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                            
                                            <a href="<?= $this->load->config->base_url() ?>dashboard/delete_shelf_books_data/<?= $rr['id'] ?>/<?= $this->uri->segment(3) ?>" onclick="return confirm('want to delete?')" class="btn  btn-danger-rgba">Delete</a>
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