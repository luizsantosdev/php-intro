<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="">
    <title>Formulario de inscrição</title>
    <style>
#conteudo{
padding: 30px 0px;
        }

    </style>
</head>

<body>

<p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
       <?php
           $MensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
           if(!empty($MensagemDeSucesso))
           {
               echo $MensagemDeSucesso  ;
           }
           $MensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
           if(!empty($MensagemDeErro))
           {
               echo $MensagemDeErro;
           }
       ?>
      <p>Your Name: <input type="text" name="nome"></p>
      <p>Your age: <input type="text" name="idade"></p>
      <p><input type="submit" value="Enviar Dados"/></p>
</form>

</body>

<header>

</header>

</html>