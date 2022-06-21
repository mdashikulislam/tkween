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
                            <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/printing">
                            <div class="input-group">
                            <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" id="button-addonSearch">
                            <i class="fa fa-search"></i></button>
                            </div>
                            <input type="search" value="<?=  $this->input->get('search') ?>" name="search" required="" class="form-control" placeholder="Search Contract" 
                            aria-label="Search" aria-describedby="button-addonSearch">   
                                                           
                            </div>
                            </form>
                            </div>
                            <h5 class="card-title">
                            	Printing</h5>	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th width="10%"> ID</th>
                                           <th>Contractorname</th>
                                             <th>authorname</th>
                                            <th width="20%" >Book Name</th>
                                             <th>Type</th>
                                              
                                             
                                             <th width="10%"> Date</th>
                                             <th  width="5%">Details</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                         <td>
										 <?= $rr['cid'] ?>
                                         </td>
                                        	 <td>
											<?php $user =  $this->db->where('id',$rr['admin_id'])->get('users')->result_array() ?>
											<?php if(count($user)==0): ?>
                                            Author
                                            <?php else: ?>
                                            <?= $user[0]['name'] ?>
                                            <?php endif ?>
                                            </td>
                                            
                                            <td>
											<?= $rr['name'] ?>
                                            </td>
                                            
                                            <td>
                                            <?= $rr['book_name'] ?>
                                            </td>
                                            <td>
                                            <?= $rr['package_type'] ?>
                                             <?php if($rr['type']==1): ?>
                                             <sub>(eBook)</sub>
                                            <?php else: ?>
                                             <sub>(pBook)</sub>
                                            <?php endif ?> 
                                            </td>
                                           
                                            
                                            <td>
											<?php
                                            $date=date_create($rr['printing_dt']);
                                            echo date_format($date,"d/m/Y");
                                            ?>
                                            </td>
                                            <td>
                                            <a  class="btn btn-secondary-rgba"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/printing/<?=  $rr['id'] ?>">Detail</a>
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