<?php

$dataHoraRequisicao = time();

$idade = $_POST["dsIdade"];
$genero = "";

if ($_POST["flGenero"] == "M") 
  $genero = "Masculino";
elseif ($_POST["flGenero"] == "F")
  $genero = "Feminino";
else 
  $genero = "Outro";

echo "Nome: ". $nome . ", Idade: ". $idade . ", Genero: ". $genero . "\n";

$idadeFutura = $idade + 10;

echo "Em 10 anos voce tera: " . $idadeFutura . " anos \n";

if($idade>=18)
  echo "Voce e maior de idade \n";
else
  echo "Voce nao e maior de idade \n";

$ipUsuario = $_SERVER["REMOTE_ADDR"];

echo "Seu IP e: " . $ipUsuario . "\n";

$userAgent = $_SERVER['HTTP_USER_AGENT'];

echo "User Agent: " . $userAgent . "\n";

date_default_timezone_set('America/Sao_Paulo');

echo "Data e hora da requisicao: " . date('m/d/Y H:i:s', $dataHoraRequisicao). "";

