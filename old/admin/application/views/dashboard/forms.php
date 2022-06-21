<section class="content">
  
      <div class="row">
       <div class="col-xs-12">
       </div>
        <div class="col-xs-12">
         <div class="box box-widget">
            <div class="box-header with-border" style="text-align:center">
             <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/submitted_form/<?= $this->uri->segment(3) ?>">
              <input type="text"  placeholder="البحث عن المؤلف"  name="author" required style="float:left; width:250px" class="form-control">
			 </form>
             <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/submitted_form/<?= $this->uri->segment(3) ?>">
              <input type="text"  placeholder="البحث عن كتاب"  name="book" required style="float:left; width:250px; margin-left:10px" class="form-control">
			 </form>
             <style>
             <style>
			 .nav-tabs>li
			 {
				 float:right
			 }
			 </style>
         <center>
         <?php if($this->uri->segment(3)=='pending'): ?>
              <h3 class="box-title" style="font-weight:500; font-size:22px;">العقود <i style=" font-size:20px" class="fa fa-star-o"></i></h3>
              <?php elseif($this->uri->segment(3)=='paid'): ?>
              <h3 class="box-title" style="font-weight:500; font-size:22px;">العقود المدفوعه<i style=" font-size:20px" class="fa fa-star-o"></i></h3>
               <?php elseif($this->uri->segment(3)=='paid2'): ?>
              <h3 class="box-title" style="font-weight:500; font-size:22px;">التنفيذ<i style=" font-size:20px" class="fa fa-star-o"></i></h3>
               <?php elseif($this->uri->segment(3)=='finish'): ?>
              <h3 class="box-title" style="font-weight:500; font-size:22px;">الطباعه<i style=" font-size:20px" class="fa fa-star-o"></i></h3>
              <?php endif ?>
