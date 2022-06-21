<!-- Start Breadcrumbbar -->                    
           
            <div class="contentbar" style="margin-top:80px;">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                            <div class="searchbar" style="    width: 400px; float:left">
                            <form method="get" action="<?= $this->load->config->base_url() ?>dashboard/authors">
                            <div class="input-group">
                            <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" id="button-addonSearch">
                            <i class="fa fa-search"></i></button>
                            </div>
                            <input type="search" value="<?=  $this->input->get('search') ?>" name="search" required="" class="form-control" placeholder="Search Author Name" 
                            aria-label="Search" aria-describedby="button-addonSearch">   
                                                           
                            </div>
                            </form>
                            </div>
                                <h5 class="card-title">المؤلفين</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table  class="table table-hover table-bordered">
                                        <thead>
                                        <tr style="background:#f2f3f7">
                                            <th>الإسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>Last Updated</th>
                                            <th>الحالة</th>
                                            <th>العقود</th>
                                            <th>عمل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rec as $rr): ?>
                                        <tr>
                                            <td>
											<a href="<?= $this->load->config->base_url() ?>dashboard/author/<?= $rr['id'] ?>">
											<?= $rr['name'] ?>
                                            </a>
                                            </td>
                                            <td><?= $rr['email'] ?></td>
                                            <td>
											 <?php
                                            $date=date_create($rr['dt']);
                                            echo date_format($date,"d/m/Y ");
                                            ?>
                                            </td>
                                            <td>
                                             <?php
                                            $date=date_create($rr['up_dt']);
                                            echo date_format($date,"h:i:s -  d/m/Y ");
                                            ?>
                                            </td>
                                             <td>
											 <?php if($rr['status']==0): ?>
<label class="badge badge-success">متاح</label>
<?php elseif($rr['status']==1): ?>
<label class="badge badge-warning">غير متاح</label>
<?php endif ?>
                                             </td>
                                            <td>
                                            <a href="<?= $this->load->config->base_url() ?>dashboard/author/<?= $rr['id'] ?>">
                                            	 (<?= $this->db->where('author_id',$rr['id'])->get('submitted_form')->num_rows(); ?>)
                                                
                                                </a>
                                            </td>
                                            <td>
                                            
                                            <a href="<?= $this->load->config->base_url() ?>dashboard/edit-author/<?= $rr['id'] ?>" class="btn btn-secondary-rgba">
                                            Edit
                                            </a>
                                            </td>
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
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>