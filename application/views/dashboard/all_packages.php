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
                            <h5 class="card-title">الباقات</h5>	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>الباقة</th>
                                           <th>الإسم</th>
                                           <th>السعر</th>
                                           <th>نسبة المؤلف</th>
                                            <th>لون الكتاب</th>
                                             <th>نوع الكتاب</th>
                                            <th>الحالة</th>
                                            <th>Last Updated</th>
                                             <th width="15%">عمل</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                        <td>
                                        	<?php  $plan = $this->db->where('id',$rr['pid'])->get('books_type')->result_array(); ?>
                                            <?= $plan[0]['name'] ?>
                                        </td>
                                        <td><?= $rr['title'] ?></td>
                                        	 <td><?= $rr['price'] ?></td>
                                              <td><?= $rr['title'] ?></td>
                                               <td><?= $rr['color'] ?></td>
                                               <td><?= $rr['type'] ?></td>
                                           
                                             <td>
                                            <?php if($rr['status']==0): ?>
                                           <span class="badge badge-success">متاح</span>
                                    <?php else: ?>
                                     <span class="badge badge-warning">غير متاح</span>
                                    <?php endif ?>
                                            </td>
                                           
                                           <td>
                                            <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                           </td>
                                            <td><a href="<?= $this->load->config->base_url() ?>dashboard/edit_package_plan/<?= $rr['id'] ?>" class="btn btn-secondary-rgba">
                                            Edit</a>
                                            <a onclick="return confirm('want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_package/<?= $rr['id'] ?>" class="btn  btn-danger-rgba">Delete</a>
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