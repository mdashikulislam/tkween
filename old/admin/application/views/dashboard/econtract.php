<?php $rec =  $this->db->where('id', $this->uri->segment(3))->get('submitted_form')->result_array(); ?>


<!DOCTYPE html>
<html lang='ar'>

<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Tkween Digital Contract</title>
    <style>
    table.report-container {
        page-break-after: always;
    }

    thead.report-header {
        display: table-header-group;
    }

    tfoot.report-footer {
        display: table-footer-group;
    }

    p {
        font-size: 14px;
        font-weight: normal;
        line-height: 25px;
    }

    li {
        font-size: 14px;
        font-weight: normal;
        line-height: 25px;
    }

    b {
        font-size: 14px;
        line-height: 25px;
    }
    </style>
</head>

<body style='direction: rtl'>
    <table class='report-container'>
        <thead class='report-header'>
            <tr>
                <th class='report-header-cell'>
                    <div class='header-info' style="margin:0">
                    <div style='float: left' class='right'>
                            
                            <p dir="rtl" style="margin:0; font-size:18px">  رقم العقد # <?= '00'.$rec[0]['id'].date('-m-Y') ?></p>
                        </div>
                        <div style='float: right' class='right'>
                            <img style='width: 180px' src='http://tkweenonline.com/assets/img/logo.png' alt='' />
                            <p style="margin:0">شركة تكوين العالمية للنشر والتوزيع</p>
                        </div>
                    </div>
                </th>
            </tr>
        </thead>
        <tfoot class='report-footer'>
            <tr>
                <td class='report-footer-cell'>
                    <div style="text-align: center;" class='footer-info'>
                        <h4 style='border-top: 1px solid; padding-top: 5px; margin:0'>
                            جدة - حي المشرفة شارع التضامن العربي هاتف رقم 6230256 -
                            0509002283 ايميل ykshash@hotmail.com
                        </h4>
                    </div>
                </td>
            </tr>
        </tfoot>
        <tbody class='report-content'>
            <tr>
                <td class='report-content-cell' style="padding-bottom:40px">
                    <div class='main'>
                        <div style='text-align: center' class='container-center'>
                            <p style="margin-top:8px; margin-bottom:8px;">بسم الله الرحمن الرحيم</p>
                            <h1 style='color: crimson; border-bottom: crimson 1px solid; margin:0;'>
                                العقد الموحد للنشر الإلكتروني
                            </h1>
                            <p style="margin-top:8px; margin-bottom:8px;">بتوفيق من الله</p>
                        </div>
                        
                        <p style="margin-top:8px; margin-bottom:8px;">
                            تم بتاريخ
                            <?php
                            $date = date_create($rec[0]['dt']);
                            echo date_format($date, "d/m/Y");
                            ?>

                            إبرام هذا العقد الكترونيا
                            بين كل من
                        </p>
                        <div class='parties'>
                            <div class='party'>
                                <p style="margin-top:8px; margin-bottom:8px;">
                                    <b>
                                        شركة تكوين العالمية للنشر والتوزيع (تصريح من وزارة الإعلام
                                        رقم</b> 42352)<b> ومقرها الرئيسي في جدة, حي الشرفية,, هاتف:
                                    </b>0509002283,<b> ويمثلها في العقد الدكتور: يزيد الكشاش المدير
                                        التنفيذي في الإدارة العامة للشركة في مقرها الرئيسي في جدة.
                                    </b></br>
                                    <span style="float: left; margin-right: 20px; ">ويشار إليه فيما بعد بالطرف الأول
                                        (الناشر) </span>
                                </p>
                            </div>
                            
                            <div style='direction: ltr; ; line-height:24px' class='party'>
                                <p>
                                    <b id="name" style="float: right;">
                                        المؤلف: <?= $rec[0]['name'] ?>
                                    </b>
                                    </br>
                                    <b id="name" style="float: right; ">
                                        الجنسية: <?= $rec[0]['nationality'] ?>
                                    </b>

                                    <b id="id_or_pass" style="float: right; margin-right: 20px;">
                                        رقم الهوية أو الجواز: <?= $rec[0]['pasport'] ?>
                                    </b>
                                    <b id="nationality" style="float: right; margin-right: 20px;">
                                        العنوان: <?= $rec[0]['title'] ?>
                                    </b>
                                    </br>


                                    <b id="Phone" style="float: right;">
                                        الهاتف: <?= $rec[0]['phone'] ?>
                                    </b>
                                    <b id="email" style="float: right; margin-right: 20px;">
                                         <?= $rec[0]['email'] ?> : البريد الإلكتروني
                                    </b>
                                    </br>
                                    <b id="address" style="float: right;">
                                        الحساب البنكي: <?= $rec[0]['bank_name'] ?>
                                    </b>
                                    
										
                                    <b id="bank_ipan" style=" float: right;">
                                      الآيبان: <?= $rec[0]['bank_account_ipan'] ?>   &nbsp;&nbsp; 
                                    </b>
                                </p>
                                <br>
                                <span
                                    style="direction:rtl; float:left; font-size:12px; font-weight:normal; line-height:0px;">ويشار
                                    اإليه فيما بعد
                                    بالطرف الثاني
                                    (المؤلف) </span>

                            </div>
                        </div>
                        <br>
                        <!--
                         <p style="float: right; margin-bottom:0; margin:0;color: crimson; font-weight:bold">
                            مواصفات الكتاب
                           </p>
                            <br><br>
                            <p style="float: right; margin-bottom:0; margin:0; font-weight:bold">
                            نوع الكتاب : <?= $rec[0]['book_type'] ?>
                            <?php if($rec[0]['heading']!=''): ?>
							&nbsp;&nbsp;
                            مقاس الكتاب :  <?= $rec[0]['heading'] ?>
                            <?php endif ?>
                            &nbsp;&nbsp;
							لون الكتاب : <?= $rec[0]['color'] ?>



                        </p> -->
                       <br><br>
                        <p style="float: right; margin-bottom:0; margin:0">
                            بما أن الطرف الثاني قد قام بوضع كتاب من تأليفه ويرغب في طباعته ونشره وتوزيعه، وبما أن الطرف
                            الأول لديه من الإمكانيات والخبرات ما يؤهله للقيام بذلك فقد وافق على القيام بطباعة ونشر
                            وتوزيع هذا الكتاب وفقا للشروط والبنود التي سيرد ذكرها أدناه.</br>
                            وعليه فقد اتفق الطرفان بطوعهما واختيارهما وهما بكامل الأوصـاف المعتبرة شرعـاً ونظاماً على
                            مايلي:
                        </p>
                        <div style="float: right;" class="points">
                            <div class="single-part">
                            <br>
                                <p style="margin:0; margin-bottom:8px; margin-top:8px;">
                                    <b style='color: crimson;'><u>أولاً</u>:</b>
                                    يعدُّ التمهيد المذكور أعلاه جزءاً لا يتجزأ من العقد ويقرأ ويفسر معه.
                                </p>
                                <br>
                            </div>
                            <div class="single-part">
                                <p style="margin-top:0px; margin-bottom:0">
                                    <b style='color: crimson;'><u> ثانيا: موضوع العقد</u></b>
                                </p>
                                <p style="margin-top:8px; margin-bottom:8px;">

                                    قام الطرفُ الثاني بمنح الطرف الأول حق النشر الإلكتروني فقط لكتابه
                                    والبيع عبر المتاجر الإلكترونية وذلك لكتابه
                                    <br>
                                    المعنون بـ: <?= $rec[0]['book_name'] ?>
                                    <br>
                                    سلم المؤلف للنا شر عند التوقيع على هذا العقد نسخة من مادة هذا الكتاب محررة
                                    عبر الإيميل و سيتم صدور إذن الطباعة (الفسح) من قبل إدارة

                                    <br>
                                    المطبوعات في وزارة الإعلام في المملكة العربية السعودية.
                                </p>

                            </div>
                            <br>
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        ثالثاً: ضمان محتويات الكتاب:
                                    </u>
                                </b>
                                <p style="margin-top:8px; margin-bottom:8px;">
                                    يقر الطرف الثاني بأن هذا الكتاب من وضعه وتأليفه وليس منقولاً من مؤلفات أخرى، وأنه لا
                                    توجد أية حقوق سابقة لأي مؤلف أو ناشر أو أية جهة ما على الكتاب محل العقد، ويكون
                                    المؤلف مسؤولاً وحده عن أية تبعات أدبية أو مادية أو نظامية تنشأ عن أية مطالبات تتعلق
                                    بمادة الكتاب أو محتوياته.
                                </p>
                               
                            </div>
                            <br><br>
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        رابعاً: مدة العقد:
                                    </u></b>
                                <p style="margin-top:8px; margin-bottom:8px;">
                                    فيما يتعلق بالنشر الإلكتروني للكتاب فإن مدة سريان هذا العقد (سنتان) تبدأ من تاريخ التوقيع
                                    عليه، يتجدد تلقائياً ما لم يُخْطِر أحد الطرفين الآخر كتابة بعدم رغبته في تجديد
                                    العقد قبل انتهاء المدة الأصلية أو المجددة بـ 30 يوما.
                                    وفيما يتعلق ببيع النسخ ورقية عبر المتاجر الإلكترونية فانه لا يحق للطرف الاول بيع النسخ الورقيه في حال موافقة الطرفين في عقد ملحق.

                                </p>
                                <br>
                            </div>
                           
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        خامساً: قيمة العقد:
                                    </u></b>
                                <p id="price" style="margin-top:8px; margin-bottom:8px;">
                                    يتقاضى الطرف الثاني مقابل حقوقه في الكتاب نسبة مقدارها <?= $rec[0]['ration'] ?>
                                    من قيمة
                                    الكتب المباعة، ويتم مراجعة المبيعات كل ستة أشهر من تاريخ العقد شاملة قيمة مستحقات (الطرف الثاني) .
                                    وقد حدد قيمة التجهيز والنشر والتوزيع (<?= $rec[0]['price'] ?>) ريال يدفعها
                                    الطرف الثاني ويتم تحديد
                                    قيمة
                                    سعر البيع بالاتفاق بين الطرفين بعد الطباعة
                                    وقد تم تقديم عرض طباعة الكتب والكمية المراد طباعتها بعد تجهيز العينة من الكتاب.
                                </p>
                                <br>

                            </div>
                            
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        سادساً: النشر الإلكتروني:
                                    </u></b>
                                <p style="margin-top:8px; margin-bottom:8px;">
                                    يلتزم الطرف الأول بنشر الكتاب في المتجر الإلكتروني الخاص بالطرف الأول خلال مدة شهر من تاريخ العقد
                                </p>
                                <br>
                            </div>
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        سابعاً: التزامات الطرف الأول
                                    </u></b>
                                <ul style="margin-top:8px; margin-bottom:8px;">
                                    <li style="color:#2c4890">
                                        يلتزم الطرف الأول بجميع الأعمال من ( تدقيق وتنفيذ وتصميم وفسح وتسجيل الكتاب
                                        بمكتبة الملك فهد ونشره) محل العقد خلال مدة لا تتعدى 60 يوما من
                                        تاريخ دفع رسوم هذا العقد.
                                    </li>
                                    <!--
                                    <li style="color:#2c4890">
                                        يلتزم الطرف الأول بتوزيع الكمية المطبوعة من الكتاب محل العقد من سنوات العقد
                                        وتوزيعها في المكتبات الكبرى والمشاركة في معارض الكتاب جدة والرياض وعبر مشاركة المكتبات في
                                        معارض الكتاب.
                                    </li>-->
                                </ul>
								<br>
                            </div>
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        التزامات الطرف الثاني: -
                                    </u>
                                </b>
                                <ul style="margin-top:8px; margin-bottom:8px;">
                                    <li>
                                        لا يحق للطرف الثاني طوال مدة العقد الأصلية أو المجدد منح حق نشر الكتاب الكترونيا محل العقد
                                        لأية جهة أخرى سواء داخل المملكة العربية السعودية أو خارجها .
                                    </li>
                                </ul>
                            </div>
                            <br>  <br><br>
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        أحكام عامة: -
                                    </u>
                                </b>
                                <ul style="margin-top:8px; margin-bottom:8px;">
                                    <li>
                                        أجاز الطرف الثاني للطرف الأول وفوضه وأوكل إليه اتخاذ كل ما يراه لازماً من
                                        الإجراءات القانونية لحماية حقوق الطرفين المترتبة على هذا العقد، سواء لدى دوائر
                                        حماية الملكية الفكرية والأدبية، أو لدى المحاكم أو المؤسسات الحكومية أو الخاصة.
                                    </li>
                                    <li>
                                        يحدد الطرف الأول سعر بيع الكتاب حسب خبرته ودرايته بالسوق، والمقصود بسعر
                                        البيع هو السعر المعلن حسب القائمة الرئيسة الصادرة من الدار.
                                    </li>
                                    <li>
                                        يعد ما يحتويه الكتاب "المادة المنشورة" حق ملكية فكرية للطرف الثاني، ولا يحق للطرف
                                        الأول استخدامها أو التصرف بها خلال مدة العقد أو بعده إلا بموافقة خطية من الطرف
                                        الثاني.
                                    </li>
                                    <li>
                                        يعتد بهذا العقد في حالتين وهي ( عند توقيع وإرساله لنا بكل الوسائل المتاحة -
                                        تحويل مبلغ مالي لحساب الشركة).
                                    </li>
                                    <li>
                                        في حال عدم تجديد العقد بين الطرفين فإن للطرف الأول وقف وسحب الكتب من المتجر الخاص يه خلال شهر والعمل على سحب الكتاب من المتاجر الاخرى حسب سياسة تلك المتاجر.
                                    </li>
                                    <li>
                                        من المتفق عليه بين الطرفين أن الإشارة إلى الشهور والسنوات في هذا العقد تعني
                                        الشهور والسنوات وفقاً للتقويم الميلادي.
                                    </li>
                                    <li>
                                        في حال نشوء أو حدوث خلاف أو نزاع بين الطرفين حول تفسير أو تنفيذ بنود هذا العقد
                                        يتم حله وديًّا، وفي حال تعذر ذلك، يحال الأمر إلى الجهات القضائية المختصة في
                                        المملكة العربية السعودية بمدينة جدة.
                                    </li>
                                    <li>
                                        حرر هذا العقد من نسختين أصليتين باللغة العربية، وتمَّ التوقيع عليه من الطرفين
                                        بعد قراءته وفهم محتوياته، وقد تسلم كل طرف نسخة منه، وذلك للعمل بموجبها.
                                    </li>
                                </ul>
                                </br>
                            </div>
                            <div class="single-part">
                                <b style='color: crimson;'><u>
                                        إقرار وتفويض: -
                                    </u>
                                </b>
                                <ul style="margin-top:8px; margin-bottom:8px;">
                                    <li>
                                        أقر بأن جميع البيانات المدونة صحيحة وأتحمل المسؤلية حيال وجود الخطأ
                                    </li>
                                    <li>
                                        أقر بالإطلاع على دليل المؤلف الصادر من الناشر
                                    </li>
                                    <li>
                                        أقر بتفويض شركة تكوين بالدفع ومخاطبة الجهات المسؤولة لفسح وتسجيل الكتاب في وزارة الإعلام ومكتبة الملك فهد والتسليم والإستلام عنه
                                    </li>
                                  
                                    <li>
                                        أقر بقراءة شروط العقد والموافقة عليها
                                    </li>
                                </ul>
                                </br>
                            </div>
                            <div style='text-align: center' class='container-center'>
                                <p>
                                    والله الموفق،،،
                                </p>
                                <h3 style="float: right;">
                                
                                <img width="150" src="<?= $this->load->config->base_url() ?>upload/real_stemp1.png">
                                <br>
                                <img width="150" src="<?= $this->load->config->base_url() ?>upload/real_stemp2.png">
                                <br>
                                
                                    الطرف الأول
                                    شركة تكوين العالمية
                                </h3>
                                <h3 style="float: left; float: left; margin-bottom:120px">
                                <!--
                                <img width="150" style="margin-bottom:130px" src="<?= $this->load->config->base_url() ?>upload/stamp.png"> 
                                -->
                                <br>
                                <!-- remove the style above (margin-bottom)-->
                                <!--<img width="150" src="<?= $this->load->config->base_url() ?>upload/real_stemp4.png">-->
                                <br>
                                <span style="color:crimson"> <?= $rec[0]['name'] ?></span>
                                 <br>
                                    الطرف الثاني
                                    المؤلف
                                </h3>

                            </div>
                           
                        </div>

                    </div>
                    
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>