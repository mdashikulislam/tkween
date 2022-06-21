<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                           
                            <div class="card-body">
                               <table class="table table-bordered">
                               <tr  style="background:#f5f5f5">
                               	<th colspan="2">Basic Information</th>
                               </tr>
                               <tr>
                               	<td>الإسم</td>
                                <td>
                                	<?= $rec[0]['name'] ?>
                                </td>
                               </tr>
                               
                               <tr>
                               	<td>البريد الإلكتروني</td>
                                <td><?= $rec[0]['email'] ?></td>
                               </tr>
                               <tr>
                               	<td>رقم الهاتف</td>
                               <td><?= $rec[0]['phone'] ?></td>
                               </tr>
                               <tr>
                               	<td>رقم الهوية أو الجواز</td>
                               <td><?= $rec[0]['pasport'] ?></td>
                               </tr>
                               <tr>
                               	<td>العنوان</td>
                               <td><?= $rec[0]['title'] ?></td>
                               </tr>
                               <tr>
                               	<td>الجنسية</td>
                               <td><?= $rec[0]['nationality'] ?></td>
                               </tr>
                               <tr>
                               	<td>المدينة</td>
                               <td><?= $rec[0]['city'] ?></td>
                               </tr>
                               <tr>
                               	<td>الدولة</td>
                               <td><?= $rec[0]['country'] ?></td>
                               </tr>
                               <tr>
                               	<td>إسم البنك</td>
                               <td><?= $rec[0]['bank_name'] ?></td>
                               </tr>
                               <tr>
                               	<td>رقم الايبان</td>
                               <td><?= $rec[0]['bank_account_ipan'] ?></td>
                               </tr>
                               
                              

                               
                               
                               </table>
                               
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                          
                            <div class="card-body">
                               <table class="table table-bordered">
                               
                               
                               <?php $package =  $this->db->where('id',$rec[0]['package_id'])->get('books_package')->result_array(); ?>
                                <?php $books_type =  $this->db->where('id',$package[0]['id'])->get('books_type')->result_array(); ?>
                               <tr  style="background:#f5f5f5">
                               	<th colspan="2">Book Information</th>
                               </tr>
                               <tr>
                               	<td>Branch</td>
                                <td>
                                <?php $branch =  $this->db->where('id',$rec[0]['branch_id'])->get('branches')->result_array(); ?>
                                                <?= $branch[0]['name'] ?>
                                </td>
                               </tr>
                                 <tr>
                               	<td>Contract ID</td>
                                <td>
                               <?= $rec[0]['cid'] ?>
                                </td>
                               </tr>
                               
                                <tr>
                               	<td>Submitted at</td>
                                <td>
                              <?php
                                            $date=date_create($rec[0]['dt']);
                                            echo date_format($date,"d/m/Y");
                                            ?>
                                </td>
                               </tr>
                               <tr>
                               	<td>Book Name</td>
                                <td>
                                	<?= $rec[0]['book_name'] ?>
                                </td>
                               </tr>
                                <tr>
                               	<td>Edition</td>
                                <td>
                                	<?= $rec[0]['edition'] ?>
                                </td>
                               </tr>
                                <tr>
                               	<td>No. of Pages</td>
                                <td>
                                	<?= $rec[0]['contact_pages'] ?>
                                </td>
                               </tr>
                               <tr>
                               	<td>Package</td>
                                <td>
                                	<?= $rec[0]['package_name'] ?>
                                </td>
                               </tr>
                               
                               <tr>
                               	<td>Size</td>
                                <td><?= $rec[0]['package_size'] ?></td>
                               </tr>
                               <tr>
                               	<td>Color</td>
                               <td><?= $rec[0]['package_color'] ?></td>
                               </tr>
                               <tr>
                               	<td>Type</td>
                               <td><?= $rec[0]['package_type'] ?>
                                <?php if($rec[0]['type']==1): ?>
                                             <sub>(eBook)</sub>
                                            <?php else: ?>
                                             <sub>(pBook)</sub>
                                            <?php endif ?> 
                               </td>
                               </tr>
                                <tr>
                               	<td>Price</td>
                               <td><?= $rec[0]['price'] ?></td>
                               </tr>
                                <tr>
                               	<td>Percentage</td>
                               <td><?= $rec[0]['discount'] ?>%</td>
                               </tr>
                             
                              <?php if($rec[0]['publisher']!=''): ?>
                               <tr>
                               	<td>Publisher</td>
                                <td>
                              <?= $rec[0]['publisher'] ?>
                                </td>
                               </tr>
                               <?php endif ?>
                              
                               
                              

								 
                               </table>
                               
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                        
                        
                         <div class="card-header">
                            <h5 class="card-title">
                            	
                                Processing Details</h5>	
                            </div>
                            <div class="card-body">
                            
