<?php
    function get_data($dataSessionVariable){
        if( $_SESSION['logado'] == true ){
            $logged_data = $_SESSION[$dataSessionVariable];
            return "$logged_data";
        }
        else{
            return 'ERRO';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <link rel="shortcut icon" href="../home/midia/R.png" type="image/x-icon">
    
</head>
<body>
    <?php require "../navHeader/header.php"; ?>

    <?php
        $name = get_data('nome');
        $page_title = "$name";
        echo("<title>$page_title | Resumera</title>");
    ?>
    <main>
        <section class="section-principal">
            
            <div class="profile-content">
                <div id='profile-content-top'>
                    <div id='profile-content-top-img'>
                        <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS!-->
                        <?php echo "<img id='img-profile' src='data:image;base64,".base64_encode($_SESSION  ['imagem'])."' alt= 'Foto do usuário'>"; ?>
                    </div>
                </div>
                <div id='profile-content-bottom'>
                    <?php echo"<h2 class='text-principal'>" . get_data('nome') . "</h2>" ?>
                    <?php echo"<h3 class= 'bio'>" . get_data('bio') . "</h3>" ?>
                    <button onclick= 'trocarDePagina()' class="editprofile">Editar Perfil</button>
                </div>
            </div>

            <div class="content-principal">
                <h1 id="resumos-title">Meus Resumos Favoritos 📘❤</h1>
                <div class="resumos">
                    <div class="resumo-fav">
                        <h3>Primeira Guerra Mundial</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus maiores itaque recusandae cum ratione blanditiis tempore? Neque quos nobis eveniet tenetur soluta. Animi odio corporis doloribus et, impedit eligendi.</p>
                    </div>
                    <div class="resumo-fav">
                        <h3>Segunda Guerra Mundial</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus maiores itaque recusandae cum ratione blanditiis tempore? Neque quos nobis eveniet tenetur soluta. Animi odio corporis doloribus et, impedit eligendi.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script language='JavaScript'>
        function trocarDePagina(){
            document.location.href = '../editProfilePage/editprofile.php';
        }
    </script>
</body>