<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    
                    <div class="col-lg-12">
                    <div class="card" style="margin-bottom:100px;">
                    <div class="card-header">
                    
                    <h4>خدمة المؤلفين
                    
                    </h4>
                    
                    
                     
                    
                    </div>
                    <div class="card-body">
                   
                                <div class="table-responsive">
  
                                
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Author</th>
                                           <th>Date</th>
                                           <th>Last Updated</th>
                                            <th>Subject</th>
                                             <th>Book</th>
                                            <th>Message</th>
                                             <th>Response</th>
                                             <th>Status</th>
                                             
                                             <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        <td>
                                        	<?php $users =  $this->db->where('id',$rr['user_id'])->get('users')->result_array(); ?>
                                            <?= $users[0]['name'] ?>
                                        </td>
                                        <td>
										 <?php
                            $date=date_create($rr['dt']);
                            echo date_format($date,"d/m/Y");
						
							
                            ?>
                                        </td>
                                        <td>
                                         <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                        </td>
                                        <Td><?= $rr['sub'] ?></Td>
                                         <Td><?= $rr['book_name'] ?></Td>
                                        	<td>
											<a href="#"  data-animation="zoomInUp" data-toggle="modal" data-target="#correction_<?= $rr['id'] ?>">
                                            View
                                            </a>
											<div class="modal fade" id="correction_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Request</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                               <?= str_replace("\n",'<br>',$rr['user_msg']) ?>
                               
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                                </div>
                                </div>
                                            </td>
                                            
                                            
                                            <td>
                                            
                                            
                            <?php if($rr['status']!=0): ?>
                            
                            <a href="#"  data-animation="zoomInUp" data-toggle="modal" data-target="#admin_<?= $rr['id'] ?>">
                                            View
                                            </a>
											<div class="modal fade" id="admin_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Request</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                               <?= str_replace("\n",'<br>',$rr['admin_msg']) ?>
                              <br><br>
                              <?php if($rr['admin_doc']!=''): ?>
                               <a href="<?= $this->load->config->base_url() ?><?= $rr['user_doc'] ?>" download>Download Attachement</a>
                               <?php endif ?>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                                </div>
                                </div>
                                <?php else: ?>
                                <a href="#"   data-animation="zoomInUp" data-toggle="modal" data-target="#replay_<?= $rr['id'] ?>">
                                           Reply
                                            </a>
                                <?php endif ?>
                                            </td>
                                            <td>
                                            	<?php if($rr['status']==0): ?>
                                                <label class="badge badge-warning">Request Submitted</label>
                                                <?php else: ?>
                                                 <label class="badge badge-success">Request Respond</label>
                                                <?php endif ?>
                                            </td>
                                           
                                           <tD>
                                           <?php if($rr['status']==0): ?>
                                           
                                            <?php endif ?>
                                            <a class="btn  btn-danger-rgba" onClick="return confirm('want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_contract_msg/<?= $rr['id'] ?>">Delete</a>
                                            <div class="modal fade" id="replay_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Respond to Request</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/reply_contract_msg_data">
                                <div class="modal-body">
                                
                                <textarea rows="10" class="form-control" placeholder="تفاصيل" required name="admin_msg"></textarea>
                                <br>
                                <input type="file" name="admin_doc">
                                <input type="hidden" value="<?= $rr['id'] ?>" name="id" />
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                           </tD>
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
                   
                    
                    
                </div>
                <!-- End row -->
            </div>