<?php 

	$step1='';
	$step2='';
	$step3='';
	$step4='';
	$step5='';
	$step6='';
	$step7='';
	$step8='';
	$step9='';
	$step10='';
	$step11='';
	$step12='';
	$step13='';
	$step14='';
	$step15='';
	
	
	
	if($rec[0]['status']==0)
	{
		$step1= 'secondary';
	}
	elseif($rec[0]['status']==1)
	{
		$step1= 'warning';
	}
	else
	{
		$step1= 'success';
	}
	
	if($rec[0]['payment_status']==0 && $rec[0]['status']==2)
	{
		$step2= 'secondary';
	}
	elseif($rec[0]['payment_status']==1)
	{
		$step2= 'success';
	}
	elseif($rec[0]['payment_status']==2)
	{
		$step2= 'warning';
	}
	else
	{
		$step2= 'none';	
	}
	if($rec[0]['author_sign']==0 && $rec[0]['payment_status']==1 )
	{
		$step3= 'secondary';
	}
	elseif($rec[0]['author_sign']==0 &&  $rec[0]['payment_status']==2)
	{
		$step3= 'secondary';
	}
	elseif($rec[0]['author_sign']==1 && $rec[0]['payment_status']==2)
	{
		$step3= 'success';
	}
	elseif($rec[0]['author_sign']==1 && $rec[0]['payment_status']==1)
	{
		$step3= 'success';
	}
	else
	{
		$step3= 'none';	
	}
	if($rec[0]['correction_status']==0 && $rec[0]['author_sign']==1)
	{
		$step4= 'secondary';
	}
	elseif($rec[0]['correction_status']==1)
	{
		$step4= 'warning';
	}
	elseif($rec[0]['correction_status']==2)
	{
		$step4= 'success';
	}
	elseif($rec[0]['correction_status']==3)
	{
		$step4= 'danger';
	}
	else
	{
		$step4= 'none';	
	}
	if($rec[0]['inner_design_st']==0 && $rec[0]['correction_status']==2)
	{
		$step5= 'secondary';
	}
	elseif($rec[0]['inner_design_st']==1)
	{
		$step5= 'warning';
	}
	elseif($rec[0]['inner_design_st']==2)
	{
		$step5= 'success';
	}
	elseif($rec[0]['inner_design_st']==3)
	{
		$step5= 'danger';
	}
	else
	{
		$step5= 'none';
	}
	if($rec[0]['cover_status']==0 && $rec[0]['inner_design_st']==2)
	{
		$step6= 'secondary';
	}
	elseif($rec[0]['cover_status']==1)
	{
		$step6= 'warning';
	}
	elseif($rec[0]['cover_status']==2)
	{
		$step6= 'success';
	}
	elseif($rec[0]['cover_status']==3)
	{
		$step6= 'danger';
	}
	else
	{
		$step6= 'none';	
	}
	if($rec[0]['final_book_status']==0 && $rec[0]['cover_status']==2)
	{
		$step7= 'secondary';
	}
	elseif($rec[0]['final_book_status']==1)
	{
		$step7= 'warning';
	}
	elseif($rec[0]['final_book_status']==2)
	{
		$step7= 'success';
	}
	elseif($rec[0]['final_book_status']==3)
	{
		$step7= 'danger';
	}
	elseif($rec[0]['final_book_status']==4)
	{
		$step7= 'danger';
	}
	else
	{
		$step7= 'none';	
	}
	if($rec[0]['printing_prototype_status']==0 && $rec[0]['final_book_status']==2)
	{
		$step8= 'secondary';
	}
	elseif($rec[0]['printing_prototype_status']==1)
	{
		$step8= 'warning';
	}
	elseif($rec[0]['printing_prototype_status']==2)
	{
		$step8= 'success';
	}
	elseif($rec[0]['printing_prototype_status']==3)
	{
		$step8= 'danger';
	}
	else
	{
		$step8= 'none';	
	}
	if($rec[0]['ministry_status']==0 && $rec[0]['printing_prototype_status']==2)
	{
		$step9= 'secondary';
	}
	elseif($rec[0]['ministry_status']==1)
	{
		$step9= 'warning';
	}
	elseif($rec[0]['ministry_status']==2)
	{
		$step9= 'success';
	}
	elseif($rec[0]['ministry_status']==3)
	{
		$step9= 'danger';
	}
	else
	{
		$step9= 'none';	
	}
	if($rec[0]['final_book_status2']==0 && $rec[0]['ministry_status']==2)
	{
		$step10= 'secondary';
	}
	elseif($rec[0]['final_book_status2']==1)
	{
		$step10= 'warning';
	}
	elseif($rec[0]['final_book_status2']==2)
	{
		$step10= 'success';
	}
	elseif($rec[0]['final_book_status2']==3)
	{
		$step10= 'danger';
	}
	else
	{
		$step10= 'none';	
	}
	
	if($rec[0]['publish_status']==0 && $rec[0]['final_book_status2']==2)
	{
		$step11= 'secondary';
	}
	elseif($rec[0]['publish_status']==1)
	{
		$step11= 'warning';
	}
	elseif($rec[0]['publish_status']==2)
	{
		$step11= 'success';
	}
	elseif($rec[0]['publish_status']==3)
	{
		$step11= 'danger';
	}
	else
	{
		$step11= 'none';	
	}
	
	
	
