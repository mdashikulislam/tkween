<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                    
                    <a class="btn btn-primary" href="<?= $this->load->config->base_url() ?>dashboard/old-books">Old Books</a>
         <a class="btn btn-primary" href="<?= $this->load->config->base_url() ?>dashboard/available-other-books">Other Books</a>
                    <br><br>
                   
                        <div class="card m-b-30">
                            <div class="card-header">
                            <div class="searchbar" style="    width: 400px; float:left">
                            <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/book-list">
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
                            	Archives</h5>	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                             <th>Contractorname</th>
                                             <th>authorname</th>
                                            <th width="20%" >Book Name</th>
                                           
                                              <th>Price</th>
                                               <th >Publisher</th>
                                             <th width="10%"> Date</th>
                                             <th  width="5%">Details</th>
                                             <th  width="5%">Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                         
                                        
                                        	<td>
											<?php $user =  $this->db->where('id',$rr['author_id'])->get('users')->result_array() ?>
											
											<?php if(count($user)): ?>
                                            Author
                                            <?php else: ?>
                                            Admin
                                            <?php endif ?>
                                            </td>
                                            
                                            <td>
											<?= $rr['name'] ?>
                                            </td>
                                            
                                            <td>
                                            <?= $rr['book_name'] ?>
                                            </td>
                                            
                                           
                                            <td>
                                            <?= $rr['sale_price'] ?>
                                            </td>
                                            <td>
                                            <?= $rr['publisher'] ?>
                                            </td>
                                            <td>
											<?php
                                            $date=date_create($rr['printing_dt']);
                                            echo date_format($date,"d/m/Y");
                                            ?>
                                            </td>
                                            <td>
                                            <a class="btn-secondary-rgba"  href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/printing/<?=  $rr['id'] ?>">Detail</a>
                                            </td>
                                            <td>
                                            
                                            <a class="btn-secondary-rgba" href="#"   data-animation="zoomInUp" data-toggle="modal" data-target="#correction_<?= $rr['id'] ?>">
                                           Edit
                                            </a>
                                <div class="modal fade" id="correction_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Edit Price</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_price_data">
                                <div class="modal-body">
                                <input type="hidden" value="<?= $rr['id'] ?>" name="id">
                                <label>Price</label>
                                <input type="text" name="sale_price" required value="<?= $rr['sale_price'] ?>" class="form-control">
                                <br />
                                <label>Publisher</label>
                                <input type="text" name="publisher" required  value="<?= $rr['publisher'] ?>" class="form-control">
                              
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