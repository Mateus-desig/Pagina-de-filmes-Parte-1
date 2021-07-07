<?php
$nivel_de_acesso = 1;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incluir arquivo de estilo do site -->
    <link rel="stylesheet" href="http://192.168.2.200/css/style.css">
    <title>Filmes online</title>
</head>
<body>
    <div class="container">
        <input type="checkbox" id="bt_menu"/>
        <label for="bt_menu">&#9776;</label>  
        <i id="search_btns" class="material-icons mobile">search</i>
        <nav class="menu">
            <ul>
                <h1>Filmes hd</h1>
                <li onmouseover="mudaFoto('https://pt.seaicons.com/wp-content/uploads/2015/11/home-icon.png')" onmouseout="voltaFoto()"><a href="http://192.168.2.200/">Home</a></li>
                <li onmouseover="mudaFoto('https://images-na.ssl-images-amazon.com/images/I/51Q2Au2BLrL.png')" onmouseout="voltaFoto()"><a href="#">Filmes</a></li>
                <li onmouseover="mudaFoto('https://cdn.pixabay.com/photo/2018/05/15/20/47/microphone-3404243_960_720.png')" onmouseout="voltaFoto()"><a href="http://192.168.2.200/paginas/dublado/">Dublado</a></li>
                <li onmouseover="mudaFoto('https://cdn.pixabay.com/photo/2018/05/15/20/47/microphone-3404243_960_720.png')" onmouseout="voltaFoto()"><a href="http://192.168.2.200/paginas/legendado/">Legendado</a></li>
                <li onmouseover="mudaFoto('https://freepikpsd.com/media/2020/08/conditions-icon-png.png')" onmouseout="voltaFoto()"><a href="http://192.168.2.200/paginas/generos/">Gêneros</a></li>
                <?php if($nivel_de_acesso === 10){echo "<li><a id='admin' href='#'>Painel</a></li>";} ?>
                <i onmouseover="mudaFoto('https://img.icons8.com/metro/452/search.png')" onmouseout="voltaFoto()" id="search_btn" class="material-icons desktop">search</i>
                <div id="log_in"><a href="http://192.168.2.200/login/index.php" title="login" ><img src="https://cobrae.com.br/assets/img/preview/no-image.jpg"></a></div>
            </ul>
        </nav>
    </div>
    <div class="boxContainer" id="search">
        <table class="elementsContainer">
            <form id="search" method="get" action="#">
                <td>
                    <input type="text" name="pesquisar" class="search" placeholder="Nome do Filme" >
                </td>
                <td>
                    <button class="search-button"><i class="material-icons search_icon">search</i></button>
                </td>
            </form>
        </table>
    </div>
    <div id="efeito">
    <hr/>
    <img id="icone_menu" src="https://carlinhosuniformes.com.br/wp-content/uploads/2019/03/SEU-LOGO.png" />
    </div>

    <div id="hcx">