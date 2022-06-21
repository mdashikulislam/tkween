<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-12">
                    <center>
                      
                   
                                <a target="_blank"  href="<?= $this->load->config->base_url()  ?>dashboard/pcontract/<?= $rec[0]['id'] ?>" class=" btn btn-secondary">معاينة العقد</a>
                                
                              
                              <?php if($rec[0]['status']==0): ?>
                               <a  href="<?= $this->load->config->base_url()  ?>dashboard/edit_pdf/<?= $rec[0]['id'] ?>/<?= $this->uri->segment(3) ?>" class=" btn btn-secondary">تعديل نص العقد</a>
                                <a  href="<?= $this->load->config->base_url()  ?>dashboard/edit_contract/<?= $rec[0]['id'] ?>/<?= $this->uri->segment(3) ?>" class=" btn btn-secondary">تعديل بيانات العقد</a>
                                <?php endif ?>
                                
                               
                                
                               
                                <a  onclick="return confirm('Want to delete? This process is irreversible')" href="<?= $this->load->config->base_url()  ?>dashboard/delete_contract/<?= $rec[0]['id'] ?>" class=" btn btn-danger">حذف العقد</a>
                                <?php if($this->session->userdata('level')=='admin'): ?>
                                <a   onclick="return confirm('Want to Resore? This process is irreversible')" href="<?= $this->load->config->base_url()  ?>dashboard/reset_contract/<?= $rec[0]['id'] ?>" class=" btn btn-danger">إعادة تهيئة العقد</a>
                                <?php endif ?>
                                <br /><br />
                    </center>
                    <?php $this->load->view('error_msg') ?>
                    </div>
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                           
                            <div class="card-body">
                               <table class="table table-bordered">
                                <tr style="background: linear-gradient(90deg, rgba(131,11,13,1) 0%, rgba(172,40,43,1) 100%); color: white">
                                  <th colspan="10">معلومات المؤلف</th>
                                </tr>
                                <tr>
                                  <th>الإسم</th>
                                  <th>البريد الإلكتروني</th>
                                  <th>رقم الهاتف</th>
                                  <th>رقم الهوية أو الجواز</th>
                                  <th>العنوان</th>
                                  <th>الجنسية</th>
                                  <th>المدينة</th>
                                  <th>الدولة</th>
                                  <th>إسم البنك</th>
                                  <th>رقم الايبان</th>
                                </tr>
                                <tr>
                                  <td><?= $rec[0]['name'] ?></td>
                                  <td><?= $rec[0]['email'] ?></td>
                                  <td><?= $rec[0]['phone'] ?></td>
                                  <td><?= $rec[0]['pasport'] ?></td>
                                  <td><?= $rec[0]['title'] ?></td>
                                  <td><?= $rec[0]['nationality'] ?></td>
                                  <td><?= $rec[0]['city'] ?></td>
                                  <td><?= $rec[0]['country'] ?></td>
                                  <td><?= $rec[0]['bank_name'] ?></td>
                                  <td><?= $rec[0]['bank_account_ipan'] ?></td>
                                </tr>
                               </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                          
                            <div class="card-body">
                               <table class="table table-bordered">
                               
                               
                               <?php $package =  $this->db->where('id',$rec[0]['package_id'])->get('books_package')->result_array(); ?>
                                <?php $books_type =  $this->db->where('id',$package[0]['id'])->get('books_type')->result_array(); ?>
                               <tr  style="background: linear-gradient(90deg, rgba(131,11,13,1) 0%, rgba(172,40,43,1) 100%); color: white">
                               	<th colspan="16">معلومات الكتاب</th>
                               </tr>
                               <tr>
                               	<th>الفرع</th>
                                <th>منشئ العقد</th>
                                <th>رقم العقد</th>
                                <th>كاتب العقد</th>
                               	<th>تاريخ الإنشاء</th>
                               	<th>إسم الكتاب</th>
                               	<th>الإصدار</th>
                               	<th>عدد الصفحات</th>
                               	<th>مقاس الكتاب</th>
                               	<th>لون الكتاب</th>
                               	<th>نوع الباقة</th>
                               	<th>سعر الباقة</th>
                                <th>نسبة المؤلف</th>
                                <?php if($rec[0]['publisher']!=''): ?>
                               	<th>الناشر</th>
                                <?php endif ?>
                                <?php if($rec[0]['sale_price']!=0): ?>
                               	<th>سعر الكتاب</th>
                                <?php endif ?>
                                <?php if($rec[0]['publish_st']==2): ?>
                                <th>عدد أيام إنتهاء الكتاب</th>
                                <?php endif ?>
                                
                              </tr>
                               
                               
                               
                                <tr>
                                  <td>
                                    <?php $branch =  $this->db->where('id',$rec[0]['branch_id'])->get('branches')->result_array(); ?>
                                    <?= $branch[0]['name'] ?>
                                  </td>
                                  <td>
                                    <?php if($rec[0]['contract_type']==0): ?>
                                    المؤلف
                                    <?php else: ?>
                                    <?php $admin =  $this->db->where('id',$rec[0]['admin_id'])->get('users')->result_array() ?>
                                    <?= $admin[0]['name'] ?>
                                    <?php endif ?> 
                                  </td>
                                  <td>
                                    <?= $rec[0]['cid'] ?>
                                  </td>
                                  <td>
                                    <?php $user =  $this->db->where('id',$rec[0]['author_id'])->get('users')->result_array() ?>
                                    <?php if(count($user)): ?>
                                    <a target="_blank" href="<?= $this->load->config->base_url() ?>dashboard/author/<?= $user[0]['id'] ?>"><?= $user[0]['name'] ?></a>
                                    <?php else: ?>
                                    ---
                                    <?php endif ?>
                                  </td>
                                  <td>
                                  <?php
                                    $date=date_create($rec[0]['dt']);
                                    echo date_format($date,"d/m/Y");
                                    ?>
                                </td>
                                <td><?= $rec[0]['book_name'] ?></td>
                                <td><?= $rec[0]['edition'] ?></td>
                                <td><?= $rec[0]['contact_pages'] ?></td>
                                <td><?= $rec[0]['package_size'] ?></td>
                                <td><?= $rec[0]['package_color'] ?></td>
                                <td>
                                  <?= $rec[0]['package_type'] ?>
                                  <?php if($rec[0]['type']==1): ?>
                                    <sub>(كتاب إلكتروني)</sub>
                                  <?php else: ?>
                                    <sub>(كتاب ورقي)</sub>
                                  <?php endif ?> 
                                </td>
                                <td><?= $rec[0]['price'] ?></td>
                                <td><?= $rec[0]['discount'] ?>%</td>
                                <?php if($rec[0]['publisher']!=''): ?>
                                  <td>
                                  <?= $rec[0]['publisher'] ?>
                                  </td>
                                  <?php endif ?>
                                  <?php if($rec[0]['sale_price']!=0): ?>
                                <td>
                                  <?= $rec[0]['sale_price'] ?>
                                  </td>
                                  <?php endif ?>

                                  <?php if($rec[0]['publish_st']==2): ?>
                               <td>
                                  Days (<?php $date1 = new DateTime($rec[0]['process_dt']);
                                  $date2 = new DateTime($rec[0]['publish_dt']);
                                  echo $days  = $date2->diff($date1)->format('%a');
                                  ?>) 
                                <?php else: ?>
                                          ---
                               </td>
                               <?php endif ?>
                               </tr>
                               </table>
                            </div>
                        </div>
                    </div>
                    <?php  if($rec[0]['old_process']==0): ?>
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                        
                        
                         <div class="card-header">
                            <h5 class="card-title">
                            	
                                حالة العقد</h5>	
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
	if($rec[0]['printing_status']==0 && $rec[0]['publish_status']==2)
	{
		$step12= 'secondary';
	}
	elseif($rec[0]['printing_status']==1)
	{
		$step12= 'warning';
	}
	elseif($rec[0]['printing_status']==2)
	{
		$step12= 'success';
	}
	elseif($rec[0]['printing_status']==3)
	{
		$step12= 'danger';
	}
	else
	{
		$step12= 'none';	
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
<div class="progress-bar bg-<?= $step7 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">النسخة النهائية (بدون الردمك)</div>
<div class="progress-bar bg-<?= $step8 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">طباعة العينة</div>
<div class="progress-bar bg-<?= $step9 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">الوزارة</div>
<div class="progress-bar bg-<?= $step10 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">النسخة النهائية (ردمك)</div>
<div class="progress-bar bg-<?= $step11 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Published</div>

<div class="progress-bar bg-<?= $step12 ?>" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">الطباعة</div>

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
$dis11='';
$dis12='';
if($this->session->userdata('level')=='editor')
{
	$u1 = base_url().'dashboard/contract_detail/processing';

	$page1 = $this->db->where('url',$u1 )->get('limitations')->result_array();
	if(count($page1))
	{
		
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page1[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis1 = 'none';		
		}
		
	}
	else
	{
		$dis1 = 'none';		
	}
	
	$u2 = base_url().'dashboard/contract_detail/payments';
	$page2 = $this->db->where('url',$u2 )->get('limitations')->result_array();
	if(count($page2))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page2[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis2 = 'none';		
		}
	}
	else
	{
		$dis2 = 'none';		
	}
	$u3 = base_url().'dashboard/contract_detail/awaiting_books';
	$page3 = $this->db->where('url',$u3 )->get('limitations')->result_array();
	if(count($page3))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page3[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis3 = 'none';		
		}
	}
	else
	{
		$dis3 = 'none';		
	}
	$u4 = base_url().'dashboard/contract_detail/correction';
	$page4 = $this->db->where('url',$u4 )->get('limitations')->result_array();
	if(count($page4))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page4[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis4 = 'none';		
		}
	}
	else
	{
		$dis4 = 'none';		
	}
	$u5 = base_url().'dashboard/contract_detail/inner_design';
	$page5 = $this->db->where('url',$u5 )->get('limitations')->result_array();
	if(count($page5))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page5[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis5 = 'none';		
		}
	}
	else
	{
		$dis5 = 'none';		
	}
	$u6 = base_url().'dashboard/contract_detail/cover_design';
	$page6 = $this->db->where('url',$u6 )->get('limitations')->result_array();
	if(count($page6))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page6[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis6 = 'none';		
		}
	}
	
	else
	{
		$dis6 = 'none';		
	}
	$u7 = base_url().'dashboard/contract_detail/final_book';
	$page7 = $this->db->where('url',$u7 )->get('limitations')->result_array();
	if(count($page7))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page7[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis7 = 'none';		
		}
	}
	else
	{
		$dis7 = 'none';		
	}
	
	$u8 = base_url().'dashboard/contract_detail/printing_prototype';
	$page8 = $this->db->where('url',$u8 )->get('limitations')->result_array();
	if(count($page8))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page8[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis8 = 'none';		
		}
	}
	else
	{
		$dis8 = 'none';		
	}
	$u9 = base_url().'dashboard/contract_detail/ministry';
	$page9 = $this->db->where('url',$u9 )->get('limitations')->result_array();
	if(count($page9)==0)
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page9[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis9 = 'none';		
		}
		
	}
	else
	{
		$dis9 = 'none';		
	}
	$u10 = base_url().'dashboard/contract_detail/final_book2';
	$page10 = $this->db->where('url',$u10 )->get('limitations')->result_array();
	if(count($page10)==0)
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page10[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis10 = 'none';		
		}
		
	}
	else
	{
		$dis10 = 'none';		
	}

		
		$u11 = base_url().'dashboard/contract_detail/published';
	$page11 = $this->db->where('url',$u11 )->get('limitations')->result_array();
	if(count($page12))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page11[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis11 = 'none';		
		}
	}
	else
	{
		$dis11 = 'none';		
	}
	
	$u12 = base_url().'dashboard/contract_detail/printing';
	$page12 = $this->db->where('url',$u12 )->get('limitations')->result_array();
	if(count($page12))
	{
		$user_role = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page12[0]['id']))->get('user_roles')->result_array();
		if(count($user_role)==0)
		{
			$dis12 = 'none';		
		}
	}
	else
	{
		$dis12 = 'none';		
	}	
}
 ?>
