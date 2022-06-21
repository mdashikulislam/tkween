
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>لوحة تحكم تكوين | العقود</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shortcut icon" href="<?= $this->config->item('fev') ?>">

<meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="<?= $this->load->config->base_url() ?>cms-admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $this->load->config->base_url() ?>cms-admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= $this->load->config->base_url() ?>cms-admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $this->load->config->base_url() ?>cms-admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= $this->load->config->base_url() ?>cms-admin/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page"  onload="startTime()">
<style>
::-webkit-scrollbar {
    display: none;
}
</style>


<div class="login-box" style="background-color:white; border-radius:10px" >
<center>
<a href="index.php" class="logo ml-auto"><img style="width: 200px;background-color:white; padding: 8px; margin-bottom:25px; margin-top:25%; border-radius:10px"
                                src="http://tkweenonline.com/assets/img/logo.png" alt="" class="img-fluid"></a>
</center>

 
  <div class="login-box-body" style="border-radius:10px">
  <center>
  <h1>الإدارة</h1>
  </center>
    <p class="login-box-msg">تسجيل الدخول للوحة التحكم
</p>

       <form action="<?= $this->load->config->base_url() ?>site/login_process" method="post">
      <div class="form-group has-feedback">
        <input style="border-radius:10px" dir="rtl" type="text" class="form-control" placeholder="اسم المستخدم" required name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input style="border-radius:10px" dir="rtl" type="password" class="form-control" placeholder="كلمه المرور
" required  name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit"  style="background:#700308 !important; border-radius:10px" class="btn btn-primary btn-block btn-flat">دخول</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  <br>

  </div>
  <div class="row">
      <div class="col-xs-12">
      <br>
       <?php $this->load->view('error_msg') ?>
      
      </div>
      </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= $this->load->config->base_url() ?>cms-admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= $this->load->config->base_url() ?>cms-admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= $this->load->config->base_url() ?>cms-admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>

</html>
