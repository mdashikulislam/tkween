<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $id_or_pass    = $_POST['id_or_pass'];
    $contry    = $_POST['contry'];
    $nationality    = $_POST['nationality'];
    $address    = $_POST['address'];
    $city    = $_POST['city'];
    $bank_name    = $_POST['bank_name'];
    $bank_account_ipan    = $_POST['bank_account_ipan'];
    $book_name    = $_POST['book_name'];
    $price    = $_POST['price'];
    $discount   = $_POST['discount'];
    $plan_details    = $_POST['plan_details'];
}
echo "

<!DOCTYPE html>
<html lang='ar'>

<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Document</title>
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
    </style>
</head>

<body style='direction: rtl'>
    <table class='report-container'>
        <thead class='report-header'>
            <tr>
                <th class='report-header-cell'>
                    <div class='header-info'>
                        <div style='float: right' class='right'>
                            <img style='width: 180px' src='assets/img/logo.png' alt='' />
                            <p>شركة تكوين العالمية للنشر والتوزيع</p>
                        </div>
                    </div>
                </th>
            </tr>
        </thead>
        <tfoot class='report-footer'>
            <tr>
                <td class='report-footer-cell'>
                    <div class='footer-info'>
                        <h6 style='border-top: 1px solid; padding-top: 5px'>
                            جدة - حي المشرفة شارع التضامن العربي هاتف رقم 6230256 -
                            0509002283 ايميل ykshash@hotmail.com
                        </h6>
                    </div>
                </td>
            </tr>
        </tfoot>
        <tbody class='report-content'>
            <tr>
                <td class='report-content-cell'>
                    <div class='main'>
                        <div style='text-align: center' class='container-center'>
                            <p>بسم الله الرحمن الرحيم</p>
                            <h4 style='color: crimson; border-bottom: crimson 1px solid'>
                                العقد الموحد للنشر والتوزيع
                            </h4>
                            <p>بتوفيق من الله</p>
                        </div>
                        <p>
                            تم بتاريخ 8/1/2020 الموافق 1/2/1442هـ إبرام هذا العقد الكترونيا
                            بين كل من
                        </p>
                        <div class='parties'>
                            <div class='party'>
                                <p>
                                    <b>
                                        شركة تكوين العالمية للنشر والتوزيع بتصريح من وزارة الإعلام
                                        رقم 42352 ومقرها الرئيسي في جدة, حي الشرفية,, هاتف:
                                        0509002283, ويمثلها في العقد الدكتور: يزيد الكشاش المدير
                                        التنفيذي في الإدارة العامة للشركة في مقرها الرئيسي في جدة.
                                    </b>
                                </p>
                            </div>
                            </br>
                            <div class='party'>
                                <b>
                                      " . " $name : المؤلف
                                </b>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
";