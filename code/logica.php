<?php 
$catraca = null;
function inicial(){
    global $catraca;
    if($catraca == null){
        system('clear');
        $pergunta = readline("Digite um número (1) Abrir e (2) Fechar: ");
        switch($pergunta){
            case 1:abrir();inicial();break;
            case 2:fechar();inicial();break;
            default:inicial();break;
        }
    }
}
function fechar(){
    $catraca = false;
    //parte para enviar para o dispositivo
    print("Portão fechado\n");
    sleep(2);
    $catraca = null;
    
}
function abrir(){
    $catraca = true;
    //parte para enviar para o dispositivo
    print("Portão Aberto\n");
    sleep(2);
    $catraca = null;
}
inicial();
?>