<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Gate</title>
    <link rel="shortcut icon" type="imagex/png" href="/image/smart-gate-ico.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav class="menu-lat"> <!--menu lateral-->
        <div class="btn-expnd">
            <i class="bi bi-list" id="expand"></i>
        </div> <!--botao expandir-->
        <ul>
            <li class="item-menu ativo">
                <a href="index.php">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Ínicio</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="telaLoginFunc.php">
                    <span class="icon"><i class="bi bi-backpack"></i></span>
                    <span class="txt-link">Aluno</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="configuracoes.php">
                    <span class="icon"><i class="bi bi-gear"></i></span>
                    <span class="txt-link">Configurações</span>
                </a>
            </li>

        </ul>
    </nav>

    <main>
        
        <h2>aqui vai o relatorio de entradas e saidas</h2>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <script src="javascript/menu.js"></script>
        <script src="javascript/expand.js"></script>
        <script src="javascript/cookie.js"></script>
        <script src="javascript/fecharMenu.js"></script>
        <script src="javascript/mudarLogin.js"></script>
</body>