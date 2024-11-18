<?php
require_once("model/Aluno.php");
require_once("model/Funcionario.php");
$alunos = json_decode(file_get_contents("data/aluno.json"),true);
$funcionarios = json_decode(file_get_contents("data/func.json"),true);
system("clear");
if($alunos == null && $funcionarios == null)
{
    print "Não há cadastros!!\n";
    die;
}
$email = readline("Email: ");
$senha = readline("Senha: ");
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
            print "Funcionário cadastrado, acesso liberado!\n";
        break;
        case "Aluno":
            print "Aluno cadastrado, acesso liberado!\n";
        break;
        case null:
            print "Não cadastrado, acesso negado!\n";
        break;
        default:
            print "Bug do milênio!\n";
        break;
    }
}
?>
