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
                                <h5 class="card-title">Edit Plan Package</h5>
                            </div>
                            <div class="card-body py-5">
                               
                                <form enctype="multipart/form-data" method="post" action="<?= $this->load->config->base_url() ?>dashboard/update_plan_package_data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Package</label>
                                        <select class="form-control" name="pid"  aria-describedby="emailHelp" >
                                        <?php $plan  = $this->db->get('books_type')->result_array(); ?>
                                       	<?php foreach($plan as $pp): ?>
                                        <option  <?php if($rec[0]['pid']==$pp['id']): ?> selected="selected"<?php endif ?>   value="<?= $pp['id'] ?>"><?= $pp['name'] ?></option>
                                        <?php endforeach ?>
                                        </select>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="text" class="form-control" value="<?=$rec[0]['price'] ?>" name="price"  required>
                                         <input type="hidden" class="form-control" value="<?=$rec[0]['id'] ?>" name="id"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Percentage</label>
                                        <input type="text" class="form-control" name="title" value="<?=$rec[0]['title'] ?>"   required>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Color</label>
                                        <input type="text" class="form-control" name="color"  value="<?=$rec[0]['color'] ?>"  required>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label>
                                        <input type="text" class="form-control" name="type" value="<?=$rec[0]['type'] ?>"   required>
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