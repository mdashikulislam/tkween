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
                            	Plans Types</h5>	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Name</th>
                                           <th>Size</th>
                                           <th>Type</th>
                                            <th>Status</th>
                                            <th>Last Updated</th>
                                             <th width="15%">Action </th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        <td><?= $rr['name'] ?></td>
                                        	 <td><?= $rr['des'] ?></td>
                                            <td>
                                            <?php if($rr['type']==0): ?>
                                            Print Book
                                    <?php elseif($rr['type']==1): ?>
                                    eBook
                                    <?php endif ?>
                                            </td>
                                             <td>
                                            <?php if($rr['status']==0): ?>
                                           <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                     <span class="badge badge-warning">In-Active</span>
                                    <?php endif ?>
                                            </td>
                                           <td>
                                            <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                           </td>
                                            <td><a href="<?= $this->load->config->base_url() ?>dashboard/edit_plan_type/<?= $rr['id'] ?>" class="btn btn-secondary-rgba">
                                            Edit</a>
                                            <a href="<?= $this->load->config->base_url() ?>dashboard/delete_plan_type/<?= $rr['id'] ?>" onclick="return confirm('want to delete?')" class="btn  btn-danger-rgba">Danger</a>
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