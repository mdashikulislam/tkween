<!-- Start Breadcrumbbar -->                    
           
            <!-- Start Breadcrumbbar -->                    
            
            <!-- End Breadcrumbbar -->
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                     <!-- Start col -->
                    <div class="col-lg-12">
                        <?php foreach($rec as $rr): ?>
                        <div class="card crm-project-box m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    
                                    <div class="col-9">
                                        <h5>Contract ID : <?=  $rr['cid'] ?></h5>
                                        <?php $user =  $this->db->where('id',$rr['author_id'])->get('users')->result_array(); ?>
                                        <p class="font-14">
										<?= $rr['book_name'] ?>
                                        </p>
                                    </div>
                                    
                                    <div class="col-12 col-lg-12 col-xl-3">
                                       <a target="_blank" href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/processing/<?= $rr['id'] ?>" style="float:left" class="btn btn-secondary-rgba " >View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        
                        

                    </div>
                     <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->