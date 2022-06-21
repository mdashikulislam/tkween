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
                            	Sales Orders List
                                 
                                </h5>
                                	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                            <th>Book </th>
                                            <th >Required Copies</th>
                                             <th>Order By</th>
                                              <th>Sales Admin</th>
                                              <th>Date</th>
                                              <th>Last Updated</th>
                                             <th>Status</th>
                                            <th>Action</th>
                                             <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                         
                                         <td>
                                         <?php $book =  $this->db->where('id',$rr['book_id'])->get('submitted_form')->result_array(); ?>
										  <a target="_blank" href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/printing/<?= $book[0]['id'] ?>">
										 <?= $book[0]['book_name'] ?>
                                         </a>
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
                                            <?php if($rr['status']==0): ?>
                                             <?php if($this->input->get('book_id')): ?>
                                            <a class="btn btn-secondary-rgba" href="<?= $this->load->config->base_url() ?>dashboard/print_done/<?= $rr['id'] ?>?url=sales_order_list?book_id=<?= $this->input->get('book_id')  ?>">Mark done</a>
                                           <?php else: ?>
                                            <a class="btn btn-secondary-rgba" href="<?= $this->load->config->base_url() ?>dashboard/print_done/<?= $rr['id'] ?>?url=sales_order_list">Mark done</a>
                                           <?php  endif?>
                                           <?php else: ?>
                                           ---
                                           <?php endif ?>
                                            </td>
                                            <td>
                                            
                                            
                                             <?php if($this->input->get('book_id')): ?>
                                            <a class="btn btn-danger-rgba" onclick="return confirm('want to delete')" href="<?= $this->load->config->base_url() ?>dashboard/delete_sale_order/<?= $rr['id'] ?>?url=sales_order_list?book_id=<?= $this->input->get('book_id')  ?>">Delete</a>
                                           <?php else: ?>
                                            <a class="btn btn-danger-rgba" onclick="return confirm('want to delete')" href="<?= $this->load->config->base_url() ?>dashboard/delete_sale_order/<?= $rr['id'] ?>?url=sales_order_list">Delete</a>
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