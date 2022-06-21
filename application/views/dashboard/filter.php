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
                   
                    <div class="col-lg-12">
                    <div class="card" style="margin-bottom:100px;">
                    <div class="card-header">
                    <h3>
                    <?php 
					if($this->uri->segment(3)=='all_contracts')
		{
			echo 'All';
		}
		if($this->uri->segment(3)=='pending_contracts')
		{
			echo 'Pending';
		}
		if($this->uri->segment(3)=='inprocess_contracts')
		{
			echo 'Inprocess';
		}
		if($this->uri->segment(3)=='print_contracts')
		{
			echo 'Print';
		}
		if($this->uri->segment(3)=='electronic_contracts')
		{
			echo 'Electronic';
		}
		if($this->uri->segment(3)=='total_payment')
		{
			echo 'Total Payment';
		}
		if($this->uri->segment(3)=='pending_payment')
		{
			echo 'Pending Payment';
		}
		if($this->uri->segment(3)=='clear_payment')
		{
			echo 'Clear Payment';
		}
		if($this->uri->segment(3)=='awaiting_books')
		{
			echo 'Awaiting Book';
		}
		if($this->uri->segment(3)=='correction')
		{
			echo 'Correction';
		}
		if($this->uri->segment(3)=='inner_design')
		{
			echo 'Inner Design';
		}
		if($this->uri->segment(3)=='cover_design')
		{
			echo 'Cover Design';
		}
		if($this->uri->segment(3)=='final_books')
		{
			echo 'Final Books';
		}
		if($this->uri->segment(3)=='printing_prototype')
		{
			echo 'Printing Prototype';
		}
		if($this->uri->segment(3)=='ministry')
		{
			echo 'Ministry';
		}
		if($this->uri->segment(3)=='printing')
		{
			echo 'Printing';
		}
		if($this->uri->segment(3)=='published')
		{
			echo 'Published';
		}
					
					?>
                    
                    Contracts</h3>
                    </div>
                    <div class="card-body">
                   
                                <div class="table-responsive">
  
                                
                                    <table id="datatable-buttons" class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Contract ID</th>
                                            <th  width="25%">Book Name</th>
                                             <th >Submission Date</th>
                                             <th>Details</th>
                                             <th >Status</th>
                                            
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
                                            <td>
                                           
                                            	<?php 	
	
	if($rr['status']==0 
	&& $rr['payment_status']==0 
	&& $rr['author_sign']==0 
	&& $rr['correction_status']==0 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		echo 'Contract Submitted  <br><small> Last Updated - ';  $date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s").'</small>';
	}
	elseif($rr['status']==1 
	&& $rr['payment_status']==0 
	&& $rr['author_sign']==0 
	&& $rr['correction_status']==0 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		echo 'Contract Pending  <br><small> Last Updated - ';  $date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s").'</small>';
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==0 
	&& $rr['author_sign']==0 
	&& $rr['correction_status']==0 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		echo 'Pending for Payment <br><small> Last Updated - ';  $date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s").'</small>';
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==0 
	&& $rr['correction_status']==0 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['ministry_step_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		echo 'Waiting for Book <br><small> Last Updated - ';  $date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ").'</small>';
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==0 
	&& $rr['correction_status']==0 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		echo '<small>Payment not Complete</small><br>Waiting for Book  <br><small> Last Updated - ';  $date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ").'</small>';
	}
	
	///correction inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==0 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'Correction - ';
		if($rr['correction_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['correction_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>0))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==0 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Correction - ';
		if($rr['correction_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['correction_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small>  Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>0))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	///correction pending
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==1 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'Correction - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>0))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==1 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Correction - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>0))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
	}
	
	///correction rejected
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==3
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'Correction  Rejected - ';
		if($rr['correction_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['correction_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>0))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==3 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Correction  Rejected - ';
		if($rr['correction_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['correction_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>0))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	
	///innerdesign inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'InnerDesign - ';
		if($rr['inner_design_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['inner_design_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>2))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==0 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'InnerDesign - ';
		if($rr['inner_design_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['inner_design_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>2))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	///innerdesign pending
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==1 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'InnerDesign - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>2))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==1 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'InnerDesign - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>2))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
	}
	
	///innerdesign rejected
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==3 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'InnerDesign  Rejected - ';
		if($rr['inner_design_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['inner_design_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>2))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==3 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'InnerDesign  Rejected - ';
		if($rr['inner_design_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['inner_design_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>2))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	
	
	///coverdesign inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'CoverDesign - ';
		if($rr['cover_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['cover_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>1))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2
	&& $rr['cover_status']==0 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'CoverDesign - ';
		if($rr['cover_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['cover_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>1))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	///coverdesign pending
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==1 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'CoverDesign - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>1))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==1 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'CoverDesign - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>1))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
	}
	
	///coverdesign rejected
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==3 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'CoverDesign  Rejected - ';
		if($rr['cover_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['cover_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>1))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==3 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'CoverDesign  Rejected - ';
		if($rr['cover_task']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['cover_task']==1)
		{
			echo 'Inprocess';	
		}
		else
		{
			echo 'Completed';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>1))->order_by('id','desc')->get('contract_processing')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	
	///finalcopyv1 inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'FinalCopy(v1) - Waiting to Start ';
		
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==0 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'FinalCopy(v1) - Waiting to Start ';
		
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	///finalcopyv1 pending
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==1 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['ministry_step_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'FinalCopy(v1) - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==1 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['ministry_step_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'FinalCopy(v1) - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
	}
	
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==1 
	&& $rr['printing_prototype_status']==3 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'FinalCopy(v1) - ';
		echo 'Prototype Rejected - Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==1 
	&& $rr['printing_prototype_status']==3 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Prototype Rejected - FinalCopy(v1) - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
	}
	
	///finalcopyv1 rejected
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==3 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'FinalCopy(v1) -  Rejected';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==3 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'FinalCopy(v1) - Rejected ';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>3))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	
	
	///prototype inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'Printing Prototype  - Pending ';
		
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>4))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==0 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Printing Prototype - Pending ';
		
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>4))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	///prototype  pending
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==1 
	&& $rr['ministry_status']==0 
	&& $rr['ministry_step_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'Printing Prototype - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>4))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==1 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Printing Prototype - ';
		echo 'Pending for Author';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>4))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
	}
	
	///prototype  rejected
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2
	&& $rr['printing_prototype_status']==3 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'Printing Prototype -  Rejected';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>4))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2
	&& $rr['printing_prototype_status']==3 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Printing Prototype - Rejected ';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>4))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
		
	
	
	///ministry inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2 
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'Ministry - ';
		if($rr['ministry_step_status']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['ministry_step_status']==1)
		{
			echo 'Pending';	
		}
		elseif($rr['ministry_step_status']==2)
		{
			echo 'Completed';	
		}
		else
		{
			echo 'Rejected';	
		}

		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>5))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2
	&& $rr['ministry_status']==0 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Ministry - ';
		if($rr['ministry_step_status']==0)
		{
			echo 'Waiting for Start';	
		}
		elseif($rr['ministry_step_status']==1)
		{
			echo 'Pending';	
		}
		elseif($rr['ministry_step_status']==2)
		{
			echo 'Completed';	
		}
		else
		{
			echo 'Rejected';	
		}
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>5))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	
	///finalcopyv2 inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2 
	&& $rr['ministry_status']==2 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo 'FinalCopy(v2) -  Pending';
		
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>6))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2
	&& $rr['ministry_status']==2 
	&& $rr['final_book_status2']==0 
	&& $rr['publish_status']==0 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'FinalCopy(v2) -  Pending';
		echo '<br><small> Last Updated - ';
		$correction1 = $this->db->where(array('pid'=>$rr['id'],'type'=>6))->order_by('id','desc')->get('correction_log')->result_array();
		if(count($correction1))
		{
			$date=date_create($correction1[0]['up_dt']);
			echo date_format($date,"d/m/Y - h:i:s ");
		}
		else
		{
			$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		}
		echo '</small>';
		
	}
	
	///published inprocess
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2 
	&& $rr['ministry_status']==2 
	&& $rr['final_book_status2']==2 
	&& $rr['publish_status']==2 
	&& $rr['printing_status']==0)
	{
		
		echo 'Published';
		echo '<br><small> Last Updated - ';
		$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2
	&& $rr['ministry_status']==2 
	&& $rr['final_book_status2']==2 
	&& $rr['publish_status']==2 
	&& $rr['printing_status']==0)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Published';
		echo '<br><small> Last Updated - ';
		$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		echo '</small>';
		
	}
	
	///printing
	elseif($rr['status']==2 
	&& $rr['payment_status']==1 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2 
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2 
	&& $rr['ministry_status']==2 
	&& $rr['final_book_status2']==2 
	&& $rr['publish_status']==2 
	&& $rr['printing_status']==2)
	{
		
		echo 'Published  - Printing Start';
		echo '<br><small> Last Updated - ';
		$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		echo '</small>';
		
	}
	elseif($rr['status']==2 
	&& $rr['payment_status']==2 
	&& $rr['author_sign']==1 
	&& $rr['correction_status']==2 
	&& $rr['inner_design_st']==2
	&& $rr['cover_status']==2 
	&& $rr['final_book_status']==2 
	&& $rr['printing_prototype_status']==2
	&& $rr['ministry_status']==2 
	&& $rr['final_book_status2']==2 
	&& $rr['publish_status']==2 
	&& $rr['printing_status']==2)
	{
		
		echo '<small>Payment not Complete</small><br>';
		echo 'Published - Printing Start';
		echo '<br><small> Last Updated - ';
		$date=date_create($rr['up_dt']); echo date_format($date,"d/m/Y - h:i:s ");
		echo '</small>';
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
												?>
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