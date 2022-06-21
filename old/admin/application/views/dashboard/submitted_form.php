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
                
                  <a style="background:#700308; border:none" href="<?= $this->load->config->base_url() ?>dashboard/download_excel/<?= $this->uri->segment(3) ?>/<?= $this->uri->segment(4) ?>" class="btn btn-primary pull-left"><i class="fa fa-download"></i> Download CSV</a>
                  
                   <?php if($this->uri->segment(3)=='pending' || $this->uri->segment(3)=='new'): ?>
                 <a style="background:#700308; border:none; cursor:pointer; margin-left:10px" data-toggle="modal" data-target="#add"  class="btn btn-primary pull-left"><i class="fa fa-plus"></i> اضافة عقد جديد</a>
                 
                 <div class="modal fade" id="add" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">اضافة عقد جديد</h4>
            </div>
            <form method="post" action="<?=$this->load->config->base_url() ?>dashboard/update_contract_data">
            <div class="modal-body">
              
           <div class="row" style="margin-bottom:10px" dir="rtl">
            <div class="col-lg-6">
            <label>البريد الإلكتروني</label>
            <input type="text" class="form-control" dir="rtl" name="email"  required></div>
           <div class="col-lg-6">
           <label>الإسم</label>
           <input type="text" class="form-control" dir="rtl" name="name"  required></div>
           
           </div>
            <div class="row" style="margin-bottom:10px">
            <div class="col-lg-6">
            <label>رقم الهوية أو الجواز</label>
            <input type="text" class="form-control" dir="rtl" name="pasport" required></div>
           <div class="col-lg-6">
           <label>رقم الهاتف</label>
           <input type="text" class="form-control" dir="rtl" name="phone"  required></div>
            
           </div>
            <div class="row" style="margin-bottom:10px">
             <div class="col-lg-6">
            <label>الجنسية</label>
            <input type="text" class="form-control" dir="rtl" name="nationality"  required></div>
           <div class="col-lg-6">
           <label>العنوان</label>
           <input type="text" class="form-control" dir="rtl" name="title"  required></div>
           
           </div>
            <div class="row" style="margin-bottom:10px">
             <div class="col-lg-6"><label>الدولة</label><input type="text" class="form-control" dir="rtl" name="country"  required></div>
           <div class="col-lg-6">
           <label>المدينة</label><input type="text" class="form-control" dir="rtl" name="city"  required></div>
           
           </div>
            <div class="row" style="margin-bottom:10px">
           <div class="col-lg-6"><label>رقم الايبان</label><input type="text" class="form-control" dir="rtl" name="bank_account_ipan"  required></div>
           <div class="col-lg-6"><label>إسم البنك</label><input type="text" class="form-control" dir="rtl" name="bank_name"   required></div>
            
           </div>
            
            <div class="row" style="margin-bottom:10px">
           <div class="col-lg-4"><label>مقاس الكتاب</label><input type="text" class="form-control" dir="rtl" name="heading"  required> </div>
            <div class="col-lg-4">
           
            <label>نوع الكتاب</label><input type="text" class="form-control" dir="rtl" name="book_type"  required></div>
           <div class="col-lg-4"><label>إسم الكتاب</label><input type="text" class="form-control" dir="rtl" name="book_name"  required> </div>
           
            
           </div>
            <div class="row" style="margin-bottom:10px">
             <div class="col-lg-6">
            <label>سعر الباقة</label><input type="text" class="form-control" dir="rtl" name="price"  required></div>
           <div class="col-lg-6"><label>الألوان</label><input type="text" class="form-control" dir="rtl" name="color"  required></div>
           
           </div>
            <div class="row" style="margin-bottom:10px">
           <div class="col-lg-6"><label>نسبة المؤلف</label><input type="text" class="form-control" dir="rtl" name="ration"  required></div>
            <div class="col-lg-6"><label>نوع العقد</label>
            <select class="form-control" dir="rtl" name="type"  required>
            <option value="0">عقد كتاب ورقي</option>
             <option value="1">عقد كتاب الكتروني</option>
            </select>
            </div>
          
           </div>
           
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
                 <?php endif ?>
                  
                 <br><br>
                 <?php if($this->uri->segment(3)=='pending' || $this->uri->segment(3)=='paid' || $this->uri->segment(3)=='new'): ?>
                 <ul class="nav nav-tabs">
      <li <?php  if($this->uri->segment(3)=='new'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/new">العقود الجديد</a></li>
      <li<?php  if($this->uri->segment(3)=='pending'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/pending">العقود المعلقة</a></li>
       <li<?php  if($this->uri->segment(3)=='paid'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/paid">عقود قيد التشغيل</a></li>
    
    </ul>
    <?php  endif?>
     <?php if($this->uri->segment(3)=='paid2' || $this->uri->segment(3)=='finish' ): ?>
                 <ul class="nav nav-tabs">
      
     
      
      
        <li <?php  if($this->uri->segment(3)=='paid2'):?> class="active"<?php endif ?>><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/paid2">التدقيق</a></li>
         <li ><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/finish">التنفيذ</a></li>
      
    <li   ><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/finish"> تصميم الغلاف</a></li>
     <li><a href="<?= $this->load->config->base_url() ?>dashboard/submitted_form/paid2">المراجعه</a></li>
    </ul>
    <?php  endif?>
                 
                  <div class="table-responsive ">
                  <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <?php if($this->uri->segment(3)=='paid2'): ?>
                   <th>عمل</th>
                   <?php endif ?>                 
                   <?php if($this->uri->segment(3)=='pending'): ?>
                   <th>عمل</th>
                   <?php elseif($this->uri->segment(3)=='paid2'): ?>
                      <th>تاريخ اضافة متابع</th>
                     <th>عمل</th>
                    
                   <?php endif ?>
                    <th>تاريخ</th>
                     <?php  if($this->uri->segment(3)=='pending' || $this->uri->segment(3)=='paid' || $this->uri->segment(3)=='new'):?>
                   <th  width="10%">الحالة</th>
                   <th>مشاهدة PDF</th>
                   <?php endif ?>
                    <?php if($this->uri->segment(3)!='paid2'): ?>
                   
                   
                   <th>سعر الباقة</th>
                   <?php endif ?>
                   <th>فرع</th>
                   <th>الألوان</th>
                   <th>نوع الكتاب</th>
                   <th width="20%">إسم الكتاب</th>
                   <th>نوع العقد</th>
                   <th>الإسم</th>
                   <th>رقم العقد</th>
                    <th>أضيفت من قبل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($rec as $ss): ?>
                    <tr>
                    
                      
                     
    <?php if($this->uri->segment(3)=='pending'): ?>
    <td >
    
    <a onclick="return confirm('Want to Delete?')" href="<?=$this->load->config->base_url() ?>dashboard/delete_submitted_form/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="btn btn-danger btn-xs" title="Delete " ><i class="fa fa-times" ></i> </a>
    </td>
    <?php endif ?>
    
    
    <?php if($this->uri->segment(3)=='paid2'): ?>
    <td >
    <?php if($ss['person_name']==''): ?>
    <a class="btn btn-danger btn-xs"  > انتهاء التنفيذ </a>
    <?php else:?>
    <a href="<?=$this->load->config->base_url() ?>dashboard/change_status/2/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="btn btn-danger btn-xs"  > انتهاء التنفيذ </a>
    
    <?php endif ?>
    </td>
    <?php endif ?>
        <?php if($this->uri->segment(3)=='paid2'): ?>
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
             class="form-control"  name="person_name" value="<?= $ss['person_name']?>">
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
                        <td>
                         <?php if($ss['status']==1 || $ss['status']==0): ?> 
                         ---
                         <?php else: ?>
                       
                         <?php
    $date=date_create($ss['pay_dt']);
    echo date_format($date,"d/m/Y");
    ?>
                         <?php endif ?>
                        </td>
                        
                        
                        <?php  if($this->uri->segment(3)=='pending' || $this->uri->segment(3)=='paid' || $this->uri->segment(3)=='new'):?>
                    <td >
                       <?php if($ss['status']==1 ): ?> 
                        
                        <a data-toggle="modal" data-target="#myModal_<?= $ss['id'] ?>" style="cursor:pointer" class="label label-info"  >تشغيل 
     </a>
                        
                        <div class="modal fade" id="myModal_<?= $ss['id'] ?>" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">تعيين التاريخ</h4>
            </div>
            <form method="post" action="<?=$this->load->config->base_url() ?>dashboard/set_date_paid">
            <div class="modal-body">
              
            <input type="date"  
            placeholder="dd-mm-yyyy" value=""
             class="form-control" required name="pay_dt">
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
                        
                        <?php elseif($ss['status']==0): ?>
                         <a  href="<?=$this->load->config->base_url() ?>dashboard/change_status/1/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="label label-warning"  > معلق </a>
                         &nbsp;
                                 <a data-toggle="modal" data-target="#myModal_<?= $ss['id'] ?>" style="cursor:pointer" class="label label-info"  >تشغيل
     </a>
                        
                        <div class="modal fade" id="myModal_<?= $ss['id'] ?>" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">تعيين التاريخ</h4>
            </div>
            <form method="post" action="<?=$this->load->config->base_url() ?>dashboard/set_date_paid">
            <div class="modal-body">
              
            <input type="date"  
            placeholder="dd-mm-yyyy" value=""
             class="form-control" required name="pay_dt">
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
                        <?php else: ?>
                         <a  href="<?=$this->load->config->base_url() ?>dashboard/change_status/0/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="label label-warning"  > ريثما </a>
                         &nbsp;
                        <a  href="<?=$this->load->config->base_url() ?>dashboard/change_status/1/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>"  class="label label-success"  > تعليق </a>
                        <?php endif ?>
                        </td>
                    <td>
                    
                     <?php if($ss['type']==0): ?>
                    <a href="<?= $this->load->config->base_url() ?>dashboard/contract/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>" target="_blank">فتح</a>
                     <?php elseif($ss['type']==1): ?>
                   <a href="<?= $this->load->config->base_url() ?>dashboard/econtract/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>" target="_blank">فتح</a>
                      <?php elseif($ss['type']==2): ?>
                      <a href="<?= $this->load->config->base_url() ?>dashboard/contract/<?= $ss['id'] ?>/<?= $this->uri->segment(3) ?>" target="_blank">فتح</a>
                    <?php endif ?>
                    
                    
                   </td>
                    <?php endif ?>
                         <?php if($this->uri->segment(3)!='paid2'): ?>
                        
                        
                        
                        <td><?= $ss['price'] ?></td>
                        <?php endif ?>
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
                    
                    <td>
                    <?php if($ss['type']==0): ?>
                    عقد كتاب ورقي
                     <?php elseif($ss['type']==1): ?>
                     عقد كتاب الكتروني
                      <?php elseif($ss['type']==2): ?>
                      عقد كتاب ورقي
                    <?php endif ?>
                    </td>
                    
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