<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Inicio</title>
</head>

<body>

<div class="Menu">

<li><a href="ordenar">Ordenar</a></li>
<li><a href="Atualizar">Atualizar</a></li>
<li><a href="Deletar">Deletar</a></li>
<li><a href="Inserir">Inserir</a></li>

</div>

<?php

    include("Classes/conexao.php");
    $Conexao=new ConexaoBancoDados();
    $Conexao->conexaoBD();

    if(isset($_POST['nomeProduto'])){
        $sql = $pdo->prepare("INSERT INTO validade VALUES (null,?,?,?)");
        $sql->execute(array($_POST['nomeProduto'], $_POST['validade'], $_POST['lote']));
        echo 'produto e validade cadastrados com sucesso';

    }

?>

<form method="post">
    <imput type="text" name="nomeProduto">
    <imput type="text" name="validade">
    <imput type="text" name="lote">
    <imput type="submit" value="cadastrar">
</form>



</body>
</html>