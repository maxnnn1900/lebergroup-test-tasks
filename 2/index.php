<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'O');
$sheet->setCellValue('B1', 'Максим');
$sheet->setCellValue('C1', 'maxnnn1900@gmail.com');

$writer = new Xlsx($spreadsheet);
$writer->save('user.xlsx');
