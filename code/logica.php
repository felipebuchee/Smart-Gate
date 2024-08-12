<?php 

$catraca = "false";

    $pergunta = readline("Digite um número (1) Abrir e (2) Fechar\n");


if ($pergunta == 1) {
    $catraca = "true";
    abrir($catraca);
}

if ($pergunta == 2) {
    $catraca = "false";
    fechar($catraca);
}

function fechar($catraca){
while ($catraca == "false") {
    print("Portão fechado\n");
    sleep(2);
    $catraca = "true";
    }
}

function abrir($catraca){
while ($catraca == "true") {
    print("Portão Aberto\n");
    sleep(2);
    $catraca = "false";
    }
}