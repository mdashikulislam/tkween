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
                            	Inbox </h5>	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Name</th>
                                           <th>Email</th>
                                           <th>Subject</th>
                                           <th>Date</th>
                                           <th>Last Updated</th>
                                            <th>Message</th>
                                            
                                            <th>Status</th>
                                             <th width="15%">Action </th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                       
                                        <td><?= $rr['name'] ?></td>
                                        	 <td><?= $rr['email'] ?></td>
                                              <td><?= $rr['sub'] ?></td>
                                               <td>
                                               
                                                 <?php
                                            $date=date_create($rr['dt'].' '.$rr['tm']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                               </td>
                                               <td>
                                                <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                               </td>
                                               <td>
											   	<a href="#" data-animation="zoomInUp" data-toggle="modal" data-target="#inbox_<?= $rr['id'] ?>">View</a>
                                <div class="modal fade" id="inbox_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle-1">Message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            	<?= str_replace("\n",'<br>',$rr['msg']) ?>
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                
                                                </td>
                                           
                                             <td>
                                            <?php if($rr['status']==0): ?>
                                           <span class="badge badge-warning">Submitted</span>
                                    <?php else: ?>
                                     <span class="badge badge-success">Replied</span>
                                    <?php endif ?>
                                            </td>
                                           
                                            <td>
                                           
                                            <a href="#"  class="btn  btn-secondary-rgba"  data-animation="zoomInUp" data-toggle="modal" data-target="#replay_<?= $rr['id'] ?>">
                                          Reply
                                            </a>
                                            <div class="modal fade" id="replay_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Reply</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/reply_contact_data">
                                <div class="modal-body">
                                 <?php if($rr['status']==0): ?>
                                <input type="text" class="form-control" name="admin_sub" placeholder="Subject">
                                
                                <br>
                                <textarea rows="10" class="form-control" placeholder="تفاصيل" required name="admin_msg"></textarea>
                                <br>
                                <input type="file" name="admin_doc">
                                <input type="hidden" value="<?= $rr['id'] ?>" name="id" />
                                <?php else: ?>
                                 <?= $rr['reply_dt'] ?>
                                 <br>
                                <?= $rr['admin_sub'] ?>
                                <br>
                                <br>
                                
                                <?= str_replace("\n",'<br>',$rr['admin_msg']) ?>
                                <br><br>
                                <?php if($rr['admin_doc']!=''): ?>
                                <a href="<?= $this->load->config->base_url() ?><?= $rr['admin_doc'] ?>">Download Attachment</a>
                                <?php endif ?>
                                <?php endif  ?>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <?php if($rr['status']==0): ?>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                <?php endif  ?>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                            <a onclick="return confirm('want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_msg/<?=  $rr['id'] ?>" class="btn  btn-danger-rgba">Delete</a>
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