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

    include("Classes/crudCLS.php")

    

?>

</body>
</html>