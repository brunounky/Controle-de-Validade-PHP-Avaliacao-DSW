<?php

abstract class conexao{

    public function conexaoBD(){

        try{
            $Con=bew PDO("mysql:host=localhost;dbname=crud","root","");
            return $Con;
        }catch(PDOException $erro){
            return $Erro->getMessage();
        }
    }

}

?>