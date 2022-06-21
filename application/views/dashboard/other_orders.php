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
                            	Other Orders
                                  <a href="#" style="float:left"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> Add New
                                            </a>
                                </h5>
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Add Order</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                 <?php $contract =  $this->db->get('other_books')->result_array(); ?>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_order_data">
                                <div class="modal-body">
                                <?php if($this->input->get('book_id')==''): ?>
                                <label>Book</label>
                                 <select  name="book_id" required="" class="form-control"
                            aria-label="Search" aria-describedby="button-addonSearch">  
                            	 <?php foreach($contract as $cc): ?>
                                <option value="<?= $cc['id'] ?>"><?= $cc['name'] ?></option>
                                <?php endforeach ?>
                            </select> 
                             <input type="hidden" value="other_orders" name="url" />
                                <br />
                                <?php else: ?>
                                 <input type="hidden" value="other_orders?book_id=<?= $this->input->get('book_id') ?>" name="url" />
                                <input type="hidden" value="<?= $this->input->get('book_id') ?>" name="book_id" />
                                 
                                <?php endif ?>
                                <input type="hidden" value="1" name="type" />
                                 
                                <label>Copies</label>
                                <input type="number" required name="copies" class="form-control">
                               <br />
                                <label>Order By</label>
                                <input type="text" name="client" required class="form-control">
                               
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
  
                                
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                            <th>Book </th>
                                            <th >Printed Copies</th>
                                             <th>Order By</th>
                                              <th>Added by</th>
                                              <th>Date</th>
                                              <th>Last Updated</th>
                                             <th>Status</th>
                                               <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                         
                                         <td>
                                         <?php $book =  $this->db->where('id',$rr['book_id'])->get('other_books')->result_array(); ?>
										 <?= $book[0]['name'] ?>
                                         </td>
                                        	
                                          
                                            <td>
                                            <?= $rr['copies'] ?>
                                            </td>
                                            <td>
											 <?= $rr['client'] ?>
                                            </td>
                                            <td>
											<?php $user =  $this->db->where('id',$rr['user_id'])->get('users')->result_array() ?>
											
											<?php if(count($user)): ?>
                                           <?= $user[0]['name'] ?>
                                            <?php else: ?>
                                            ---
                                            <?php endif ?>
                                            </td>
                                            
                                           
                                            <td>
                                            <?php
                                            $date=date_create($rr['dt']);
                                            echo date_format($date,"d/m/Y");
                                            ?></td>
                                            <td>
                                             <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                            </td>
                                            <td>
                                            	<?php if($rr['status']==0): ?>
<label class="badge badge-warning">Pending</label>
<?php else: ?>
<label class="badge badge-success">Print Done</label>
<?php endif ?>
                                            </td>
                                            
                                            
                                             <td>
                                            
											 <?php if($this->input->get('book_id')): ?>
                                            <a  class="btn btn-danger-rgba"  onclick="return confirm('want to delete')" href="<?= $this->load->config->base_url() ?>dashboard/delete_sale_order/<?= $rr['id'] ?>?url=other_orders?book_id=<?= $this->input->get('book_id')  ?>">Delete</a>
                                           <?php else: ?>
                                            <a  class="btn btn-danger-rgba"  onclick="return confirm('want to delete')" href="<?= $this->load->config->base_url() ?>dashboard/delete_sale_order/<?= $rr['id'] ?>?url=other_orders">Delete</a>
                                           <?php  endif?>
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