<!-- Start Breadcrumbbar -->                    
           
           <?php $rec =  $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array(); ?>
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                    <?php $this->load->view('error_msg') ?>
                     <div class="card bg-primary-rgba m-b-30">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h5 class="card-title text-primary mb-1">مرحبا <?= $rec[0]['name'] ?></h5>
                                                <p class="mb-0 text-primary font-14">"هذا الموقع تجريبي قيد التطوير"</p>
                                                <br />
                                                 <a style="background:#830b0d !important; border-color:#830b0d !important" href="<?= $this->load->config->base_url() ?>user/packages" class="btn btn-primary">إختر باقة كتابك من هنا</a>
                                            </div>
                                            <div class="col-4 text-left">
                                                <img src="<?= $this->load->config->base_url() ?>assets/images/general/sun.svg" class="img-fluid sun-img" alt="sun">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                    </div>
                    
                    <div class="col-lg-12">
                    <div class="row">
                      <?php foreach($contract as $rr): ?>
                     <div class="col-md-4 col-lg-4 col-xl-4">
                        <div class="card  border-secondary m-b-30">
                           
                            <div class="card-body">
                            <span style="float:left" class="badge badge-secondary">
                                <?php 
	if($rr['status']==0 && $rr['payment_status']==0 && $rr['author_sign']==0 && $rr['correction_status']==0 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['printing_status']==0)
	{
		echo 'New Contract';
	}
	elseif($rr['status']==1 && $rr['payment_status']==0 && $rr['author_sign']==0 && $rr['correction_status']==0 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['printing_status']==0)
	{
		echo 'Contract Pending ';
	}
	elseif($rr['status']==2 && $rr['payment_status']==0 && $rr['author_sign']==0 && $rr['correction_status']==0 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['printing_status']==0)
	{
		echo 'Pending for Payment';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1   && $rr['author_sign']==0 && $rr['correction_status']==0 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		
		echo 'Waiting for book';
	}
	elseif($rr['status']==2 && $rr['payment_status']==2   && $rr['author_sign']==0 && $rr['correction_status']==0 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		
		echo 'Waiting for book';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==0 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'Waiting for correction';
	}
	elseif($rr['status']==2 && $rr['payment_status']==2  && $rr['author_sign']==1 && $rr['correction_status']==0 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'Waiting for correction';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1 && $rr['author_sign']==1 && $rr['correction_status']==1 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'Correction pending for approval';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==1 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'Correction pending for approval';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'pending for inner design';
	}
	elseif($rr['status']==2 && $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'pending for inner design';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1 && $rr['author_sign']==1 && $rr['correction_status']==3 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'Correcrtion rejected';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==3 && $rr['inner_design_st']==0 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'Correcrtion rejected';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==1 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'inner design pending for approval';
	}
	elseif($rr['status']==2 &&   $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==1 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'inner design pending for approval';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==3 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'inner design rejected';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==3 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'inner design rejected';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'waiting for cover design';
	}
	elseif($rr['status']==2 &&   $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==0 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'waiting for cover design';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==1 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'cover design pending for approval';
	}
	elseif($rr['status']==2 &&   $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==1 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'cover design pending for approval';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==3 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'cover design rejected';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==3 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'cover design rejected';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'waiting for final book (v1)';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==0 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'waiting for final book (v1)';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==1 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'final book  (v1) pending for approval';
	}
		elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==1 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'final book  (v1) pending for approval';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==3 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'final book  (v1)  rejected';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==3 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'final book  (v1)  rejected';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'waiting for prototype';
	}
	elseif($rr['status']==2 && $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==0 && $rr['ministry_status']==0  && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'waiting for prototype';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==1 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'prototype pending for approval';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==1 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'prototype pending for approval';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==3 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'prototype rejected';
	}
	elseif($rr['status']==2 && $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==3 && $rr['ministry_status']==0 && $rr['final_book_status2']==0  && $rr['publish_status']==0  && $rr['printing_status']==0)
	{
		echo 'prototype rejected';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'waiting for ministry';
	}
	elseif($rr['status']==2 &&   $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==0 && $rr['final_book_status2']==0 && $rr['publish_status']==0   && $rr['printing_status']==0)
	{
		echo 'waiting for ministry';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==2 && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0	)
	{
		echo 'waiting for final book (v2) ';
	}
	elseif($rr['status']==2 &&   $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==2 && $rr['final_book_status2']==0 && $rr['publish_status']==0  && $rr['printing_status']==0	)
	{
		echo 'waiting for final book (v2) ';
	}
	
	elseif($rr['status']==2 && $rr['payment_status']==1  && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==2 && $rr['final_book_status2']==2 && $rr['publish_status']==2  && $rr['printing_status']==0)
	{
		echo 'waiting for printing start';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==2 && $rr['final_book_status2']==2 && $rr['publish_status']==2 && $rr['printing_status']==0)
	{
		echo 'waiting for printing start';
	}
	elseif($rr['status']==2 && $rr['payment_status']==1 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==2  && $rr['final_book_status2']==2 && $rr['publish_status']==2 && $rr['printing_status']==2)
	{
		echo 'printing start';
	}
	elseif($rr['status']==2 &&  $rr['payment_status']==2 && $rr['author_sign']==1 && $rr['correction_status']==2 && $rr['inner_design_st']==2 && $rr['cover_status']==2 && $rr['final_book_status']==2 && $rr['printing_prototype_status']==2 && $rr['ministry_status']==2  && $rr['final_book_status2']==2 && $rr['publish_status']==2 && $rr['printing_status']==2)
	{
		echo 'printing start';
	}
	
	
	
												?>
                                               </span>
                             <h5 class="card-title">ID : <?= $rr['cid'] ?></h5>
                                <h5 class="card-title font-18"><?= $rr['book_name'] ?></h5>
                                <p class="card-text">
                                <?php
                            $date=date_create($rr['dt']);
                            echo date_format($date,"d/m/Y");
                            ?>
                            
                                </p>
                                 
                                <a style="background:#830b0d !important; border-color:#830b0d !important" href="<?= $this->load->config->base_url() ?>user/contract_detail/processing/<?=  $rr['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>  
                    </div>
                    
                    <?php endforeach ?>
                    </div>
                    
                    
                    
                    </div>
                   
                    
                    
                </div>
                <!-- End row -->
            </div>