<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!--<header>
        <nav class="login">
            <button class="btnCadt">Entrar</button>

            <a href="telaLogin.html"><button class="btnCadt">Entrar(Site)</button></a>
        </nav>
    </header>-->
    
    <nav class="menu-lat">
        <!--menu lateral-->
        <div class="btn-expnd">
            <i class="bi bi-list" id="expand"></i>
        </div>
        <!--botao expandir-->
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

    <div class="sub-main">
        <div class="telaLogin">
            <span class="fechar"><i class="bi bi-x-lg"></i></span>

            <div class="form-log">
                <!--formulario login-->
                <h2>Login</h2>
                <form action="./code/formulariologin.php" method="POST">
                    <div class="input-box">
                        <span class="icon-log"><i class="bi bi-envelope"></i></span>
                        <input type="Email" name="email">
                        <label>Email</label>
                        <!--campo email-->
                    </div>
                    <div class="input-box">
                        <span class="icon-log"><i class="bi bi-key"></i></i></span>
                        <input type="password" name="senha">
                        <label>Senha</label>
                        <!--campo senha-->
                    </div>

                    <div class="gerenc-senha">
                        <label><input type="checkbox">Lembrar as credenciais</label>
                        <a href="#">Esqueci a senha</a>
                        <!--esqueci a senha-->
                    </div>
                    <button type="submit" class="btnSubmit">Entrar</button>
                    <div class="registro">
                        <p>Não tem uma conta ainda?<a href="#" class="link-registro"> Registre-se</a></p>
                    </div>
                </form>
            </div>


            <div class="formReg">
                <!--formulario registro-->
                <h2>Registro</h2>
                <form action="./code/formulariocadastro.php" method="POST">

                    <div class="input-box">
                        <span class="icon-log"><i class="bi bi-person"></i></span>
                        <input type="text" name="nome">
                        <label>Nome</label>
                    </div>

                    <div class="input-box">
                        <span class="icon-log"><i class="bi bi-bookmark"></i></span>
                        <input type="number" name="matricula">
                        <label>Matrícula</label>
                    </div>

                    <div class="input-box">
                        <span class="icon-log"><i class="bi bi-envelope"></i></span>
                        <input type="Email" name="email">
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon-log"><i class="bi bi-key"></i></i></span>
                        <input type="password" name="senha">
                        <label>Senha</label>
                    </div>

                    <div class="gerenc-senha">
                        <label><input type="checkbox">Concordo com os termos e condições do site.</label>
                    </div>

                    <button type="submit" class="btnSubmit">Entrar</button>

                    <div class="registro">
                        <p>Já tem uma conta?<a href="#" class="link-login"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <main>

        <div class="imagem-catraca">
            <img src="image\catraca.png" alt="Imagem de uma catraca">
        </div>

        <div class="sobre-proj">
            <div class="text-sobre-proj">
                <h2>Sobre o projeto</h2>
                <p>São muitas as instituições públicas de ensino que não contam com recursos tecnológicos para a
                    gestão de acesso. A ausência de meios para monitorar o acesso de discentes nas dependências
                    escolares, pode comprometer tanto a segurança dos alunos quanto o acompanhamento da
                    assiduidade escolar. Assim, este projeto objetiva estudar formas de gestão e controle de acesso
                    e desenvolve um protótipo para um sistema automatizado de controle de acesso, intitulado de
                    Smart Gate, baseado na utilização de tecnologias que permitam o registro e a autorização da
                    entrada e saída dos estudantes.</p>
                <p>O sistema proposto também inclui a notificação dos
                    responsáveis pelos discentes, informando-os sobre os horários de movimentação dos alunos.
                    Ademais, o projeto prevê a integração com esta plataforma web, visando à facilitação do
                    monitoramento da frequência.</p>
                <p>Para a implementação, são empregadas tecnologias como RFID
                    para os cartões de acesso, um software específico para o controle de permissões e uma interface
                    de comunicação que permite o envio de notificações. O sistema também realizará o
                    armazenamento e gerenciamento das informações.</p>
            </div>
        </div>

        <div class="desenvolvimento">
            <div class="text-desenvolvimento">
                <h2>Desenvolvimento</h2>
                <p>Seguindo o protocolo metodológico, após a identificação do problema, por meio da observação da rotina
                    escolar na instituição e a definição dos resultados esperados, passou-se à etapa de Projeto e
                    Desenvolvimento do artefato. Neste momento, a partir de experimentações e de leituras de projetos
                    similares, realizou-se o levantamento dos requisitos necessários para o projeto. É importante
                    destacar que o projeto em questão é composto por duas aplicações que funcionam de forma orquestrada,
                    trocando mensagens entre si, com o intuito de realizar a gestão de acesso dos estudantes:
                    dispositivos físicos (hardware); aplicação computacional (backend).</p>
                <p>Assim, para alcançar os objetivos propostos, o projeto e implementação do sistema apresentado por
                    este trabalho, consistiu, de forma resumida, na configuração e construção de um hardware, composto
                    principalmente por um microcontrolador arduino, além de sensores para leitura das tags RFID's. Foram
                    adicionados leds para indicação visual de permissões de acesso. Leds vermelhos indicam restrições ao
                    realizar o acesso e leds verdes indicam conformidade com o acesso.
                    Os dados obtidos, foram enviados para uma outra aplicação (backend), programada em linguagem PHP,
                    que os processa e os armazena em um meio adequado.</p>

                <p>Os resultados parciais da pesquisa indicam que o conjunto de tecnologias selecionadas, tais como o
                    Arduino, e o uso de RFID, além da programação web com PHP, estão se mostrando eficazes na construção
                    do sistema de controle de acesso escolar.</p>
                <p>Durante as etapas iniciais de prototipagem, foram realizados o desenvolvimento, de forma isolada do
                    hardware validando as leituras das tags. Atualmente, o projeto avançou para a fase de codificação do
                    sistema, que é crucial para o desenvolvimento das funcionalidades principais, como a autenticação e
                    gestão dos acessos, o registro detalhado de entradas e saídas dos alunos, e a configuração de
                    notificações automáticas para os responsáveis em tempo real. Durante essa etapa, identificou-se que
                    a codificação envolve desafios complexos, tais como a integração com o hardware, e a garantia de uma
                    interface de usuário intuitiva e acessível.</p>
                <p>Embora o sistema ainda esteja em desenvolvimento, as etapas realizadas até agora fornecem uma boa
                    base para a conclusão do projeto. A próxima fase incluirá testes em um ambiente escolar real,
                    provavelmente controlando o acesso ao Laboratório Maker do campus, onde o sistema será avaliado
                    quanto à sua eficácia, segurança, e impacto na gestão escolar. Esses testes serão fundamentais para
                    identificar ajustes e melhorias, visando a implementação final de um sistema que possa ser adotado
                    amplamente em instituições educacionais.
                </p>
            </div>
        </div>

        <!--INICIO SLIDES-->


        <div class="idealizadores">
            <div class="text-idealizadores">
                <h2>Idealizadores</h2>
            </div>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/imagens-slider/buche.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="image/imagens-slider/walmonn.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="image/imagens-slider/sarah.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="image/imagens-slider/jeffinho.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>


        <!--mensgaem de cookies-->
        <div id="cookie-banner" class="cookie-banner">
            <p>Usamos cookies para melhorar os sistemas do nosso aplicativo. Ao continuar navegando, você concorda com o
                uso das informações coletadas.</p>
            <button id="accept-cookies">Aceitar</button>
        </div>
    </main>

    <script src="javascript/menu.js"></script>
    <script src="javascript/expand.js"></script>
    <script src="javascript/cookie.js"></script>
    <script src="javascript/fecharMenu.js"></script>
    <script src="javascript/mudarLogin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>