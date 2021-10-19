<?php

class crudCLS extends conexao{

private $crud;
private $contador;

private function preparedStatements($Query , $Parametros){

$this->crud=$this->conexaoBD()->prepare($Query);

}

private function countParametros($Parametros){

$this

}

}