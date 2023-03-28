<?php
    require "../bd/connection.php";

    if(isset($_POST['input-nome']) && isset($_POST['input-email']) && isset($_POST['input-senha'])){

        //Dados vindos da primeira parte do cadastro (cadastro.php)
        $input_name = $_POST['input-nome'];
        $input_email = $_POST['input-email'];
        $input_senha = $_POST['input-senha'];
        //Criando session para passar os dados já informados pelas páginas
        session_start();
        //Salvando na session o nome, email e senha já definidos
        $_SESSION['nome'] = $_POST['input-nome'];
        $_SESSION['email'] = $_POST['input-email'];
        $_SESSION['senha'] = $_POST['input-senha'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cadastroStyles.css">
    <link rel="shortcut icon" href="midia/ResumeraLogoPNG.png" type="image/x-icon">
    <title>Registrar-se | Resumera</title>
</head>
<body onload="setTimeout(trocar_logo, 5000)">

    <div id="container">
        <div id= "esquerda_div">
            <img id= "logo_img" src="midia/ResumeraLogoGif.gif">
        </div>

        <div id="direita_div">
            <form id= "form-register2" name= "form-register2" method= "POST" action= 'exe/include_bd_exe.php' enctype='multipart/form-data'>

                <!-- E-Mail -->
                <label class= "form_label">Telefone:</label>
                <input class= "form_input" name= "input-telefone" id= "input-telefone" type="text" maxlength="14" placeholder="(XX)XXXXX-XXXX"/>

                <!-- Senha -->
                <label class= "form_label">Profissão:</label>
                <select name="input-profissao" class= "form_input">
                    <option value="aluno" selected>Aluno</option>
                    <option value="professor">Professor</option>
                </select>
                
                <!-- Botão -->
                <input id= "input-cadastrar" type="button" value="Cadastrar" onclick="register_second_part()">
                <p>Já possui uma conta?<br> <a href="../loginPage/login.php">Logar-se</a></p>
                
            </form>
        </div>
    </div>
</body>


<script language= "JavaScript" src="../.js/cadastroJavaScript.js"></script>

<script language="JavaScript">  //máscara para o input de telefone 
    const input = document.querySelector('#input-telefone')

    input.addEventListener('keypress', () => {
        let inputLength = input.value.length

        if(inputLength == 0){
            input.value += '('
        }
        else if(inputLength == 3){
            input.value += ')'
        }
        else if(inputLength == 9){
            input.value += '-'
        }
    })
</script>
</html>