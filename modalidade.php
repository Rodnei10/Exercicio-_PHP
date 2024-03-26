<?php

class Modalidade {
    private $descritivo;

    public function __construct($descritivo) {
        $this->descritivo = $descritivo;
    }

    public function getDescritivo() {
        return $this->descritivo;
    }

    public function setDescritivo($descritivo) {
        $this->descritivo = $descritivo;
    }
}

?>
