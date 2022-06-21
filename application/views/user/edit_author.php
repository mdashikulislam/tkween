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
                                <h5 class="card-title">Edit Author</h5>
                            </div>
                            <div class="card-body py-5">
                               
                                <form enctype="multipart/form-data" method="post" action="<?= $this->load->config->base_url() ?>user/update_author_data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rec[0]['name'] ?>" name="name" aria-describedby="emailHelp" >
                                        <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?=$rec[0]['id'] ?>" name="id" aria-describedby="emailHelp" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" readonly="readonly" class="form-control" id="exampleInputEmail1" value="<?=$rec[0]['email'] ?>" name="email"  aria-describedby="emailHelp" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$rec[0]['phone'] ?>" name="phone"  aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" value="<?=$rec[0]['pass'] ?>" name="pass"  aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Picture</label>
                                        <br />
                                        <input type="file"  id="exampleInputEmail1" name="pic"  aria-describedby="emailHelp" >
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-7">
                        <div class="card m-b-30">
                          	
                            <div class="card m-b-30">
                            <div class="card-body py-5">
                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                    <?php if($rec[0]['pic']==''): ?>
                                        <img src="<?= $this->load->config->base_url() ?>assets/images/users/girl.svg" class="img-fluid mb-3" alt="user">
                                        <?php else: ?>
                                        <img src="assets/images/users/girl.svg" class="img-fluid mb-3" alt="user">
                                        <?php endif ?>
                                    </div>
                                    <div class="col-lg-9">
                                        <h4><?= $rec[0]['name'] ?></h4>
                                        <p><?= $rec[0]['email'] ?></p>
                                       <br />
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="p-1">Full Name :</th>
                                                        <td class="p-1"><?= $rec[0]['name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Email :</th>
                                                        <td class="p-1"><?= $rec[0]['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Contact :</th>
                                                        <td class="p-1"><?= $rec[0]['phone'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Member Since :</th>
                                                        <td class="p-1"><?= $rec[0]['dt'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Password :</th>
                                                        <td class="p-1">*****</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <br /><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>