<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
              
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                           
                                <ul class="nav nav-pills nav-justified mb-3" style="display: table;; margin:0 auto" id="pills-tab-justified" role="tablist">
                                   
								   <style>
								  .nav-pills .nav-link.active
								  {
									  border: solid 1px #700308 !important;background-color: #700308 !important;;margin-left: 20px;margin-right: 20px;; 
									  color:white !important
								  }
								 
								  style=" "
								   </style>
								   <?php  $package = $this->db->get('books_type')->result_array(); ?>
                                   <?php $i=0; foreach($package as $pp): ?>
                                    <li class="nav-item" style="margin: 0 5px;
    display: inline-block;  flex-grow:inherit; ">
                                        <a class="nav-link <?php if($i==0): ?>active<?php endif ?>" id="pills-<?= $pp['id']?>" data-toggle="pill" href="#pillss-<?= $pp['id']?>" role="tab" aria-controls="pills-home" aria-selected="true"   style="    height: 50px;
    line-height: 40px;
    border-radius: 10px;
    width: 180px;; border: solid 1px #700308;background-color: white; margin:0 auto; color:#700308 ">
                                       
                                        <?= $pp['name'] ?>
                                        </a>
                                    </li>
                                    <?php $i++; endforeach ?>
                                   
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tab-justifiedContent">
                                    <?php $i=0; foreach($package as $pp): ?>
                                    <div class="tab-pane  fade <?php if($i==0): ?>   show active<?php endif ?>" id="pillss-<?= $pp['id'] ?>" role="tabpanel" aria-labelledby="pills-<?= $pp['id']?>">
                                    <center>
                                      <br />
                                       <h5 style="color:#700308 "> <?php if($pp['des']!=''): ?>
                                    <?= $pp['des'] ?>  مقاس الكتاب
                                    <?php endif ?></h5>
                                       </center>
								<?php $pkg = $this->db->where('pid',$pp['id'])->get('books_package')->result_array() ?>
								<div class="row" style="margin-top:20px;">
                                <?php $k=1; foreach($pkg as $pp): ?>
                                <div class="col-lg-3" >
                                <div class="card" style="  margin:0 auto; background:#700308;  border-radius:10px; max-width: 220px;margin: 0 auto;    margin-top: 30px;
    margin-bottom: 20px;">
                                <div class="card-body">
                                <center>
                                <span style="background:#ff6347 !important; border-radius:50px; padding: .35em .6em;  ; font-size:20px; color:white" class="badge bg-info badge-round"><?= $k ?></span><br /><br />
                                	<h2 style="color:white"><small>ريال</small><span style="font-size:50px"> <?= $pp['price'] ?></span> </h2>
                                    <p style="color:white">
                                    <?= $pp['title'] ?>% نسبة المؤلف

                                    </p>
                                   
                                    <a href="<?= $this->load->config->base_url() ?>user/add-contract/<?= $pp['id'] ?>" style="background:white; color: #700308; border-color:#700308 !important;border-radius:20px" class="btn btn-default">إشترك</a>
                                </center>
                                </div>
                                </div>
                                </div>
                                <?php $k++; endforeach ?>
                                </div>

								


                                    </div>
                                    <?php  $i++;  endforeach ?>
                                    
                                </div>
                        
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            </div>