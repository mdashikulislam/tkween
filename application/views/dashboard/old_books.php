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
                            <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/old-books">
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
                            	Old Books
                                <a href="#"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> 
                                            </a>
                                </h5>	
                                
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Add</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_old_book_data_data">
                                <div class="modal-body">
                                
                                <label>Book Name</label>
                                <input type="text" name="book_name" required class="form-control">
                               <br />
                               <label>Color</label>
                                <input type="text" name="package_color"required class="form-control">
                               <br />
                               <label>Size</label>
                                <input type="text" name="package_size" required class="form-control">
                               <br />
                               <label>Ilmi / Adbi</label>
                                <input type="text" name="package_type" required class="form-control">
                                <br />
                                 <br />
                               <label>Type</label>
                                <select name="type" required class="form-control">
                                <option value="1">Ebook</option>
                                <option value="0">pbook</option>
                                </select>
                               <br />
                               <label>Paper</label>
                                <input type="text" name="paper_type" required class="form-control">
                               <br />
                               <label>PDF</label>
                                <input type="file" name="printing_doc" required class="form-control">
                               <br />
                                <label>Allowed Copies</label>
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
                                        
                                           
                                            <th width="20%">إسم الكتاب</th>
                                            <th>مقاس الكتاب</th>
                                            <th>نوع الورق</th>
                                            <th>لون الكتاب</th>
                                            <th >نوع الكتاب</th>
                                            <th>العدد المتاح للطباعة</th>
                                            <th>عدد النسخ المطبوعة</th>
                                            <th>Remaining</th>
                                            <th>Last Updated</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                         
                                        
                                            <td>
                                            <?= $rr['book_name'] ?>
                                             <a style="float:left" title="Download" download href="<?= $this->load->config->base_url() ?><?= $rr['printing_doc'] ?>"><i class="fa fa-download"></i></a>
                                            </td>
                                            <td>
                                            <?= $rr['package_size'] ?>
                                            </td>
                                           <td><?= $rr['paper_type'] ?></td>
                                            <td>
                                            <?= $rr['package_color'] ?>
                                            </td>
                                            <td>
                                            <?= $rr['package_type'] ?>
                                <?php if($rr['type']==1): ?>
                                             <sub>(إلكتروني)</sub>
                                            <?php else: ?>
                                             <sub>(ورقي)</sub>
                                            <?php endif ?> 
                                            </td>
                                            <td>
											<?= $rr['allowed_copies'] ?>
                                            </td>
                                              <td>
											
										<?php 
			$copies  = $this->db->query('select sum(copies) as total from orders  where type!=1 and status = 1 and  book_id= '.$rr['id'].' ')->result_array();
														echo number_format($copies[0]['total']);
														?>
                                                        
                                            </td>
                                            <td>
                                            <?= $rr['allowed_copies']-$copies[0]['total'] ?>
                                            </td>
                                            <td>
                                             <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                            </td>
                                           
                                           <td>
                                          		<a href="#"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction_<?= $rr['id'] ?>">
                                            Edit
                                            </a>
                                            <a onclick="return confirm('Want to Delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_old_book/<?= $rr['id'] ?>"  class="btn btn-danger-rgba" >
                                            Delete
                                            </a>
                                              <div class="modal fade" id="correction_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_old_book_data_data">
                                <div class="modal-body">
                                
                                <label>Book Name</label>
                                <input type="text" name="book_name" value="<?= $rr['book_name'] ?>" required class="form-control">
                                 <input type="hidden" name="id" value="<?= $rr['id'] ?>" required class="form-control">
                               <br />
                               <label>Color</label>
                                <input type="text" name="package_color" value="<?= $rr['package_color'] ?>"  required class="form-control">
                               <br />
                               <label>Size</label>
                                <input type="text" name="package_size"  value="<?= $rr['package_size'] ?>"  required class="form-control">
                               <br />
                               <label>Ilmi / Adbi</label>
                                <input type="text" name="package_type" value="<?= $rr['package_type'] ?>"  required class="form-control">
                                <br />
                                 <br />
                               <label>Type</label>
                                <select name="type" required class="form-control">
                                <option <?php if($rr['type']==1): ?> selected="selected"<?php endif ?> value="1">Ebook</option>
                                <option <?php if($rr['type']==0): ?> selected="selected"<?php endif ?>  value="0">pbook</option>
                                </select>
                               <br />
                               <label>Paper</label>
                                <input type="text" name="paper_type"  value="<?= $rr['paper_type'] ?>"  required class="form-control">
                               <br />
                               <label>PDF</label>
                                <input type="file" name="printing_doc"  class="form-control">
                               <br />
                                <label>Allowed Copies</label>
                                <input type="number" name="allowed_copies"  value="<?= $rr['allowed_copies'] ?>"  required class="form-control">
                               
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