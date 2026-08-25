<?php
    //testando um comentário 
    echo "<h1>Essa é uma pequena descrição do Levi:</h1>";
    //variaveis
    $nome = "Levi";
    $idade = 17;
    $sexo = "masculino";
    $nomeRecebido = $_POST['nome_recebido'];
    echo "Olá usuário! " . $nomeRecebido . " Vocẽ agora está cadastrado no nosso banco de dados!";
?>

<!-- Utilizando HTML com form e método POST para envio de valores em variaveis -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazendo um filho com PHP e HTML</title>
</head>
<body>
    <!-- Testando o método $_POST/GET -->
    <form action="index.php" method="POST">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome_usuario">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

