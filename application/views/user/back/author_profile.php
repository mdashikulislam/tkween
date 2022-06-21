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
                                            <a href="<?= $this->load->config->base_url() ?>user/edit-author/<?= $rec[0]['id'] ?>" class="btn btn-primary-rgba"><i class="fa fa-edit mr-2"></i> Edit</a>
                                            
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="p-1">Full Name :</th>
                                                        <td class="p-1"><?= $rec[0]['name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Email :</th>
                                                        <td class="p-1"><?= $rec[0]['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Contact :</th>
                                                        <td class="p-1"><?= $rec[0]['phone'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Member Since :</th>
                                                        <td class="p-1"><?= $rec[0]['dt'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Password :</th>
                                                        <td class="p-1">*****</td>
                                                    </tr>
                                                     <tr>
                                                        <th scope="row" class="p-1">Status :</th>
                                                        <td class="p-1">
                                                        <?php if($rec[0]['status']==0): ?>
                                    <label class="badge badge-success">Active</label>
                                    <?php elseif($rec[0]['status']==1): ?>
                                    <label class="badge badge-warning">In-active</label>
                                    <?php endif ?>
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
                    <div class="col-lg-7">
                    <div class="card m-b-30">
                                   
                                    <div class="card-body">
                                        <div class="table-responsive">
    <table class="table table-borderless">
    
    <tbody>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=total">
    <span class="badge badge-danger-inverse">Total Contracts</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc1 =$this->db->where('author_id',$rec[0]['id'])->get('submitted_form')->result_array();
    
    echo  count($fc1);$c1=$fc1;
    ?>
    <?php if(count($fc1))
    {
    $start = 100;
    }
    else
    {
    $start = 0;
    }?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $start ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=new">
    <span class="badge badge-danger-inverse">Awaiting Contracts</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc2= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>0))->get('submitted_form')->result_array();
    echo count($fc2); $c2=$fc2;
    ?>
    </td>
    <td>
    
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-danger" role="progressbar" style="width:     <?= count($c2)/count($c1)*100 ?>%;" aria-valuenow=" " aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=pending">
    <span class="badge badge-danger-inverse">Pending Contracts</span>
    </a>
    </td>
    <td width="10%">
    <?php  $fc3= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>1))->get('submitted_form')->result_array();
    echo 	count($fc3);$c3=$fc3 ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-danger" role="progressbar" style="width:<?=  count($c3)/count($c1)*100 ?>%;" aria-valuenow=" " aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=inprogress">
    <span class="badge badge-danger-inverse">Inprogress Contracts</span>
    </a>
    </td>
    <td width="10%">
    <?php  $fc4= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2))->get('submitted_form')->result_array();
    echo	 count($fc4); $c4=$fc4;
    ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-danger" role="progressbar" style="width:<?=  count($c4)/ count($c1)*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=printed">
    <span class="badge badge-warning-inverse">Printed Book Contracts</span>
    </a>	
    </td>
    <td width="10%">
    <?php $fc5=  $this->db->where(array('author_id'=>$rec[0]['id'],'type'=>0))->get('submitted_form')->result_array();
    echo 	count($fc5);$c5=$fc5;
    ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=  count($c5)/ count($c1)*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=ebook">
    <span class="badge badge-warning-inverse">Ebook Contracts</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc6= $this->db->where(array('author_id'=>$rec[0]['id'],'type'=>1))->get('submitted_form')->result_array();
    
    echo  count($fc6); $c6=$fc6 ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=  count($c6)/ count($c1)*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=total_pending_pyament">
    <span class="badge badge-success-inverse">Total Amount</span>
    </a>
    </td>
    <td width="10%">
    <?php $f= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1))->get('submitted_form')->num_rows(); ?>
    
    <?php 
    $price  = $this->db->query('select sum(price) as total from submitted_form  where author_id ="'.$rec[0]['id'].'" and  status= 2')->result_array();
    $p= $price[0]['total'];
    echo  number_format($price[0]['total']);
    ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-success" role="progressbar" style="width: <?= $start ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=pending_payment">
    <span class="badge badge-success-inverse">Pending Amount</span>
    </a>
    </td>
    <td width="10%">
    <?php 
    $price  = $this->db->query('select sum(price) as total from submitted_form  where author_id ="'.$rec[0]['id'].'" and  status= 2 and payment_status = 0')->result_array();
    $pp = $price[0]['total'];
    echo number_format($price[0]['total']);
    ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-success" role="progressbar" style="width: <?= $pp/$p*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=paid">
    <span class="badge badge-success-inverse">Paid</span>
    </a>
    </td>
    <td width="10%">
    <?php 
    $price  = $this->db->query('select sum(price) as total from submitted_form  where author_id ="'.$rec[0]['id'].'" and  status= 2 and payment_status = 1')->result_array();
    $ppp=$price[0]['total'];
    echo number_format($price[0]['total']);
    ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-success" role="progressbar" style="width: <?= $ppp/$p*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=signed">
    <span class="badge badge-secondary-inverse">Awaiting Books</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc7= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>0))->get('submitted_form')->result_array(); 
    echo  count($fc7); $c7=$fc7?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=  count($c7)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
     <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=correction">
    <span class="badge badge-secondary-inverse">Corrections</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc8=$this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>1,'correction_status!='=>2))->get('submitted_form')->result_array();
    echo count($fc8); $c8= $fc8;
    ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=  count($c8)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
        <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=innerdesign">
    <span class="badge badge-secondary-inverse">Inner Design</span>
    </a>
    </td>
    <td width="10%">
    <?php  $fc91=$this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>1,'correction_status'=>2,'inner_design_st!='=>2))->get('submitted_form')->result_array();
    echo count($fc91); $c91=$fc91; ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=  count($c91)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=bookcover">
    <span class="badge badge-secondary-inverse">Books Cover</span>
    </a>
    </td>
    <td width="10%">
    <?php  $fc9=$this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>1,'correction_status'=>2,'inner_design_st'=>2,'cover_status!='=>2))->get('submitted_form')->result_array();
    echo count($fc9); $c9=$fc9; ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=  count($c9)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=prototype1">
    <span class="badge badge-secondary-inverse">Prototype (v1)</span>
    </a>
    </td>
    <td width="10%">
    <?php  $fc10=$this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>1,'correction_status'=>2,'inner_design_st'=>2,'cover_status'=>2,'prototype_status!='=>2))->get('submitted_form')->result_array();
    echo count($fc10); $c10=$fc10; ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=  count($c10)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=ministry">
    <span class="badge badge-info-inverse">Ministry</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc11= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>1,'correction_status'=>2,'inner_design_st'=>2,'cover_status'=>2,'prototype_status'=>2, 'ministry_status!='=>2))->get('submitted_form')->result_array();
    
    echo count($fc11); $c11=$fc11; ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-info" role="progressbar" style="width: <?=  count($c11)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=prototype2">
    <span class="badge badge-info-inverse">Prototype (v2)</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc12= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>1,'correction_status'=>2,'inner_design_st'=>2,'cover_status'=>2,'prototype_status'=>2, 'ministry_status'=>2,'prototype_status2!='=>2))->get('submitted_form')->result_array();
    echo  count($fc12); $c12=$fc12; ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-info" role="progressbar" style="width: <?=  count($c12)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
     <tr>
    <td width="40%">
    <a href="<?= $this->load->config->base_url() ?>user/author/<?= $rec[0]['id'] ?>?filter=printing">
    <span class="badge badge-info-inverse">Printing</span>
    </a>
    </td>
    <td width="10%">
    <?php $fc13= $this->db->where(array('author_id'=>$rec[0]['id'],'status'=>2,'payment_status'=>1,'author_sign'=>1,'correction_status'=>2,'inner_design_st'=>2,'cover_status'=>2,'prototype_status'=>2, 'ministry_status'=>2,'prototype_status='=>2,'printing_status!='=>2))->get('submitted_form')->result_array();
    echo  count($fc13); $c13=$fc13; ?>
    </td>
    <td>
    <div class="progress" style="height: 8px;">
    <div class="progress-bar bg-info" role="progressbar" style="width: <?=  count($c13)/$f*100 ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </td>                                                       
    </tr>
    








      
    </tbody>
    </table>
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
						if($this->input->get('filter')=='total')
						{
							$fart = $c1;
						}
						if($this->input->get('filter')=='new')
						{
							$fart = $c2;
						}
						if($this->input->get('filter')=='pending')
						{
							$fart = $c3;
						}
						if($this->input->get('filter')=='inprogress')
						{
							$fart = $c4;
						}
						if($this->input->get('filter')=='printed')
						{
							$fart = $c5;
						}
						if($this->input->get('filter')=='ebook')
						{
							$fart = $c6;
						}
						if($this->input->get('filter')=='total_pending_pyament')
						{
							$fart = $c1;
						}
						if($this->input->get('filter')=='pending_payment')
						{
							$fart = $c1;
						}
						if($this->input->get('filter')=='paid')
						{
							$fart = $c1;
						}
						if($this->input->get('filter')=='signed')
						{
							$fart = $c7;
						}
						if($this->input->get('filter')=='correction')
						{
							$fart = $c8;
						}
						if($this->input->get('filter')=='innerdesign')
						{
							$fart = $c91;
						}
						if($this->input->get('filter')=='bookcover')
						{
							$fart = $c9;
						}
						if($this->input->get('filter')=='prototype1')
						{
							$fart = $c10;
						}
						if($this->input->get('filter')=='ministry')
						{
							$fart = $c11;
						}
						if($this->input->get('filter')=='prototype2')
						{
							$fart = $c12;
						}
						if($this->input->get('filter')=='printing')
						{
							$fart = $c13;
						}
						
						if($this->input->get('filter')=='')
						{
							$fart = $this->db->where('author_id',$rec[0]['id'])->get('submitted_form')->result_array(); ;
						}
					  ?>
                    
                    <div class="col-lg-12">
                    <div class="card" style="margin-bottom:100px;">
                    <div class="card-body">
                   
                                <div class="table-responsive">
  
                                
                                    <table id="datatable-buttons" class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Contract ID</th>
                                            <th>Book Name</th>
                                             <th width="20%">Submission Date</th>
                                             <th>Details</th>
                                            
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
                                            <a  href="<?= $this->load->config->base_url() ?>user/contract_detail/processing/<?=  $rr['id'] ?>">Detail</a>
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