<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
if(file_exists("./data/usarios.json"))
{
    $usuarios = file_get_contents("./data/usarios.json");
    $usuarios = json_decode($usuarios,true);
}
?>