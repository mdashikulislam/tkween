<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                      <?php $contract =  $this->db->order_by('cid')->get('submitted_form')->result_array(); ?>
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                            <div class="searchbar" style="    width: 400px; float:left">
                            <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/tracking_log">
                            <div class="input-group">
                            <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" id="button-addonSearch">
                            <i class="fa fa-search"></i></button>
                            </div>
                            <select value="<?=  $this->input->get('search') ?>" name="search" required="" class="form-control" placeholder="Search Contract Log" 
                            aria-label="Search" aria-describedby="button-addonSearch">  
                            	 <?php foreach($contract as $cc): ?>
                                <option value="<?= $cc['id'] ?>"><?= $cc['cid'] ?></option>
                                <?php endforeach ?>
                            </select> 
                                                           
                            </div>
                            </form>
                            </div>
                            <h5 class="card-title">
                            	Contract Log 
                                 <a href="#"   class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> 
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
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_log_data">
                                <div class="modal-body">
                                <label>Contract</label>
                                <select class="form-control" name="id">
                              
                                <?php foreach($contract as $cc): ?>
                                <option value="<?= $cc['id'] ?>"><?= $cc['cid'] ?></option>
                                <?php endforeach ?>
                                </select>
                                <br />
                                <label>User</label>
                                <input type="text" required name="name" class="form-control">
                                <br />
                                <label>Activity</label>
                                <input type="text" required name="activity" class="form-control">
                                <br />
                                <label>Date</label>
                                <input type="date" required name="dt" class="form-control">
                                <br />
                                <label>Time</label>
                                <input type="time" required name="tm" class="form-control">
                                <input type="hidden" name="url" value="<?= $this->uri->segment(4) ?>"  class="form-control">
                                
                                 <input type="hidden" name="url_type" value="all"  class="form-control">
                                
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
                                           <th>Contract ID</th>
                                           <th>User</th>
                                            <th>Activity</th>
                                             <th>Date</th>
                                             <th>Last Updated</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        <td>
                                        <?php $contract =  $this->db->where('id',$rr['pid'])->get('submitted_form')->result_array(); ?>
                                        <a target="_blank" href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/processing/<?= $contract[0]['id'] ?>"><?= $contract[0]['cid'] ?></a>
                                        </td>
                                        <td>
										
										<?= $rr['user'] ?>
                                        
                                        </td>
                                         <td><?= $rr['activity'] ?></td>
                                          <td>
										  <?php
                                            $date=date_create($rr['dt']);
                                            echo date_format($date,"d/m/Y");
                                            ?>
                                          - <?= $rr['tm'] ?></td>
                                        	
                                           <td>
                                            <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
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