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
                            <div class="searchbar" style="    width: 400px; float:left">
                            <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/available-other-books">
                            <div class="input-group">
                            <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" id="button-addonSearch">
                            <i class="fa fa-search"></i></button>
                            </div>
                            <input type="search" value="<?=  $this->input->get('search') ?>" name="search" required="" class="form-control" placeholder="Search Book" 
                            aria-label="Search" aria-describedby="button-addonSearch">   
                                                           
                            </div>
                            </form>
                            </div>
                            <h5 class="card-title">
                            	كتب اخرى متاحة للطباعة
                                <a href="#"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> 
                                            </a>
                                </h5>	
                                
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">إضافة كتاب</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_other_book_data_data">
                                <div class="modal-body">
                                
                                <label>إسم الكتاب</label>
                                <input type="text" name="name" required class="form-control">
                               <br />
                               <label>لون الكتاب</label>
                                <input type="text" name="color"required class="form-control">
                               <br />
                               <label>مقاس الكتاب</label>
                                <input type="text" name="size" required class="form-control">
                               <br />
                               <label>نوع الكتاب</label>
                                <input type="text" name="book_type" required class="form-control">
                               <br />
                               <label>نوع الورق</label>
                                <input type="text" name="paper" required class="form-control">
                               <br />
                               <label>PDF</label>
                                <input type="file" name="pdf" required class="form-control">
                               <br />
                                <label>عدد النسخ للطباعة</label>
                                <input type="number" name="allowed_copies" required class="form-control">
                               
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                                <button type="submit" class="btn btn-default" >إرسال</button>
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
                                            <th >إسم الكتاب</th>
                                             <th>مقاس الكتاب</th>
                                             <th>لون الكتاب</th>
                                              <th>نوع الورق</th>
                                               <th >نوع الكتاب</th>
                                             <th>نسخ متاحة للطباعة</th>
                                             <th>عدد النسخ المطبوعة</th>
                                             <th>Remaing</th>
                                             <th>الطلب</th>
                                            <th>عمل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                         
                                        
                                            <td>
                                            <?= $rr['name'] ?>
                                            <a style="float:left" download href="<?= $this->load->config->base_url() ?><?= $rr['pdf'] ?>"><i class="fa fa-download"></i></a>
                                            </td>
                                            <td>
                                            <?= $rr['size'] ?>
                                            </td>
                                           <td><?= $rr['color'] ?></td>
                                            <td>
                                            <?= $rr['paper'] ?>
                                            </td>
                                            <td>
                                            <?= $rr['book_type'] ?>
                                            </td>
                                            <td>
											<?= $rr['allowed_copies'] ?>
                                            </td>
                                              <td>
											
										<?php 
			$copies  = $this->db->query('select sum(copies) as total from orders  where type = 1  and status = 1  and  book_id= '.$rr['id'].' ')->result_array();
														echo number_format($copies[0]['total']);
														?>
                                                        
                                            </td>
                                            <td>
                                            <?= $rr['allowed_copies']-$copies[0]['total'] ?>
                                            </td>
                                            
                                           
                                           <td>
                                          		<a class="btn btn-secondary-rgba"  href="<?= $this->load->config->base_url() ?>dashboard/other_orders_list?book_id=<?= $rr['id'] ?>"><?= $this->db->where(array('book_id'=>$rr['id'],'type'=>1))->get('orders')->num_rows() ?> </a>
                                               
                                           </td>
                                           <td>
                                         
                                           
                                            <a href="#"  class="btn btn-secondary-rgba"  data-animation="zoomInUp" data-toggle="modal" data-target="#correction_<?= $rr['id'] ?>">
                                            Edit
                                            </a>
                                             <a class="btn btn-danger-rgba"  onclick="return confirm('want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_other_book/<?= $rr['id'] ?>">Delete</a>
                                            
                                           <div class="modal fade" id="correction_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">تعديل الكتاب</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_other_book_data_data">
                                <div class="modal-body">
                                
                                <label>إسم الكتاب</label>
                                <input type="text" name="name" required value="<?= $rr['name'] ?>" class="form-control">
                                <input type="hidden" name="id" value="<?= $rr['id'] ?>" class="form-control">
                               <br />
                               <label>Color</label>
                                <input type="text" name="color" required value="<?= $rr['color'] ?>"  class="form-control">
                               <br />
                               <label>مقاس الكتاب</label>
                                <input type="text" name="size" required value="<?= $rr['size'] ?>"  class="form-control">
                               <br />
                               <label>نوع الكتاب</label>
                                <input type="text" name="book_type" required value="<?= $rr['book_type'] ?>"  class="form-control">
                               <br />
                               <label>نوع الورق</label>
                                <input type="text" name="paper" required value="<?= $rr['paper'] ?>"  class="form-control">
                               <br />
                               <label>PDF</label>
                                <input type="file" name="pdf" required class="form-control">
                               <br />
                                <label>النسخ المتاحة للطباعة</label>
                                <input type="number"  required name="allowed_copies" value="<?= $rr['allowed_copies'] ?>"  class="form-control">
                               
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                                <button type="submit" class="btn btn-default" >إرسال</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
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