?>
<style>
.bg-none
{
	color:black; background:none
}
.nav-tabs .nav-link.active {
    color: #700308;
    background-color: #ffffff;
    border-color: rgb(0 0 0 / 15%) rgb(0 0 0 / 12%) #ffffff;
}
.nav-tabs .nav-link:hover {
    color: #700308;
    background-color: #ffffff;
    border-color: rgb(0 0 0 / 15%) rgb(0 0 0 / 12%) #ffffff;
}
.nav-tabs {
    border-bottom: 1px solid rgb(0 0 0 / 16%);
}
</style>
<div class="progress my-3" style="height: 25px; border-radius:100px">
<div class="progress-bar bg-<?= $step1 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">إعتماد العقد</div>
<div class="progress-bar bg-<?= $step2 ?>" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">المالية</div>
<div class="progress-bar bg-<?= $step3 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">إستلام الكتاب</div>
<div class="progress-bar bg-<?= $step4 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">التدقيق</div>
<div class="progress-bar bg-<?= $step5 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">التنفيذ</div>
<div class="progress-bar bg-<?= $step6 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">تصميم الغلاف</div>
<div class="progress-bar bg-<?= $step7 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Final Book (v1)</div>
<div class="progress-bar bg-<?= $step8 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Prototype Printing</div>
<div class="progress-bar bg-<?= $step9 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Ministry</div>
<div class="progress-bar bg-<?= $step10 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Final Book (v2)</div>
<div class="progress-bar bg-<?= $step11 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Published</div>
</div>
<?php
$dis1='';
$dis2='';
$dis3='';
$dis4='';
$dis5='';
$dis6='';
$dis7='';
$dis8='';
$dis9='';
$dis10='';
 ?>
<ul class="nav nav-tabs mb-3" id="defaultTab" role="tablist">
<li class="nav-item" style="display:<?= $dis1 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='processing'): ?>active<?php endif ?>"  href="<?= $this->load->config->base_url() ?>user/contract_detail/processing/<?= $rec[0]['id'] ?>">إعتماد الكتاب</a>
</li>
<li class="nav-item"  style="display:<?= $dis2 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='payments'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/payments/<?= $rec[0]['id'] ?>">المالية</a>
</li>
<li class="nav-item" style="display:<?= $dis3 ?>"  >
<a class="nav-link  <?php if($this->uri->segment(3)=='awaiting_books'): ?>active<?php endif ?>"  href="<?= $this->load->config->base_url() ?>user/contract_detail/awaiting_books/<?= $rec[0]['id'] ?>">إستلام الكتاب</a>
</li>
<li class="nav-item" style="display:<?= $dis4 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='correction'): ?>active<?php endif ?>"  href="<?= $this->load->config->base_url() ?>user/contract_detail/correction/<?= $rec[0]['id'] ?>">التدقيق</a>
</li>
<li class="nav-item" style="display:<?= $dis5 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='inner_design'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/inner_design/<?= $rec[0]['id'] ?>">التنفيذ الداخلي</a>
</li>
<li class="nav-item" style="display:<?= $dis6 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='cover_design'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/cover_design/<?= $rec[0]['id'] ?>">تصميم الغلاف</a>
</li>

<li class="nav-item" style="display:<?= $dis7 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='final_book'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/final_book/<?= $rec[0]['id'] ?>">Final Book (v1)</a>
</li>
<li class="nav-item" style="display:<?= $dis8 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='printing_prototype'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/printing_prototype/<?= $rec[0]['id'] ?>">Printing Prototype</a>
</li>
<li class="nav-item" style="display:<?= $dis9 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='ministry'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/ministry/<?= $rec[0]['id'] ?>">Ministry</a>
</li>

<li class="nav-item" style="display:<?= $dis10 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='final_book2'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/final_book2/<?= $rec[0]['id'] ?>">Final Book (v2)</a>
</li>
<li class="nav-item" style="display:<?= $dis11 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='published'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>user/contract_detail/published/<?= $rec[0]['id'] ?>">Published</a>
</li>


</ul>

<?php if($this->uri->segment(3)=='processing'): ?>
 
<table class="table table-bordered" style="display:<?= $dis1 ?>">

<tr style="background:#f5f5f5">
<th colspan="2">Processing : 1 Step</th>
</tr>
<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['status']==0): ?>
<label class="badge badge-secondary">New Submitted</label>
<?php elseif($rec[0]['status']==2): ?>
<label class="badge badge-success">Sent to Progressed date</label>
<?php elseif($rec[0]['status']==1): ?>
<label class="badge badge-warning">Sent to Pending date</label>
<?php endif ?>
</td>
</tr>
<tr>
<td>Pending Date</td>
<td>
<?php if($rec[0]['pending_dt']!=''): ?>
<?php
$date=date_create($rec[0]['pending_dt']);
echo date_format($date,"d/m/Y");
?>

<?php else: ?>
---
<?php endif ?>

