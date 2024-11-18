<?php
require_once("model/Aluno.php");
require_once("model/Funcionario.php");
$alunos = json_decode(file_get_contents("data/aluno.json"),true);
$funcionarios = json_decode(file_get_contents("data/func.json"),true);
if($alunos == null && $funcionarios == null)
{
    print "Não há cadastros!!\n";
    die;
}
$email = $_POST['email'];
$senha = $_POST['senha'];
if($email != null && $senha != null)
{
    $grupo = null;
    if($alunos != null)
    {
        $alunos = Aluno::criarAlunos($alunos);
    }
    if($funcionarios != null)
    {
        $funcionarios = Funcionario::criarFuncionarios($funcionarios);
    }
    foreach($funcionarios as $func)
    {
        if($email == $func->getEmail() && $senha == $func->getSenha())
        {
            $grupo = "Funcionario";
            break;
        }
    }
    if($grupo == null)
    {
        foreach($alunos as $aluno)
        {
            if($email == $aluno->getEmail() && $senha == $aluno->getSenha())
            {
                $grupo = "Aluno";
                break;
            }
        }
    }
    switch($grupo)
    {
        case "Funcionario":
            header("Location: ../liberar.html");
        break;
        case "Aluno":
            header("Location: ../telaAluno.html");
        break;
        case null:
            header("Location: ../telaLoginFunc.html");
        break;
        default:
            print "Bug do milênio!\n";
        break;
    }
}
?>
