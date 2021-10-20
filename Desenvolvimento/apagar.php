<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Apagar Validade</title>
</head>

<body>

<?php

   // include("Classes/conexao.php");
    //$pdo=new ConexaoBancoDados();
    //$pdo->conexaoBD();

    $pdo=new PDO("mysql:host=localhost;dbname=controlevalidade","root","");

    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $pdo->exec("DELETE FROM validade WHERE id=$id");
        echo 'Produto foi apagado';
    }

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
    echo '<a href="?delete='.$value['id'].'">Apagar</a>'.$value['nome'].' | '.$value['validade'].' | '.$value['lote'];
    echo '<hr>';
}

?>

    </div>

    <div class="opcoes">

    <a href="index.php">Voltar para a página inicial</a>

    </div>

</div>

</body>
</html>