<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {
    private $titulo;

    public function __construct($nome, $cpf, $titulo) {
        parent::__construct($nome, $cpf);
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
}

?>