
<?php

require_once '../Pessoa/Aluno.php';
require_once '../Modalidade/Modalidade.php';

class Matricula {
    private $aluno;
    private $modalidade;
    private $dataMatricula;

    public function __construct($aluno, $modalidade, $dataMatricula) {
        $this->aluno = $aluno;
        $this->modalidade = $modalidade;
        $this->dataMatricula = $dataMatricula;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function setAluno($aluno) {
        $this->aluno = $aluno;
    }

    public function getModalidade() {
        return $this->modalidade;
    }

    public function setModalidade($modalidade) {
        $this->modalidade = $modalidade;
    }

    public function getDataMatricula() {
        return $this->dataMatricula;
    }

    public function setDataMatricula($dataMatricula) {
        $this->dataMatricula = $dataMatricula;
    }
}

?>
