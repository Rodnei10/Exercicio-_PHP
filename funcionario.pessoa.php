<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {
    private $cargo;

    public function __construct($nome, $cpf, $cargo) {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
}

?>