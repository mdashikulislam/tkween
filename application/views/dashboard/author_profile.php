<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-4">
                        <div class="card m-b-30">
                          	
                            <div class="card m-b-30">
                            <div class="card-body py-5">
                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                    <?php if($rec[0]['pic']==''): ?>
                                        <img src="<?= $this->load->config->base_url() ?>assets/images/users/girl.svg" class="img-fluid mb-3" alt="user">
                                        <?php else: ?>
                                        <img src="assets/images/users/girl.svg" class="img-fluid mb-3" alt="user">
                                        <?php endif ?>
                                    </div>
                                    <div class="col-lg-9">
                                        <h4><?= $rec[0]['name'] ?></h4>
                                        <p><?= $rec[0]['email'] ?></p>
                                        <div class="button-list mt-4 mb-3">
                                            <a href="<?= $this->load->config->base_url() ?>dashboard/edit-author/<?= $rec[0]['id'] ?>" class="btn btn-primary-rgba"><i class="fa fa-edit mr-2"></i> Edit</a>
                                            
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="p-1">الإسم: </th>
                                                        <td class="p-1"><?= $rec[0]['name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">البريد الإلكتروني: </th>
                                                        <td class="p-1"><?= $rec[0]['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">الهاتف: </th>
                                                        <td class="p-1"><?= $rec[0]['phone'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">تاريخ التسجيل: </th>
                                                        <td class="p-1"><?= $rec[0]['dt'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">الرمز السري: </th>
                                                        <td class="p-1">*****</td>
                                                    </tr>
                                                     <tr>
                                                        <th scope="row" class="p-1">الحالة: </th>
                                                        <td class="p-1">
                                                        <?php if($rec[0]['status']==0): ?>
                                    <label class="badge badge-success">Active</label>
                                    <?php elseif($rec[0]['status']==1): ?>
                                    <label class="badge badge-warning">In-active</label>
                                    <?php endif ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Last Updated : </th>
                                                        <td class="p-1">
                                                         <?php
                                            $date=date_create($rec[0]['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                            <br /><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <style>
					.btn-group
					{
						display:none !important
					}
					</style>
                    <?php
						$fart = $this->db->where('author_id',$rec[0]['id'])->get('submitted_form')->result_array(); ;
						
					  ?>
                    
                    <div class="col-lg-8">
                    <div class="card" style="margin-bottom:100px;">
                    <div class="card-body">
                   
                                <div class="table-responsive">
  
                                
                                    <table id="datatable-buttons" class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>رقم العقد</th>
                                            <th>إسم الكتاب</th>
                                             <th width="20%">تاريخ إنشاء العقد</th>
                                             <th>التفاصيل</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($fart as $rr): ?>
                                        <tr>
                                        <td><?= $rr['cid'] ?></td>
                                        	<td>
											<?= $rr['book_name'] ?>
                                            </td>
                                            
                                            
                                            <td>
                                            
                                             <?php
                            $date=date_create($rr['dt']);
                            echo date_format($date,"d/m/Y");
                            ?>
                                            </td>
                                            <td>
                                            <a class="btn btn-secondary-rgba"  href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/processing/<?=  $rr['id'] ?>">التفاصيل</a>
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