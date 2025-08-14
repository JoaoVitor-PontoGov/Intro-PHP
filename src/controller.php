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
    $notas = array($nota1, $nota2, $nota3, $nota4);
    $maiorNota = 0;
    $menorNota = 10;

    for ($i=0; $i < count($notas); $i++) { 
      if($notas[$i] > $maiorNota){
        $maiorNota = $notas[$i];
      }

      if($notas[$i] < $menorNota){
        $menorNota = $notas[$i];
      }
    }

    $mensagens = "";

    if($media>=7){
      $mensagens.= "Aprovado \n";
    } elseif ($media>=5) {
      $mensagens.=  "Exame \n";
      $notaNecessaria = 14 - $media;
      $mensagens.=  "Voce precisa de nota $notaNecessaria para passar \n";
    } else {
      $mensagens.=  "Reprovado \n";
    }
    $mensagens.=  "A maior nota foi $maiorNota e a menor nota foi $menorNota \n";

    $resposta = array("data" => $mensagens);

    echo json_encode($resposta);
    break;

  case 'calcularIMC':
    $altura = $_POST["dsAltura"];
    $peso = $_POST["dsPeso"];

    $mensagens = "";

    $IMC = ($peso / ($altura * $altura));

    if($IMC < 18.5){
      $mensagens .= "O seu IMC e de alguem abaixo do peso \n";
    } else if($IMC < 25){
      $mensagens .= "O seu IMC e de alguem com o peso ideal \n";
    } else if($IMC < 30){
      $mensagens .= "O seu IMC e de alguem com sobrepeso \n";
    } else {
      $mensagens .= "O seu IMC e de alguem em obesidade \n";
    }

    $pesoIdeal = 22 * ($altura ^ 2);

    $mensagens .= "O seu peso ideal, com nase na formula do IMC 22, e: $pesoIdeal";

    $resposta = array("data" => $mensagens);
    echo json_encode($resposta);
    break;
  
}