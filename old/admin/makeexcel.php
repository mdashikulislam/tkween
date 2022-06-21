<?php

	$link=mysqli_connect("localhost","urwr7s7heu74x","zy2k4hmcr3ux");
		mysqli_select_db($link,"dbjhzrkd2t2hgs");
		
require('PHPExcel.php');
$phpExcel = new PHPExcel;
$phpExcel->getDefaultStyle()->getFont()->setName('Arial');
$phpExcel->getDefaultStyle()->getFont()->setSize(10);
$phpExcel ->getProperties()->setTitle("list");
$phpExcel ->getProperties()->setCreator("Robert");
$phpExcel ->getProperties()->setDescription("Excel SpreadSheet in PHP");
$writer = PHPExcel_IOFactory::createWriter($phpExcel, "Excel2007");
$sheet = $phpExcel ->getActiveSheet();
$sheet->setTitle('Record');


$sheet->getCell('A1')->setValue('تاريخ الدفع');
$sheet->getCell('B1')->setValue('الحالة');
$sheet->getCell('C1')->setValue('نسبة المؤلف');
$sheet->getCell('D1')->setValue('سعر الباقة');
$sheet->getCell('E1')->setValue('الألوان');
$sheet->getCell('F1')->setValue('نوع الكتاب');
$sheet->getCell('G1')->setValue('إسم الكتاب');
$sheet->getCell('H1')->setValue('رقم الايبان');
$sheet->getCell('I1')->setValue('إسم البنك');
$sheet->getCell('J1')->setValue('الدولة');
$sheet->getCell('K1')->setValue('المدينة');
$sheet->getCell('L1')->setValue('الجنسية');
$sheet->getCell('M1')->setValue('العنوان');
$sheet->getCell('N1')->setValue('رقم الهوية أو الجواز');
$sheet->getCell('O1')->setValue('رقم الهاتف');
$sheet->getCell('P1')->setValue('البريد الإلكتروني');
$sheet->getCell('Q1')->setValue('الإسم');
$sheet->getStyle('A1:Z1')->getFont()->setBold(true)->setSize(10);


$q = "select * from submitted_form ";
$rs=mysqli_query($link,$q);
$xxx=2;
while($x=mysqli_fetch_assoc($rs))
{
	
	if($x['status']==0)
	{
		$st = 'غير مدفوع';
		$dt = '---';
	}
	else
	{
		$st = 'مدفوع';
		$date=date_create($x['pay_dt']);
		$dt = date_format($date,"d/m/Y");
	}
	$sheet->getCell('A'.$xxx)->setValue($dt);
	$sheet->getCell('B'.$xxx)->setValue($st);
	$sheet->getCell('C'.$xxx)->setValue($x['ration']);
	$sheet->getCell('D'.$xxx)->setValue($x['price']);
	$sheet->getCell('E'.$xxx)->setValue($x['color']);
	$sheet->getCell('F'.$xxx)->setValue($x['book_type']);
	$sheet->getCell('G'.$xxx)->setValue($x['book_name']);
	$sheet->getCell('H'.$xxx)->setValue($x['bank_account_ipan']);
	$sheet->getCell('I'.$xxx)->setValue($x['bank_name']);
	$sheet->getCell('J'.$xxx)->setValue($x['country']);
	$sheet->getCell('K'.$xxx)->setValue($x['city']);
	$sheet->getCell('L'.$xxx)->setValue($x['title']);
	$sheet->getCell('M'.$xxx)->setValue($x['address']);
	$sheet->getCell('N'.$xxx)->setValue($x['pasport']);
	$sheet->getCell('O'.$xxx)->setValue($x['phone']);
	$sheet->getCell('P'.$xxx)->setValue($x['email']);
	$sheet->getCell('Q'.$xxx)->setValue($x['name']);
	$xxx++;
}


$sheet->getColumnDimension('A')->setAutoSize(true);
$sheet->getColumnDimension('B')->setAutoSize(true);
$sheet->getColumnDimension('C')->setAutoSize(true);




header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="file.xlsx"');
header('Cache-Control: max-age=0');
$writer->save('php://output');
?>
