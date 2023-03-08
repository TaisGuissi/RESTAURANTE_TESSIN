<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setPrincipal($nome_principal,$data_principal,$dia_semana_principal){
        $stmt = $this->mysqli->prepare("INSERT INTO principal (`nome_principal`, `data_principal`, `dia_semana_principal`) VALUES (?,?,?)");
        $stmt->bind_param("sssss",$nome_principal,$data_principal,$dia_semana_principal);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getPrincipal(){
        $result = $this->mysqli->query("SELECT * FROM principal");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deletePrincipal($id){
        if($this->mysqli->query("DELETE FROM `principal` WHERE `nome_principal` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaPrincipal($id){
        $result = $this->mysqli->query("SELECT * FROM principal WHERE nome_principal='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updatePrincipal($nome_principal,$data_principal,$dia_semana_principal,$id){
        $stmt = $this->mysqli->prepare("UPDATE `principal` SET `nome_principal` = ?, `data_principal`=?, `dia_semana_principal`=? WHERE `nome_principal` = ?");
        $stmt->bind_param("sssssss",$nome_principal,$data_principal,$dia_semana_principal,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
