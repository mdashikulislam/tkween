<section class="content">
  
      <div class="row">
       <div class="col-xs-12">
       </div>
        <div class="col-xs-12">
         <div class="box box-widget">
            <div class="box-header with-border" style="text-align:center">
             
         <center>
              <h3 class="box-title" style="font-weight:500; font-size:22px;">المستخدمين
<i style=" font-size:20px" class="fa fa-star-o"></i></h3>
<!--
<p style="margin-bottom:0">فيما يلي قائمة بجميع المستخدمين
</p>
-->
              </center>
             </div>
             <?php $sub =  $this->db->order_by('id','desc')->get('cms-users')->result_array(); ?>
             <div class="box-header" style="margin-top:10px; margin-bottom:10px; border-bottom:solid 1px #eee">
            
            <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9">
            <?php if($this->uri->segment(3)==''): ?>
            <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/add_user_data">
            
              <input type="password" class="form-control" name="pass" dir="rtl" required  placeholder="كلمة مرور المستخدم"  style="float:left; width:150px; margin-left:10px;"  />
              <input type="text" class="form-control" name="email" dir="rtl" required placeholder="تسجيل الدخول (البريد الإلكتروني" style="float:left; width:150px;margin-left:10px;" />
             <input type="text" class="form-control" name="name" dir="rtl" required placeholder="اسم المستخدم" style="float:left; width:150px; margin-left:10px;" />
              
              
              <select class="form-control" name="branch" dir="rtl" required  style="float:left; width:150px; margin-left:10px;" >
              <option value="Jeddah">جدة</option>
				<option value="Riyadh">الرياض</option>
              </select>
              
              
              
             <input type="submit" class="btn btn-primary"  style="float:left; width:100px; margin-left:10px; " value="انشاء"  />
            
             </form>
             <?php else: ?>
               <?php $edit =  $this->db->where('id',$this->uri->segment(3))->get('cms-users')->result_array(); ?>
              <form method="post" enctype="multipart/form-data" action="<?= $this->load->config->base_url() ?>dashboard/update_user_data">
            
          
              <input type="password" class="form-control" name="pass" dir="rtl" value="<?= $edit[0]['pass'] ?>" required  placeholder="كلمة مرور المستخدم"  style="float:left; width:150px; margin-left:10px;"  />
              <input type="text" class="form-control" name="email" dir="rtl"  value="<?= $edit[0]['email'] ?>" required placeholder="تسجيل الدخول (البريد الإلكتروني" style="float:left; width:150px;margin-left:10px;" />
             <input type="text" class="form-control" name="name" dir="rtl"  value="<?= $edit[0]['name'] ?>" required placeholder="اسم المستخدم" style="float:left; width:150px; margin-left:10px;" />
              
            
            <select class="form-control" name="branch" dir="rtl" required  style="float:left; width:150px; margin-left:10px;" >
              <option <?php if($edit[0]['branch']=='Jeddah'): ?> selected<?php endif ?> value="Jeddah">جدة</option>
				<option<?php if($edit[0]['branch']=='Riyadh'): ?> selected<?php endif ?>  value="Riyadh">الرياض</option>
              </select>
               <input type="hidden" class="form-control" name="id"  value="<?= $edit[0]['id'] ?>"   />
                 <input type="submit" class="btn btn-primary"  style="float:left; width:100px; margin-left:10px; " value="انشاء"  />
             </form>
             <?php endif ?>
            </div>
           
            </div>
             
          </div>

            <div class="box-body  " style="margin-top:20px;">
              <div class="table-responsive ">
              <table class="table table-striped table-hover">
              <thead>
                <tr>
                  
                
                
                   
                  <th></th>
                  <th>وظيفة</th>
                  <th>تاريخ الإنشاء
</th>
<th>فرع</th>
                    <th>كلمة مرور المستخدم</th>
                    <th>البريد الالكتروني للمستخدم</th>
                  <th>اسم المستخدم</th>
               
                </tr>
                </thead>
                <tbody>
                <?php foreach($sub as $ss): ?>
                <tr>
                <td align="right">
                     
                   <a href="<?= $this->load->config->base_url() ?>dashboard/delete_user/<?= $ss['id'] ?>" id="btn-edit" title="Delete User"  class="btn btn-danger btn-xs"><i class="fa fa-times" ></i> </a>
                   
                   
                   <a href="<?= $this->load->config->base_url() ?>dashboard/users/<?= $ss['id'] ?>" id="btn-edit" title="Edit User"  class="btn btn-default btn-xs"><i class="fa fa-edit" ></i> </a>
                   
                   
                    </td>
                    
                    <td>
                    <?php if($ss['level']!='admin'): ?>
                    <a href="" data-toggle="modal" data-target="#myModal_<?= $ss['id'] ?>">وظيفة</a>
                    
                    
                    <div class="modal fade" id="myModal_<?= $ss['id'] ?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">وظيفة</h4>
        </div>
        <form method="post" action="<?= $this->load->config->base_url() ?>dashboard/update_roles">
        <div class="modal-body">
          
          <?php $pages =  $this->db->get('pages')->result_array(); ?>
          <?php foreach($pages as $pp): ?>
          <?php  $role = $this->db->where(array('user_id'=>$ss['id'],'page_id'=>$pp['id']))->get('users_role')->result_array(); ?>
          <p> <?= $pp['name'] ?> &nbsp;<input type="checkbox" <?php if(count($role)): ?> checked<?php endif ?> name="roles[]" value="<?= $pp['id'] ?>">
         
          </p>
          <?php endforeach ?>
         <input type="hidden" name="user_id" value="<?= $ss['id'] ?>">
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">أغلق</button>
        <button type="submit" class="btn btn-primary" >إرسال</button>
        </div>
        </form>
        </div>
      </div>
    </div>
  
                    
                    <?php  else:?>
                    ---
                    <?php endif ?>
                    </td>
                    <td><?= $ss['dt'] ?></td>
                     <td>
                     <?php if($ss['branch']=='Jeddah'): ?>
                     جدة
                     <?php else: ?>
                     الرياض
                     <?php endif ?>
                     </td>
                    <td><?= $ss['pass'] ?></td>
                    <td><?= $ss['email'] ?></td>
                	<td><?= $ss['name'] ?></td>
                   
                    
                </tr>
                <?php endforeach ?>
                </tbody> 
                
                
              </table>
            </div></div>
            
          </div>
        </div>
      </div>
    </section>