<ul class="nav nav-tabs mb-3" id="defaultTab" role="tablist">
<li class="nav-item" style="display:<?= $dis1 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='processing'): ?>active<?php endif ?>"  href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/processing/<?= $rec[0]['id'] ?>">إعتماد العقد</a>
</li>
<li class="nav-item"  style="display:<?= $dis2 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='payments'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/payments/<?= $rec[0]['id'] ?>">المالية</a>
</li>
<li class="nav-item" style="display:<?= $dis3 ?>"  >
<a class="nav-link  <?php if($this->uri->segment(3)=='awaiting_books'): ?>active<?php endif ?>"  href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/awaiting_books/<?= $rec[0]['id'] ?>">إستلام الكتاب</a>
</li>
<li class="nav-item" style="display:<?= $dis4 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='correction'): ?>active<?php endif ?>"  href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/correction/<?= $rec[0]['id'] ?>">التدقيق</a>
</li>
<li class="nav-item" style="display:<?= $dis5 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='inner_design'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/inner_design/<?= $rec[0]['id'] ?>">التنفيذ الداخلي</a>
</li>
<li class="nav-item" style="display:<?= $dis6 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='cover_design'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/cover_design/<?= $rec[0]['id'] ?>">تصميم الغلاف</a>
</li>

<li class="nav-item" style="display:<?= $dis7 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='final_book'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/final_book/<?= $rec[0]['id'] ?>">النسخة النهائية (بدون الردمك)</a>
</li>
<li class="nav-item" style="display:<?= $dis8 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='printing_prototype'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/printing_prototype/<?= $rec[0]['id'] ?>">طباعة العينة</a>
</li>
<li class="nav-item" style="display:<?= $dis9 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='ministry'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/ministry/<?= $rec[0]['id'] ?>">الوزارة</a>
</li>

<li class="nav-item" style="display:<?= $dis10 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='final_book2'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/final_book2/<?= $rec[0]['id'] ?>">النسخة النهائية (ردمك)</a>
</li>
<li class="nav-item" style="display:<?= $dis11 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='published'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/published/<?= $rec[0]['id'] ?>">Published</a>
</li>

<li class="nav-item" style="display:<?= $dis12 ?>"  >
<a class="nav-link <?php if($this->uri->segment(3)=='printing'): ?>active<?php endif ?>"   href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/printing/<?= $rec[0]['id'] ?>">طباعة</a>
</li>


</ul>

<?php if($this->uri->segment(3)=='processing'): ?>
<table class="table table-bordered" style="display:<?= $dis1 ?>">

<tr style="background: linear-gradient(90deg, rgba(131,11,13,1) 0%, rgba(172,40,43,1) 100%); color:white">
<th colspan="2">حالة العقد</th>
</tr>
<tr>
<td width="30%">الحالة</td>
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
<td>تاريخ تعليق العقد</td>
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
<td>ملاحظة تعليق العقد</td>
<td>
<?php if($rec[0]['pending_note']!=''): ?>
<?= $rec[0]['pending_note'] ?>

<?php else: ?>
---
<?php endif ?>

</td>
</tr>
<tr>
<td>تاريخ إعتماد العقد</td>
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



<tr>
<td>عمل</td>
<td>
<?php if($rec[0]['status']==0): ?>

<a style="cursor:pointer;"  href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#exampleModalLong-2">تعليق</a>

<a style="cursor:pointer; "  href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#exampleModalLong-1">تشغيل</a>
<?php elseif($rec[0]['status']==1): ?>
<a style="cursor:pointer;"  href="#" class="btn btn-secondary-rgba"  data-animation="zoomInUp" data-toggle="modal" data-target="#exampleModalLong-1">تشغيل</a>                                                   
<?php else: ?>
<?php $tagss = $this->db->where('id',$rec[0]['tags'])->get('users')->result_array();  ?>
<?php if(count($tagss)): ?>
---
<?php else: ?>
<a href="#"  class="btn btn-secondary-rgba"  data-animation="zoomInUp" data-toggle="modal" data-target="#tag">Dealing Person</a>
<?php endif ?>
 
