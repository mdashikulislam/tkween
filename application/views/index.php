<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>تكوين</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="<?= $this->load->config->base_url() ?>template/img/favicon.png" rel="icon">
    <link href="<?= $this->load->config->base_url() ?>template/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= $this->load->config->base_url() ?>template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/vendor/owl.carousel/<?= $this->load->config->base_url() ?>template/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/vendor/aos/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= $this->load->config->base_url() ?>template/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= $this->load->config->base_url() ?>template/css/style.css" rel="stylesheet">
</head>

<body >
    <div class="mobile_menu">
        <ul>
            <li class="active"><a href="<?= $this->load->config->base_url() ?>">الرئيسية</a></li>
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
                <div class="col-xl-6 d-flex align-items-center">
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
                            <li class="active"><a href="<?= $this->load->config->base_url() ?>">الرئيسية</a></li>
                        </ul>
                    </nav><!-- .nav-menu -->
                    <!--<a href="<?= $this->load->config->base_url() ?>" class="logo ml-auto"><img src="<?= $this->load->config->base_url() ?>template/img/logo.png" alt=""
                            class="img-fluid"></a>-->
                </div>
            </div>
        </div>
    </header><!-- End Header -->



    <style>
    #intro .slide2 {
        top: auto;
        left: 0;
        right: 0
    }

    #intro .slide {
        width: 100% !important;
        padding: 60px;
        margin: 0 0 0px 0;
        color: white;
        background: #70030870;
        border-radius: 0px;
        line-height: 25px;
    }

    .cta-btn {
        font-family: "Almarai", "Montserrat", sans-serif;
        font-weight: 500;
        font-size: 16px;
        display: inline-block;
        padding: 2px 28px;
        border-radius: 25px;
        transition: 0.5s;
        margin: 20px 20px;
        color: #fff;
        background: #700308;
        float: left;
        color: white;
    }

    .cta-btn:hover {
        background: #700308;
        color: #fff;
        box-shadow: 0px 2px 10px #000000ba;

    }

    .cta-btn1 {
        font-family: "Almarai", "Montserrat", sans-serif;
        font-weight: 500;
        font-size: 16px;
        display: inline-block;
        padding: 5px 28px;
        border-radius: 25px;
        transition: 0.5s;
        margin: 20px 20px;
        color: #fff;
        background: #700308;
        color: white !important;
    }

    .cta-btn1:hover {
        background: #700308;
        color: #fff;
        box-shadow: 0px 2px 10px #000000ba;

    }
    </style>

<style>
#fatop{
    display: block;
}
#mobfatop{
    display: none;
}
@media screen and (max-width:800px) {

#fatop{
    display: none;
}
#mobfatop{
    display: block;
}
}
</style>

    <!-- ======= Intro Section ======= -->
    <section id="intro" style="height: 100vh;">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <!-- <ol class="carousel-indicators"></ol> -->

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"
                        style=" background-image: url(<?= $this->load->config->base_url() ?>template/img/ramadan.png); background-position: bottom;">
                
                        <div class="carousel-container">
                            <div class="container">
                            <!--
                              <a href="<?= $this->load->config->base_url() ?>" class="logo ml-auto"><img style="width:300px" src="<?= $this->load->config->base_url() ?>template/img/logo_glow.png" alt=""
                            class="img-fluid"></a></br>
                                <!--<h2 class="animate__animated animate__fadeInDown">تكوين</h2>
                                <h3 class="animate__animated animate__fadeInUp" style="color: white;">الان وقع عقد كتابك
                                    إلكترونيا معنا</h3>--><!--
                                <a href="#plan"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">أعرف المزيد</a>-->
                            </div>
                    </div>
                        </div>
                        <!--
                    <div class="carousel-item" style="background-image: url(<?= $this->load->config->base_url() ?>template/img/ramadan2.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">
                                <p style="float:left;text-align:right; padding-left:100px; padding-right:100px"
                                    class="slide animate__animated animate__fadeInUp">
                                    <b style="text-align:right; font-size:20px;">الموضوع</b>
                                    <br><br>
                                    <span style="font-size:15px">
                                        هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين
                                        هذا نص عشوائي لهاذا المشروع وهو تكوين
                                        <a class="cta-btn" href="#">
                                            الذهاب لهذا الكتاب
                                        </a>
                                    </span>
                                </p>

                                <!-- <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> 
                            </div>
                    </div>
                        </div>-->


                        <!--
                    <div class="carousel-item" style="background-image: url(<?= $this->load->config->base_url() ?>template/img/intro-carousel/7.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">
                                <p style="float:left;text-align:right; padding-left:100px; padding-right:100px"
                                    class="slide animate__animated animate__fadeInUp">

                                    <b style="text-align:right; font-size:20px;">الموضوع</b>

                                    <br><br>
                                    <span style="font-size:15px">

                                        هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين
                                        هذا نص عشوائي لهاذا المشروع وهو تكوين
                                        <a class="cta-btn" href="#">
                                            الذهاب لهذا الكتاب
                                        </a>

                                    </span>

                                </p>
                                <!-- <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                    </div>
                        </div> -->

                    <!-- <div class="carousel-item" style="background-image: url(<?= $this->load->config->base_url() ?>template/img/intro-carousel/8.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">
                                <p style="float:left;text-align:right; padding-left:100px; padding-right:100px"
                                    class="slide animate__animated animate__fadeInUp">

                                    <b style="text-align:right; font-size:20px;">الموضوع</b>

                                    <br><br>
                                    <span style="font-size:15px">

                                        هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين
                                        هذا نص عشوائي لهاذا المشروع وهو تكوين
                                        <a class="cta-btn" href="#">
                                            الذهاب لهذا الكتاب
                                        </a>

                                    </span>

                                </p>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div> -->