<!--
<p style="margin-bottom:0">فيما يلي قائمة بجميع البيانات المقدمة
</p>
-->
              </center>
			 
             </div>
             

            <div class="box-body  " style="margin-top:20px;">
            
            
              
             <br><br>
           
           <?php if($this->uri->segment(3)!='finish'):?>
             <ul class="nav nav-tabs">
  
 
  
  
    <li <?php  if($this->uri->segment(3)=='paid2'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/paid2">التدقيق</a></li>
     <li <?php  if($this->uri->segment(3)=='paid3'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/paid3">التنفيذ</a></li>
  
<li   <?php  if($this->uri->segment(3)=='paid4'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/paid4"> تصميم الغلاف</a></li>
 <li <?php  if($this->uri->segment(3)=='paid5'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/paid5">المراجعه</a></li>
</ul>
<?php endif ?>
             
              <div class="table-responsive ">
              <table class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th>عمل</th>
                    <?php if($this->uri->segment(3)=='paid5' || $this->uri->segment(3)=='finish'): ?>
                    
                   
                    <th>detail </th>
                    
                    
                    <?php else: ?>
                    <th>تاريخ اضافة متابع</th>
                    <th>عمل</th>
                    <?php endif ?>
                    <th>فرع</th>
                    <th>تاريخ</th>
                    <th>الألوان</th>
                    <th>نوع الكتاب</th>
                    <th width="20%">إسم الكتاب</th>
                    <th>الإسم</th>
                    <th>رقم العقد</th>
                    <th>أضيفت من قبل</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($rec as $ss): ?>
                <tr>
                
                  
 <?php if($this->uri->segment(3)=='paid5' || $this->uri->segment(3)=='finish'): ?>



<td>
 <?php if($this->uri->segment(3)!='finish'): ?>
 
  <?php if($ss['person_name']!='' && $ss['person_name2']!='' && $ss['person_name3']!=''): ?>
   <a href="<?=$this->load->config->base_url() ?>dashboard/goto_finish/1/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="btn btn-danger btn-xs"  > 
        انتهاء التنفيذ </a>
        <?php  else:?>
           <a   class="btn btn-danger btn-xs"  > 
        انتهاء التنفيذ </a>
        <?php  endif?>
        <?php else: ?>
        
        ---
        <?php endif ?>
</td>
 <?php if($this->uri->segment(3)!='finish'): ?>
 

<td>
<a  style="cursor:pointer"  data-toggle="modal" data-target="#add_name_<?= $ss['id'] ?>"  class="label label-default"  > 
  details</a>
    <div class="modal fade" id="add_name_<?= $ss['id'] ?>" role="dialog">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">detail </h4>
    </div>
    <div class="modal-body">
   
   <table class="table table-bordered">
   <tr>
   	<td> <?php
                $date=date_create($ss['person_dt']);
                echo date_format($date,"d/m/Y");
                ?></td>
    <td>بدء التدقيق</td>
   </tr>
   <tr>
   	<td><?= $ss['person_name'] ?></td>
    <td> المدقق </td>
   </tr>
   <tr>
   	<td>
	 <?php
                $date=date_create($ss['person1_date']);
                echo date_format($date,"d/m/Y");
                ?>
    </td>
    <td> انتهاء التدقيق</td>
   </tr>
   
   <tr>
   	<td> <?php
                $date=date_create($ss['person_dt2']);
                echo date_format($date,"d/m/Y");
                ?></td>
    <td> بدء التنفيذ</td>
   </tr>
   <tr>
   	<td><?= $ss['person_name2'] ?></td>
    <td> المنفذ </td>
   </tr>
   <tr>
   	<td>
	 <?php
                $date=date_create($ss['person2_date']);
                echo date_format($date,"d/m/Y");
                ?>
    </td>
    <td> انتهاء التنفيذ</td>
   </tr>
   <tr>
   	<td> <?php
                $date=date_create($ss['person_dt3']);
                echo date_format($date,"d/m/Y");
                ?></td>
    <td>بدء المصمم</td>
   </tr>
   <tr>
   	<td><?= $ss['person_name3'] ?></td>
    <td> المصمم </td>
   </tr>
   <tr>
   	<td>
	 <?php
                $date=date_create($ss['person3_date']);
                echo date_format($date,"d/m/Y");
                ?>
    </td>
    <td> انتهاء المصمم</td>
   </tr>
   
   </table>
   
    </div>
    <div class="modal-footer">
    
    <button type="button" class="btn btn-default" data-dismiss="modal">أغلق</button>
    </div>
    </div>
    </div>
    </div>

</td>



<?php  else:?>
<td>
---
</td>
<?php endif ?> 


 
 
 <?php else: ?>                
<?php  if($this->uri->segment(3)=='paid2'):?>

<td >
		<?php if($ss['person_name']==''): ?>
        <a class="btn btn-danger btn-xs"  > انتهاء التنفيذ </a>
        <?php else:?>
        <a href="<?=$this->load->config->base_url() ?>dashboard/goto_next_step/1/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="btn btn-danger btn-xs"  > 
        انتهاء التنفيذ </a>
        <?php endif ?>
</td>
<td>

		<?php if($ss['person_name']!=''): ?>
        <?php
        $date=date_create($ss['person_dt']);
        echo date_format($date,"d/m/Y");
        ?>
        <?php  else:?>
        ---
        <?php endif ?>

</td>
<td>

	<?php if($ss['person_name']==''): ?>
    <a  style="cursor:pointer"  data-toggle="modal" data-target="#add_name_<?= $ss['id'] ?>"  class="label label-warning"  >اضف متابع </a>
    <?php  else:?>
     <a  style="cursor:pointer"  data-toggle="modal" data-target="#add_name_<?= $ss['id'] ?>"  class="label label-success"  > 
     <?= $ss['person_name'] ?> </a>
    <?php endif ?>
    <div class="modal fade" id="add_name_<?= $ss['id'] ?>" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">اضف متابع </h4>
    </div>
    <form method="post" action="<?=$this->load->config->base_url() ?>dashboard/update_person_name">
    <div class="modal-body">
    
    <input type="text"  
    class="form-control"  name="person_name" value="<?= $ss['person_name'] ?>" >
    <input type="hidden" value="<?= $ss['id'] ?>" class="form-control" required name="id">
    <input type="hidden" name="url" value="<?= $this->uri->segment(3) ?>">
    </div>
    <div class="modal-footer">
    
    <button type="button" class="btn btn-default" data-dismiss="modal">أغلق</button>
    <button type="submit" class="btn btn-primary" >إرسال</button>
    </div>

    </form>

    </div>
    </div>
    </div>

</td>
<?php endif ?>
<?php  if($this->uri->segment(3)=='paid3'):?>

<td >
		<?php if($ss['person_name2']==''): ?>
        <a class="btn btn-danger btn-xs"  > انتهاء التنفيذ </a>
        <?php else:?>
        <a href="<?=$this->load->config->base_url() ?>dashboard/goto_final_1/3/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="btn btn-danger btn-xs"  > 
        انتهاء التنفيذ </a>
        <?php endif ?>
</td>
<td>

		<?php if($ss['person_name2']!=''): ?>
        <?php
        $date=date_create($ss['person_dt2']);
        echo date_format($date,"d/m/Y");
        ?>
        <?php  else:?>
        ---
        <?php endif ?>

</td>
<td>

	<?php if($ss['person_name2']==''): ?>
    <a  style="cursor:pointer"  data-toggle="modal" data-target="#add_name_<?= $ss['id'] ?>"  class="label label-warning"  >اضف متابع </a>
    <?php  else:?>
     <a  style="cursor:pointer"  data-toggle="modal" data-target="#add_name_<?= $ss['id'] ?>"  class="label label-success"  > 
     <?= $ss['person_name2'] ?> </a>
    <?php endif ?>
    <div class="modal fade" id="add_name_<?= $ss['id'] ?>" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">اضف متابع </h4>
    </div>
    <form method="post" action="<?=$this->load->config->base_url() ?>dashboard/update_person_name2">
    <div class="modal-body">
    
    <input type="text"  
    class="form-control"  name="person_name2"   value="<?= $ss['person_name2'] ?>">
    <input type="hidden" value="<?= $ss['id'] ?>" class="form-control" required name="id">
    <input type="hidden" name="url" value="<?= $this->uri->segment(3) ?>">
    </div>
    <div class="modal-footer">
    
    <button type="button" class="btn btn-default" data-dismiss="modal">أغلق</button>
    <button type="submit" class="btn btn-primary" >إرسال</button>
    </div>
    </form>
    </div>
    </div>
    </div>

</td>
<?php endif ?>
<?php  if($this->uri->segment(3)=='paid4'):?>

<td >
		<?php if($ss['person_name3']==''): ?>
        <a class="btn btn-danger btn-xs"  > انتهاء التنفيذ </a>
        <?php else:?>
        <a href="<?=$this->load->config->base_url() ?>dashboard/goto_final_2/2/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="btn btn-danger btn-xs"  > 
        انتهاء التنفيذ </a>
        <?php endif ?>
</td>
<td>

		<?php if($ss['person_name3']!=''): ?>
        <?php
        $date=date_create($ss['person_dt3']);
        echo date_format($date,"d/m/Y");
        ?>
        <?php  else:?>
        ---
        <?php endif ?>

</td>
<td>

	<?php if($ss['person_name3']==''): ?>
    <a  style="cursor:pointer"  data-toggle="modal" data-target="#add_name_<?= $ss['id'] ?>"  class="label label-warning"  >اضف متابع </a>
    <?php  else:?>
     <a  style="cursor:pointer"  data-toggle="modal" data-target="#add_name_<?= $ss['id'] ?>"  class="label label-success"  > 
     <?= $ss['person_name3'] ?> </a>
    <?php endif ?>
    <div class="modal fade" id="add_name_<?= $ss['id'] ?>" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">اضف متابع </h4>
    </div>
    <form method="post" action="<?=$this->load->config->base_url() ?>dashboard/update_person_name3">
    <div class="modal-body">
    
    <input type="text"  
    class="form-control"  name="person_name3"   value="<?= $ss['person_name3'] ?>">
    <input type="hidden" value="<?= $ss['id'] ?>" class="form-control" required name="id">
    <input type="hidden" name="url" value="<?= $this->uri->segment(3) ?>">
    </div>
    <div class="modal-footer">
    
    <button type="button" class="btn btn-default" data-dismiss="modal">أغلق</button>
    <button type="submit" class="btn btn-primary" >إرسال</button>
    </div>
    </form>
    </div>
    </div>
    </div>

</td>
<?php endif ?>


<?php endif ?>
               
               
                <td>
                
                <?php
                $date=date_create($ss['step_start_dt']);
                echo date_format($date,"d/m/Y");
                ?>
                </td>
                <td>
                  <?php if($ss['branch']=='Jeddah'): ?>
                     جدة
                     <?php else: ?>
                     الرياض
                     <?php endif ?>
                     </td>
                <td><?= $ss['color'] ?></td>
                <td><?= $ss['book_type'] ?></td>
                <td><?= $ss['book_name'] ?></td>
                <td><?= $ss['name'] ?></td>
                <td><?= $ss['cid'] ?></td>
                
                   <td>
						 <?php if($ss['user_id']==0): ?>
                         مؤلف
                         <?php else: ?>
                         <?php $user = $this->db->where('id',$ss['user_id'])->get('cms-users')->result_array(); ?>
                         <?= $user[0]['name'] ?>
                        <?php endif ?>
                         </td>
                </tr>
                <?php endforeach ?>
                </tbody> 
                
                
              </table>
               <?php echo $this->pagination->create_links() ?>
            </div></div>
            
          </div>
        </div>
      </div>
    </section>