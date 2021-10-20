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

   // include("Classes/conexao.php");
    //$pdo=new ConexaoBancoDados();
    //$pdo->conexaoBD();

    $pdo=new PDO("mysql:host=localhost;dbname=controlevalidade","root","");
    

    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO validade VALUES (null,?,?,?)");
        $sql->execute(array($_POST['nome'], $_POST['validade'], $_POST['lote']));
        echo 'produto e validade cadastrados com sucesso';

    }
    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $pdo->exec("DELETE FROM validade WHERE id=$id");
        echo 'Produto foi apagado';
    }

?>

<div class="form">

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

<?php

$sql = $pdo->prepare("SELECT * FROM validade");
$sql->execute();

$fetchValidade = $sql->fetchAll();

foreach ($fetchValidade as $key => $value){
    echo $value['nome'].' | '.$value['validade'].' | '.$value['lote'];
    echo '<hr>';
}

?>

<?php

$sql = $pdo->prepare("SELECT * FROM validade");
$sql->execute();

$fetchValidade = $sql->fetchAll();

foreach ($fetchValidade as $key => $value){
    echo '<a href="?delete='.$value['id'].'">Apagar</a>'.$value['nome'].' | '.$value['validade'].' | '.$value['lote'];
    echo '<hr>';
}

?>



</body>
</html>