<!--
                    <div class="carousel-item" style="background-image: url(<?= $this->load->config->base_url() ?>template/img/intro-carousel/bookad1.jpg)">
                        <div class="slide2 carousel-container">
                            <div class="container-fluid" style="padding:0">

                                <p style="float:left;text-align:right; padding-left:100px; padding-right:100px"
                                    class="slide animate__animated animate__fadeInUp">

                                    <b style="text-align:right; font-size:20px;">الموضوع</b>

                                    <br><br>
                                    <span style="font-size:15px">

                                        هذا نص عشوائي لهاذا المشروع وهو تكوين هذا نص عشوائي لهاذا<br> المشروع وهو تكوين
                                        هذا نص عشوائي لهاذا المشروع وهو تكوين
                                        <a class="cta-btn" href="#">
                                            الذهاب لهذا الكتاب
                                        </a>

                                    </span>

                                </p>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                -->
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/about-mission.jpg" alt="" class="img-fluid">
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
                                <!-- <img src="<?= $this->load->config->base_url() ?>template/img/about-plan.jpg" alt="" class="img-fluid"> -->
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
                                <!-- <img src="<?= $this->load->config->base_url() ?>template/img/about-vision.jpg" alt="" class="img-fluid"> -->
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
        <section id="featured-services" style="background-color: #fff; text-align: center;">
            <div class="container">
                <div class="row">
                    
                        <div class="col-lg-6 box">
                        <a href="https://futurebook.com.sa/">
                            <img style=" width:200px" src="<?= $this->load->config->base_url() ?>template/img/ftbk.png">
                            <h4 style="color:#000">مستقبل الكتاب</h4>
                            <p style="color:#000">أحد شركات تكوين العالمية متخصصة في مجال الكتب العلمية والترجمة </p>
                        </a>
                        </div>
                    
                    
                        <div class="col-lg-6 box">
                        <a href="https://smartkids.com.sa/">
                            <img style=" width:200px" src="<?= $this->load->config->base_url() ?>template/img/smkd.png">
                            <h4 style="color:#000">الطفل الذكي</h4>
                            <p style="color:#000">أحد شركات تكوين العالمية متخصصة في مجال النشر والتوزيع لكتب الأطفال
                                والقصص</p>
                        </a>
                        </div>
                    

                </div>
            </div>
        </section>




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
        <!--<section id="services" style="direction: rtl; text-align: right;">
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



       

        <section class="our_offer section_padding" overlay >
            <div class="container">
                <div class="heading mx-auto">
                    <header class="section-header wow fadeInUp">
                        <h3>عروضنا</h3>
                    </header>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="banner_slider owl-carousel">
                            <div class="single_slid_item">
                                <a href="#plan">
                                    <img src="<?= $this->load->config->base_url() ?>template/img/banner100.jpeg">
                                </a>
                            </div>
                        
                            <div class="single_slid_item">
                                <img src="<?= $this->load->config->base_url() ?>template/img/banner101.jpeg">
                            </div>
                        
                        </div>
                    </div>
                </div>

                <!--
           
               <br>
                 <div class="row justify-content-center">
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single_price_item">
                
                            <h3>1</h3>
                            <h2>150$</h2>
                            <ul>
                                <li>25% <span>نسبة المؤلف</span></li>
                                <li>
                                    <form method="POST" action="contract-form.php">
                                        <input type="text" name="plan" value="plan13">
                                         <input type="hidden" name="heading" value="">
                                        <button type="submit">إشترك</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single_price_item">
                
                            <h3>2</h3>
                            <h2>225$</h2>
                            <ul>
                                <li>50% <span>نسبة المؤلف</span></li>
                                <li>
                                    <form method="POST" action="contract-form.php">
                                        <input type="text" name="plan" value="plan14">
                                         <input type="hidden" name="heading" value="">
                                        <button type="submit">إشترك</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    -->
                  </div>
                </div>
            </div>
        </section>



        <!------------ Plan Start------------>
        <section class="plan section_padding" id="plan" dir="rtl">
            <div class="container">
                <header class="section-header">
                    <h3>الباقات</h3>
                </header>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!-- single table -->
                        <div class="single_table">
                            <ul class="nav nav-tabs tabls_1" style="width:700px">
                               <?php  $package = $this->db->get('books_type')->result_array(); ?>
                                <?php $i=0; foreach($package as $pp): ?>
                                <li <?php if($i==0): ?>class="active"<?php endif ?> ><a <?php if($i==0): ?>class="active"<?php endif ?> data-toggle="tab" href="#pk_<?= $pp['id']?>">
                                 <?= $pp['name'] ?>
                                </a>
                                </li>
                                <?php $i++; endforeach ?>
                                
                               
                                
                            </ul>
                            <div class="tab-content">
                           		
                                  <?php $i=0; foreach($package as $pp): ?>
                                  <div id="pk_<?= $pp['id']?>" class="tab-pane fade  <?php if($i==0): ?>in active show<?php endif ?>" style="direction: rtl;">
                                    
                                    
									<center>
                                   <p style="direction: ltr;">
                                    <b style="color:#700308;">
                                    <?php if($pp['des']!=''): ?>
                                    <?= $pp['des'] ?>  مقاس الكتاب
                                    <?php endif ?>
                                    </b>
                                   </p>
                                   </center>
                                   <?php $pkg = $this->db->where('pid',$pp['id'])->get('books_package')->result_array() ?>	                                    
                                    <div class="single_table_inner">
                                        <!-- <ul class="nav nav-tabs tabls_2">
                                            <li><a data-toggle="tab" href="#color_2">4 الوان</a></li>
                                            <li class="active"><a data-toggle="tab" href="#black_2" class="active">لون
                                                    اسود</a></li>
                                        </ul> -->
                                        <div class="tab-content">
                                            <div id="black_2" class="tab-pane fade in active show">
                                                <div class="row justify-content-center">
                                                    <!-- single_price_item -->
                                                    
                                                     <?php $k=1; foreach($pkg as $pp): ?>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single_price_item">
                                                            <h3><?= $k ?></h3>
                                                            <h2><span>ريال</span><?= $pp['price'] ?></h2>
                                                            <ul>
                                                                <li> <?= $pp['title'] ?>% <span>نسبة المؤلف</span></li>
                                                                <li  style="padding-top: 20px;">
                                                                      <?php if($this->session->userdata('level')=='user'): ?>
                                                                      <a target="_blank" href="<?= $this->load->config->base_url() ?>user/add-contract/<?= $pp['id'] ?>" style="background:white; color: #700308; border-color:#700308 !important;border-radius:20px" class="btn btn-default">إشترك</a>
                                                                      <?php else: ?>
                                                                       <a target="_blank" href="<?= $this->load->config->base_url() ?>login" style="background:white; color: #700308; border-color:#700308 !important;border-radius:20px" class="btn btn-default">إشترك</a>
                                                                      <?php endif ?>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                     <?php $k++; endforeach ?>

                                                    
                                                   

                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- inner table -->
                                </div>
                                <?php $i++; endforeach ?>
                                
                               
                        <!-- single table -->
                    </div>
                </div>
            </div>
        </section>
        <!------------  End------------>
        <!-- ======= Call To Action Section ======= -->
        <section style="background: linear-gradient(90deg, rgba(112,3,8,1) 0%, rgba(168,26,33,1) 50%, rgba(112,3,8,1) 100%);" id="call-to-action">
            <div class="container text-center d-flex justify-content-center" data-aos="zoom-in">
                <div class"row">
                    <div id="actiona" style="padding: 100px 250px;" class="overlay">
                            <h3>للإستفسارات</h3>
                            <p>نرجوا التواصل على الواتساب الموحد</p>
                            <a class="cta-btn scrollto animate__animated animate__fadeInUp" href="https://wa.me/966557772038">الذهاب الى الواتساب</a>
                    </div>
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
                    <img style="margin-bottom: 50px;" src="<?= $this->load->config->base_url() ?>template/img/logo.png" alt="" class="img-fluid">
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-lightbox="portfolio"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                                <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" class="img-fluid" alt="">
                                <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/tkweenwhite.jpg" data-gall="portfolioGallery"
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
                <!--
                <div id="portfolio">
                    <div class="container">
                        <div class="row portfolio-container">
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/book1.jpg" class="img-fluid" alt="">
                                        <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/book1.jpg" data-lightbox="portfolio"
                                            data-title="book name"></a>
                                        <a href="http://tkweenonline.com.sa/<?= $this->load->config->base_url() ?>?route=product/product&product_id=73"
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
                                        <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/book1.jpg" class="img-fluid" alt="">
                                        <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/book1.jpg" data-lightbox="portfolio"
                                            data-title="book name"></a>
                                        <a href="http://tkweenonline.com.sa/<?= $this->load->config->base_url() ?>?route=product/product&product_id=73"
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
                                        <img src="<?= $this->load->config->base_url() ?>template/img/portfolio/book1.jpg" class="img-fluid" alt="">
                                        <a href="<?= $this->load->config->base_url() ?>template/img/portfolio/book1.jpg" data-lightbox="portfolio"
                                            data-title="book name"></a>
                                        <a href="http://tkweenonline.com.sa/<?= $this->load->config->base_url() ?>?route=product/product&product_id=73"
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
                </div> -->

                <a href="http://www.tkweenonline.com.sa">
                    <div class="facts-img">
                        <img style="margin-bottom: 50px;" src="<?= $this->load->config->base_url() ?>template/img/logo.png" alt="" class="img-fluid">
                    </div>
                </a>
                <div class="container text-center" data-aos="zoom-in" style="text-align: center;">
                    <a href="http://www.tkweenonline.com.sa">
                        <button type="submit" class="cta-btn1">للدخول الى المتجر</button>
                    </a>
                </div>
            </div>
        </section><!-- End Facts Section -->





        <!-- End Portfolio Section -->
        <!-- ======= Our Clients Section ======= -->
         <section id="clients">
            <div class="container" data-aos="zoom-in">
                <header class="section-header">
                    <h3>مجموعة تكوين المتحدة</h3>
                </header>
                <div class="owl-carousel clients-carousel">
                    <a src="https://www.futurebook.com.sa">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/future.png" alt="">
                    </a>
                    <a src="#">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/elite.png" alt="">
                    </a>
                    <a src="https://www.tkweenonline.com">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/tkween.png" alt="">
                    </a>
                    <a src="https://www.wonderhouse.com.sa">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/wonder.png" alt="">
                    </a>
                    <a src="https://www.smartkids.com.sa">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/smart.png" alt="">
                    </a>
                </div>
            </div>
        </section> -->
        <!-- End Our Clients Section -->
        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" style="background: white" class="section-bg">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>مجموعة تكوين المتحدة</h3>
                </header>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/tkween.png" class="testimonial-img" alt="">
                        <!--<h3>تكوين العالمية</h3>
                        <h4>تكوين العالمية</h4>
                        <p>
                            تكوين العالمية هي إحدى فروع شركة تكوين, وهي متخصصة بالإهتمام بجميع المؤلفين لأصدار الكتاب الأول ونشر الكتاب وتوزيعه
                            <img src="<?= $this->load->config->base_url() ?>template/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/future.png" class="testimonial-img" alt="">
                        <!--<h3>Sara Wilsson</h3>
                        <h4>مستقبل الكتاب</h4>
                        <p>
                            دار مستقبل الكتاب يهتم بجيع إصدارات الكتب العلمية والأبحاث                            
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/smart.png" class="testimonial-img" alt="">
                        <h4>دار الطفل الذكي</h4>
                        <p>
                            دار متخصصة في مجال كتب الأطفال والقصص المصورة
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/elite.png" class="testimonial-img" alt="">
                        <h4>دار النخبة</h4>
                        <p>
                            فريق النخبة يهتم بمجال كتب ال...
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="https://www.tkweenonline.com.sa/wp-content/uploads/2021/12/wonder.png" class="testimonial-img" alt="">
                        <h4>دار العجائب</h4>
                        <p>
                            يهتم فريق دار العجائيب بمجال إصدار كتب قصص الخيال العلمي
                        </p>
                    </div>
                </div>
            </div>
        </section>-->
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
            </div>
        </section><!-- End Team Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg" style="background-color: #ffffff;">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>نواصل معنا </h3>
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
                            <p><a href="mailto:info@example.com">info@tkween.net.sa</a></p>
                        </div>
                    </div>
                </div>
                <div class="form" style="direction: rtl;">
                    <form action="<?=  $this->load->config->base_url()?>site/send_msg" method="post" style="  background-color: #f7f7f7;padding: 20px;
