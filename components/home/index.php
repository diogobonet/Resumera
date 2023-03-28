<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="midia/R.png" type="image/x-icon">
    <title>Pagina Inicial | Resumera</title>
</head>
<body>
    <?php require "../navHeader/header.php"?>

    <main class="main">
        <!-- FORMULÁRIO PARA POSTAR -->
        <div class="novoPost">
            <div class="infoUser">
                <div id='imgUser_div'>
                    <?php $nome = $_SESSION['nome']; $imagem = $_SESSION['imagem']; ?>
                    <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
                    <?php echo "<img class='imgUser' src='data:image;base64,".base64_encode($imagem)."' alt= 'Foto do usuário'>"; ?>
                </div>
                <div id='nomeUser_div'>
                    <?php echo "<strong>$nome</strong>"; ?>
                </div>
            </div>
            <form method= "POST" action="exe/home_post_exe.php" class="formPost">

                <textarea name="textarea" id="textarea" placeholder="Escreva seu resumo..." maxlength="550"></textarea>

                <div class="Button">

                    <div class="icones">
                        <button class="btnFileForm"><img src="assets/image.svg" alt="Adicionar uma imagem"></button>
                        <button class="btnFileForm"><img src="assets/pdf.svg" alt="Adicionar um arquivo PDF"></button>
                    </div>

                <button type="submit" class="btnSubmitForm">Postar</button>
                </div>
            </form>
            
        </div>
        <?php require "exe/home_showpost_exe.php" ?>
    </main>
    <script language='JavaScript' src='../.js/homeJavaScript.js'></script>
</body>
</html>