<?php endif ?>
<div class="modal fade" id="tag" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">إرسال إلى المالية للإعتماد</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" action="<?= $this->load->config->base_url() ?>dashboard/add_tag_data">
<div class="modal-body">
<label>User</label>
<?php $tags =  $this->db->where('tag',1)->get('users')->result_array(); ?>
<select    class="form-control" name="tags" >
<?php foreach($tags as $tt): ?>
<option value="<?= $tt['id'] ?>" <?php if($tt['id']==$rec[0]['tags']): ?> selected<?php endif ?>> <?= $tt['name'] ?></option>
<?php endforeach ?>
</select>


<input type="hidden" name="id" value="<?= $rec[0]['id'] ?>" class="form-control">
<input type="hidden" name="url" value="<?= $this->uri->segment(3) ?>" class="form-control">
</div>
<div class="modal-footer">
<button type="submt" class="btn btn-primary">إرسال</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>

</div>
</form>
</div>
</div>
</div>
<div class="modal fade" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">إرسال إلى المالية للإعتماد</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" action="<?= $this->load->config->base_url() ?>dashboard/change_contract_status_processing">
<div class="modal-body">
<input type="hidden"   value="<?= $rec[0]['process_user'] ?>"  class="form-control" name="process_user" />
<input type="hidden" readonly="readonly" required name="dt"  value="<?= date('Y-m-d') ?>" class="form-control">
<input type="hidden"  value="<?= $rec[0]['pending_note'] ?>"  class="form-control" name="pending_note" />
<input type="hidden"  value="Move to Processing Date"  class="form-control" name="log_act" />
<input type="hidden" value="<?= $rec[0]['pending_dt'] ?>" class="form-control" name="pending_dt" />

<input type="hidden" name="id" value="<?= $rec[0]['id'] ?>" class="form-control">
<input type="hidden" name="status" value="2" class="form-control">
<input type="hidden" name="url" value="processing" class="form-control">
</div>
<div class="modal-footer">
<button type="submt" class="btn btn-primary">إرسال</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>

</div>
</form>
</div>
</div>
</div>


<div class="modal fade" id="exampleModalLong-2" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">تعليق العقد</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" action="<?= $this->load->config->base_url() ?>dashboard/change_contract_status_processing">
<div class="modal-body">
<label>ملاحظة</label>
<input type="text" required value="<?= $rec[0]['pending_note'] ?>" class="form-control" name="pending_note" />
<input type="hidden"  value="<?= $rec[0]['process_user'] ?>" class="form-control" name="process_user" />
<input type="hidden"  value="<?= $rec[0]['processing_dt'] ?>"  class="form-control" name="dt" />
<input type="hidden"  value="Move to Pending Date"  class="form-control" name="log_act" />

<input type="hidden" required value="<?= date('Y-m-d') ?>" name="pending_dt" class="form-control">

<input type="hidden" name="id" value="<?= $rec[0]['id'] ?>" class="form-control">
<input type="hidden" name="status" value="1" class="form-control">
<input type="hidden" name="url" value="<?= $this->uri->segment(3) ?>" class="form-control">
</div>
<div class="modal-footer">
<button type="submt" class="btn btn-primary">إرسال</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>

</div>
</form>
</div>
</div>
</div>
</td>
</tr>
 <?php if(count($tagss)): ?>
<tr>
<td>اسم معمد العقد</td>
<td>
 <?=  $tagss[0]['name']?>                                         
</td>
</tr>
  <?php endif ?>
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='payments'): ?>
<table class="table table-bordered"  style="display:<?= $dis2 ?>"  >
<?php if($rec[0]['status']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2">المالية</th>
</tr>

<tr>
<td width="30%">سعر الباقة</td>
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
<td width="30%">الحالة</td>
<td>
<?php if($rec[0]['payment_status']==0): ?>
<label class="badge badge-secondary">تعليق العقد</label>
<?php elseif($rec[0]['payment_status']==1): ?>
<label class="badge badge-success">مدفوع كامل</label>
<?php elseif($rec[0]['payment_status']==2): ?>
<label class="badge badge-warning">مدفوع جزئي</label>
<?php endif ?>
</td>
</tr>
<tr>
<td width="30%">Processing Date</td>
<td>
<?php
$date=date_create($rec[0]['processing_dt']);
echo date_format($date,"d/m/Y");
?>
</td>
</tr>
<tr>
<td>تاريخ الدفع</td>
<td><?php if( $rec[0]['payment_dt']==''):?>
---
<?php else: ?>

<?php
$date=date_create($rec[0]['payment_dt']);
echo date_format($date,"d/m/Y");
?>
<?php endif ?>
</td>
</tr>
<tr>
<td>عمل</td>
<td>

<a href="#"  data-animation="zoomInUp" class="btn btn-secondary-rgba" data-toggle="modal" data-target="#payment" >تشغيل</a>
<div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">إضافة حوالة</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_payment_data">
<div class="modal-body">
<?php if($rec[0]['payment_status']!=1): ?>
<label>المبلغ المدفوع</label>
<input type="number" class="form-control"  value="" name="paid_amount" required />
<?php if($rec[0]['payment_status']==0): ?>
<input type="hidden" class="form-control"  value="<?= $rec[0]['price'] ?>" name="total_amount" required />
<?php else: ?>
<input type="hidden" class="form-control"  value="<?= $rec[0]['remaining_amount'] ?>" name="total_amount" required />
<?php endif ?>
<br />
<label>رقم الحوالة</label>
<input type="text" class="form-control"  value=""   name="trans_id" required />

<br />
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
<?php endif ?>
<?php if($rec[0]['payment_status']!=0): ?>
<h3>الحوالات</h3>
<table class="table table-bordered">
<tr>
 <th>Date</th>
	<th>المبلغ المدفوع</th>
    <th>رقم الحوالة</th>
</tr>
<?php $payment =  $this->db->where('pid',$rec[0]['id'])->get('contract_payments')->result_array(); ?>
<?php foreach($payment as $pp): ?>
<tr>
<td>
<?php
$date=date_create($rr['dt']);
echo date_format($date,"d/m/Y");
?>
</td>
	<td><?= $pp['paid_amount'] ?></td>
    <td><?= $pp['trans_id'] ?></td>
</tr>
<?php endforeach ?>
</table>
<?php  endif?>
</div>
<div class="modal-footer">

<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
<?php if($rec[0]['payment_status']!=1): ?>
<button type="submit" class="btn btn-default" >إرسال</button>
<?php  endif?>
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
<?php if($this->uri->segment(3)=='awaiting_books'): ?>
<table  class="table table-bordered"  style="display:<?= $dis3 ?>"  >
<?php if($rec[0]['payment_status']!=0): ?>
<tr style="background:#f5f5f5">
<th colspan="2">رفع الكتاب</th>
</tr>
<tr>
<td width="30%">الحالة</td>
<td>

<?php if($rec[0]['author_sign']==0): ?>
<label class="badge badge-secondary">بإنتظار الكتاب من المؤلف أو المتابع</label>
<a href="#"  data-animation="zoomInUp" data-toggle="modal" data-target="#direct_upload" title="Upload By Yourself"><i class="fa fa-upload"></i></a>
<label class="badge badge-secondary" style="color:red; background-color:white">يجب رفع الكتاب ملف واحد بصيغة word</label>
<div class="modal fade" id="direct_upload" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">رفع الكتاب</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/upload_book_direct">
<div class="modal-body">
<input type="hidden"  name="book_doc">
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">



</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
<button type="submit" class="btn btn-default" >إرسال</button>
</div>
</form>
</div>
</div>
</div>
<?php elseif($rec[0]['author_sign']==1): ?>
<label class="badge badge-success">رفع الكتاب</label>

<?php endif ?>
</td>
</tr>

<tr>
<td>Processing Date</td>
<td>
<?php
$date=date_create($rec[0]['payment_dt']);
echo date_format($date,"d/m/Y");
?>
</td>
</tr>
<tr>
<td>التاريخ</td>
<td><?php if( $rec[0]['book_dt']==''):?>
---
<?php else: ?>

<?php
$date=date_create($rec[0]['book_dt']);
echo date_format($date,"d/m/Y");
?>
<?php endif ?>
</td>
</tr>


<?php endif ?>

</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='correction'): ?>
<table class="table table-bordered"  style="display:<?= $dis4 ?>"  >
<?php if($rec[0]['author_sign']==1): ?>
<tr style="background:#f5f5f5">
<th colspan="2">التدقيق</th>
</tr>
<tr>
<td  width="30%">الحالة</td>
<td>