">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="الإسم"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email"
                                    placeholder="البريد الإلكتروني" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="sub" placeholder="العنوان"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="msg" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="نص الرسالة"></textarea>
                            <div class="validate"></div>
                        </div>
                        	
                        <div class="text-center"><button class="btn btn-primary" style=" border-color:#700308;    background: #700308;" type="submit">إرسال</button></div>
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
                            <a href="https://twitter.com/tkweenbook1" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://facebook.com/tkweenstore.book" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com/tkweenbook1?igshid=1u2a6owrvrlhr" class="instagram"><i class="fa fa-instagram"></i></a>
                            <!--
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            -->
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
                            <li><a href="<?= $this->load->config->base_url() ?>author-guide">دليل المؤلف</a><i class="ion-ios-arrow-left" style="margin-left: 10px;"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-info">
                        <a href="<?= $this->load->config->base_url() ?>" class="logo ml-auto"><img style="width: 200px;background-color:white; padding: 8px; margin-bottom:15px; border-radius:10px"
                                src="<?= $this->load->config->base_url() ?>template/img/logo.png" alt="" class="img-fluid"></a>
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
                        <a href="<?= $this->load->config->base_url() ?>" class="logo ml-auto"><img style="width: 250px; padding-bottom: 20px;"
                                src="<?= $this->load->config->base_url() ?>template/img/logo.png" alt="" class="img-fluid"></a>
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
                            <li><a href="#services">خدماتنا</a><i class="ion-ios-arrow-left" style="margin-left: 10px;"></i>
                            </li>
                            <li><a href="<?= $this->load->config->base_url() ?>author-guide">دليل المؤلف</a><i class="ion-ios-arrow-left" style="margin-left: 10px;"></i>
                            </li>
                            
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
                            <a href="https://twitter.com/tkweenbook1" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://facebook.com/tkweenstore.book" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com/tkweenbook1?igshid=1u2a6owrvrlhr" class="instagram"><i class="fa fa-instagram"></i></a>
                            <!--
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/jquery/jquery.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/php-email-form/validate.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/counterup/counterup.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/venobox/venobox.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/vendor/aos/aos.js"></script>
    <!-- Template Main JS File -->
    <script src="<?= $this->load->config->base_url() ?>template/js/owl.carousel.min.js"></script>
    <script src="<?= $this->load->config->base_url() ?>template/js/main.js"></script>
</body>

</html>