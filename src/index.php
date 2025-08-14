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

    #frmCadastroPessoa{
      display: flex;
      flex-direction: column;
      width: 30%;
    }
    
  </style>

  <script>
    $(function(){
      $("#BtnEnviar").click(function(){
      $.post(
        "script.php",
        {
          dsNome: $("#dsNome").val(),
          dsIdade: $("#dsIdade").val(),
          flGenero: $("#flGenero").val()
        },
        function(response){
          console.log(response)
        }
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
  <button type="button" id="BtnEnviar">Enviar</button>

</form>

<hr style="border: solid black 1px; width: 75%;">


</body>
</html>
