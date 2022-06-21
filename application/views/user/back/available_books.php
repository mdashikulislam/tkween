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
                            <form method="get" action="<?= $this->load->config->base_url() ?>user/printing">
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
                            	Available Books</h5>	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                            <th>Contract ID</th>
                                            <th>Author</th>
                                            <th >Book Name</th>
                                             <th>Book Size</th>
                                              <th>Paper Type</th>
                                              <th>Color</th>
                                               <th >Book Type</th>
                                             <th> Allowed Copies</th>
                                             <th> Printed Copies</th>
                                             <th>Date</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                         
                                         <td>
										  <a href="<?= $this->load->config->base_url() ?>user/contract_detail/printing/<?= $rr['id'] ?>">
										 <?= $rr['cid'] ?>
                                         </a>
                                         </td>
                                        	<td>
											<?php $user =  $this->db->where('id',$rr['author_id'])->get('users')->result_array() ?>
											
											<?php if(count($user)): ?>
                                            <a href="<?= $this->load->config->base_url() ?>user/author/<?= $user[0]['id'] ?>"><?= $user[0]['name'] ?></a>
                                            <?php else: ?>
                                            ---
                                            <?php endif ?>
                                            </td>
                                            
                                            <td>
                                            <?= $rr['book_name'] ?>
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
                                             <sub>(eBook)</sub>
                                            <?php else: ?>
                                             <sub>(pBook)</sub>
                                            <?php endif ?> 
                                            </td>
                                            <td>
											<?= $rr['allowed_copies'] ?>
                                            </td>
                                              <td>
											<?= $rr['printed_copies'] ?>
                                            </td>
                                            
                                            <td>
                                            <?php
                                            $date=date_create($rr['printing_dt']);
                                            echo date_format($date,"d/m/Y");
                                            ?></td>
                                           
                                            
                                            
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