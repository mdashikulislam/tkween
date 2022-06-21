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
                                <h5 class="card-title">إضافة نوع باقة</h5>
                            </div>
                            <div class="card-body py-5">
                               
                                <form enctype="multipart/form-data" method="post" action="<?= $this->load->config->base_url() ?>dashboard/add_plan_type_data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الإسم</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">مقاس الكتاب</label>
                                        <input type="text" class="form-control" name="des"  required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label>
                                        <select class="form-control" name="type"  aria-describedby="emailHelp" >
                                        <option value="0">الكتب الورقية</option>
                                        <option value="1">الكتب الإلكترونية</option>
                                        </select>
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