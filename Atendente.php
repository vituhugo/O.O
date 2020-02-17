<?php require "Funcionarios.php";

class Atendente extends Funcionarios {
    public $conhecimento;
    
    // Da erro O php não deixa usar funções 
    // na declaração de propriedades
    // public $cargo = strtolower("Atendente"); 
    private $cargo = "Atendente";

    public function atender() {

    }

    public function setSalario($hora, $valor) {
        parent::setSalario($hora, $valor);
        // $this->salario = $this->salario - 50;
        $this->salario -= 50;
    }

}