<!DOCTYPE html>
<html>

<head>
    <title>
        Leviathan - Lan House
    </title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_projeto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="banner">
        <img src="css/Leviatan.png" class="logo">
        <div class="nav" id="myNav">
            <div class="cont">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="levcup.php">LevCup</a></li>
                <li><a href="home.php">Home</a></li>
            </div>
            <!-- //Mobile Menu -->
            <script>
                function someBotao() {
                    var x = document.getElementById("botao");
                    if (x.style.display === "inline-block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "inline-block";
                    }
                }
                function openNav() {
                    someBotao();
                    document.getElementById("myNav").style.width = "100%";
                }

                /* Set the width of the sidebar to 0 (hide it) */
                function closeNav() {
                    someBotao();
                    document.getElementById("myNav").style.width = "0%";
                }
            </script>
        </div>
        <button id="botao" style="display: inline-block;" class="openbtn" onclick="openNav()">&#9776;</button>
    </div>
    <div class="ImagemPrincipal">
        <div id="textImgBanner">
            <p class="MainTxt">A Melhor Lan House de São Paulo.</p>
            <p class="MainSubTxt">Venha bater aquela gameplay avançada <br> com o melhor setup e espaço para sua
                diversão.</p>
        </div>
        <div class="containerbt">
            <a style="flex-grow: center" class="button" href="#">Reserve Já</a>
        </div>
        <div id="imagemBanner">
            <img src="css/lanhouse.jpg" alt="" class="MainImg">
        </div>
    </div>
    <div class="Servicos">
        <img src="css/lan2.png" alt="" class="ImgLan">
        <span class="TServTxt">Conheça nossos serviços</span>
        <p class="ServTxt"><br>Venha conhecer os nossos planos de corujão, das 22h às 6h da manhã. <br><br>
            Ou então venha conhecer a nossa Lan House reservando de 1 hora até 5 horas. <br><br>
            Com máquinas das mais medianas até as de última geração.</p>
    </div>
    <div class="setups">
        <p class="titulo">Nossos Setups <br></p>
        <div class="especificacoes">
            <img src="css/especificacoes.png" class="especImg">
            <p class="especTitulo"><br>Especificações:</p>
            <p class="especTxt">i7 8700 <br> Vídeo RTX 2070 <br> SSD 240 GB <br> ASUS TUF B360M Plus Gaming <br>
                16
                Gb RAM Corsair 3.000Mhz</p>
        </div>
        <div class="monitorcadeira">
            <img src="css/monitor.png" class="mcImg">
            <span class="mcTitulo">Monitor e Cadeira:</span>
            <span class="mcTxt">Monitor Benq ZOWIE XL2546 240Hz <br> Dyac Cadeiras Gamer DT3 Elise</span>
        </div>
        <div class="perifericos">
            <img src="css/perifericos.png" class="periImg">
            <p class="periTitulo">Periféricos:</p>
            <p class="periTxt"><br>Mouse Zowie ZA12 <br> HeadSet HyperX Cloud Alpha <br> Teclado Mecânico <br>
                MousePad
                HyperX Fury S Large</p>
        </div>
    </div>

    <div class="localizacao">
        <div class="loccont">
            <div class="textos">
                <span class="locTitulo">Venha conhecer o nosso QG. <br><br></span>
            </div>
            <div class="minimap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.757294808049!2d-46.65761181640908!3d-23.541230251582373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59f05dbef09d%3A0xbbae5d08e224d968!2sTeam%20Liquid!5e0!3m2!1spt-BR!2sbr!4v1732234756794!5m2!1spt-BR!2sbr"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="maps"></iframe>
            </div>
            <div class="textos">
                <span class="locTxt">Venha conhecer o nosso QG para bater aquela gameplay avançada, ou então
                    assistir a uma partida com seus amigos no nosso telão e curtir nossa área de lazer um bar,
                    com
                    comidas e bebidas!</span>
            </div>
            <div class="emailtel">
                <img src="css/telefone.png" class="tel">
                <span class="loctel">(11) 94377-5992<br><br></span>
                <img src="css/email.png" class="email">
                <span class="locctt" onclick="location.href='mailto:leviathanlangaming@email.com';"
                    style="cursor: pointer; color: blue; text-decoration: underline;">leviathanlangaming@gmail.com<br><br></span>
            </div>
        </div>
    </div>
    </div>
    <div class="rodape">
        <div class="controdape">
            <span class="siga">Confira nossas redes sociais!</span>
            <div class="chamados">
                <a href="https://leviatan.gg" target="_blank"><img src="css/whatsapp-icon-logo-png.png"
                        class="whtts"></a>
                <a href="https://www.youtube.com/channel/UCBxiTChY1AtBDfoNOQAQnEw" target="_blank"><img
                        src="css/youtube-icon.png" class="youtube"></a>
                <a href="https://www.instagram.com/leviatangg/" target="_blank"><img src="css/instagram-icon.jfif"
                        class="insta"></a>
                <a href="https://www.facebook.com/LeviatanGG" target="_blank"><img src="css/facebook-icon.png"
                        class="face"></a>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>