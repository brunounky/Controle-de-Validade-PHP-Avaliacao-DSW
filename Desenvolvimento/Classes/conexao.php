<?php

class ConexaoBancoDados{

    public function conexaoBD(){

        try{
            $pdo=new PDO("mysql:host=localhost;dbname=controlevalidade","root","");
            return $pdo;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }
    }

}

?>