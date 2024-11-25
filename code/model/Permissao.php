<?php

class Permissao
{
    public static function funcLibera()
    {
        $registro = json_decode(file_get_contents(__DIR__ . "/../data/registro.json"), true);

        if ($registro['liberar'] == false) {
            header("Location: /index.php");
        }
    }
}
