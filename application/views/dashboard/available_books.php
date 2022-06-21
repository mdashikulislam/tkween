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
                                <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/available-books">
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
                                    الكتب المتاحة للطباعة
                                     
                                    </h5>	
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
      
                                    
                                        <table  class="table table-bordered">
                                            <thead>
                                            <tr style="background:#f2f3f7">
                                            
                                               
                                                <th width="20%"  >Book</th>
                                                <th> Size</th>
                                                <th>Paper Type</th>
                                                <th>Color</th>
                                                <th >Type</th>
                                                <th>Free Copies</th>
                                                <th>Allowed Copies</th>
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($rec as $rr): ?>
                                            <tr>
                                             
                                            
                                                <td>
                                                <?php if($rr['old_book']==0): ?>
                                                <a target="_blank" href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/printing/<?= $rr['id'] ?>">
                                                <?= $rr['book_name'] ?>
                                                </a>
                                                <?php else: ?>
                                               <span class="badge badge-warning"> <?= $rr['book_name'] ?></span>
                                                <?php endif ?>
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
                                                 <?php $free  = $this->db->query('select sum(free) as total from printing_orders  where   book_id= '.$rr['id'].' ')->result_array();?>
                                                  <a data-animation="zoomInUp" data-toggle="modal" data-target="#free_<?= $rr['id'] ?>"  class="btn btn-secondary-rgba"  >
                                                <?= $total_free =  $rr['free_copies']-$free[0]['total'] ?>
                                                </a>
                                                <div class="modal fade" id="free_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle-1">Printing List</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <table class="table table-bordered">
                                   	<tr>
                                    	<th>Printed free Copies</th>
                                        <TH>Action</TH>
                                    </tr>
                                     <?php $free_log  = $this->db->query('select * from printing_orders  where   book_id= '.$rr['id'].' ')->result_array();?>
                                    <?php foreach($free_log as $ff): ?>
                                    <tr>
                                    	<td><?= $ff['free'] ?></td>
                                        <td>
                                        <a href="<?= $this->load->config->base_url() ?>dashboard/delete_order_print/<?= $ff['id'] ?>"  class="btn btn-danger-rgba" >Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <tr>
                                    	<th>Total Free</th>
                                        <th>
                                        	<?= $rr['free_copies'] ?>
                                        </th>
                                    </tr>
                                     <tr>
                                    	<th>Total Printed free Copies</th>
                                        <th>
										<?php if( $free[0]['total']=='')
										{
											echo 0;
										}
										else
										{
											echo  $free[0]['total'];	
										}?>
										</th>
                                    </tr>
                                     <tr>
                                    	<th>Remaining Free Copies</th>
                                        <th>
                                        <?= $rr['free_copies']-$free[0]['total']  ?>
                                        </th>
                                    </tr>
                                    </table>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
												</td>
                                                <td>
                                                
                                                 <?php 
               
			   
			   
				 $allow  = $this->db->query('select sum(allow) as total from printing_orders  where   book_id= '.$rr['id'].' ')->result_array();
                                             $total = $allow[0]['total'] +$free[0]['total'];             
                                                            ?>
                                                            
                                                 <a data-animation="zoomInUp" data-toggle="modal" data-target="#allow_<?= $rr['id'] ?>"  class="btn btn-secondary-rgba"  >
                                               <?= $total_allow = $rr['allowed_copies']-$total ?>
                                                </a>
                                                <div class="modal fade" id="allow_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle-1">Printing List</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <table class="table table-bordered">
                                   	<tr>
                                    	<th>Printed free Copies</th>
                                        <TH>Action</TH>
                                    </tr>
                                     <?php 
               
				 $allow  = $this->db->query('select * from printing_orders  where   book_id= '.$rr['id'].' ')->result_array();
                                                          
                                                            ?>
                                    <?php foreach($allow as $ff): ?>
                                    <tr>
                                    	<td><?= $ff['allow'] + $ff['free'] ?></td>
                                        <td>
                                        <a href="<?= $this->load->config->base_url() ?>dashboard/delete_order_print/<?= $ff['id'] ?>"  class="btn btn-danger-rgba" >Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <tr>
                                    	<th>Total Allowed </th>
                                        <th>
                                        	<?= $rr['allowed_copies'] ?>
                                        </th>
                                    </tr>
                                     <tr>
                                    	<th>Total Sales and Distribution Copies</th>
                                        <th>
										<?php if( $total=='')
										{
											echo 0;
										}
										else
										{
											echo  $total;	
										}?>
										</th>
                                    </tr>
                                     <tr>
                                    	<th>Remaining Allowed Copies</th>
                                        <th>
                                       <?= $total_allow = $rr['allowed_copies']-$total ?>
                                        </th>
                                    </tr>
                                    </table>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                                
                 <?php $this->db->where('id',$rr['id'])->update('submitted_form',array('remaining_free_copies'=>$total_free,'remaining_printed_copies'=>$total_allow));  ?>
                                                 
                                                </td>
                                                
                                               
                                               <td >
                                                    <!--
                                                    <a  class="btn btn-secondary-rgba"  href="<?= $this->load->config->base_url() ?>dashboard/sales_order_list?book_id=<?= $rr['id'] ?>">Sales </a>

                                                    &nbsp;
                                                    <a  class="btn btn-secondary-rgba"  href="<?= $this->load->config->base_url() ?>dashboard/distribution_order?book_id=<?= $rr['id'] ?>">Distribution </a>-->
                                                    
                                                    <a data-animation="zoomInUp" data-toggle="modal" data-target="#correction_<?= $rr['id'] ?>"  class="btn btn-secondary-rgba"  >Printing </a>
                                                  
                                                  
                                                  <div class="modal fade" id="correction_<?= $rr['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle-1">Add Order</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_printing_number_data">
                                    <div class="modal-body">
                                   
                                    <label>Printed free Copies</label>
                                    <input required type="number" name="free" class="form-control">
                                     <input required type="hidden" name="book_id" value="<?= $rr['id'] ?>" class="form-control">
                                   <br />
                                    <label>Sales and Distribution Copies</label>
                                    <input  required type="text" name="allow" class="form-control">
                                   
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