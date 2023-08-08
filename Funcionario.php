<?php
require_once("Pessoa.php");

class FuncionarioAdm extends Pessoa
{
    public $Setor;
    public $Cargo;
    public $Salario;

    function __construct($Nome, $Cpf, $Idade, $Sexo, $Cidade, $Estado, $Setor, $Cargo, $Salario)
    {
        parent::__construct($Nome, $Cpf, $Idade, $Sexo, $Cidade, $Estado);
        $this->Setor = $Setor;
        $this->Cargo = $Cargo;
        $this->Salario = $Salario;
    }

    function VerPessoa()
    {
        parent::VerPessoa();
        echo "<p> <b>Setor/Cargo: </b>" . $this->Setor . " - " . $this->Cargo . "</p>";
        echo "<p> <b>Salario:</b> " . $this->Salario . ' R$' . "</p>";
        echo "<hr>";
        echo "</div>";
    }
}
?>