<?php>

date_default_timezone_set('America/Sao_Paulo');
$action = $_GET["action"];

switch ($action) {
  case 'calcularMedia':
    $nota1 = $_POST["dsNota1"];
    $nota2 = $_POST["dsNota2"];
    $nota3 = $_POST["dsNota3"];
    $nota4 = $_POST["dsNota4"];

    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if($media>=7){
      echo "Aprovado \n";
    } elseif ($media>=5) {
      echo "Exame \n";
      $notaNecessaria = 14 - $media;
      echo "Voce precisa de nota $notaNecessaria para passar";
    } else {
      echo "Reprovado \n";
    }
    break;
  default:
    # code...
    break;
}