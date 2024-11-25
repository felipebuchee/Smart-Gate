<?php
require_once("model/Aluno.php");
require_once("model/Funcionario.php");
$alunos = json_decode(file_get_contents("data/aluno.json"), true);
$funcionarios = json_decode(file_get_contents("data/func.json"), true);
$registro = json_decode(file_get_contents("data/registro.json"), true);

if ($alunos == null && $funcionarios == null) {
    print "Não há cadastros!!\n";
    die;
}
$email = $_POST['email'];
$senha = $_POST['senha'];
if ($email != null && $senha != null) {
    $grupo = null;
    if ($alunos != null) {
        $alunos = Aluno::criarAlunos($alunos);
    }
    if ($funcionarios != null) {
        $funcionarios = Funcionario::criarFuncionarios($funcionarios);
    }
    foreach ($funcionarios as $func) {
        if ($email == $func->getEmail() && $senha == $func->getSenha()) {
            $grupo = "Funcionario";
            $funcionario = $func;
            break;
        }
    }
    if ($grupo == null) {
        foreach ($alunos as $aluno) {
            if ($email == $aluno->getEmail() && $senha == $aluno->getSenha()) {
                $grupo = "Aluno";
                break;
            }
        }
    }

    switch ($grupo) {
        case "Funcionario":
            $registro["nome"] = $funcionario->getNome();
            $registro["cpf"] = $funcionario->getCpf();
            $registro["senha"] = $funcionario->getSenha();
            $registro["email"] = $funcionario->getEmail();
            $registro["tag"] = $funcionario->getTag();
            $registro["siap"] = $funcionario->getSiap();
            $registro["adm"] = $funcionario->isAdm();
            $registro["liberar"] = $funcionario->isLiberar();

            file_put_contents("data/registro.json", json_encode($registro, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            header("Location: ../liberar.php");
            break;
        case "Aluno":
            header("Location: ../telaAluno.php");
            break;
        case null:
            header("Location: ../telaLoginFunc.php");
            break;
        default:
            print "Bug do milênio!\n";
            break;
    }
}
