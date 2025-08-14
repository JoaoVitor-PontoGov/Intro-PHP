<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro PHP</title>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style> 

    body{
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #frmCadastroPessoa, 
    #frmCalcularMedia,
    #frmCalcularIMC
    {
      display: flex;
      flex-direction: column;
      width: 30%;
      margin-top: 25px;
      gap: 5px;
    }

    hr{
      border: solid black 1px; 
      width: 75%;
    }
    
  </style>

  <script>
    $(function(){
      $("#frmCadastroPessoa #BtnCadastroPessoa").click(function(){
        $.post(
          "script.php",
          {
            dsNome: $("#frmCadastroPessoa #dsNome").val(),
            dsIdade: $("#frmCadastroPessoa #dsIdade").val(),
            flGenero: $("#frmCadastroPessoa #flGenero").val()
          },
          function(response){
            console.log(response)
          }
        )
      })
    
      $("#frmCalcularMedia #BtnCalcularMedia").click(function() {
        $.post(
          "controller.php?action=calcularMedia",
          {
            dsNota1: $("#frmCalcularMedia #dsNota1").val(),
            dsNota2: $("#frmCalcularMedia #dsNota2").val(),
            dsNota3: $("#frmCalcularMedia #dsNota3").val(),
            dsNota4: $("#frmCalcularMedia #dsNota4").val()
          }, 
          function(response) {
            console.log(response.data)
          },
          "json"
        )
      })
      
      $("#frmCalcularIMC #BtnCalcularIMC").click(function() {
        console.log("!");
        $.post(
          "controller.php?action=calcularIMC",
          {
            dsAltura: $("#frmCalcularIMC #dsAltura").val(),
            dsPeso: $("#frmCalcularIMC #dsPeso").val()
          },
          function(response) {
            console.log(response.data)
          },
          "json"
        )
      })
    })
  </script>
  </head>



<body>
  
<h1>Intro PHP</h1>

<form id="frmCadastroPessoa">
  <label for="dsNome">Insira seu nome</label>
  <input type="text" name="dsNome" id="dsNome" >
  <label for="dsIdade">Insira sua idade</label>
  <input type="text" name="dsIdade" id="dsIdade">
  <label for="flNome">Insira seu genero</label>
  <select name="flGenero" id="flGenero">
    <option value="" disabled selected>Escolha...</option>
    <option value="M">Masculino</option>
    <option value="F">Feminino</option>
    <option value="O">Outro</option>
  </select>
  <button type="button" id="BtnCadastroPessoa">Enviar</button>
</form>

<hr>

<form id="frmCalcularMedia">
    <label for="dsNota1">Nota 1:</label>
    <input type="number" name="dsNota1" id="dsNota1">
    <label for="dsNota2">Nota 2:</label>
    <input type="number" name="dsNota2" id="dsNota2">
    <label for="dsNota3">Nota 3:</label>
    <input type="number" name="dsNota3" id="dsNota3">
    <label for="dsNota4">Nota 4:</label>
    <input type="number" name="dsNota4" id="dsNota4">
    <button type="button" id="BtnCalcularMedia">Enviar</button>
</form>

<hr>

<form id="frmCalcularIMC">
    <label for="dsAltura">Informe sua altura</label>
    <input type="numeric" name="dsAltura" id="dsAltura">
    <label for="dsPeso">Informe seu peso</label>
    <input type="numeric" name="dsPeso" id="dsPeso">
    <button type="button" id="BtnCalcularIMC">Enviar</button>
</form>

</body>
</html>