<?php if($rec[0]['correction_status']==0): ?>
<label class="badge badge-secondary">إنتظار التدقيق</label>
<?php elseif($rec[0]['correction_status']==1): ?>
<label class="badge badge-warning">إنتظار موافقة المؤلف</label>
<?php elseif($rec[0]['correction_status']==2): ?>
<label class="badge badge-success">تم الموافقة من المؤلف</label>
<?php elseif($rec[0]['correction_status']==3): ?>
<label class="badge badge-danger">تم الرفض من المؤلف</label>
<?php endif ?>

<?php if($rec[0]['correction_task']==0): ?>
<label class="badge badge-warning">Inner Processing - Pending</label>
<?php elseif($rec[0]['correction_task']==1): ?>
<label class="badge badge-info">Inner Processing - Inprocess</label>
<?php elseif($rec[0]['correction_task']==2): ?>
<label class="badge badge-success">Inner Processing - Completed</label>
<?php endif ?>




</td>
</tr>

<tr>
<td>Start Date</td>
<td>
<?php
$date=date_create($rec[0]['book_dt']);
echo date_format($date,"d/m/Y");
?>
</td>
</tr>

<?php if($rec[0]['correction_status']==2): ?>
<tr>
	<td>Completed Date</td>
    <td>
    <?php
$date=date_create($rec[0]['correction_dt']);
echo date_format($date,"d/m/Y");
?>
    </td>
</tr>
<?php endif ?>


<tr>
<td>عمل</td>

<td>
<?php if($rec[0]['correction_task']==0): ?>
<a href="<?= $this->load->config->base_url() ?>dashboard/mark_task_complete/<?= $this->uri->segment(3) ?>/<?= $rec[0]['id'] ?>?task=correction_task&status=1&type=0" onclick="return confirm('Want to Start?')" class="btn btn-secondary-rgba">Start Processing</a>

<?php elseif($rec[0]['correction_task']==1): ?>
<a href="#" data-animation="zoomInUp" data-toggle="modal" class="btn btn-secondary-rgba" data-target="#correction_processing">إضافة مدقق</a>

<a href="<?= $this->load->config->base_url() ?>dashboard/mark_task_complete/<?= $this->uri->segment(3) ?>/<?= $rec[0]['id'] ?>?task=correction_task&status=2&type=0" onclick="return confirm('Want to Complete?')" class="btn btn-secondary-rgba">Mark as Complete</a>
<?php else: ?>
<a href="#" data-animation="zoomInUp" data-toggle="modal" class="btn btn-secondary-rgba" data-target="#correction_processing">إضافة مدقق</a>

<a href="#" data-animation="zoomInUp" data-toggle="modal" data-target="#correction" class="btn btn-secondary-rgba">إعتماد المؤلف</a>
<?php endif ?>
<div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">إعتماد المؤلف</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/upload_correction_file">
<div class="modal-body">
<?php if($rec[0]['correction_status']!=2): ?>
<input type="radio"   value="0" checked="checked"  name="author_sign"/>  ريثما
&nbsp; &nbsp;
<input type="radio"  value="1" name="author_sign"/>  قبول
&nbsp; &nbsp;
<input type="radio"  value="2" name="author_sign"/>  رفض
<br />
<br />
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
<input type="hidden" value="0" name="type">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
<?php endif ?>
<table class="table table-bordered">
<tr>

<th width="15%">التاريخ</th>
<th width="5%">الحذف</th>
</tr>
<?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>0))->order_by('id','asc')->get('correction_log')->result_array(); ?>
<?php foreach($correction as $cc): ?>
<tr>

<td>
<?php

$date=date_create($cc['up_dt']);
echo   date_format($date,"h:i:s - d/m/Y");
?>
</td>
<td>
<?php if($rec[0]['correction_status']!=2): ?>
<a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_author_approval_data/<?= $cc['id'] ?>/correction/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
<?php else: ?>
---
<?php endif ?>
</td>
</tr>
<?php endforeach ?>
</table>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
<?php if($rec[0]['correction_status']!=2): ?>
<button type="submit" class="btn btn-default" >إرسال</button>
<?php endif ?>
</div>
</form>
</div>
</div>
</div>
<div class="modal fade" id="correction_processing" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">التدقيق</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_inner_prcessing_log">
<div class="modal-body">
<?php if($rec[0]['correction_task']!=2): ?>
<div class="row">
<div class="col-lg-4">
<label>المدقق</label>
<input type="text"  name="name" required class="form-control" />
</div>

<div class="col-lg-8">
<label>ملاحظة</label>
<input type="text" name="note" required class="form-control" />
</div>
<input type="hidden" value="<?= date('Y-m-d') ?>"  name="dt" class="form-control" />
</div>
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="pid">
<input type="hidden" value="0" name="type">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
<br><br>
<?php endif ?>
<table class="table table-bordered">
<tr>
<th>الإسم</th>
<th>ملاحظة</th>
<th width="20%">التاريخ</th>
<th width="5%">حذف</th>
</tr>
<?php  $inner_correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>0))->order_by('id','asc')->get('contract_processing')->result_array(); ?>
<?php foreach($inner_correction as $cc): ?>
<tr>
<td>
<?php if($cc['name']==''): $pname = ''; ?>
---
<?php else: ?>
<?= $pname =  $cc['name'] ?>
<?php endif ?>
</td>
<td>
<?php if($cc['note']==''): ?>
---
<?php else: ?>
<?= $cc['note'] ?>
<?php endif ?>
</td>
<td width="15%">

<?php
$date=date_create($cc['up_dt']);
echo $pdate = date_format($date,"h:i:s - d/m/Y");
?>
</td>
<td width="5%">
<?php if($rec[0]['correction_task']!=2): ?>
<a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_inner_processing/<?= $cc['id'] ?>/correction/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
<?php else: ?>
---
<?php endif ?>
</td>
</tr>
<?php endforeach ?>
</table>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
<?php if($rec[0]['correction_task']!=2): ?>
<button type="submit" class="btn btn-default" >إرسال</button>
<?php endif ?>
</div>
</form>
</div>
</div>
</div>
</td>
</tr>

<?php if($rec[0]['correction_status']!=2): ?>
<tr>
	<td>المدقق</td>
    <td>
	

	<?= $pdate ?>  <?= $pname ?>
    
    
     </td>
</tr>
<?php endif ?>

<?php endif ?>
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='inner_design'): ?>
<table class="table table-bordered"  style="display:<?= $dis5 ?>"  >
<?php if($rec[0]['correction_status']==2): ?>
           <tr style="background:#f5f5f5">
            <th colspan="2">التنفيذ الداخلي</th>
            </tr>
            
            <tr>
            <td width="30%">  الحالة</td>
            <td>
           
            
            
            <?php if($rec[0]['inner_design_st']==0): ?>
            <label class="badge badge-secondary">إنتظار التصميم</label>
            <?php elseif($rec[0]['inner_design_st']==1): ?>
            <label class="badge badge-warning">إنتظار موافقة المؤلف</label>
            <?php elseif($rec[0]['inner_design_st']==2): ?>
            <label class="badge badge-success">تم الإعتماد من المؤلف</label>
            <?php elseif($rec[0]['inner_design_st']==3): ?>
            <label class="badge badge-danger">تم الرفض من المؤلف</label>
            <?php endif ?>
            
             <?php if($rec[0]['inner_design_task']==0): ?>
