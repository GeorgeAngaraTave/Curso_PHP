<?php
date_default_timezone_set('Europe/London');
require_once('./vendor/autoload.php');
require_once dirname(__FILE__) . '/vendor/phpoffice/phpexcel/Classes/PHPExcel.php';


$faker = Faker\Factory::create();
$php_excel = new PHPExcel();

for( $i = 1; $i < 20; $i++ )
{
  $name = $faker->name;
  echo $name . '<br/>';
  $php_excel->setActiveSheetIndex(0)->setCellValue("A{$i}", $name);
}

$writer = PHPExcel_IOFactory::createWriter($php_excel, 'Excel5');
$writer->save('office.xls');

