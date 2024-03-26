<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private $dataNascimento;

    public function __construct($nome, $cpf, $dataNascimento) {
        parent::__construct($nome, $cpf);
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }
}

?>