<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" >                
                <!-- Start row -->
                <div class="row">
              
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                          	
                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">إضافة عقد جديد (يدوي)</h5>
                                <p>
                                
                                </p>
                            </div>
                            <div class="card-body ">
                            <form method="post" action="<?= $this->load->config->base_url() ?>dashboard/add_contract_data">
                            <table class="table">
                            	<tr  style="background:#f5f5f5">
                               	<th colspan="3">معلومات المؤلف</th>
                               </tr>
                               
                               <tr>
                               	<td>
                                     <label>إسم المؤلف <span style="color:red"> (يجب ان يكون اللإسم مطابق للإسم في الهوية) </span></label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['name'] ?>" name="name" required="">
                                </td>
                                <td>
                                     <label>البريد الإلكتروني	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['email'] ?>" name="email" required="">
                                </td>
                                <td>
                                     <label>رقم الهاتف	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['phone'] ?>" name="phone" required="">
                                </td>
                               </tr>
                               <tr>
                               	<td>
                                     <label>رقم الهوية أو الجواز	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['pasport'] ?>" name="pasport" required="">
                                </td>
                                <td>
                                     <label>العنوان		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['title'] ?>" name="title" required="">
                                    
                                </td>
                                <td>
                                     <label>الجنسية	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['nationality'] ?>" name="nationality" required="">
                                </td>
                               </tr>
                               <tr>
                               	<td>
                                     <label>المدينة	</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['city'] ?>" name="city" required="">
                                </td>
                                <td>
                                     <label>الدولة		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['country'] ?>" name="country" required="">
                                </td>
                                <td>
                                     <label>إسم البنك		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['bank_name'] ?>" name="bank_name" required="">
                                </td>
                               </tr>
                               <tr>
                               	<td  colspan="3">
                                     <label>رقم الايبان		</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['bank_account_ipan'] ?>" name="bank_account_ipan" required="">
                                </td>
                                
                               </tr>
                               <tr  style="background:#f5f5f5">
                               	<th colspan="3">معلومات الكتاب</th>
                               </tr>
                                <tr>
                               	<td>
                                    <?php if($this->session->userdata('level')=='admin'): ?>
                                     <label>الفرع</label>
                                    <select class="form-control" name="branch_id" required="">
                                    <?php $branches =  $this->db->get('branches')->result_array() ?>
                                    <?php foreach($branches as $bb): ?>
                                    <option value="<?= $bb['id'] ?>" <?php if($rec[0]['branch_id']==$bb['id']): ?> selected="selected"<?php endif ?>><?= $bb['name'] ?></option>
                                    <?php endforeach ?>
                                    </select>
                                    <?php  else:?>
                                    <?php  $branch = $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array() ?>
                                    
                                     <?php  $branch_name = $this->db->where('id',$branch[0]['branch'])->get('branches')->result_array() ?>
                                    
                                    <?= $branch_name[0]['name'] ?>
                                    <input type="hidden" value="<?= $branch_name[0]['id'] ?>" name="branch_id" />
									<?php endif ?>
                                    
                                    
                                </td>
                                <td>
                                     <label>إسم الكتاب</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['book_name'] ?>" name="book_name" required="">
                                </td>
                                <td>
                                
                                 <label>رقم الطبعة</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['edition'] ?>" name="edition" required="">
                                
                                    
                                </td>
                                
                               </tr>
                                <tr>
                                
                               	<td>
                                 <label>عدد الصفحات</label>
                                    <input type="number" class="form-control" dir="rtl" value="<?= $rec[0]['contact_pages'] ?>" name="contact_pages" required="">
                                    
                                </td>
                                <td>
                                
                                 <label>مقاس الكتاب</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['package_size'] ?>" name="package_size" required="">
                                     <input type="hidden" class="form-control" dir="rtl" value="العادة" name="package_name" required="">
                                
                                    
                                </td>
                                 <td>
                                 
                                  <label>لون الكتاب</label>
                                    <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['package_color'] ?>" name="package_color" required="">
                                 
                                     
                                   
                                </td>
                                
                               </tr>
                                 <tr>
                                
                                 <td>
                                 <label>نوع الكتاب</label>
                                  <input type="text" class="form-control" dir="rtl" value="<?= $rec[0]['package_type'] ?>" name="package_type" required="">
                                     <input type="hidden" class="form-control" dir="rtl" value="<?= $rec[0]['id'] ?>" name="id" required="">
                                     <input type="hidden" class="form-control" dir="rtl" value="<?= $this->uri->segment(4) ?>" name="url" required="">
                                     
                                 
                                    
                                    
                                </td>
                                
                                
                               	 <td>
                                  <label>نوع العقد</label>
                                     <select class="form-control" name="type" required="">
                                    <option value="0" <?php if($rec[0]['type']==0): ?> selected="selected"<?php endif ?>>كتاب ورقي</option> 
                                    <option value="1" <?php if($rec[0]['type']==1): ?> selected="selected"<?php endif ?>>كتاب إلكتروني</option>
                                    </select>
                                    
                                    
                                </td>
                                <td>
                                 <label>السعر</label>
                                    <input type="number" class="form-control" dir="rtl" value="<?= $rec[0]['price'] ?>" name="price" required="">
                                
                                  
                                </td>
                                
                               </tr>
                               <tr>
                              
                                
                                
                                <td>
                                
                                   <label>نسبة المؤلف</label>
                                    <input type="number" class="form-control" dir="rtl" value="<?= $rec[0]['discount'] ?>" name="discount" required="">
                                
                                    
                                </td>
                                
                                 <td>
                                 	 <label>عدد النسخ المجانية</label>
                                    <input type="number" class="form-control" dir="rtl" value="25" name="free_copies" required="">
                                    
                                 
                                    
                                </td>
                                <td>
                                 <label>كمية النسخ الإجمالية</label>
                                    <input type="number" class="form-control" dir="rtl" value="1000" name="allowed_copies" required="">
                                </td>
                               
                               </tr>
                               
                                <tr>
                               	<td>
                                    <input type="submit" value="إنشاء العقد" class="btn btn-primary" dir="rtl"  required="">
                                </td>
                                
                                
                               </tr>
                            </table>
                            </form>
                            
                            
                            
                            
                        </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>