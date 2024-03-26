<?php

require_once 'classes/Pessoa/Aluno.php';
require_once 'classes/Modalidade/Modalidade.php';
require_once 'classes/Matricula/Matricula.php';

$aluno = new Aluno("Steven Seagal", "12345678900", "1990-01-01");
$modalidade = new Modalidade("Aikido");
$matricula = new Matricula($aluno, $modalidade, "2023-07-10");

echo "Aluno: " . $aluno->getNome() . "<br>";
echo "CPF: " . $aluno->getCpf() . "<br>";
echo "Data de Nascimento: " . $aluno->getDataNascimento() . "<br>";
echo "Modalidade: " . $modalidade->getDescritivo() . "<br>";
echo "Data da Matrícula: " . $matricula->getDataMatricula() . "<br>";

?>