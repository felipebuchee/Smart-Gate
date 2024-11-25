<?php
require_once("model/Aluno.php");
require_once("model/Funcionario.php");

$alunos = json_decode(file_get_contents("data/aluno.json"), true);
$funcionarios = json_decode(file_get_contents("data/func.json"), true);
$registro = json_decode(file_get_contents("data/registro.json"), true);
$tag = $_GET['tag'];
if ($alunos == null && $funcionarios == null) {
    print "Não há cadastros!!\n";
    die;
}
if ($tag != null) {
    $catraca = null;
    if ($alunos != null) {
        $alunos = Aluno::criarAlunos($alunos);
        print_r($alunos);
        die;
    }
    if ($funcionarios != null) {
        $funcionarios = Funcionario::criarFuncionarios($funcionarios);
    }
    if($funcionarios != null)
    {
        foreach ($funcionarios as $func) {
            if ($tag == $func->getTag()) {
                $h = intval(date("H"));
                if($h >= $func->getHorarios()[0] && $h <= $func->getHorarios()[1])
                {
                    $catraca = "true";
                }
                else
                {
                    $catraca = "false";
                }
                break;
            }
        }
    }
    if ($catraca == null) {
        if($alunos != null)
        {
            foreach ($alunos as $aluno) {
                $h = 18;//intval(date("H"));
                $m = intval(date("m"));
                if((($h >= $aluno->getHorarios()[0][0][0] && $m >= $aluno->getHorarios()[0][0][1]) && ($h <= $aluno->getHorarios()[0][1][0] && $m <= $aluno->getHorarios()[0][1][1])) || (($h >= $aluno->getHorarios()[1][0][0] && $m >= $aluno->getHorarios()[1][0][1]) && ($h <= $aluno->getHorarios()[1][1][0] && $m <= $aluno->getHorarios()[1][1][1])))
                {
                    $catraca = "true";
                }
                else
                {
                    $catraca = "false";
                }
            }
        }
    }
}
switch ($catraca) {
    case 'true':
        abrir();
        break;

    case 'false':
        fechar();
        break;
}

function fechar()
{
    $catraca = false;
    //parte para enviar para o dispositivo
    print("Portão fechado\n");
    sleep(2);
    $catraca = null;
}
function abrir()
{
    $catraca = true;
    //parte para enviar para o dispositivo
    print("Portão Aberto\n");
    sleep(2);
    $catraca = null;
}
