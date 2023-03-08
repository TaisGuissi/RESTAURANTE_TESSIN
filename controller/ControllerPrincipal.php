<?php
require_once("../model/principal.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNomePrincipal($_POST['nome_principal']);
        $this->cadastro->setDataPrincipal(date('Y-m-d',strtotime($_POST['data_principal'])));
        $this->cadastro->setDiaSemanaPrincipal($_POST['dia_semana_principal']);
    
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index2.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
