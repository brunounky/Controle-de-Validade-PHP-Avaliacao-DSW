<?php

class ConexaoBancoDados{

    public function conexaoBD(){

        try{
            $Con=new PDO("mysql:host=localhost;dbname=controlevalidade","root","");
            return $Con;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }
    }

}

?>