<label class="badge badge-warning">Inner Processing - Pending</label>
<?php elseif($rec[0]['inner_design_task']==1): ?>
<label class="badge badge-info">Inner Processing - Inprocess</label>
<?php elseif($rec[0]['inner_design_task']==2): ?>
<label class="badge badge-success">Inner Processing - Completed</label>
<?php endif ?>
            
            
            </td>
            </tr>
            <tr>
            <td>Start Date</td>
            <td>
           
            <?php
            $date=date_create($rec[0]['correction_dt']);
            echo date_format($date,"d/m/Y");
            ?>
            
            </td>
            </tr>
			<?php if($rec[0]['inner_design_st']==2): ?>
            <tr>
            <td>Completed Date</td>
            <td>
            <?php
            $date=date_create($rec[0]['inner_design_dt']);
            echo date_format($date,"d/m/Y");
            ?>
            </td>
            </tr>
            <?php endif ?>
            


 <tr>
<td>عمل</td>
<td>
<?php if($rec[0]['inner_design_task']==0): ?>
<a href="<?= $this->load->config->base_url() ?>dashboard/mark_task_complete/<?= $this->uri->segment(3) ?>/<?= $rec[0]['id'] ?>?task=inner_design_task&status=1&type=2" onclick="return confirm('Want to Start?')" class="btn btn-secondary-rgba">Start Processing</a>
<?php elseif($rec[0]['inner_design_task']==1): ?>

<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#innerdesign_processing">إضافة منفذ</a>

<a href="<?= $this->load->config->base_url() ?>dashboard/mark_task_complete/<?= $this->uri->segment(3) ?>/<?= $rec[0]['id'] ?>?task=inner_design_task&status=2&type=2" onclick="return confirm('Want to Complete?')" class="btn btn-secondary-rgba">Mark as Complete</a>
<?php else: ?>
<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#innerdesign_processing">إضافة منفذ</a>
<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#dd">إعتماد المؤلف</a>
<?php endif ?>

<div class="modal fade" id="innerdesign_processing" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle-1">إعتماد المؤلف</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_inner_prcessing_log">
            <div class="modal-body">
          <?php if($rec[0]['inner_design_task']!=2): ?>
           <div class="row">
           <div class="col-lg-4">
           <label>الإسم</label>
           <input type="text"  name="name" required class="form-control" />
           </div>
           
           <div class="col-lg-8">
           <label>ملاحظة</label>
           <input type="text" name="note" required class="form-control" />
           </div>
           <input type="hidden" value="<?= date('Y-m-d') ?>"  name="dt" class="form-control" />
           </div>
           
            <input type="hidden" value="<?= $rec[0]['id'] ?>" name="pid">
            <input type="hidden" value="2" name="type">
            <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
            <br><br>
            <?php endif ?>
            <table class="table table-bordered">
            <tr>
            <th>الإسم</th>
            <th>ملاحظة</th>
            <th width="20%">التاريخ</th>
            <th width="5%">حذف</th>
            </tr>
            <?php  $innerdesign_processing = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>2))->get('contract_processing')->result_array(); ?>
            <?php foreach($innerdesign_processing as $cc): ?>
            <tr>
            <td><?=  $pname = $cc['name'] ?></td>
            <td>
            <?php if($cc['note']==''): ?>
            ---
            <?php else: ?>
            <?= $cc['note'] ?>
            <?php endif ?>
            </td>
            <td>
            
            <?php
            $date=date_create($cc['up_dt']);
            echo  $pdate = date_format($date,"h:i:s - d/m/Y");
            ?>
            </td>
            <td>
               <?php if($rec[0]['inner_design_task']!=2): ?>
            <a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_inner_processing/<?= $cc['id'] ?>/inner_design/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
            <?php else: ?>
            ---
            <?php endif ?>
            </td>
            </tr>
            <?php endforeach ?>
            </table>
            
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
              <?php if($rec[0]['inner_design_task']!=2): ?>
            <button type="submit" class="btn btn-default" >إرسال</button>
            <?php endif ?>
            </div>
            </form>
            </div>
            </div>
            </div>
 <div class="modal fade" id="dd" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle-1">إعتماد المؤلف</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/upload_correction_file">
            <div class="modal-body">
            <?php if($rec[0]['inner_design_st']!=2): ?>
           <input type="radio"   value="0" checked="checked"  name="author_sign"/>  ريثما
&nbsp; &nbsp;
<input type="radio"  value="1" name="author_sign"/>  قبول
&nbsp; &nbsp;
<input type="radio"  value="2" name="author_sign"/>  رفض
            <input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
            <input type="hidden" value="2" name="type">
            <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
            <br><br>
            <?php endif ?>
            <table class="table table-bordered">
            <tr>
           
            <th width="15%">التاريخ</th>
            <th width="5%">حذف</th>
            </tr>
            <?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>2))->get('correction_log')->result_array(); ?>
            <?php foreach($correction as $cc): ?>
            <tr>
           
            <td>
            <?php
            $date=date_create($cc['up_dt']);
            echo date_format($date,"h:i:s - d/m/Y");
            ?>
            
            </td>
            <td>
             <?php if($rec[0]['inner_design_st']!=2): ?>
            <a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_author_approval_data/<?= $cc['id'] ?>/inner_design/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
             <?php else: ?>
            ---
            <?php endif ?>
            </td>
            </tr>
            <?php endforeach ?>
            </table>
            
            
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
<?php endif ?>
<?php if($rec[0]['inner_design_st']!=2): ?>
<tr>
<td>المنفذ</td>
<td>
<?= $pdate ?>  <?= $pname ?> </td>
</tr>
<?php endif ?>
           
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='cover_design'): ?>
<table class="table table-bordered"  style="display:<?= $dis6 ?>"  >
<?php if($rec[0]['inner_design_st']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2">تصميم الغلاف</th>
</tr>

<tr>
<td width="30%">الحالة</td>
<td>
<?php if($rec[0]['cover_status']==0): ?>
<label class="badge badge-secondary">إنتظار تصميم الغلاف</label>
<?php elseif($rec[0]['cover_status']==1): ?>
<label class="badge badge-warning">إنتظار إعتماد المؤلف</label>
<?php elseif($rec[0]['cover_status']==2): ?>
<label class="badge badge-success">تم إعتماد المؤلف</label>
<?php elseif($rec[0]['cover_status']==3): ?>
<label class="badge badge-danger">تم الرفض من المؤلف</label>
<?php endif ?>

<?php if($rec[0]['cover_task']==0): ?>
<label class="badge badge-warning">Inner Processing - Pending</label>
<?php elseif($rec[0]['cover_task']==1): ?>
<label class="badge badge-info">Inner Processing - Inprocess</label>
<?php elseif($rec[0]['cover_task']==2): ?>
<label class="badge badge-success">Inner Processing - Completed</label>
<?php endif ?>

</td>
</tr>
<tr>
<td>Start Date</td>
<td>

<?php

$date=date_create($rec[0]['inner_design_dt']);
echo date_format($date,"d/m/Y");
?>

</td>
</tr>
<?php if($rec[0]['cover_status']==2): ?>
<tr>
<td>Completed Date</td>
<td>


<?php
$date=date_create($rec[0]['cover_dt']);
echo date_format($date,"d/m/Y");
?>


</td>
</tr>
<?php endif ?>
<tr>
<td> عمل</td>
<td>


<?php if($rec[0]['cover_task']==0): ?>
<a href="<?= $this->load->config->base_url() ?>dashboard/mark_task_complete/<?= $this->uri->segment(3) ?>/<?= $rec[0]['id'] ?>?task=cover_task&status=1&type=1" onclick="return confirm('Want to Start?')" class="btn btn-secondary-rgba">Start Processing</a>
<?php elseif($rec[0]['cover_task']==1): ?>

<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#coverr_processing">إضافة منفذ</a>

<a href="<?= $this->load->config->base_url() ?>dashboard/mark_task_complete/<?= $this->uri->segment(3) ?>/<?= $rec[0]['id'] ?>?task=cover_task&status=2&type=1" onclick="return confirm('Want to Complete?')" class="btn btn-secondary-rgba">Mark as Complete</a>
<?php else: ?>
<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#coverr_processing">إضافة منفذ</a>
<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#cover">إعتماد المؤلف</a>
<?php endif ?>






<div class="modal fade" id="coverr_processing" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">إضافة مصمم غلاف</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_inner_prcessing_log">
<div class="modal-body">
<?php if($rec[0]['cover_task']!=2): ?>
<div class="row">
<div class="col-lg-4">
<label>الإسم</label>
<input type="text"  name="name" required class="form-control" />
</div>

<div class="col-lg-8">
<label>ملاحظة</label>
<input type="text" name="note"  required class="form-control" />
</div>
<input type="hidden" value="<?= date('Y-m-d') ?>"  name="dt" class="form-control" />
</div>

<input type="hidden" value="<?= $rec[0]['id'] ?>" name="pid">
<input type="hidden" value="1" name="type">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
<br><br>
<?php endif ?>
<table class="table table-bordered">
<tr>
<th>الإسم</th>
<th>ملاحظة</th>
<th  width="15%">التاريخ</th>
<th width="5%">حذف</th>
</tr>
<?php  $cover_correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>1))->get('contract_processing')->result_array(); ?>
<?php foreach($cover_correction as $cc): ?>
<tr>
<td>

