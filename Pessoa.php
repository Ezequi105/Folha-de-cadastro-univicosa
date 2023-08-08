<?php
/*aqui esta a class pessoa q esta contendo todos os atributos de todas as class  */
class Pessoa
{
    public $Nome;
    public $Cpf;
    public $Idade;
    public $Sexo;
    public $Cidade;
    public $Estado;

    /*aqui esta as ativando as funçoes desses atributos  */




    function __construct($Nome, $Cpf, $Idade, $Sexo, $Cidade, $Estado)
    {
        $this->Nome = $Nome;
        $this->Cpf = $Cpf;
        $this->Idade = $Idade;
        $this->Sexo = $Sexo;
        $this->Cidade = $Cidade;
        $this->Estado = $Estado;
    }

    function VerPessoa()
    {
        echo "<div id='conteudo'>";
        echo "<h2>" . $this->Nome . " - " . $this->Idade . " anos </h2>";
        echo "<p> <b>CPF:</b> " . $this->Cpf . "</p>";
        echo "<p> <b>Idade:</b> " . $this->Idade . "</p>";
        echo "<p> <b>Sexo:</b> " . $this->Sexo . "</p>";
        echo "<p> <b>Cidade:</b> " . $this->Cidade . "</p>";
        echo "<p> <b>Estado:</b> " . $this->Estado . "</p>";
        echo "<hr>";
    }
}
?>