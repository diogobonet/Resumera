<?php 
    session_start();
?>

<header class="container">
    <h1 class="logo">Resumera</h1>
    <form name="form_search" id="form_search" action="../pesquisarPage/pesquisa.php" method="GET">
        <input class="searchbar" type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar..." autocomplete="off">
        <!--<a class="btnSearch" onclick="sendForm()"><img src='midia/lupa.png'></a>-->
        <a class="btnSearch" onclick="sendForm()">Buscar</a>
    </form>
    <nav id= "navHeader" class="container-cabecalho">
        <a class="container-link" href="../home/index.php">Home</a>
        <a class="container-link" href="#">Matérias</a>
        <a class="container-link" href="#">Ranking Mensal</a>
        <a class="container-link" href="../home/index.php">Postar</a>
        
    </nav>
    <div id= 'div_profile_img'>
        <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
        <?php echo "<img class='img' onclick='trocarDePagina(" . '"../profilePage/profile.php"' . ")' id='header_profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?>
    </div>
</header>
<script src="../.js/script.js"></script>
<script language="JavaScript">
    function sendForm(){
        let pesquisa = document.getElementById("pesquisar");

        if (pesquisa.value == '') {
            alert('Por favor, digite algo na barra de pesquisa.');
            pesquisa.focus();
            return;
        }
        else {
            let form = document.getElementById("form_search");
            form.submit();
            return;
        }
    }
</script>