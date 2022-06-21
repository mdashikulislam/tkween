<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    
                    
                    <style>
					.btn-group
					{
						display:none !important
					}
					</style>
                   
                   <?php $user = $this->db->where('id',$this->uri->segment(3))->get('users')->result_array(); ?>
                   
                    <div class="col-lg-12">
                    <div class="card" style="margin-bottom:100px;">
                    <div class="card-header">
                    <input type="date"  class="form-control" onchange="get_dt(this.value)" style="width:200px; float:left" />
                    <script>
					function get_dt(dt)
					{
						window.location= '<?= $this->load->config->base_url() ?>dashboard/user_contract/<?= $this->uri->segment(3) ?>/dt/'+dt;
					}
					</script>
                    <h3><?= $user[0]['name'] ?> Contracts</h3>
                    </div>
                    <div class="card-body">
                   
                                <div class="table-responsive">
  
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Contract ID</th>
                                            <th>Book Name</th>
                                             <th width="20%">Submission Date</th>
                                             <th>Details</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
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
                                            <a class="btn btn-secondary-rgba"  href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/processing/<?=  $rr['id'] ?>">Detail</a>
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