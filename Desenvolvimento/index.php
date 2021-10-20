<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Controle de Validade</title>
</head>

<body>

<?php

   // include("Classes/conexao.php");
    //$pdo=new ConexaoBancoDados();
    //$pdo->conexaoBD();

    $pdo=new PDO("mysql:host=localhost;dbname=controlevalidade","root","");

?>

<div class="principal">

    <div class="titulo">
        <p>Controle de Validade</p>
        <p>Segue abaixo todos os produtos com sua validade cadastrada</p>
    </div>

    <div class="tabela">

<?php

$sql = $pdo->prepare("SELECT * FROM validade");
$sql->execute();

$fetchValidade = $sql->fetchAll();

foreach ($fetchValidade as $key => $value){
    echo $value['nome'].' | '.$value['validade'].' | '.$value['lote'];
    echo '<hr>';
}

?>

    </div>

    <div class="opcoes">

    <a href="cadastrar.php">Cadastrar nova validade</a>
    <a href="apagar.php">Apagar validades cadastradas</a>

    </div>

</div>

</body>
</html>