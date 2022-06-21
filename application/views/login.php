    <?php $con =  $this->db->get('config')->result_array(); ?>
  <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                
                                    <form method="post" action="<?= $this->load->config->base_url() ?>site/login_process">
                                        <div class="form-head">
                                            <a href="<?= $this->load->config->base_url() ?>" class="logo"><img src="<?= $this->load->config->base_url() ?><?= $con[0]['logo'] ?>" class="img-fluid" alt="logo"></a>
                                        </div>                                        
                                        <h4 class="text-primary my-4">قم بتسجيل الدخول</h4>
                                         
                <?php $this->load->view('error_msg') ?>
	                               <div class="form-group">
                                            <input type="text" class="form-control"  name="email" placeholder="البريد الإلكتروني" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass" placeholder="كلمة المرور" required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                                               
                                            </div>
                                            
                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="<?= $this->load->config->base_url() ?>forgot-password" class="font-14">هل نسيت كلمة المرور؟</a>
                                              </div>
                                            </div>
                                          
                                        </div>                          
                                      <button type="submit" class="btn btn-primary btn-lg btn-block font-18">تسجيل الدخول</button>
                                    </form>
                                   
                                    <p class="mb-0 mt-3">ليس لديك حساب؟  <a href="<?= $this->load->config->base_url() ?>signup">التسجيل</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>