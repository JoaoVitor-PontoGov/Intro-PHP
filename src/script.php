<?php

$nome = $_POST["dsNome"];
$idade = $_POST["dsIdade"];
$genero = "";

if ($_POST["dsGenero"] == "M") 
  $genero = "Masculino";
elseif ($_POST["dsGenero"] == "F")
  $genero = "Feminino";
else 
  $genero = "Outro";

echo "Olá ". $nome;  