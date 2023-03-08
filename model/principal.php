<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome_principal;
    private $data_principal;
    private $dia_semana_principal;
 

    //Metodos Set
    public function setNomePrincipal($string){
        $this->nome_principal = $string;
    }
    public function setDataPrincipal($string){
        $this->data_principal = $string;
    }
    public function setDiaSemanaPrincipal($string){
        $this->dia_semana_principal = $string;
    }

    //Metodos Get
    public function getNomePrincipal(){
        return $this->nome_principal;
    }
    public function getDataPrincipal(){
        return $this->data_principal;
    }
    public function getDiaSemanaPrincipal(){
        return $this->dia_semana_principal;
    }


    public function incluir(){
        return $this->setPrincipal($this->getNomePrincipal(),$this->getDataPrincipal(),$this->getDiaSemanaPrincipal());
    }
}
?>
