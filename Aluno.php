<?php
require_once("Pessoa.php");
class PessoaAluno extends Pessoa
{
    public $Curso;
    public $Periodo;

    function __construct($Nome, $Cpf, $Idade, $Sexo, $Cidade, $Estado, $Curso, $Periodo)
    {
        parent::__construct($Nome, $Cpf, $Idade, $Sexo, $Cidade, $Estado);
        $this->Curso = $Curso;
        $this->Periodo = $Periodo;
    }

    function VerPessoa()
    {
        parent::VerPessoa();
        echo "<p><b>Curso: </b>" . $this->Curso . " - " . $this->Periodo . " período </b></p>";
        echo "<hr>";
        echo "</div>";
    }
}
?>