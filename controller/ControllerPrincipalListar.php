<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getPrincipal();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome_principal'] ."</th>";

            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['nome_principal']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome_principal']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

