<?php
session_start();
$heading =  $_POST['heading'];

    $table_value = $_POST['plan'];
    $table_type =  $_POST['plan_type_2'];
    $table_value2 = $_POST['plan_percent'];
    $table_type2 = $_POST['plan_type_1'];
	$type = $_POST['type'];
?>



<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tkween</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="mobile_menu">
        <ul>
            <li class="active"><a href="http://tkweenonline.com/">الرئيسية</a></li>
            <li><a href="http://tkweenonline.com/#about">من نحن</a></li>
            <li><a href="http://tkweenonline.com/#services">خدماتنا</a></li>
            <li><a href="http://tkweenonline.com/#facts">كتب</a></li>
            <li><a href="http://tkweenonline.com/#team">فريق العمل</a></li>
            <li><a href="http://tkweenonline.com/#contact">تواصل معنا</a></li>
            <li><a href="http://tkweenonline.com/#plan">وقع عقد كتابك</a></li>
        </ul>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container-fluid">
            <i class="icofont-navigation-menu mobile_menu_btn"></i>
            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <!-- <h1 class="logo mr-auto"><a href="index.html">BizPage</a></h1> -->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <nav class="nav-menu d-none d-lg-block">
                        <a class="custom_btn_1" href="http://tkweenonline.com#plan">وقع عقد كتابك</a>
                        <ul>
                            <li><a href="http://tkweenonline.com/#contact">تواصل معنا</a></li>
                            <li><a href="http://tkweenonline.com/#team">فريق العمل</a></li>
                            <li><a href="http://tkweenonline.com/#facts">كتب</a></li>
                            <li><a href="http://tkweenonline.com/#services">خدماتنا</a></li>
                            <li><a href="http://tkweenonline.com/#about">من نحن</a></li>
                            <li class="active"><a href="http://tkweenonline.com/">الرئيسية</a></li>
                        </ul>
                    </nav><!-- .nav-menu -->
                    <a href="http://tkweenonline.com/" class="logo ml-auto"><img src="assets/img/logo.png" alt=""
                            class="img-fluid"></a>
                </div>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Intro Section ======= -->
    <section class="contact_intro">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="animate__animated animate__fadeInDown">التسجيل</h2>

                </div>
            </div>
        </div>
    </section><!-- End Intro Section -->




    <!-- New Section Services -->
    <section id="contact_form">
        <div class="features-main py-5">
            <div class="container py-lg-3">
                <div class="heading mx-auto">
                    <header class="section-header wow fadeInUp">
                        <h3>تسجيل معلومات الباقة</h3>
                    </header>
                </div>
                <div class="row justify-content-center" style="direction: rtl;">
                    <div class="col-lg-8">
                        <form action="admin/site/add_data" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">الإسم</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="email">البريد الإلكتروني</label>
                                        <input type="text" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="phone">رقم الهاتف</label>
                                        <input type="text" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="id">رقم الهوية أو الجواز</label>
                                        <input type="text" class="form-control" id="id" name="id_or_pass" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="address">العنوان</label>
                                        <input type="text" class="form-control" id="address" name="address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="nationality">الجنسية</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="city">المدينة</label>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="country">الدولة</label>
                                        <input type="text" class="form-control" id="country" name="contry" required>
                                        <input type="hidden" class="form-control" name="heading"
                                            value="<?php echo $heading ?>" readonly>
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="bank_name">إسم البنك</label>
                                        <input type="text" class="form-control" id="bank_name" name="bank_name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="bank_account">رقم الايبان</label>
                                        <input type="text" class="form-control" id="bank_account"
                                            name="bank_account_ipan" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="book_name">إسم الكتاب</label>
                                        <input type="text" class="form-control" id="book_name" name="book_name"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="plan_details">نوع الكتاب</label>
                                        <input type="text" class="form-control" id="plan_details" name="book_type1"
                                            value="<?php echo $table_type ?>" readonly>
                                             <input type="hidden" class="form-control"  name="type"
                                            value="<?php echo $type ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="plan_details">الألوان</label>
                                        <input type="text" class="form-control" id="plan_details" name="book_type2"
                                            value="<?php echo $table_type2 ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="price">سعر الباقة</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                            value="<?php echo $table_value ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="descount">نسبة المؤلف</label>
                                        <input type="text" class="form-control" id="discount" name="percentage"
                                            value="<?php echo $table_value2 ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="display: none;">
                                    <input type="file" name="pdf" accept="assets/pdf/file.pdf">
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="plan_details">نوع الكتاب</label>
                                        <textarea name="plan_details" id="plan_details" name="plan_details"
                                            class="form-control" required></textarea>
                                    </div>
                                </div> -->
                                <div class="col-lg-12">
                                    <div class="form-group text-center">
                                        <div class="aggree">
                                            <input type="checkbox" id="aggree" name="aggree" value="aggry" required>
                                            <label class="aggry" style="text-decoration: underline;"> الموافقة على شروط
                                                العقد</label><br>
                                        </div>
                                        <button type="submit" class="btn custom_btn_2">إرسال</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="information">
            <div class="information_inner">
                <i class="fa fa-times close_btn"></i>
                <a href="contract.php">
                    <p style="text-decoration: underline;">للإطلاع على شروط العقد يرجى الضغط هنا</p>
                </a>
            </div>
        </div>
    </section>
    <!-- End of New Section Services -->





    <!-- ======= Footer ======= -->
    <footer id="footer" style="text-align: right;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact" style="text-align: right; margin-top: 50px;">
                        <h4>تواصل معنا</h4>
                        <p>شارع التضامن العربي<br>
                            حي المشرفة - جدة<br>
                            المملكة العربية السعودي <br>
                            <strong></strong>0544733779<br>
                            <strong></strong> info@tkweenonline.com<br>
                        </p>
                        <div class="social-links">
                            <a href="https://twitter.com/tkweenbook1" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://facebook.com/tkweenstore.book" class="facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com/tkweenbook1?igshid=1u2a6owrvrlhr" class="instagram"><i
                                    class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-links" style="text-align: right; margin-top: 50px;">
                        <h4>روابط</h4>
                        <ul>
                            <li><a href="https://tkweenonline.com#home">الرئيسية</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="https://tkweenonline.com#about">من نحن</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="https://tkweenonline.com#services">خدماتنا</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="contract.php">شروط العقد الموحد</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-info">
                        <a href="index.php" class="logo ml-auto"><img
                                style="width: 200px;background-color:white; padding: 8px; margin-bottom:15px; border-radius:10px"
                                src="assets/img/logo.png" alt="" class="img-fluid"></a>
                        <p>تكوين شركة وطنية تأسست عام 2006م وتضم فريقاً إحترافياً في النشر والعمل الإعلامي والإعلاني
                            الإبداعي وتنظيم الفعاليات والمهرجانات, مكونة من كوادر تستوعب تماماً ثقافة المجتمع المحلي
                            وخصائصه
                            وتمتلك الخبرات والمهارات الفنية والتقنية الإحترافية التي توظفها لخدمة رسالة وأهداف عملائها
                            باللإضافة الى تحالفها مع العديد من المؤسسات والشركات المتخصصة في العمل الإبداعي الإعلامي
                            والإنتاج المرئي والتسويقي الإقليمي والدولي</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright of<strong>Tkween Site</strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">Ahmed</a>
            </div>
        </div>
    </footer><!-- End Footer -->



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
    $(".aggry").click(function() {
        $(".information").addClass("on");
    });

    $(".close_btn").click(function() {
        $(".information").removeClass("on");
    });
    </script>

</body>

</html>