</td>
</tr>

<tr>
<td>Processing Date</td>
<td>
<?php if($rec[0]['processing_dt']!=''): ?>
<?php
$date=date_create($rec[0]['processing_dt']);
echo date_format($date,"d/m/Y");
?>

<?php else: ?>
---
<?php endif ?>

</td>
</tr>






</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='payments'): ?>
<table class="table table-bordered"  style="display:<?= $dis2 ?>"  >
<?php if($rec[0]['status']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2">Payment  : 2 Step</th>
</tr>
<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['payment_status']==0): ?>
<label class="badge badge-secondary">Payment Pending</label>
<?php elseif($rec[0]['payment_status']==1): ?>
<label class="badge badge-success">Payment Paid</label>
<?php elseif($rec[0]['payment_status']==2): ?>
<label class="badge badge-warning">Payment Not Completed</label>
<?php endif ?>
</td>
</tr>
<tr>
<td width="30%"> Plan Price</td>
<td><?= $rec[0]['price']?></td>
</tr>
<?php if($rec[0]['payment_status']!=0): ?>
<tr>
<td width="30%">المبلغ المدفوع</td>
<td>
 <?php 
			$price  = $this->db->query('select sum(paid_amount) as total from contract_payments  where   pid= "'.$rec[0]['id'].'"')->result_array();
			echo $price[0]['total']
														?>
                                                        
                                                        
                                                        

</td>
</tr>


<tr>
<td width="30%">المبلغ المتبقي</td>
<td><?= $rec[0]['remaining_amount']?></td>
</tr>


<?php endif ?>
<tr>
<td>Payment Date</td>
<td><?php if( $rec[0]['payment_dt']==''):?>
---
<?php else: ?>

<?php
$date=date_create($rr['payment_dt']);
echo date_format($date,"d/m/Y");
?>
<?php endif ?>
</td>
</tr>
<?php if($rec[0]['payment_status']!=0): ?>
<tr>
<td>Transaction Log</td>
<td>

<a href="#" class="btn btn-secondary-rgba"   data-animation="zoomInUp" data-toggle="modal" data-target="#payment" >View</a>
<div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">Payment Processing</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<?php if($rec[0]['payment_status']!=0): ?>
<table class="table table-bordered">
<tr>
	<th>Paid Amount</th>
    <th>Trans ID</th>
</tr>
<?php $payment =  $this->db->where('pid',$rec[0]['id'])->get('contract_payments')->result_array(); ?>
<?php foreach($payment as $pp): ?>
<tr>
	<td><?= $pp['paid_amount'] ?></td>
    <td><?= $pp['trans_id'] ?></td>
</tr>
<?php endforeach ?>
</table>
<?php  endif?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>




</td>


</tr>
<?php endif ?>

<?php endif ?>
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='awaiting_books'): ?>
<table  class="table table-bordered"  style="display:<?= $dis3 ?>"  >
<?php if($rec[0]['payment_status']!=0): ?>
<tr style="background:#f5f5f5">
<th colspan="2">Awaiting Book  : 3 Step</th>
</tr>
<tr>
<td width="30%">Status</td>
<td>

<?php if($rec[0]['author_sign']==0): ?>
<label class="badge badge-secondary">Awaiting Book from Author </label>

<?php elseif($rec[0]['author_sign']==1): ?>
<label class="badge badge-success">Book Uploaded</label>

<?php endif ?>
</td>
</tr>

<tr>
<td> Date</td>
<td><?php if( $rec[0]['book_dt']==''):?>
---
<?php else: ?>

<?php
$date=date_create($rr['book_dt']);
echo date_format($date,"d/m/Y");
?>
<?php endif ?>
</td>
</tr>
<tr>
                            <td> Action</td>
                            <td>
                            <?php if($rec[0]['author_sign']==0): ?>
                          
                            <a class="btn btn-secondary-rgba"  style="cursor:pointer;"  href="#" data-animation="zoomInUp" data-toggle="modal" data-target="#exampleModalLong-1">Upload</a>
                           
                            <?php else: ?>
                            ---
                            <?php endif ?>
                            
                            <div class="modal fade" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle-1">Upload Book (Docx)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <form enctype="multipart/form-data" method="post" action="<?= $this->load->config->base_url() ?>user/upload_book_data">
                            <div class="modal-body">
                            <input type="hidden" name="author_sign" value="1" > 
                            <input type="hidden" name="book_doc" required >
                            <input type="hidden" name="id" value="<?= $rec[0]['id'] ?>" class="form-control">
                            <input type="hidden" name="url" value="<?= $this->uri->segment(3) ?>" class="form-control">
                            </div>
                            <div class="modal-footer">
                            <button type="submt" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                            </div>
                            </form>
                            </div>
                            </div>
                            </div>
                            </td>
                            </tr>

<?php endif ?>

</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='correction'): ?>
<table class="table table-bordered"  style="display:<?= $dis4 ?>"  >
<?php if($rec[0]['author_sign']==1): ?>
<tr style="background:#f5f5f5">
<th colspan="2"> Correction Process  : 4 Step</th>
</tr>

