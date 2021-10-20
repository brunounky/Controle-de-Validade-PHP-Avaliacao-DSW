<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Validade</title>
</head>

<body>

<?php

   // include("Classes/conexao.php");
    //$pdo=new ConexaoBancoDados();
    //$pdo->conexaoBD();

    $pdo=new PDO("mysql:host=localhost;dbname=controlevalidade","root","");

    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO validade VALUES (null,?,?,?)");
        $sql->execute(array($_POST['nome'], $_POST['validade'], $_POST['lote']));
        echo 'produto e validade cadastrados com sucesso';

    }

?>

<div class="principal">

    <div class="titulo">
        <p>Controle de Validade</p>
        <p>Preencha os campos abaixo para cadastrar nova nova validade</p>
    </div>

    <div class="cadastro">

    <form method="post">
    informe o nome do produto: 
        <input type="text" name="nome">
        <br>
    informe a validade: (AAAAMMDD):
        <input type="text" name="validade">
        <br>
    informe o lote:
        <input type="text" name="lote">
        <br>
        <input type="submit" value="cadastrar">
</form>

    </div>

    <div class="opcoes">

    <a href="index.php">Voltar para a página inicial</a>

    </div>

</div>

</body>
</html>