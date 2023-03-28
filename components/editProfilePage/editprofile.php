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
    <link rel="stylesheet" href="editprofile.css">
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <link rel="shortcut icon" href="../home/midia/R.png" type="image/x-icon">
    <title>Edição de Perfil | Resumera</title>
</head>
<body>
    <?php require '../navHeader/header.php';?>

    <div id= 'body_form_div'>
        <form method= 'POST' id= 'change_form' action= 'exe/editprofile_exe.php' enctype='multipart/form-data'>
            <div id= 'esquerda_div'>
                <div id= 'esquerda_div_topo'>
                    <div id = 'esquerda_div_topo_img'>
                        <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO   DE DADOS! -->
                        <?php echo "<img id='profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?>
                    </div>
                </div>
                <?php echo"<h1 class= 'exibindo'>" . get_data('nome') . "</h1>" ?>
                <?php echo"<h1 class= 'bio'>" . get_data('bio') . "</h1>" ?>
                <div id= 'esquerda_div_base'>
                    <label id='labelBotaoUpar' for='botaoUpar'>Enviar Imagem</label>
                    <input id="botaoUpar" name='change_image_input' type= 'file'>
                    <a id="botaoVoltar" onclick='trocarDePagina("../profilePage/profile.php")'>Voltar</a>
                </div>
            </div>
            <div id='direita_div'>
                <div id= 'direita_div_topo'>
                    <h1 class="h1">Edição de Perfil</h1>
                </div>
                <div id= 'direita_div_base'>
                    
                    <label class= 'label'>Trocar nome:</label>
                    <input class= 'input' name= 'change_name_input' type= 'text' maxlength="200" placeholder="Digite seu nome...">
                    
                    <label class= 'label'>Trocar biografia:</label>
                    <input class= 'input' name= 'change_bio_input' type= 'text' maxlength="200" placeholder="Digite sua biografia...">
                    
                    <br>
                    <?php
                        $erro = isset($_GET["erro"]);
                        if($erro == 1){
                            echo "<p style='color:red';>Erro ao desativar sua conta.</p>";
                        }
                    ?>
                    <input id= 'update' name= 'update' value= 'Salvar' type= 'submit'>
                    <input id='desativarButton' type='button' value='Desativar conta'  onclick='confirm_delete()'>
                </div>
            </div>
        </form>
    </div>

    <script src='../.js/script.js'></script>
</body>
</html>