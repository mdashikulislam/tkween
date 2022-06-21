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
                            	Users 
                                 <a href="#" style="float:left"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> Add New
                                            </a>
                                            </h5>
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Add User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_users_data">
                                <div class="modal-body">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                                <br />
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                                <br />
                                <label>Passsword</label>
                                <input type="password" name="pass" class="form-control">
                                 <br />
                                <label>Tag</label>
                                <input type="checkbox" value="1" name="tag" >
                                 <br />
                                <label>Branch</label>
                                    <select class="form-control" name="branch" required="">
                                    <?php $branches =  $this->db->get('branches')->result_array() ?>
                                    <?php foreach($branches as $bb): ?>
                                    <option value="<?= $bb['id'] ?>" <?php if($rec[0]['branch_id']==$bb['id']): ?> selected="selected"<?php endif ?>><?= $bb['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
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
                                            <th>Email</th>
                                             <th>Branch</th>
                                              <th>Tag</th>
                                             <th>Date</th>
                                              <th>Status</th>
                                               <th>Role</th>
                                                 <th>Contracts</th>
                                             <th width="15%">Action </th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        
                                        <td><?= $rr['name'] ?></td>
                                         <td><?= $rr['email'] ?></td>
                                         <td>
                                     <?php  $branch_name = $this->db->where('id', $rr['branch'])->get('branches')->result_array() ?>
                                    
                                    <?= $branch_name[0]['name'] ?>
                                         </td>
                                         <td>
										 <?php if($rr['tag']==1): ?>
										متابع
                                         <?php else: ?>
                                         ---
                                         <?php endif ?>
                                         </td>
                                          <td>
                                          <?php
                            $date=date_create($rr['dt']);
                            echo date_format($date,"d/m/Y");
                            ?>
                                          </td>
                                          
                                        	 <td>
                                             <?php if($rr['status']==0): ?>
                                <label class="badge badge-success">Active</label>
                                <?php elseif($rec[0]['status']==1): ?>
                                <label class="badge badge-warning">Pending</label>
                                <?php endif ?>
                                             </td>
                                           <td>
                                           <a href="#"  class="btn btn-secondary-rgba"   data-animation="zoomInUp" data-toggle="modal" data-target="#role_<?= $rr['id'] ?>">
                                          Roles
                                            </a>
                                <div class="modal fade" id="role_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Edit Roles</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_users_role_data">
                                <div class="modal-body" >
                               	<?php $roles =  $this->db->get('limitations')->result_array(); ?>
                               <input type="hidden" value="<?= $rr['id'] ?>" name="user_id" />
							   <?php foreach($roles as $rl): ?>
                               <p>
                              <?php $user_role =  $this->db->where(array('page_id'=>$rl['id'],'user_id'=>$rr['id']))->get('user_roles')->result_array() ?>
                              
                               	<input type="checkbox" <?php if(count($user_role)): ?> checked="checked"<?php endif ?> name="page_id[]" value="<?= $rl['id'] ?>" />  &nbsp; <?= $rl['name'] ?>
                               </p>
                               <?php endforeach ?>
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
                                           <td>
                                          <a href="<?= $this->load->config->base_url() ?>dashboard/user_contract/<?= $rr['id'] ?>" class="btn btn-secondary-rgba">
                                          (<?= $this->db->where('admin_id',$rr['id'])->get('submitted_form')->num_rows(); ?>)
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
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_users_data">
                                <div class="modal-body">
                                <input type="hidden" value="<?= $rr['id'] ?>" name="id">
                                <label>Name</label>
                                <input type="text" name="name" value="<?= $rr['name'] ?>" class="form-control">
                                <br />
                                <label>Email</label>
                                <input type="text" name="email"  value="<?= $rr['email'] ?>" class="form-control">
                                <br />
                                <label>Passsword</label>
                                <input type="password" name="pass" value="<?= $rr['pass'] ?>" class="form-control">
                                 <br />
                                <label>Tag</label>
                                <input type="checkbox" value="1" <?php if($rr['tag']==1): ?> checked<?php endif ?> name="tag" >
                                <br />
                                <label>Branch</label>
                                    <select class="form-control" name="branch" required="">
                                    <?php $branches =  $this->db->get('branches')->result_array() ?>
                                    <?php foreach($branches as $bb): ?>
                                    <option value="<?= $bb['id'] ?>" <?php if($rr['branch']==$bb['id']): ?> selected="selected"<?php endif ?>><?= $bb['name'] ?></option>
                                    <?php endforeach ?>
                                    
                                    </select>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                            
                                            <a onclick="return confirm('want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_user/<?= $rr['id'] ?>" class="btn  btn-danger-rgba">Delete</a>
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