<tr>
<td  width="30%">  Status</td>
<td>
<?php if($rec[0]['correction_status']==0): ?>
<label class="badge badge-secondary">Waiting for Correction</label>
<?php elseif($rec[0]['correction_status']==1): ?>
<label class="badge badge-warning">Pending for Author Approval</label>
<?php elseif($rec[0]['correction_status']==2): ?>
<label class="badge badge-success">Author Accepted</label>
<?php elseif($rec[0]['correction_status']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>
</td>
</tr>
<tr>
<td>  Date</td>
<td>
<?php if($rec[0]['correction_dt']==''): ?>
---
<?php else: ?>

<?php
$date=date_create($rec[0]['correction_dt']);
echo date_format($date,"d/m/Y");
?>
<?php endif ?>
</td>
</tr>
<?php if($rec[0]['correction_status']!=0): ?>
<tr>
<td> Action</td>

<td>

<a href="#" data-animation="zoomInUp" class="btn btn-secondary-rgba"  data-toggle="modal" data-target="#correction">Correction for Approval </a>
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Correction Files</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>user/upload_correction_file">
                                <div class="modal-body">
                               
                                <table class="table table-bordered">
                                <tr>
                                <th >Author's Correction</th>
                                <th>Date</th>
                                </tr>
                                <?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>0))->get('correction_log')->result_array(); ?>
                                <?php foreach($correction as $cc): ?>
                                <tr>
                                <td>
                                
                                
                                <?php if($cc['status']==0): ?>
                                
                                <input type="radio"   value="2" checked="checked" name="correction_status"/>  قبول
                            &nbsp; &nbsp;
                                <input type="radio"  value="3" name="correction_status"/>  رفض
                                
                               <input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
                                <input type="hidden" value="<?= $cc['id'] ?>" name="rowid">
                                <input type="hidden" value="0" name="type">
                                <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
                               
                               
                               <?php else: ?>
                               ---
                               <?php  endif ?>
                               
                               
                                </td>
                                
                                <td>
                                
                                <?php
                                $date=date_create($cc['dt']);
                                echo date_format($date,"d/m/Y");
                                ?>
                                </td>
                                </tr>
                                <?php endforeach ?>
                                </table>
                                
                                
                                </div>
                                <div class="modal-footer">
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <?php if($rec[0]['correction_status']==1): ?>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                <?php endif ?>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>

