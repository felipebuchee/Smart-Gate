<?php
$alunos = array();
$alunos[] = array(
    "nome" => "Walmonn",
    "numeroMatricula" => "20233014661",
    "emailResponsavel" => "enigma.kalhi.linux@gmail.com"
);
$alunos[] = array(
    "nome" => "Sarah",
    "numeroMatricula" => "20233014632",
    "emailResponsavel" => "sarahelizabete98@gmail.com"
);
$alunos[] = array(
    "nome" => "Felibe Buche",
    "numeroMatricula" => "20233014447",
    "emailResponsavel" => "felipe10buche@gmail.com"
);
$alunos = json_encode($alunos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents("./data/usuarios.json",$alunos);
?>