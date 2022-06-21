<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-5">
                        <div class="card m-b-30">
                          	
                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Edit Plan Type</h5>
                            </div>
                            <div class="card-body py-5">
                               
                                <form enctype="multipart/form-data" method="post" action="<?= $this->load->config->base_url() ?>dashboard/update_plan_type_data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Name</label>
                                        <input type="text" class="form-control" value="<?= $rec[0]['name'] ?>" name="name" required>
                                         <input type="hidden" class="form-control" value="<?= $rec[0]['id'] ?>" name="id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Size</label>
                                        <input type="text" class="form-control" name="des" value="<?= $rec[0]['des'] ?>"  required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label>
                                        <select class="form-control" name="type"  aria-describedby="emailHelp" >
                                        <option <?php if($rec[0]['type']==0): ?> selected="selected"<?php endif ?> value="0">Print Book</option>
                                        <option <?php if($rec[0]['type']==1): ?> selected="selected"<?php endif ?>  value="1">eBook</option>
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="form-control" name="status"  aria-describedby="emailHelp" >
                                        <option <?php if($rec[0]['status']==0): ?> selected="selected"<?php endif ?>  value="0">Active</option>
                                        <option <?php if($rec[0]['status']==1): ?> selected="selected"<?php endif ?>  value="1">In-active</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>