<?php

// conexão do BD
include'con.php';
// caminho da biblioteca PHPSPREADSHEET
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setTitle("teste");


                   
                        $query = "SELECT * FROM `atendimento` "; 
                        
                   

$sql = $conn->query($query); 
$i = 1;
                  while($exibe = $sql->fetch(PDO::FETCH_ASSOC)){
                    $sheet->setCellValue('A'.$i, $exibe['id']);
                    $sheet->setCellValue('B'.$i, $exibe['protocolo']);
                    $sheet->setCellValue('C'.$i, $exibe['registrado']);
                    $sheet->setCellValue('D'.$i, $exibe['cliente']);
                    $sheet->setCellValue('E'.$i, $exibe['competencia']);
                    $sheet->setCellValue('F'.$i, $exibe['datahora']);
                    $sheet->setCellValue('G'.$i, $exibe['pago']);
                    $i++;

                    }



header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="teste.xlsx"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');



 
  
$conn = null;

?>
