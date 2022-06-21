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
                                    <form method="post" action="<?= $this->load->config->base_url() ?>site/signup_process">
                                        <div class="form-head">
                                            <a href="<?= $this->load->config->base_url() ?>" class="logo"><img src="<?= $this->load->config->base_url() ?><?= $con[0]['logo'] ?>" class="img-fluid" alt="logo"></a>
                                        </div>                                        
                                        <h4 class="text-primary my-4">التسجيل</h4>
                                        <h4 class="text-primary my-4">موقع تجريبي قيد التطوير</h4>
                                        <?php $this->load->view('error_msg') ?>
                                         <div class="form-group">
                                            <input type="text" class="form-control"  name="name" placeholder="الإسم كامل" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="email" placeholder="البريد الإلكتروني" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass" placeholder="كلمة المرور" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox"required> الموافقة على <a href="#">الشروط والأحكام</a> و <a href="#">سياسة الخصوصية</a>.
                                        </div>
                                                               
                                      <button type="submit" class="btn btn-primary btn-lg btn-block font-18">تسجيل</button>
                                    </form>
                                   
                                    <p class="mb-0 mt-3">لديك حساب؟ <a href="<?= $this->load->config->base_url() ?>login">تسجيل الدخول</a></p>
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