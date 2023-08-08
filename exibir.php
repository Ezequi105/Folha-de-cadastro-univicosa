<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pessoa Cadastrada</title>
    <link rel="stylesheet" href="exibir.css">
</head>

<body>
    <?php
  $tipo = $_POST['PessoaTipo'];
  require_once("Funcionario.php");
  if ($tipo == 'FuncAdm') {
    require_once("Funcionario.php");
    $nome = $_POST['Nome'];
    $cpf = $_POST['Cpf'];
    $idade = $_POST['Idade'];
    $sexo = $_POST['Sexo'];
    $cidade = $_POST['Cidade'];
    $estadio = $_POST['Estado'];
    $setor = $_POST['Setor'];
    $cargo = $_POST['Cargo'];
    $salario = $_POST['Salario'];
    $pessoa1 = new FuncionarioAdm($nome, $cpf, $idade, $sexo, $cidade, $estadio, $setor, $cargo, $salario);
    echo $pessoa1->VerPessoa();

  } elseif ($tipo == 'FundDocente') {
    require_once("Professor.php");
    $nome = $_POST['Nome'];
    $cpf = $_POST['Cpf'];
    $idade = $_POST['Idade'];
    $sexo = $_POST['Sexo'];
    $cidade = $_POST['Cidade'];
    $estadio = $_POST['Estado'];
    $materia = $_POST['Materia'];
    $cargo = $_POST['Cargo'];
    $salario = $_POST['Salario'];
    $pessoa2 = new FuncionarioDocente($nome, $cpf, $idade, $sexo, $cidade, $estadio, $materia, $cargo, $salario);
    echo $pessoa2->VerPessoa();

  } else {
    require_once("aluno.php");
    $nome = $_POST['Nome'];
    $cpf = $_POST['Cpf'];
    $idade = $_POST['Idade'];
    $sexo = $_POST['Sexo'];
    $cidade = $_POST['Cidade'];
    $estadio = $_POST['Estado'];
    $curso = $_POST['Curso'];
    $periodo = $_POST['Periodo'];
    $pessoa3 = new PessoaAluno ($nome, $cpf, $idade, $sexo, $cidade, $estadio, $curso, $periodo);
    echo $pessoa3->VerPessoa();
  }
  ?>
</body>

</html>