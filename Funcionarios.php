<?php

abstract class Funcionario {
    public $nome;
    public $idade;
    private $salario;
    private $cargo;

    public function setSalario($hora, $valor) {
        $this->salario = $hora * $valor;
    }
}