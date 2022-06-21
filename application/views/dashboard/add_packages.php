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
                            <div class="card-header">
                                <h5 class="card-title">إضافة باقة</h5>
                            </div>
                            <div class="card-body py-5">
                               
                                <form enctype="multipart/form-data" method="post" action="<?= $this->load->config->base_url() ?>dashboard/add_plan_package_data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">البافة</label>
                                        <select class="form-control" name="pid"  aria-describedby="emailHelp" >
                                        <?php $plan  = $this->db->get('books_type')->result_array(); ?>
                                       	<?php foreach($plan as $pp): ?>
                                        <option value="<?= $pp['id'] ?>"><?= $pp['name'] ?></option>
                                        <?php endforeach ?>
                                        </select>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">السعر</label>
                                        <input type="text" class="form-control" name="price"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نسبة المؤلف</label>
                                        <input type="text" class="form-control" name="title"  required>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">لون الكتاب</label>
                                        <input type="text" class="form-control" name="color"  required>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">نوع الكتاب</label>
                                        <input type="text" class="form-control" name="type"  required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الحالة</label>
                                        <select class="form-control" name="status"  aria-describedby="emailHelp" >
                                        <option value="0">متاح</option>
                                        <option value="1">غير متاح</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">إرسال</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>