<?php if($cc['name']==''): ?>
---
<?=  $pname= ''?>
<?php else: ?>
<?=  $pname= $cc['name'] ?>
<?php endif ?>

</td>
<td>
<?php if($cc['note']==''): ?>
---
<?php else: ?>
<?= $cc['note'] ?>
<?php endif ?>
</td>
<td width="20%">

<?php
$date=date_create($cc['up_dt']);
echo  $pdate= date_format($date,"h:i:s - d/m/Y");
?>
</td>
<td width="5%">
<?php if($rec[0]['cover_task']!=2): ?>
<a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_inner_processing/<?= $cc['id'] ?>/cover_design/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
<?php else: ?>
---
<?php endif ?>
</td>
</tr>
<?php endforeach ?>
</table>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
<?php if($rec[0]['cover_task']!=2): ?>
<button type="submit" class="btn btn-default" >إرسال</button>
<?php  endif?>
</div>
</form>
</div>
</div>
</div>
<div class="modal fade" id="cover" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">إعتماد الغلاف</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/upload_correction_file">
<div class="modal-body">
<?php if($rec[0]['cover_status']!=2): ?>

 <input type="radio"   value="0" checked="checked"  name="author_sign"/>  ريثما
&nbsp; &nbsp;
<input type="radio"  value="1" name="author_sign"/>  قبول
&nbsp; &nbsp;
<input type="radio"  value="2" name="author_sign"/>  رفض

<input type="hidden" required  name="upload_file">
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
<input type="hidden" value="1" name="type">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
<br><br>
<?php endif ?>
<table class="table table-bordered">
<tr>

<th width="15%">التاريخ</th>
<th width="5%">حذف</th>
</tr>
<?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>1))->get('correction_log')->result_array(); ?>
<?php foreach($correction as $cc): ?>
<tr>

<td>
<?php
$date=date_create($cc['up_dt']);
echo date_format($date,"h:i:s - d/m/Y");
?>

</td>
<td>
<?php if($rec[0]['cover_status']!=2): ?>
<a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_author_approval_data/<?= $cc['id'] ?>/cover_design/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
<?php  else:?>
---
<?php endif ?>
</td>
</tr>
<?php endforeach ?>
</table>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
<?php if($rec[0]['cover_status']!=2): ?>
<button type="submit" class="btn btn-default" >إرسال</button>
<?php endif ?>
</div>
</form>
</div>
</div>
</div>

