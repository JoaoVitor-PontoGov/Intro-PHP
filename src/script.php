<?php

$nome = $_POST["dsNome"];
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
  echo "voce nao e maior de idade";