</td>
</tr>
<?php  endif ?>
<?php endif ?>
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='inner_design'): ?>
<table class="table table-bordered"  style="display:<?= $dis5 ?>"  >
<?php if($rec[0]['correction_status']==2): ?>
           <tr style="background:#f5f5f5">
            <th colspan="2"> Inner Design  : 5 Step</th>
            </tr>
            
            <tr>
            <td width="30%">  Status</td>
            <td>
            <?php if($rec[0]['inner_design_st']==0): ?>
            <label class="badge badge-secondary">Waiting for Design</label>
            <?php elseif($rec[0]['inner_design_st']==1): ?>
            <label class="badge badge-warning">Pending for Author Approval</label>
            <?php elseif($rec[0]['inner_design_st']==2): ?>
            <label class="badge badge-success">Author Accepted</label>
            <?php elseif($rec[0]['inner_design_st']==3): ?>
            <label class="badge badge-danger">Author Rejected</label>
            <?php endif ?>
            </td>
            </tr>
            <tr>
            <td>  Date</td>
            <td>
            <?php if($rec[0]['inner_design_dt']==''): ?>
            ---
            <?php else: ?>
            <?php
            $date=date_create($rec['inner_design_dt']);
            echo date_format($date,"d/m/Y");
            ?>
            
            <?php endif ?>
            </td>
            </tr>
             <?php if($rec[0]['inner_design_st']!=0): ?>
            <tr>
            <td> Action</td>
            <td>
            
            
            
            <a href="#" class="btn btn-secondary-rgba"  data-animation="zoomInUp" data-toggle="modal" data-target="#dd">Inner Design for Approval</a>
                                <div class="modal fade" id="dd" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Design for Correction</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>user/upload_correction_file">
                                <div class="modal-body">
                                <?php if($rec[0]['inner_design_st']==1): ?>
                               
                                <?php endif ?>
                                <table class="table table-bordered">
                                <tr>
                                <th >Author's Correction</th>
                                <th>Date</th>
                                </tr>
                                <?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>2))->get('correction_log')->result_array(); ?>
                                <?php foreach($correction as $cc): ?>
                                <tr>
                                
                                <td>
                                
                                <?php if($cc['status']==0): ?>
                              
                                
                                  <input type="radio"   value="2" checked="checked" name="cover_status"/>  قبول
                            &nbsp; &nbsp;
                                <input type="radio"  value="3" name="cover_status"/>  رفض
                            <input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
                                <input type="hidden" value="<?= $cc['id'] ?>" name="rowid">
                                <input type="hidden" value="2" name="type">
                                <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
                               
                               <?php else: ?>
                               ---
                               <?php  endif ?>
                               
                                
                                </td>
                                
                                <td>
                                
                                <?php
                                $date=date_create($cc['dt']);
                                echo date_format($date,"d/m/Y");
                                ?>
                                </td>
                                </tr>
                                <?php endforeach ?>
                                </table>
                                
                                
                                </div>
                                <div class="modal-footer">
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <?php if($rec[0]['inner_design_st']==1): ?>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                <?php endif ?>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
            
            </td>
            </tr>
            <?php endif ?>
            <?php endif ?>
           
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='cover_design'): ?>
<table class="table table-bordered"  style="display:<?= $dis6 ?>"  >
<?php if($rec[0]['inner_design_st']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2"> Cover Designing  : 6 Step</th>
</tr>

<tr>
<td width="30%">  Status</td>
<td>
<?php if($rec[0]['cover_status']==0): ?>
<label class="badge badge-secondary">Waiting for Design</label>
<?php elseif($rec[0]['cover_status']==1): ?>
<label class="badge badge-warning">Pending for Author Approval</label>
<?php elseif($rec[0]['cover_status']==2): ?>
<label class="badge badge-success">Author Accepted</label>
<?php elseif($rec[0]['cover_status']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>
</td>
</tr>
<tr>
<td>  Date</td>
<td>
<?php if($rec[0]['cover_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec['cover_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>
<?php if($rec[0]['cover_status']!=0): ?>
<tr>
<td> Action</td>
<td>

<a href="#" data-animation="zoomInUp" class="btn btn-secondary-rgba"  data-toggle="modal" data-target="#cover">Cover for Approval</a>
                                <div class="modal fade" id="cover" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Cover for Correction</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>user/upload_correction_file">
                                <div class="modal-body">
                               
                                <table class="table table-bordered">
                                <tr>
                                <th >Author's Correction</th>
                                <th>Date</th>
                                </tr>
                                <?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>1))->get('correction_log')->result_array(); ?>
                                <?php foreach($correction as $cc): ?>
                                <tr>
                                <td>
                                <?php if($cc['status']==0): ?>
                                
                                
                                
                                  <input type="radio"   value="2" checked="checked" name="cover_status"/>  قبول
                            &nbsp; &nbsp;
                                <input type="radio"  value="3" name="cover_status"/>  رفض
                               <input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
                                <input type="hidden" value="<?= $cc['id'] ?>" name="rowid">
                                <input type="hidden" value="1" name="type">
                                <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
                               <?php else: ?>
                               ---
                               <?php  endif ?>
                               
                               
                                </td>
                               
                                <td>
                                
                                <?php
                                $date=date_create($cc['dt']);
                                echo date_format($date,"d/m/Y");
                                ?>
                                </td>
                                </tr>
                                <?php endforeach ?>
                                </table>
                                
                                
                                </div>
                                <div class="modal-footer">
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <?php if($rec[0]['cover_status']==1): ?>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                <?php endif ?>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>

</td>
</tr>
<?php endif ?>
<?php endif ?>

</table>
<?php endif ?>

<?php if($this->uri->segment(3)=='final_book'): ?>
<table class="table table-bordered"  style="display:<?= $dis7 ?>"  >
<?php if($rec[0]['cover_status']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2"> Final Book (v1) : 7 Step</th>
</tr>



<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['final_book_status']==0): ?>
<label class="badge badge-secondary">Waiting to Upload</label>
<?php elseif($rec[0]['final_book_status']==1): ?>
<label class="badge badge-warning">Pending for Approval</label>
<?php elseif($rec[0]['final_book_status']==2): ?>
<label class="badge badge-success">Author Accepted
</label>
<?php elseif($rec[0]['final_book_status']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php elseif($rec[0]['final_book_status']==4): ?>
<label class="badge badge-danger">second round for files</label>
<?php endif ?>
</td>
</tr>
<tr>
<td>  Date</td>
<td>
<?php if($rec[0]['final_book_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec['final_book_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>
<?php if($rec[0]['final_book_status']!=0): ?>
<tr>
<td> Action</td>
<td>


<a href="#" data-animation="zoomInUp" data-toggle="modal" class="btn btn-secondary-rgba"  data-target="#cover">Author Approval</a>
                                <div class="modal fade" id="cover" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Final Book (v1) for approval</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>user/upload_correction_file">
                                <div class="modal-body">
                              
                                <br><br>
                                <table class="table table-bordered">
                                <tr>
                                <th colspan="2">Author's Correction</th>
                                <th>Date</th>
                                </tr>
                                <?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>3))->get('correction_log')->result_array(); ?>
                                <?php foreach($correction as $cc): ?>
                                <tr>
                                <td><a download href="<?= $this->load->config->base_url() ?><?= $cc['upload_file'] ?>">Download</a></td>
                                <td>
                                <?php if($cc['status']==0): ?>
                                
                                
                                
                                  <input type="radio"   value="2" checked="checked" name="prototype_status"/>  قبول
                            &nbsp; &nbsp;
                                <input type="radio"  value="3" name="prototype_status"/>  رفض
                               
                               <?php else: ?>
                               ---
                               <?php  endif ?>
                               
                               
                                </td>
                                <td>
                                <?php if($cc['correct_file']==''): ?>
                                
                                <?php if($cc['status']==0): ?>
                                
                               
                                
                                <input type="file" name="upload_file">
                                <input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
                                <input type="hidden" value="<?= $cc['id'] ?>" name="rowid">
                                <input type="hidden" value="3" name="type">
                                <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
                               
                               
                               <?php else: ?>
                               ---
                               <?php  endif ?>
                               
                                <?php else: ?>
                                <a download href="<?= $this->load->config->base_url() ?><?= $cc['correct_file'] ?>">Download</a>
                                <?php endif ?>
                                </td>
                                <td>
                                
                                <?php
                                $date=date_create($cc['dt']);
                                echo date_format($date,"d/m/Y");
                                ?>
                                </td>
                                </tr>
                                <?php endforeach ?>
                                </table>
                                
                                
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
<?php endif ?>
<?php endif ?>
</table>
<?php endif ?>

<?php if($this->uri->segment(3)=='printing_prototype'): ?>
<table class="table table-bordered"  style="display:<?= $dis8 ?>"  >
<?php if($rec[0]['final_book_status']==2 || $rec[0]['final_book_status']==4): ?>
<tr style="background:#f5f5f5">
<th colspan="2"> Printing Prototype  : 8 Step</th>
</tr>



<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['printing_prototype_status']==0): ?>
<label class="badge badge-secondary">Waiting to Upload</label>
<?php elseif($rec[0]['printing_prototype_status']==1): ?>
<label class="badge badge-warning">Pending for Approval</label>
<?php elseif($rec[0]['printing_prototype_status']==2): ?>
<label class="badge badge-success">Author Accepted
</label>
<?php elseif($rec[0]['printing_prototype_status']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>
</td>
</tr>
<tr>
<td>  Date</td>
<td>
<?php if($rec[0]['printing_prototype_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec['printing_prototype_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>
<?php if($rec[0]['printing_prototype_status']!=0): ?>
<tr>
<td> Action</td>
<td>


<a href="#" data-animation="zoomInUp" class="btn btn-secondary-rgba"  data-toggle="modal" data-target="#cover">Author Approval</a>
                                <div class="modal fade" id="cover" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Prototype for Correction</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>user/upload_correction_file">
                                <div class="modal-body">
                              
                                <br><br>
                                <table class="table table-bordered">
                                <tr>
                                <th>Physical Book</th>
                                <th colspan="2">Author's Correction</th>
                                <th>Date</th>
                                </tr>
                                <?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>4))->get('correction_log')->result_array(); ?>
                                <?php foreach($correction as $cc): ?>
                                <tr>
                                <td><?= $cc['upload_file'] ?></td>
                                <td>
                                <?php if($cc['status']==0): ?>
                                
                                
                                
                                  <input type="radio"   value="2" checked="checked" name="prototype_status"/>  قبول
                            &nbsp; &nbsp;
                                <input type="radio"  value="3" name="prototype_status"/>  رفض
                               
                               <?php else: ?>
                               ---
                               <?php  endif ?>
                               
                               
                                </td>
                                <td>
                                <?php if($cc['correct_file']==''): ?>
                                
                                <?php if($cc['status']==0): ?>
                                
                               
                                
                                <input type="file" name="upload_file">
                                <input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
                                <input type="hidden" value="<?= $cc['id'] ?>" name="rowid">
                                <input type="hidden" value="4" name="type">
                                <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
                               
                               
                               <?php else: ?>
                               ---
                               <?php  endif ?>
                               
                                <?php else: ?>
                                <a download href="<?= $this->load->config->base_url() ?><?= $cc['correct_file'] ?>">Download</a>
                                <?php endif ?>
                                </td>
                                <td>
                                
                                <?php
                                $date=date_create($cc['dt']);
                                echo date_format($date,"d/m/Y");
                                ?>
                                </td>
                                </tr>
                                <?php endforeach ?>
                                </table>
                                
                                
                                </div>
                                <div class="modal-footer">
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <?php if($rec[0]['printing_prototype_status']==1): ?>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                <?php endif ?>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>

</td>
</tr>
<?php endif ?>
<?php endif ?>
</table>
<?php endif ?>

<?php if($this->uri->segment(3)=='ministry'): ?>
<table class="table table-bordered"  style="display:<?= $dis9 ?>"  >
 <?php if($rec[0]['printing_prototype_status']==2): ?>
                            <tr style="background:#f5f5f5">
                            <th colspan="2"> Ministry  : 9 Step</th>
                            </tr>
                             
                            <tr>
                            <td width="30%">  Status</td>
                            <td>
                            <?php if($rec[0]['ministry_status']==0): ?>
                            <label class="badge badge-secondary">Waiting for Ministry</label>
                            <?php elseif($rec[0]['ministry_status']==1): ?>
                            <label class="badge badge-warning">Pending for Approval</label>
                            <?php elseif($rec[0]['ministry_status']==2): ?>
                            <label class="badge badge-success">Ministry File Uploaded</label>
                            <?php elseif($rec[0]['ministry_status']==3): ?>
                            <label class="badge badge-danger">Author Rejected</label>
                            <?php endif ?>
                            </td>
                            </tr>
                           
                            <tr>
                            <td>  Date</td>
                            <td>
                            <?php if($rec[0]['ministry_dt']==''): ?>
                            ---
                            <?php else: ?>
                            <?php
                            $date=date_create($rec[0]['ministry_dt']);
                            echo date_format($date,"d/m/Y");
                            ?>
                            <?php endif ?>
                            </td>
                            </tr>
                            
                            
                            
                            
                               <?php endif ?>
                               
                                <!-- step 7-->
                               
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='final_book2'): ?>
<table class="table table-bordered"  style="display:<?= $dis10 ?>"  >
 <?php if($rec[0]['ministry_status']==2): ?>
                            <tr style="background:#f5f5f5">
                            <th colspan="2"> Final Book (v2)  : 10 Step</th>
                            </tr>
                             
                            <tr>
                            <td width="30%">  Status</td>
                            <td>
                           <?php if($rec[0]['final_book_status2']==0): ?>
<label class="badge badge-secondary">Waiting to Upload</label>
<?php elseif($rec[0]['final_book_status2']==1): ?>
<label class="badge badge-warning">Pending for Approval</label>
<?php elseif($rec[0]['final_book_status2']==2): ?>
<label class="badge badge-success">Author Accepted
</label>
<?php elseif($rec[0]['final_book_status2']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>
                            </td>
                            </tr>
                           
                            <tr>
                            <td>  Date</td>
                            <td>
                            <?php if($rec[0]['final_book_dt2']==''): ?>
                            ---
                            <?php else: ?>
                            <?php
                            $date=date_create($rec[0]['final_book_dt2']);
                            echo date_format($date,"d/m/Y");
                            ?>
                            <?php endif ?>
                            </td>
                            </tr>
                            <?php if($rec[0]['final_book_status2']==2): ?>
<tr>
<td>  Final Copy </td>
<td>
<a href="<?= $this->load->config->base_url() ?><?= $rec[0]['final_book_doc2'] ?>" download>Download</a>
</td>
</tr>
<?php endif ?>
                            
                            
                            
                               <?php endif ?>
                               
                                <!-- step 7-->
                               
</table>
<?php endif ?>

<?php if($this->uri->segment(3)=='published'): ?>
<table class="table table-bordered"  style="display:<?= $dis10 ?>"  >
<?php if($rec[0]['final_book_status2']==2): ?>

<tr style="background:#f5f5f5">
<th colspan="2"> Published  : 11 Step </th>
</tr>



<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['publish_status']==0): ?>
<label class="badge badge-secondary">Waiting to Start</label>
<?php elseif($rec[0]['publish_status']==1): ?>
<label class="badge badge-warning">Pending for </label>
<?php elseif($rec[0]['publish_status']==2): ?>
<label class="badge badge-success">Book Published  
</label>
<?php if($rec[0]['printing_status']==2): ?>

<label class="badge badge-success">Printing Started  
</label>
<?php else: ?>
<label class="badge badge-secondary">Waiting for Printing</label>
<?php endif ?>
<?php elseif($rec[0]['publish_status']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>
</td>
</tr>
<tr>
<td>  Date</td>
<td>
<?php if($rec[0]['publish_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec['publish_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>
<?php if($rec[0]['printing_status']==2): ?>
<tr>
<td>  Printing Paper</td>
<td>
<?php if($rec[0]['paper_type']==''): ?>
---
<?php else: ?>
<?=$rec[0]['paper_type']
?>  

<?php endif ?>
</td>
</tr>

 <tr>
                               	<td>Free Copies</td>
                                <td>
                              <?= $rec[0]['free_copies'] ?>
                                </td>
                               </tr>
                               <tr>
                               	<td>Allowed Copies</td>
                                <td>
                              <?= $rec[0]['allowed_copies'] ?>
                                </td>
                               </tr>
                               
                                <tr>
                               	<td>Printed Copies</td>
                                <td>
                              <?php 
			$copies  = $this->db->query('select sum(copies) as total from orders  where type!=1 and status = 1 and  book_id= '.$rec[0]['id'].' ')->result_array();
														echo number_format($copies[0]['total']);
														?>
                                </td>
                               </tr>
                               <tr>
                               	<td>Remaining Copies</td>
                                <td>
                              <?= $rec[0]['allowed_copies']-$copies[0]['total'] ?>
                                </td>
                               </tr>

<?php endif ?>
<?php endif ?>
</table>
<?php endif ?>
</div>
                             
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                               
                               
                        </div>
                    </div>
                    <!-- End col -->
                    
                </div>
                <!-- End row -->
            </div>