<?php

// session_start();

// $_SESSION['table_value'] = $table_value;
// $_SESSION['table_value2'] = $table_value2;

?>

<!DOCTYPE html>
<html lang="en">
<style>
.portfolio-wrap
{
    margin-bottom:30px
}
#portfolio .portfolio-item
{
height:auto !important;
}
#portfolio .portfolio-item figure
{
    height:auto  !important;
}
</style>
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
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="mobile_menu">
        <ul>
            <li class="active"><a href="index.php">الرئيسية</a></li>
            <li><a href="#about">من نحن</a></li>
            <li><a href="#services">خدماتنا</a></li>
            <li><a href="#facts">كتب</a></li>
            <li><a href="#team">فريق العمل</a></li>
            <li><a href="#contact">تواصل معنا</a></li>
            <li><a href="#plan">وقع عقد كتابك</a></li>
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
                        <a class="custom_btn_1" href="#plan">وقع عقد كتابك</a>
                        <ul>
                            <li><a href="#contact">تواصل معنا</a></li>
                            <li><a href="#team">فريق العمل</a></li>
                            <li><a href="#facts">كتب</a></li>
                            <li><a href="#services">خدماتنا</a></li>
                            <li><a href="#about">من نحن</a></li>
                            <li class="active"><a href="index.php">الرئيسية</a></li>
                        </ul>
                    </nav><!-- .nav-menu -->
                    <a href="index.php" class="logo ml-auto"><img src="assets/img/logo.png" alt=""
                            class="img-fluid"></a>
                </div>
            </div>
        </div>
    </header><!-- End Header -->



