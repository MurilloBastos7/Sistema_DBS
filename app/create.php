<?php 
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/mini_sistema/includes/assets/esfera.png" type="image/x-icon">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Cadastro Personagem</title>
</head>
<body>
    <?php include '../includes/header.php';?>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>
        <label for="nome">Nivel: </label>
        <input type="text" name="nivel" id="nivel"><br>
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao"><br>
        <label for="transformacao">Transformação: </label>
        <input type="text" name="transformacao" id="transformacao"><br>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    cadastrar($conexao, $_POST['nome'], $_POST['nivel'], $_POST['transformacao'], $_POST['descricao']);
    }
    include '../includes/footer.php';?>
</body>
</html>