</td>
</tr>
<?php endif ?>
<?php if($rec[0]['cover_status']!=2): ?>
<tr>
<td>المنفذ</td>
<td>
<?= $pdate ?>  <?= $pname ?> </td>
</tr>
<?php endif ?>
           
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='final_book'): ?>
<table class="table table-bordered"  style="display:<?= $dis7 ?>"  >
<?php if($rec[0]['cover_status']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2">النسخة النهائية (بدون الفسح)</th>
</tr>

<tr>
<td width="30%">الحالة</td>
<td>
<?php if($rec[0]['final_book_status']==0): ?>
<label class="badge badge-secondary">إنتظار رفع الكتاب</label>
<?php elseif($rec[0]['final_book_status']==1): ?>
<label class="badge badge-warning">إنتظار موافقة المؤلف</label>
<?php elseif($rec[0]['final_book_status']==2): ?>
<label class="badge badge-success">تم الإعتماد</label>
<?php elseif($rec[0]['final_book_status']==3): ?>
<label class="badge badge-danger">تم الرفض</label>
<?php elseif($rec[0]['final_book_status']==4): ?>
<label class="badge badge-danger">second round for files</label>
<?php endif ?>



</td>
</tr>
<tr>
<td>Start Date</td>
<td>

<?php
$date=date_create($rec[0]['cover_dt']);
echo date_format($date,"d/m/Y");
?>

</td>
</tr>


<tr>
<td>
<?php if($rec[0]['final_book_status']!=2): ?>
Processing Date
<?php else: ?>
Completed Date
<?php  endif?>
</td>
<td>
<?php if($rec[0]['final_book_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec[0]['final_book_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>

<tr>
<td>عمل</td>
<td>
<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#prototype">إعتماد المؤلف</a>
<div class="modal fade" id="prototype" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">نسخة الكتاب</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/upload_correction_file">
<div class="modal-body">
<?php if($rec[0]['final_book_status']!=2): ?>
 <input type="radio"   value="0" checked="checked"  name="author_sign"/>  ريثما
&nbsp; &nbsp;
<input type="radio"  value="1" name="author_sign"/>  قبول
&nbsp; &nbsp;
<input type="radio"  value="2" name="author_sign"/>  رفض

<br />
<br />
<input type="file" required name="upload_file">
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
<input type="hidden" value="3" name="type">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
<br><br>
<?php endif ?>
<table class="table table-bordered">
<tr>
<th>الكتاب</th>
<th>ملاحظة</th>
<th width="20%">التاريخ</th>
<th width="5%">حذف</th>
</tr>
<?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>3))->get('correction_log')->result_array(); ?>
<?php foreach($correction as $cc): ?>
<tr>
<td><a download href="<?= $this->load->config->base_url() ?><?= $cc['upload_file'] ?>">تحميل</a></td>
<td>
<?php if($cc['correct_file']==''): ?>
---
<?php else: ?>
<a download href="<?= $this->load->config->base_url() ?><?= $cc['correct_file'] ?>">تحميل</a>
<?php endif ?>
</td>
<td>
<?php
$date=date_create($cc['up_dt']);
echo date_format($date,"h:i:s - d/m/Y");
?>

</td>
<td>
<?php if($rec[0]['final_book_status']!=2): ?>
<a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_author_approval_data/<?= $cc['id'] ?>/final_book/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
<?php else: ?>
---
<?php endif ?>
</td>
</tr>
<?php endforeach ?>
</table>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
<?php if($rec[0]['final_book_status']!=2): ?>
<button type="submit" class="btn btn-default" >إرسال</button>
<?php endif ?>
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
<?php if($this->uri->segment(3)=='printing_prototype'): ?>
<table class="table table-bordered"  style="display:<?= $dis8 ?>"  >
<?php if($rec[0]['final_book_status']==2 ): ?>
<tr style="background:#f5f5f5">
<th colspan="2">طباعة العينة</th>
</tr>


<tr>
<td>الكتاب</td>
<td>
<a href="<?= $this->load->config->base_url() ?><?= $rec[0]['final_book_doc'] ?>" download><i  class="fa fa-download"></i> تحميل</a>
</td>
</tr>
<tr>
<td width="30%">الحالة</td>
<td>
<?php if($rec[0]['printing_prototype_status']==0): ?>
<label class="badge badge-secondary">إنتظار طباعة العينة</label>
<?php elseif($rec[0]['printing_prototype_status']==1): ?>
<label class="badge badge-warning">إنتظار إعتماد المؤلف</label>
<?php elseif($rec[0]['printing_prototype_status']==2): ?>
<label class="badge badge-success">تم الإعتماد من المؤلف</label>
<?php elseif($rec[0]['printing_prototype_status']==3): ?>
<label class="badge badge-danger">تم الرفض من المؤلف</label>
<?php endif ?>


</td>
</tr>
<tr>
<td>Start Date</td>
<td>

<?php
$date=date_create($rec[0]['final_book_dt']);
echo date_format($date,"d/m/Y");
?>

</td>
</tr>
<tr>
<td>
<?php if($rec[0]['printing_prototype_status']!=2): ?>
Processing Date
<?php else: ?>
Completed Date
<?php  endif?>
</td>
<td>
<?php if($rec[0]['printing_prototype_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec[0]['printing_prototype_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>


<tr>
<td>عمل</td>
<td>
<?php if($rec[0]['final_book_status']!=3): ?>
<a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#prototype">إعتماد المؤلف</a>
<?php else: ?>
---
<?php endif ?>
<div class="modal fade" id="prototype" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">طباعة العينة</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/upload_correction_file">
<div class="modal-body">
<?php if($rec[0]['printing_prototype_status']!=2): ?>

 <input type="radio"   value="0" checked="checked"  name="author_sign"/>  ريثما
&nbsp; &nbsp;
<input type="radio"  value="1" name="author_sign"/>  قبول
&nbsp; &nbsp;
<input type="radio"  value="2" name="author_sign"/>  رفض


<input type="hidden"  value="Sent to Author" name="physical_book">
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
<input type="hidden" value="4" name="type">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
<br><br>
<?php endif ?>
<table class="table table-bordered">
<tr>
<th>Physical Book</th>
<th>Author's Correction</th>
<th width="20%">Date</th>
<th width="5%">Delete</th>
</tr>
<?php  $correction = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>4))->get('correction_log')->result_array(); ?>
<?php foreach($correction as $cc): ?>
<tr>
<tD>
	<?= $cc['upload_file'] ?>
</tD>

<td>
<?php if($cc['correct_file']==''): ?>
---
<?php else: ?>
<a download href="<?= $this->load->config->base_url() ?><?= $cc['correct_file'] ?>">Download</a>
<?php endif ?>
</td>
<td>
<?php
$date=date_create($cc['up_dt']);
echo date_format($date,"h:i:s - d/m/Y");
?>

</td>
<td>
<?php if($rec[0]['printing_prototype_status']!=2): ?>
<a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_author_approval_data/<?= $cc['id'] ?>/printing_prototype/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
<?php else: ?>
---
<?php endif ?>
</td>
</tr>
<?php endforeach ?>
</table>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<?php if($rec[0]['printing_prototype_status']!=2): ?>
<button type="submit" class="btn btn-default" >Physical Book Sent</button>
<?php endif ?>
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
<?php if($this->uri->segment(3)=='ministry'): ?>
<table class="table table-bordered"  style="display:<?= $dis9 ?>"  >
 <?php if($rec[0]['printing_prototype_status']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2"> Ministry  : 9 Step</th>
</tr>
<tr>
<td>   Copy for Processing </td>
<td>
<a href="<?= $this->load->config->base_url() ?><?= $rec[0]['final_book_doc'] ?>" download><i  class="fa fa-download"></i> Download</a>
</td>
</tr>
                            <tr>
                            <td width="30%">  Status</td>
                            <td>
                            <?php if($rec[0]['ministry_status']==0): ?>
                            <label class="badge badge-secondary">Waiting for Ministry</label>
                            <?php elseif($rec[0]['ministry_status']==1): ?>
                            <label class="badge badge-warning">Pending for Approval</label>
                            <?php elseif($rec[0]['ministry_status']==2): ?>
                            <label class="badge badge-success">Ministry Done</label>
                            <?php elseif($rec[0]['ministry_status']==3): ?>
                            <label class="badge badge-danger">Author Rejected</label>
                            <?php endif ?>
                            
                            <?php if($rec[0]['ministry_step_status']==0): ?>
                            <label class="badge badge-warning">Pending for Start</label>
                              <?php elseif($rec[0]['ministry_step_status']==1): ?>
                            <label class="badge badge-info">Pending</label>
                           
                            <?php elseif($rec[0]['ministry_step_status']==2): ?>
                            <label class="badge badge-success">Completed</label>
                            <?php elseif($rec[0]['ministry_step_status']==3): ?>
                            <label class="badge badge-danger">Rejected</label>
                            <?php endif ?>
                            
                            
                          
                            
                            </td>
                            </tr>
                            <tr>
                            <td>  Start Date</td>
                            <td>
                          
                            <?php
                            $date=date_create($rec[0]['printing_prototype_dt']);
                            echo date_format($date,"d/m/Y");
                            ?>
                            </td>
                            </tr>
                            
                             <tr>
                            <td>  
                             <?php if($rec[0]['ministry_step_status']!=2): ?>
                             Processing Date
                             <?php else: ?>
                             Completed Date
                             <?php  endif?>
                            </td>
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
                            
                            <tr>
                            	<td>Action</td>
                                <td>
                               
                               
                               <a href="#" class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#ministry">Inner Processing </a>
                                
                                <div class="modal fade" id="ministry" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Ministry Processing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_inner_prcessing_log">
                                <div class="modal-body">
                                 <?php if($rec[0]['ministry_status']!=2): ?>
                               <input type="hidden"  name="ministry_id" class="form-control" />
                               <div class="row">
                              
                               <div class="col-lg-6">
                               <label>Note</label>
                               <input type="text" name="note" class="form-control" />
                               </div>
                               
                               <div class="col-lg-6">
                               <label>Status</label>
                               <select name="status" class="form-control" >
                                <option value="0">Pending</option>
                                 <option value="1">Completed </option>
                                 <option value="2">Rejected</option>
                               </select>
                                <input type="hidden" value="<?= date('Y-m-d') ?>"  name="dt" class="form-control" />
                               </div>
                                
                               </div>
                              
                               
                                <input type="hidden" value="<?= $rec[0]['id'] ?>" name="pid">
                                <input type="hidden" value="5" name="type">
                                <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
                                <br><br>
                                 <?php endif ?>
                                <table class="table table-bordered">
                                <tr>
                                  <th>Note</th>
                                 <th>Status</th>
                                <th width="20%">Date</th>
                                 <th width="5%">Delete</th>
                                </tr>
                                <?php  $minitry_correction1 = $this->db->where(array('pid'=>$rec[0]['id'],'type'=>5))->get('contract_processing')->result_array();
								
								 ?>
                                <?php foreach($minitry_correction1 as $cc): ?>
                                <tr>
                                
                                <td>
                                <?php if($cc['note']==''): ?>
                                ---
                                <?php else: ?>
                                <?= $cc['note'] ?>
                                <?php endif ?>
                                </td>
                                
                                
                                
                                <td>
                                	 <?php if($cc['status']==0): ?>
                            <label class="badge badge-warning">Pending</label>
                           
                            <?php elseif($cc['status']==1): ?>
                            <label class="badge badge-success">Completed</label>
                            <?php elseif($cc['status']==2): ?>
                            <label class="badge badge-danger">Rejected</label>
                            <?php endif ?>
                                </td>
                                <td>
                                
                                <?php
                                $date=date_create($cc['up_dt']);
                                echo date_format($date,"h:i:s - d/m/Y");
                                ?>
                                </td>
                                <td>
                                  <?php if($rec[0]['ministry_status']!=2): ?>
                                <a onclick="return confirm('Are you sure want to delete?')" href="<?= $this->load->config->base_url() ?>dashboard/delete_inner_processing/<?= $cc['id'] ?>/ministry/<?=$rec[0]['id'] ?>"><i class="fa fa-times"></i></a>
<?php else: ?>
---
<?php endif ?>
                                </td>
                                
                                </tr>
                                <?php endforeach ?>
                                </table>
                                
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <?php if($rec[0]['ministry_status']!=2): ?>
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
                               
                                <!-- step 7-->
                               
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='final_book2'): ?>
<table class="table table-bordered"  style="display:<?= $dis10 ?>"  >
<?php if($rec[0]['ministry_status']==2): ?>
<tr style="background:#f5f5f5">
<th colspan="2"> Final Book	 (v2)  : 10 Step</th>
</tr>

             <tr>
            <td>   Copy for Processing</td>
            <td>
             <a download href="<?= $this->load->config->base_url() ?><?= $rec[0]['final_book_doc'] ?>"><i class="fa fa-download"></i> Final Book (v1)</a>
           
            </td>
            </tr>
             
             
           
            
           

<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['final_book_status2']==0): ?>
<label class="badge badge-secondary">Waiting to Upload</label>
<?php elseif($rec[0]['final_book_status2']==1): ?>
<label class="badge badge-warning">Pending for Approval</label>
<?php elseif($rec[0]['final_book_status2']==2): ?>
<label class="badge badge-success">Final Book Uploaded
</label>
<?php elseif($rec[0]['final_book_status2']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>




</td>
</tr>
<tr>
<td>  Start Date</td>
<td>

<?php
$date=date_create($rec[0]['ministry_dt']);
echo date_format($date,"d/m/Y");
?>

</td>
</tr>
<tr>
<td>  
<?php if($rec[0]['final_book_status2']!=2): ?>
Processing Date
<?php else: ?>
Completed Date
<?php endif ?>
</td>
<td>
<?php if($rec[0]['final_book_dt2']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec['final_book_dt2']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>
<?php if($rec[0]['final_book_status2']==2): ?>
<tr>
<td>  Final Copy </td>
<td>
<a href="<?= $this->load->config->base_url() ?><?= $rec[0]['final_book_doc2'] ?>" download><i class="fa fa-download"></i> Download</a>
</td>
</tr>
<?php else: ?>

<tr>
<td> Action</td>
<td>
<a href="#" data-animation="zoomInUp" class="btn btn-secondary-rgba" data-toggle="modal" data-target="#prototype">Processing</a>
<div class="modal fade" id="prototype" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle-1">Final Book (v2)</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/upload_correction_file">
<div class="modal-body">

<input type="file" required name="upload_file">
<input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
<input type="hidden" value="6" name="type">
<input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">



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
<?php endif  ?>
<?php endif ?>
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='published'): ?>
<table class="table table-bordered"  style="display:<?= $dis11 ?>"  >
<?php if($rec[0]['final_book_status2']==2): ?>

<tr style="background:#f5f5f5">
<th colspan="2"> Published  : 11 Step </th>
</tr>

<tr>
<td>  Final Copy </td>
<td>
<a href="<?= $this->load->config->base_url() ?><?= $rec[0]['final_book_doc2'] ?>" download><i class="fa fa-download"></i> Download</a>
</td>
</tr>



<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['publish_status']==0): ?>
<label class="badge badge-secondary">Waiting to Start</label>
<?php elseif($rec[0]['publish_status']==1): ?>
<label class="badge badge-warning">Pending for </label>
<?php elseif($rec[0]['publish_status']==2): ?>
<label class="badge badge-success">Publsihed  
</label>
<?php elseif($rec[0]['publish_status']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>



</td>
</tr>
<tr>
<td> Published Date</td>
<td>
<?php if($rec[0]['publish_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec[0]['publish_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>



 

<?php endif ?>
</table>
<?php endif ?>
<?php if($this->uri->segment(3)=='printing'): ?>
<table class="table table-bordered"  style="display:<?= $dis12 ?>"  >
<?php if($rec[0]['publish_status']==2): ?>

<tr style="background:#f5f5f5">
<th colspan="2"> Printing  : 10 Step </th>
</tr>

<tr>
<td>  Copy for Processing </td>
<td>
<a href="<?= $this->load->config->base_url() ?><?= $rec[0]['final_book_doc2'] ?>" download><i class="fa fa-download"></i> Download</a>
</td>
</tr>



<tr>
<td width="30%"> Status</td>
<td>
<?php if($rec[0]['printing_status']==0): ?>
<label class="badge badge-secondary">Waiting to Start</label>
<?php elseif($rec[0]['printing_status']==1): ?>
<label class="badge badge-warning">Pending for </label>
<?php elseif($rec[0]['printing_status']==2): ?>
<label class="badge badge-success">Printing Phase Started  
</label>
<?php elseif($rec[0]['printing_status']==3): ?>
<label class="badge badge-danger">Author Rejected</label>
<?php endif ?>



</td>
</tr>
<tr>
<td>  Published Date</td>
<td>

<?php
$date=date_create($rec[0]['publish_dt']);
echo date_format($date,"d/m/Y");
?>

</td>
</tr>
<tr>
<td>  Printing Date</td>
<td>
<?php if($rec[0]['printing_dt']==''): ?>
---
<?php else: ?>
<?php
$date=date_create($rec[0]['printing_dt']);
echo date_format($date,"d/m/Y");
?>

<?php endif ?>
</td>
</tr>

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
                               	<td>Remaining</td>
                                <td>
                                 <?= $rec[0]['allowed_copies']-$copies[0]['total'] ?>
                                </td>
                               </tr>
<tr>
<td> Action</td>
<td>

<?php if($rec[0]['printing_status']==0): ?>
 <a href="#" data-animation="zoomInUp" class="btn btn-secondary-rgba" data-toggle="modal" data-target="#ministry">Start Process </a>
                                
                                <div class="modal fade" id="ministry" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Printing Processing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/start_printing_process">
                                <div class="modal-body">
                               <div class="row">
                               <div class="col-lg-12">
                               
                               <label>Paper Type</label>
                               <input type="text"  name="paper_type" class="form-control" />
                               <input type="hidden" value="<?= $rec[0]['final_book_doc2'] ?>" name="printing_doc" />
                              
                               </div>
                               </div>
                               
                                <input type="hidden" value="<?= $rec[0]['id'] ?>" name="id">
                                <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="url">
                                
                                
                                
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                <?php else: ?>
                                ---
                                <?php endif ?>

</td>
</tr>
<?php endif ?>
</table>
<?php endif ?>

</div>
                             
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                               
                               
                        </div>
                    </div>
                    <!-- End col --><!--
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                            <h5 class="card-title">
                            	Contract Log 
                                 <a href="#" style="float:left"  class="btn btn-secondary-rgba" data-animation="zoomInUp" data-toggle="modal" data-target="#correction">
                                            <i  class="fa fa-plus"></i> Add New
                                            </a>
                                            </h5>
                                <div class="modal fade" id="correction" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1">Add Branch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_log_data">
                                <div class="modal-body">
                                <label>User</label>
                                <input type="text" name="name" class="form-control">
                                <br />
                                <label>Activity</label>
                                <input type="text" name="activity" class="form-control">
                                <br />
                                <label>Date</label>
                                <input type="date" name="dt" class="form-control">
                                <br />
                                <label>Time</label>
                                <input type="time" name="tm" class="form-control">
                                <input type="hidden" name="id" value="<?= $rec[0]['id'] ?>" class="form-control">
                                <input type="hidden" name="url" value="<?= $this->uri->segment(3) ?>"  class="form-control">
                                 <input type="hidden" name="url_type" value="single"  class="form-control">
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                	
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
  
                                
                                    <table id="datatable-buttons" class="table table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                           <th>Uset</th>
                                            <th>Activity</th>
                                             <th>Date</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $log =  $this->db->where('pid',$rec[0]['id'])->get('contract_log')->result_array(); ?>
                                        <?php foreach($log as $rr): ?>
                                        <tr>
                                        
                                        <td><?= $rr['user'] ?></td>
                                         <td><?= $rr['activity'] ?></td>
                                          <td>
										  <?php
                                            $date=date_create($rr['dt']);
                                            echo date_format($date,"d/m/Y");
                                            ?>
                                          - <?= $rr['tm'] ?></td>
                                        	
                                           
                                            
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
                    <?php endif ?>
                </div>-->
                <!-- End row -->
            </div>