
           
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
           
            <!-- Start Contentbar -->    
            <div class="contentbar"  style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-12">
                    
                        <!-- Start row -->
                        <div class="row">
                            <!-- Start col -->
                           <div class="col-lg-12"> <h4 style="color: #141d467d;">العقود</h4></div>
                            <div class="col-lg-12 col-xl-4">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/all_contracts">
                            <div class="card bg-danger-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;color: #f9616d;">مجموع العقود</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px;color: #f9616d;">
                                                           
                                                            <?= number_format($this->db->where('status!=',3)->get('submitted_form')->num_rows()); ?>
                                                           
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2;color: #f9616d;" class="fa fa-file-text"></i>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                     </a>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/pending_contracts">
                            <div class="card bg-danger-rgba m-b-20" >
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;;color: #f9616d;">العقود المعلقة</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px;color: #f9616d;">
                                                             <?= number_format($this->db->where('status',1)->get('submitted_form')->num_rows()+$this->db->where('status',0)->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2;color: #f9616d;" class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/inprocess_contracts">
                            <div class="card bg-danger-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;;color: #f9616d;">العقود المعتمدة</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px;color: #f9616d;">
                                                             <?= number_format($this->db->where('status',2)->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2;color: #f9616d;" class="fa fa-bar-chart"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                             <div class="col-lg-12 col-xl-6">
                              <a href="<?= $this->load->config->base_url() ?>dashboard/filter/print_contracts">
                            <div class="card bg-warning-rgba m-b-20" style="background:rgba(80, 111, 228, 0.1) !important"> 
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#506fe4 ">عقود الكتب الورقية</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#506fe4  ">
                                                              <?= number_format($this->db->where(array('type'=>0,'status!='=>3))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#506fe4 " class="fa fa-file-pdf-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                             <div class="col-lg-12 col-xl-6">
                              <a href="<?= $this->load->config->base_url() ?>dashboard/filter/electronic_contracts">
                            <div class="card bg-warning-rgba m-b-20" style="background:rgba(80, 111, 228, 0.1) !important">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#506fe4">عقود الكتب الإلكترونية</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#506fe4">
                                                             <?= number_format($this->db->where(array('type'=>1,'status!='=>3))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#506fe4" class="fa fa-globe"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            
                            
                          
                            
                        </div>
                        
                        <div class="row" style="margin-top:30px">
                        <div class="col-lg-12">
                        <h4 style="color: #141d467d;">المالية</h4>
                        </div>
                            <!-- Start col -->
                            <div class="col-lg-12 col-xl-4">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/total_payment">
                            <div class="card bg-success-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#43d187">المجموع</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#43d187">
                                                            
                                                             <?php 
			$price  = $this->db->query('select sum(price) as total from submitted_form  where   status= 2')->result_array();
														echo  number_format($price[0]['total']);
														?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#43d187" class="fa fa-money"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                              <a href="<?= $this->load->config->base_url() ?>dashboard/filter/pending_payment">
                            <div class="card bg-success-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px; color:#43d187 ">المتبقي</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px ;color:#43d187">
                                                            <?php 
			$price  = $this->db->query('select sum(price) as total from submitted_form  where status= 2 and payment_status = 0')->result_array();
														echo number_format($price[0]['total']);
														?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#43d187" class="fa fa-bank"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                              <a href="<?= $this->load->config->base_url() ?>dashboard/filter/clear_payment">
                            <div class="card bg-success-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#43d187">المدفوع</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#43d187">
                                                             <?php 
			$price  = $this->db->query('select sum(price) as total from submitted_form  where  status= 2 and payment_status != 0')->result_array();
														echo number_format($price[0]['total']);
														?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#43d187" class="fa fa-check-square-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            
                        </div>
                        <div class="row" style="margin-top:30px">
                        <div class="col-lg-12">
                         <h4 style="color: #141d467d;">مراحل الكتاب</h4>
                        </div>
                            <!-- Start col -->
                            <div class="col-lg-12 col-xl-3">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/awaiting_books">
                            <div class="card bg-secondary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;;color:#96a3b6 ">إستلام الكتاب</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px;color:#96a3b6 ">
                                                             <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>0))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2;color:#96a3b6 " class="fa fa-hourglass-half"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                           
                           
                            <div class="col-lg-12 col-xl-3">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/correction">
                            <div class="card bg-secondary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;;color:#96a3b6 ">التدقيق</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px;color:#96a3b6 ">
                                                            
                                                             <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status!='=>2))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2;color:#96a3b6 " class="fa fa-file-excel-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                             <div class="col-lg-12 col-xl-3">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/inner_design">
                            <div class="card bg-secondary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;;color:#96a3b6 ">التنفيذ</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px;color:#96a3b6 ">
                                                            
   <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'inner_design_st!='=>2))->get('submitted_form')->num_rows()); ?>
                                                             
                                                             
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2;color:#96a3b6 " class="fa fa-file-excel-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                             <div class="col-lg-12 col-xl-3">
                               <a href="<?= $this->load->config->base_url() ?>dashboard/filter/cover_design">
                            <div class="card bg-secondary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;;color:#96a3b6 ">تصميم الغلاف</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px;color:#96a3b6 ">
                                                             <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'inner_design_st'=>2,'cover_status!='=>2))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2;color:#96a3b6 " class="fa fa-file-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                             <div class="col-lg-12 col-xl-3">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/final_books">
                            <div class="card bg-info-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#3d9bfb ">كتب منتهية التنفيذ</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#3d9bfb ">
                                                             <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status!='=>2))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#3d9bfb " class="fa fa-gavel"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12 col-xl-3">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/filter/printing_prototype">
                            <div class="card bg-info-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px; color:#3d9bfb ">العينات</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#3d9bfb ">
                                                             <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status!='=>2))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:60px; float:left; opacity:0.4; color:#3d9bfb " class="fa fa-print"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12 col-xl-3">
                            <a href="<?= $this->load->config->base_url() ?>dashboard/filter/ministry">
                            <div class="card bg-info-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px; color:#3d9bfb ">الوزارة</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#3d9bfb ">
                                                              <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status'=>2,'ministry_status!='=>2))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:60px; float:left; opacity:0.4; color:#3d9bfb " class="fa fa-podcast"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12 col-xl-3">
                            <a href="<?= $this->load->config->base_url() ?>dashboard/filter/published">
                            <div class="card bg-info-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px; color:#3d9bfb ">Publsihed</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#3d9bfb ">
                                                              <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status'=>2,'ministry_status'=>2,'final_book_status2'=>2,'publish_status'=>2))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:60px; float:left; opacity:0.4; color:#3d9bfb " class="fa fa-podcast"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12">
                            <a href="<?= $this->load->config->base_url() ?>dashboard/filter/printing">
                            <div class="card bg-info-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px; color:#3d9bfb ">المطبعة</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#3d9bfb ">
                                                              <?= number_format($this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status'=>2,'ministry_status'=>2,'final_book_status2'=>2,'publish_status'=>2,'printing_status'=>2))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:60px; float:left; opacity:0.4; color:#3d9bfb " class="fa fa-podcast"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-top:30px">
                        <div class="col-lg-12">
                         <h4 style="color: #141d467d;">Branches</h4>
                        </div>
                        
                        <?php $branch =  $this->db->get('branches')->result_array(); ?>
                        <?php  foreach($branch as $bb):?>
                        <div class="col-lg-12 col-xl-6">
                        <a href="<?= $this->load->config->base_url() ?>dashboard/filter/branch/<?= $bb['id']?>">
                            <div class="card bg-danger-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#f9616d "><?= $bb['name'] ?></h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#f9616d ">
                                                             <?= number_format($this->db->where(array('branch_id'=>$bb['id'],'status!='=>3))->get('submitted_form')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#f9616d " class="fa fa-building-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <?php endforeach ?>
                        
                        </div>
                        
                        
                        <div class="row" style="margin-top:30px">
                        <div class="col-lg-12">
                         <h4 style="color: #141d467d;">إحصائيات</h4>
                        </div>
                        
                        <div class="col-lg-12 col-xl-3">
                         <a href="<?= $this->load->config->base_url() ?>dashboard/authors">
                            <div class="card bg-warning-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#f7bb4d ">المؤلفين</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#f7bb4d ">
                                                             <?= number_format($this->db->where('level','user')->get('users')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#f7bb4d " class="fa fa-user-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                             <div class="col-lg-12 col-xl-3">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/users">
                            <div class="card bg-warning-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#f7bb4d ">فريق العمل</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#f7bb4d ">
                                                             <?= number_format($this->db->where('level','editor')->get('users')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#f7bb4d " class="fa fa-user-circle-o"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-12 col-xl-3">
                            <a href="<?= $this->load->config->base_url() ?>dashboard/branches">
                            <div class="card bg-warning-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#f7bb4d ">الفروع</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#f7bb4d ">
                                                             <?= number_format($this->db->get('branches')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#f7bb4d " class="fa fa-building"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            
                            <div class="col-lg-12 col-xl-3">
                             <a href="<?= $this->load->config->base_url() ?>dashboard/inbox">
                            <div class="card bg-warning-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"  style="font-size:14px;; color:#f7bb4d ">الرسائل</h5>
                                                    </div>
                                                    <div class="avatar-group" style="margin-top:10px">
                                                            <h5 class="mb-0" style="font-size:30px; color:#f7bb4d ">
                                                             <?= number_format($this->db->get('msgs')->num_rows()); ?>
                                                            </h5>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                <i style="font-size:50px; float:left; opacity:0.2; color:#f7bb4d " class="fa fa-inbox"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </a>
                            </div>
                        
                        
                        </div>
                        
                                         
                    </div>
                    
                    
                    <!-- End col -->
                    <!-- Start col -->
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
                <!-- Start row -->
                
                <!-- End row -->

            </div>
           