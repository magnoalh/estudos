<?php
//carrega inicialmente a biblioteca
require '../vendor/autoload.php'; //altere de acordo com suas pastas.
//recebe o arquivo via $_FILE
$dados = $_FILES['arquivo'];
// caminho do arquivo para a biblioteca visualizar
$route = $dados['tmp_name'];

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// aqui carrega o arquivo pela biblioteca
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($route);
// carrega a planilha ativa - veja na documentação getActiveSheet e getSheets
$worksheet = $spreadsheet->getActiveSheet();
// aqui vai contar quantas linhas com dados
$highestRow = $worksheet->getHighestRow();
// aqui ate qual coluna tem dados em letras (A , B , C , D , E , F)
$highestColumn = $worksheet->getHighestColumn();
// Exibindo dados aqui 
$i = 1; echo $highestRow." - ".$highestColumn." - ";
echo $worksheet->getCell('A'.$i);
echo "</br>";
echo $worksheet->getCell('B1');
echo "</br>";
echo $worksheet->getCell('C1');
echo "</br>";
echo $worksheet->getCell('D1');
echo "</br>";
echo $worksheet->getCell('E1');
echo "</br>";
echo $worksheet->getCell('F1');
echo "</br>";
echo $worksheet->getCell('G1');
echo "</br>";
echo $worksheet->getCell('A2');
echo "</br></br>";
var_dump($dados);
echo "1</br></br>";

if(!empty($_FILES['arquivo']['tmp_name'])){
  
  
    foreach($worksheet as $celula){
        
     echo $worksheet->getCell('A'.$i);
        $i++;
    }

}

?>
