<?php

date_default_timezone_set('Europe/London');

require_once dirname(__FILE__) . '/vendor/phpoffice/phpexcel/Classes/PHPExcel.php';

$objPHPExcel = new PHPExcel();

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('A2', 'world!')
            ->setCellValue('A3', 'Hello')
            ->setCellValue('A4', 'world!');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('office.xls');
