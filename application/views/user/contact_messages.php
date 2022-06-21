<!-- Start Breadcrumbbar -->                    
           
           <?php $rec =  $this->db->where('user_id',$this->session->userdata('id'))->get('contract_messages')->result_array(); ?>
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
                     <a href="#"  style="float:left" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> Add New
                                            </a>
                    </h4>
                    
                    
                     <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Submit New Request</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>user/add_contract_msg_data">
                                <div class="modal-body">
                                <select  class="form-control"  name="sub" required>
                                	<option>حقوق المؤلف</option>
                                    <option>توزيع الكتاب</option>
                                    <option>الاعلان والتسويق</option>
                                    <option>استفسارات عامة</option>
                                </select>
                                <br>
                                <input type="text" name="book_name"  required class="form-control" placeholder="اسم الكتاب">
                                <br>
                                <textarea rows="10" class="form-control" placeholder="تفاصيل" required name="user_msg"></textarea>
                                
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
  
                                
                                    <table id="" class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Date</th>
                                            <th>Subject</th>
                                             <th>Book</th>
                                            <th>Message</th>
                                             <th>Response</th>
                                             <th>Status</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        <td>
										 <?php
                            $date=date_create($rr['dt']);
                            echo date_format($date,"d/m/Y");
						
							
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
                                            
                                            
                            <?php if($rr['admin_msg']!=''): ?>
                            
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
                               <a href="<?= $this->load->config->base_url() ?><?= $rr['admin_doc'] ?>" download>Download Attachement</a>
                               <?php endif ?>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                                </div>
                                </div>
                                <?php else: ?>
                                ---
                                <?php endif ?>
                                            </td>
                                            <td>
                                            	<?php if($rr['status']==0): ?>
                                                <label class="badge badge-warning">Request Submitted</label>
                                                <?php else: ?>
                                                 <label class="badge badge-success">Request Respond</label>
                                                <?php endif ?>
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
                   
                    
                    
                </div>
                <!-- End row -->
            </div>