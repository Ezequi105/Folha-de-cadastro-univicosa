<?php
require_once("Pessoa.php");
class FuncionarioDocente extends Pessoa
{
    public $Materia;
    public $Cargo;
    public $Salario;

    function __construct($Nome, $Cpf, $Idade, $Sexo, $Cidade, $Estado, $Materia, $Cargo, $Salario)
    {
        parent::__construct($Nome, $Cpf, $Idade, $Sexo, $Cidade, $Estado);
        $this->Materia = $Materia;
        $this->Cargo = $Cargo;
        $this->Salario = $Salario;
    }

    function VerPessoa()
    {
        parent::VerPessoa();
        echo "<p> <b>Cargo: </b>" . $this->Cargo . "</p>";
        echo "<p> <b>Materia: </b>" . $this->Materia . " </p>";
        echo "<p> <b>Salario: </b> " . $this->Salario . ' R$' . "</p>";
        echo "<hr>";
        echo "</div>";
    }
}
?>