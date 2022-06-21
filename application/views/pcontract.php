<?php

 $rec =  $this->db->where(array('id'=>$this->uri->segment(3)))->get('submitted_form')->result_array(); ?>


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body style='direction: rtl'>
    <table class='report-container'>
        <thead class='report-header'>
            <tr>
                <th class='report-header-cell'>
                    <div class='header-info' style="margin:0">
                    <div style='float: left' class='right'>
                            
                            <p dir="rtl" style="margin:0; font-size:18px">  رقم العقد # <?= $rec[0]['cid'] ?></p>
                        </div>
                        <div style='float: right' class='right'>
                            <img style='width: 100px' src='<?= $this->load->config->base_url() ?>upload/logo.png' alt='' />
                            <!--<p style="margin:0">شركة تكوين العالمية للنشر والتوزيع</p>-->
                        </div>
                    </div>
                </th>
            </tr>
        </thead>
        <tfoot class='report-footer'>
            <tr>
                <td class='report-footer-cell'>
                    <div style="text-align: center;" class='footer-info'>
                        <p style='border-top: 1px solid; padding-top: 5px; margin:0'>
                            جدة - حي المشرفة شارع التضامن العربي هاتف رقم 6230256 -
                            0509002283 ايميل ykshash@hotmail.com
                        </p>
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
                                العقد الموحد للنشر والتوزيع
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
                                        شركة تكوين العالمية للنشر والتوزيع بتصريح من وزارة الإعلام
                                        رقم</b> 42352<b> وسجل تجاري رقم </b> 4030202451<b> ومقرها الرئيسي في جدة, حي المشرفة, ويمثلها في العقد الدكتور: يزيد الكشاش المدير
                                        التنفيذي في الإدارة العامة للشركة في مقرها الرئيسي في جدة.
                                    </b></br>
                                    <span style="float: left; margin-right: 20px; ">ويشار اإليه فيما بعد بالطرف الأول
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
                                        رقم الهوية او الجواز: <?= $rec[0]['pasport'] ?>
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
                                      الايبان: <?= $rec[0]['bank_account_ipan'] ?>   &nbsp;&nbsp; 
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
                         <p style="float: right; margin-bottom:0; margin:0;color: crimson; font-weight:bold">
                            مواصفات الكتاب
                           </p>
                            <br><br>
                            <p style="float: right; margin-bottom:0; margin:0; font-weight:bold">
                            <?php if($rec[0]['book_name']!=''): ?>
							&nbsp;&nbsp;
                            إسم الكتاب :  <?= $rec[0]['book_name'] ?>
                            <?php endif ?>
                            
                            &nbsp;&nbsp;
                            نوع الكتاب : <?= $rec[0]['package_type'] ?>
                            <?php if($rec[0]['package_size']!=''): ?>
							&nbsp;&nbsp;
                            مقاس الكتاب :  <?= $rec[0]['package_size'] ?>
                            <?php endif ?>
                            &nbsp;&nbsp;
							لون الكتاب : <?= $rec[0]['package_color'] ?>
                            
                            



                        </p>
                       <br><br>
                       
                       <?php $replace =  str_replace('<table','<table class="table table-striped" ',$rec[0]['contract']);
					  $replace =   str_replace('*name*','<span style="color:crimson">'.$rec[0]['book_name'].'</span>',$replace);
					  $replace =   str_replace('*ratio*','%'.$rec[0]['discount'],$replace);
					  echo $replace =   str_replace('*price*',$rec[0]['price'],$replace);
					    ?>
                        
                        <div style="float: right; width:100%;" class="points">
                            

                           
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