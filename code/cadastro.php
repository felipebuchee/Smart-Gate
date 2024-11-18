<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("model/Aluno.php");
require_once("model/Funcionario.php");

function cadastrarFuncionario()
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $tag = $_POST['tag'];
    $siap = $_POST['siap'];
    $adm = $_POST['adm'];
    $liberar = $_POST['liberar'];
    if($nome != null && $cpf != null && $senha != null && $email != null && $tag != null && $adm != null && $liberar != null)
    {
        if(is_numeric($senha) && is_numeric($liberar) && is_numeric($adm))
        {
            $senha = intval($senha);
            $liberar = intval($liberar);
            $adm = intval($adm);
            if($adm == 1)
            {
                $adm = true;
            }
            else if($adm == 2)
            {
                $adm = false;
            }
            else
            {
                print "Valor inválido!\nNão será possível cadastrar o funcionário!\n\nAperte enter para voltar!";
                die;
            }
            if($liberar == 1)
            {
                $liberar = true;
            }
            else if($liberar == 2)
            {
                $liberar = false;
            }
            else
            {
                print "Valor inválido!\nNão será possível cadastrar o funcionário!\n\nAperte enter para voltar!";
                die;
            }
            if($siap != null)
            {
                if(is_numeric($siap))
                {
                    $siap = intval($siap);
                }
                else
                {
                    print "Valor inválido!\nNão será possível cadastrar o funcionário!\n\nAperte enter para voltar!";
                    die;
                }
            }
            $funcionarios = json_decode(file_get_contents("data/func.json"),true);
            if($funcionarios == null)
            {
                $funcionarios = array();
            }
            else
            {
                $funcionarios = Funcionario::criarFuncionarios($funcionarios);
            }
            $funcionario = new Funcionario();
            $funcionario->setNome($nome);
            $funcionario->setSenha($senha);
            $funcionario->setEmail($email);
            $funcionario->setCpf($cpf);
            $funcionario->setTag($tag);
            $funcionario->setAdm($adm);
            $funcionario->setLiberar($liberar);
            if($siap != null)
            {
                $funcionario->setSiap($siap);
            }
            $funcionarios[] = $funcionario;
            file_put_contents("data/func.json",json_encode($funcionarios,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        }
        else
        {
            print "Valor inválido!\nNão será possível cadastrar o funcionário!\n\nAperte enter para voltar!";
            die;
        }
    }
    else
    {
        print "Valor inválido!\nNão será possível cadastrar o funcionário!\n\nAperte enter para voltar!";
        die;
    }
}
function cadastrarAluno()
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $tag = $_POST['tag'];
    $num = $_POST['numeroMatricula'];
    if($nome != null && $cpf != null && $senha != null && $email != null && $tag != null && $num != null)
    {
        if(is_numeric($senha) && is_numeric($num))
        {
            $senha = intval($senha);
            $num = intval($num);
            $alunos = json_decode(file_get_contents("data/aluno.json"),true);
            if($alunos == null)
            {
                $alunos = array();
            }
            else
            {
                $alunos = Aluno::criarAlunos($alunos);
            }
            $aluno = new Aluno();
            $aluno->setNome($nome);
            $aluno->setSenha($senha);
            $aluno->setEmail($email);
            $aluno->setCpf($cpf);
            $aluno->setTag($tag);
            $aluno->setNumeroMatricula($num);
            $alunos[] = $aluno;
            file_put_contents("data/aluno.json",json_encode($alunos,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        }
        else
        {
            print "Valor inválido!\nNão será possível cadastrar o aluno!\n\nAperte enter para voltar!";
            die;
        }
    }
    else
    {
        print "Valor inválido!\nNão será possível cadastrar o aluno!\n\nAperte enter para voltar!";
        die;
    }
}
$tipo = $_POST['tipo'];
if($tipo == 1)
{
    cadastrarFuncionario();
    header("Location: ../cadastroFuncionario.html");
}
else if($tipo == 2)
{
    cadastrarAluno();
    header("Location: ../cadastroAluno.html");
}
else
{
    print "Bug do Milênio!";
}
?>