<style>
#intro .slide2
{
    top:auto;
    left:0; right:0
}
#intro .slide {
    width: 100% !important;
    padding: 0px;
    padding-top:10px;
    padding-bottom:20px;
    margin: 0 0 0px 0;
    color: white;
    background: #00000070;
    border-radius: 0px;
    line-height: 25px;
}
#portfolio .portfolio-item figure
{
    background:none !important;
}

 .cta-btn {
    font-family: "Almarai", "Montserrat", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 16px;
    display: inline-block;
    padding: 8px 28px;
    border-radius: 25px;
    transition: 0.5s;
    margin-top:-30px;
   margin-bottom:20px;
    color: #fff;
    background: #700308;
    border: 2px solid #700308;
   float:left;
    color:white !important;
}
#fatop{
    display: block;
}
#mobfatop{
    display: none;
}
@media screen and (max-width:600px) {
    .cta-btn {
    font-family: "Almarai", "Montserrat", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 16px;
    display: inline-block;
    padding: 15px 28px;
    border-radius: 25px;
    transition: 0.5s;
   margin-bottom:20px;
    color: #fff;
    background: #700308;
    border: 2px solid #700308;
    margin-top: 40px;
    margin-left:80px;
    color:white !important;
}

}
@media screen and (max-width:700px) {

#fatop{
    display: none;
}
#mobfatop{
    display: block;
}
}
</style>



    <!-- ======= Intro Section ======= -->
    <section id="intro" style="height: 85vh;">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <!-- <ol class="carousel-indicators"></ol> -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url(assets/img/hero-1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">تكوين</h2>
                                <h3 class="animate__animated animate__fadeInUp" style="color: white;">الان وقع عقد كتابك
                                    إلكترونيا معنا</h3>
                                <a href="#plan"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">أعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/6.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">
                               
                               
                                <p style="float:left;text-align:right; padding-left:50px; padding-right:50px" class="slide animate__animated animate__fadeInUp">
                                  
                                    <b style="text-align:right; font-size:20px;" >الموضوع</b>
                                   
                                 <br><br>
                                   <span style="font-size:15px">
                                   
                                   هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين هذا نص عشوائي لهاذا المشروع وهو تكوين
 <a class="cta-btn" href="">
                                    لهاذ
                                    </a>

                                   </span>
 
                                    </p>
                                <!-- <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/7.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">
                                <p style="float:left;text-align:right; padding-left:50px; padding-right:50px" class="slide animate__animated animate__fadeInUp">
                                  
                                    <b style="text-align:right; font-size:20px;" >الموضوع</b>
                                   
                                 <br><br>
                                   <span style="font-size:15px">
                                   
                                   هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين هذا نص عشوائي لهاذا المشروع وهو تكوين
 <a class="cta-btn" href="">
                                    لهاذ
                                    </a>

                                   </span>
 
                                    </p>
                                <!-- <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/8.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">
                               <p style="float:left;text-align:right; padding-left:50px; padding-right:50px" class="slide animate__animated animate__fadeInUp">
                                  
                                    <b style="text-align:right; font-size:20px;" >الموضوع</b>
                                   
                                 <br><br>
                                   <span style="font-size:15px">
                                   
                                   هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين هذا نص عشوائي لهاذا المشروع وهو تكوين
 <a class="cta-btn" href="">
                                    لهاذ
                                    </a>

                                   </span>
 
                                    </p>
                                <!-- <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/9.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">
                                
                               <p style="float:left;text-align:right; padding-left:50px; padding-right:50px" class="slide animate__animated animate__fadeInUp">
                                  
                                    <b style="text-align:right; font-size:20px;" >الموضوع</b>
                                   
                                 <br><br>
                                   <span style="font-size:15px">
                                   
                                   هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين هذا نص عشوائي لهاذا المشروع وهو تكوين
 <a class="cta-btn" href="">
                                    لهاذ
                                    </a>

                                   </span>
 
                                    </p>
                                <!-- <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section><!-- End Intro Section -->




    <main id="main">
        <!-- ======= Featured Services Section Section ======= -->
        <!-- <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section>End Featured Services Section -->
        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>من نحن</h3>
                    <p>تكوين شركة وطنية تأسست عام 2006م وتضم فريقاً إحترافياً في النشر والعمل الإعلامي والإعلاني
                        الإبداعي وتنظيم الفعاليات والمهرجانات, مكونة من كوادر تستوعب تماماً ثقافة المجتمع المحلي وخصائصه
                        وتمتلك الخبرات والمهارات الفنية والتقنية الإحترافية التي توظفها لخدمة رسالة وأهداف عملائها
                        باللإضافة الى تحالفها مع العديد من المؤسسات والشركات المتخصصة في العمل الإبداعي الإعلامي
                        والإنتاج المرئي والتسويقي الإقليمي والدولي</p>
                </header>
                <div class="row about-cols">
                    <!-- <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <div class="img">
                                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#"><br><br>رسالتنا</a></h2>
                            <p>
                                متخصصون في الخدمات الإعلامية والطباعية والنشر التي نوظف من خلالها خبراتنا المتميزة وأحدث
                                التقنيات لنصنع مع شركائنا قصة النجاح وتحقيق الطموحات العملية
                            </p>
                        </div>
                    </div> -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-col">
                            <div class="img">
                                <!-- <img src="assets/img/about-plan.jpg" alt="" class="img-fluid"> -->
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#"><br><br>رسالتنا</a></h2>
                            <p style="text-align: center;">
                                متخصصون في الخدمات الإعلامية والطباعية والنشر التي نوظف من خلالها خبراتنا المتميزة وأحدث
                                التقنيات لنصنع مع شركائنا قصة النجاح وتحقيق الطموحات العملية </p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-col">
                            <div class="img">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                                <!-- <img src="assets/img/about-vision.jpg" alt="" class="img-fluid"> -->
                            </div>
                            <h2 class="title"><a href="#"><br><br>رؤيتنا</a></h2>
                            <p style="text-align: center;">أن نكون من الرواد في النشر و الخدمات والحلول الاعلامية
                                والتنظيمية والتسويقية في الوطن
                                العربي والعالمي
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->




        <!-- New Section Services -->
        <section class="w3l-index2" id="services">
            <div class="features-main py-5 text-center">
                <div class="container py-lg-3">
                    <div class="heading mx-auto">
                        <header class="section-header wow fadeInUp">
                            <h3>خدماتنا</h3>
                            <!-- <p>هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا الموقع ويجب ان يكون النص بعدد احرف
                                كثيره لكي يتم الاختبار بشكل صحيح</p> -->
                        </header>
                    </div>
                    <div class="row features">
                        <div class="col-lg-4 col-md-6 feature-grid">
                            <a href="#url">
                                <div class="feature-body service1">
                                    <div class="feature-img">
                                        <span class="fa fa-bar-chart" aria-hidden="true"></span>
                                    </div>
                                    <div class="feature-info mt-4">
                                        <h3 class="feature-titel mb-2">إصدار ونشر الكتب والمجلات والإصدارات الإعلامية
                                            المتخصصة</h3>
                                        <!-- <p class="feature-text">هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا
                                            الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح
                                        </p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 feature-grid">
                            <a href="#url">
                                <div class="feature-body service2">
                                    <div class="feature-img">
                                        <span class="fa fa-laptop icon-fea" aria-hidden="true"></span>
                                    </div>
                                    <div class="feature-info mt-4">
                                        <h3 class="feature-titel mb-2">تقديم الاستشارات الاستراتيجية الإعلانية
                                            والتسويقية للعديد من الجهات والشركات</h3>
                                        <!-- <p class="feature-text">هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا
                                            الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح
                                        </p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 feature-grid">
                            <a href="#url">
                                <div class="feature-body service3">
                                    <div class="feature-img">
                                        <span class="fa fa-line-chart" aria-hidden="true"></span>
                                    </div>
                                    <div class="feature-info mt-4">
                                        <h3 class="feature-titel mb-2">إجراء الدراسات والأبحاث واستطلاعات الرأي العلمية
                                            المتخصصة</h3>
                                        <!-- <p class="feature-text">هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا
                                            الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح
                                        </p> -->
                                        <div class="hover">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 feature-grid">
                            <a href="#url">
                                <div class="feature-body service4">
                                    <div class="feature-img">
                                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                    </div>
                                    <div class="feature-info mt-4">
                                        <h3 class="feature-titel mb-2">التخطيط المهني المتميز للعمليات الإعلامية داخل
                                            وخارج المنشآت</h3>
                                        <!-- <p class="feature-text">هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا
                                            الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح
                                        </p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 feature-grid">
                            <a href="#url">
                                <div class="feature-body service5">
                                    <div class="feature-img">
                                        <span class="fa fa-signal icon-fea" aria-hidden="true"></span>
                                    </div>
                                    <div class="feature-info mt-4">
                                        <h3 class="feature-titel mb-2">تقديم الاستشارات في العلاقات العامة والشؤون
                                            الإعلامية والثقافية على اختلافها</h3>
                                        <!-- <p class="feature-text">هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا
                                            الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح
                                        </p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6 feature-grid">
                            <a href="#url">
                                <div class="feature-body service6">
                                    <div class="feature-img">
                                        <span class="fa fa-paint-brush icon-fea" aria-hidden="true"></span>
                                    </div>
                                    <div class="feature-info mt-4">
                                        <h3 class="feature-titel mb-2">Creative Consultancy</h3>
                                        <p class="feature-text">هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا
                                            الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of New Section Services -->
        <!-- ======= Services Section ======= -->
        <!-- <section id="services" style="direction: rtl; text-align: right;">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا الموقع ويجب ان يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div>

      </div>
    </section> -->
        <!-- End Services Section -->




        <!------------ Our Offers Start------------>
        <section class="our_offer section_padding" class="overlay">
            <div class="container">
                <div class="heading mx-auto">
                    <header class="section-header wow fadeInUp">
                        <h3>عروضنا</h3>
                    </header>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!------------ Slider Start ------------>
                        <div class="banner_slider owl-carousel">
                            <div class="single_slid_item">
                                <a href="#plan">
                                    <img src="assets/img/banner_1.png">
                                </a>
                            </div>
                            <div class="single_slid_item">
                                <img src="assets/img/banner_1.png">
                            </div>
                            <div class="single_slid_item">
                                <img src="assets/img/banner_1.png">
                            </div>
                        </div>
                        <!------------ Slider End ------------>
                    </div>
                </div>
            </div>
        </section>
        <!------------ Our Offers End------------>



        <!------------ Plan Start------------>
        <section class="plan section_padding" id="plan">
            <div class="container">
                <header class="section-header">
                    <h3>الباقات</h3>
                </header>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- single table -->
                        <div class="single_table">
                            <ul class="nav nav-tabs tabls_1">
                                <li><a data-toggle="tab" href="#pBook">الكتب الأدبية</a>
                                </li>
                                <li class="active"><a data-toggle="tab" href="#sBook" class="active">الكتب العلمية</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="sBook" class="tab-pane fade in active show">
                                    <!-- inner table -->
                                    <div class="single_table_inner">
                                        <ul class="nav nav-tabs tabls_2">
                                            <li><a data-toggle="tab" href="#color_1">4 الوان</a></li>
                                            <li class="active"><a data-toggle="tab" href="#black_1" class="active">لون
                                                    اسود</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="black_1" class="tab-pane fade in active show">
                                                <div class="row justify-content-center">
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">

                                                            <h3>1</h3>
                                                            <h2><span>ريال</span>2400</h2>
                                                            <ul>
                                                                <li>20% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan1">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>2</h3>
                                                            <h2><span>ريال</span>3400</h2>
                                                            <ul>
                                                                <li>30% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan2">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>3</h3>
                                                            <h2><span>ريال</span>4500</h2>
                                                            <ul>
                                                                <li>50% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan3">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                </div>
                                            </div>
                                            <div id="color_1" class="tab-pane fade">
                                                <div class="row justify-content-center">
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>1</h3>
                                                            <h2><span>ريال</span>3400</h2>
                                                            <ul>
                                                                <li>20% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan4">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>2</h3>
                                                            <h2><span>ريال</span>4500</h2>
                                                            <ul>
                                                                <li>30% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan5">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>3</h3>
                                                            <h2><span>ريال</span>6500</h2>
                                                            <ul>
                                                                <li>50% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan6">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- inner table -->
                                </div>
                                <div id="pBook" class="tab-pane fade">
                                    <!-- inner table -->
                                    <div class="single_table_inner">
                                        <ul class="nav nav-tabs tabls_2">
                                            <li><a data-toggle="tab" href="#color_2">4 الوان</a></li>
                                            <li class="active"><a data-toggle="tab" href="#black_2" class="active">لون
                                                    اسود</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="black_2" class="tab-pane fade in active show">
                                                <div class="row justify-content-center">
                                                    <!-- single_price_item -->
                                                    <!-- <div class="col-lg-3 col-md-4 col-sm-6" id="plan13">

                                                        <div class="single_price_item"
                                                            style="background-color: #20d31a;">
                                                            <h3
                                                                style="background-color: white; color:black; font-size: 1rem; font-weight: bold;">
                                                                KSA</h3>
                                                            <h2><span>ريال</span>990</h2>
                                                            <ul>
                                                                <li>10% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan13">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>1</h3>
                                                            <h2><span>ريال</span>2400</h2>
                                                            <ul>
                                                                <li>20% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan7">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>2</h3>
                                                            <h2><span>ريال</span>3400</h2>
                                                            <ul>
                                                                <li>30% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan8">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>3</h3>
                                                            <h2><span>ريال</span>4400</h2>
                                                            <ul>
                                                                <li>50% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan9">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                </div>
                                            </div>
                                            <div id="color_2" class="tab-pane fade">
                                                <div class="row justify-content-center">
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>1</h3>
                                                            <h2><span>ريال</span>2800</h2>
                                                            <ul>
                                                                <li>20% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan10">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>2</h3>
                                                            <h2><span>ريال</span>3800</h2>
                                                            <ul>
                                                                <li>30% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan11">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                    <!-- single_price_item -->
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3>3</h3>
                                                            <h2><span>ريال</span>4800</h2>
                                                            <ul>
                                                                <li>50% <span>نسبة المؤلف</span></li>
                                                                <li>
                                                                    <form method="POST" action="contract-form.php">
                                                                        <input type="text" name="plan" value="plan12">
                                                                        <button type="submit">إشترك</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- single_price_item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- inner table -->
                                </div>
                            </div>
                        </div>
                        <!-- single table -->
                    </div>
                </div>
            </div>
        </section>
        <!------------  End------------>
        <!-- ======= Call To Action Section ======= -->
        <!-- <section id="call-to-action">
            <div class="container text-center" data-aos="zoom-in">
                <div class="overlay">
                    <h3>للإستفسارات</h3>
                    <p>فريق تكوين في اتم الاستعداد للرد على جميع استفساراتكم</p>

                    <a class="cta-btn scrollto animate__animated animate__fadeInUp" href="#contact">تواصل معنا</a>
                </div>
            </div>
        </section> -->
        <!-- End Call To Action Section -->
        <!-- ======= Skills Section ======= -->
        <!-- <section id="skills">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Our Skills</h3>
                    <p>هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا الموقع ويجب ان يكون النص بعدد احرف كثيره
                        لكي يتم الاختبار بشكل صحيحهذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا الموقع ويجب ان
                        يكون النص بعدد احرف كثيره لكي يتم الاختبار بشكل صحيح</p>
                </header>
                <div class="skills-content">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">HTML <i class="val">100%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">CSS <i class="val">90%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Skills Section -->
        <!-- ======= Facts Section ======= -->
        <!-- <section id="facts">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>أعمالنا</h3>
                    <p>هذا مجرد نص تجريبي لاختبار تصميم اللغة العربية في هذا الموقع ويجب ان يكون النص بعدد احرف كثيره
                        لكي يتم الاختبار بشكل صحيح</p>
                </header>
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>عدد المؤلفين</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p>عدد الكتب</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p>المهرجانات</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>امثله</p>
                    </div>
                </div>
                <div class="facts-img">
                    <img style="margin-bottom: 50px;" src="assets/img/logo.png" alt="" class="img-fluid">
                </div>
            </div>
        </section> -->
        <!-- End Facts Section -->
        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3 class="section-title">كتب تكوين</h3>
                </header>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class=" col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-card">الكتب الأدبية</li>
                            <li data-filter=".filter-app">الكتب العلمية</li>
                            <li data-filter="*" class="filter-active">أحدث الكتب</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-lightbox="portfolio"
                                    data-title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
                                    title="book name"></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">book name</a></h4>
                                <p>تكوين</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- ======= Facts Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>متجر تكوين</h3>
                </header>
                <div id="portfolio">
                    <div class="container">
                        <div class="row portfolio-container">
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="assets/img/portfolio/book1.jpg" class="img-fluid" alt="">
                                        <a href="assets/img/portfolio/book1.jpg" data-lightbox="portfolio"
                                            data-title="book name"></a>
                                        <a href="http://tkweenonline.com.sa/index.php?route=product/product&product_id=73"
                                            class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </figure>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html">قناديل من الحياة</a></h4>
                                        <p>تكوين</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="assets/img/portfolio/book1.jpg" class="img-fluid" alt="">
                                        <a href="assets/img/portfolio/book1.jpg" data-lightbox="portfolio"
                                            data-title="book name"></a>
                                        <a href="http://tkweenonline.com.sa/index.php?route=product/product&product_id=73"
                                            class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </figure>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html">قناديل من الحياة</a></h4>
                                        <p>تكوين</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="assets/img/portfolio/book1.jpg" class="img-fluid" alt="">
                                        <a href="assets/img/portfolio/book1.jpg" data-lightbox="portfolio"
                                            data-title="book name"></a>
                                        <a href="http://tkweenonline.com.sa/index.php?route=product/product&product_id=73"
                                            class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </figure>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html">قناديل من الحياة</a></h4>
                                        <p>تكوين</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>


                <div class="facts-img">
                    <img style="margin-bottom: 50px;" src="assets/img/logo.png" alt="" class="img-fluid">

                </div>
                <div class="container text-center" data-aos="zoom-in" style="display: flex !important;justify-content: center">
                    <form action="www.tkweenonline.com.sa">
                        <button type="submit" class="cta-btn" id="cta-btn1">للدخول الى المتجر</button>
                    </form>
                </div>
            </div>
        </section><!-- End Facts Section -->

        <!-- End Portfolio Section -->
        <!-- ======= Our Clients Section ======= -->
        <!-- <section id="clients">
            <div class="container" data-aos="zoom-in">
                <header class="section-header">
                    <h3>Our Clients</h3>
                </header>
                <div class="owl-carousel clients-carousel">
                    <img src="assets/img/clients/client-1.png" alt="">
                    <img src="assets/img/clients/client-2.png" alt="">
                    <img src="assets/img/clients/client-3.png" alt="">
                    <img src="assets/img/clients/client-4.png" alt="">
                    <img src="assets/img/clients/client-5.png" alt="">
                    <img src="assets/img/clients/client-6.png" alt="">
                    <img src="assets/img/clients/client-7.png" alt="">
                    <img src="assets/img/clients/client-8.png" alt="">
                </div>
            </div>
        </section> -->
        <!-- End Our Clients Section -->
        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="section-bg">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Testimonials</h3>
                </header>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                            culpa.
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                            nisi cillum quid.
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Testimonials Section -->
        <!-- ======= Team Section ======= -->
        <section id="team" style="background-color: #f7f7f7;">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>فريق العمل</h3>
                    <p>يضم فريق العمل في تكوين نخبة من الخبراء والمختصين في المجالات الإعلامية والإعلانية ودراسات السوق
                        والاستشارات التسويقية ورسم وتخطيط الصورة الذهنية، الطباعة والنشر الاستشارات الادارية.
                        هذا الفريق يمتلك الخبرة والتأهيل العلمي العالي بالإضافة الى الممارسة والخبرة العلمية التي تمكن
                        من فهم طبيعة ومتطلبات قطاعات الأعمال والأسواق والشرائح المستهدفة</p>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section><!-- End Team Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg" style="background-color: #ffffff;">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>نواصل معنا</h3>
                    <p></p>
                </div>
                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>العنوان</h3>
                            <address>السبعين بجوار سوبرماركت الراية</address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>الهاتف</h3>
                            <p><a href="tel:+966123456789">+966 544733779</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>البريد الكتروني</h3>
                            <p><a href="mailto:info@example.com">info@tkweenonline.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="form" style="direction: rtl;">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form" style="  background-color: #f7f7f7;
">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="الإسم"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="البريد الإلكتروني" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="العنوان"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="نص الرسالة"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">جاري الإرسال...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">تم إرسال الرسالة بنجاح</div>
                        </div>
                        <div class="text-center"><button type="submit">إرسال</button></div>
                    </form>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" style="text-align: right;">
        <div class="footer-top" id="fatop">
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
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-links" style="text-align: right; margin-top: 50px;">
                        <h4>روابط</h4>

                        <ul>
                            <li><a href="#home">الرئيسية</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#about">من نحن</a><i class="ion-ios-arrow-left" style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#services">خدماتنا</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#">شروط الخدمة</a><i class="ion-ios-arrow-left" style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#">سياسة الخصوصية</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-info">
                        <a href="index.php" class="logo ml-auto"><img style="width: 250px; padding-bottom: 20px;"
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
        <!--mob view-->
         <div class="footer-top" id="mobfatop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-info">
                        <a href="index.php" class="logo ml-auto"><img style="width: 250px; padding-bottom: 20px;"
                                src="assets/img/logo.png" alt="" class="img-fluid"></a>
                        <p>تكوين شركة وطنية تأسست عام 2006م وتضم فريقاً إحترافياً في النشر والعمل الإعلامي والإعلاني
                            الإبداعي وتنظيم الفعاليات والمهرجانات, مكونة من كوادر تستوعب تماماً ثقافة المجتمع المحلي
                            وخصائصه
                            وتمتلك الخبرات والمهارات الفنية والتقنية الإحترافية التي توظفها لخدمة رسالة وأهداف عملائها
                            باللإضافة الى تحالفها مع العديد من المؤسسات والشركات المتخصصة في العمل الإبداعي الإعلامي
                            والإنتاج المرئي والتسويقي الإقليمي والدولي</p>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 footer-links" style="text-align: right; margin-top: 50px;">
                        <h4>روابط</h4>

                        <ul>
                            <li><a href="#home">الرئيسية</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#about">من نحن</a><i class="ion-ios-arrow-left" style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#services">خدماتنا</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#">شروط الخدمة</a><i class="ion-ios-arrow-left" style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="#">سياسة الخصوصية</a><i class="ion-ios-arrow-left"
                                    style="margin-left: 10px;"></i></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-contact" style="text-align: right; margin-top: 50px;">
                        <h4>تواصل معنا</h4>
                        <p>شارع التضامن العربي<br>
                            حي المشرفة - جدة<br>
                            المملكة العربية السعودي <br>
                            <strong></strong>0544733779<br>
                            <strong></strong> info@tkweenonline.com<br>
                        </p>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--mob view end-->
        <div class="container">
            <div class="copyright">
                &copy; Copyright of <strong>Tkween Site</strong>. All Rights Reserved
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
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
