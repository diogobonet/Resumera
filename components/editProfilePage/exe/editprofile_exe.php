<?php
    require "../../bd/connection.php";


    session_start();

    //trazendo o email que está logado no momento (desde o login.php)
    $email = $_SESSION['email'];

    /*Caso o usuário tenha clicado no botão "update" no editprofile.php, será enviado para essa página o ($_POST['update'])
    essa verificação apenas serve para ver se o usuário realmente veio da edição de perfil.*/
    if(file_exists($_FILES['change_image_input']['tmp_name'])){

        /*Confesso que eu não sei muito bem como funciona esse comando, mas quando da um input de imagem é criado
        pelo php o $_FILES com o nome do input usado*/
        $file = addslashes(file_get_contents($_FILES['change_image_input']['tmp_name']));

        /* Atualização da nova imagem no banco de dados da conta logada */
        $sql = "UPDATE cadastros SET imagem = '$file' WHERE email = '$email'";
        $result = $conn->query($sql);

        // Puxando o novo valor da imagem relacionada à pessoa logada
        $sql = "SELECT imagem FROM cadastros WHERE email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        // Atualizando na SESSION a nova imagem
        $_SESSION['imagem'] = $row['imagem'];
    
    }

    /*Caso o usuário tenha enviado algum nome para ser trocado por meio do ($_POST['change_name_input'])
    essa verificação apenas serve para ver se o usuário realmente veio da edição de perfil.*/
    if( isset($_POST['change_name_input']) && ($_POST['change_name_input'] != '') ){

        $nome = $_POST['change_name_input'];

        /* Atualização da nova nome no banco de dados da conta logada */
        $sql = "UPDATE cadastros SET nome = '$nome' WHERE email = '$email'";
        $result = $conn->query($sql);

        // Puxando o novo valor do nome relacionada à pessoa logada
        $_SESSION['nome'] = $nome;
    }

    if( isset($_POST['change_bio_input']) && ($_POST['change_bio_input'] != '') ){

        $bio = $_POST['change_bio_input'];

        /* Atualização da nova nome no banco de dados da conta logada */
        $sql = "UPDATE cadastros SET bio = '$bio' WHERE email = '$email'";
        $result = $conn->query($sql);

        // Puxando o novo valor do nome relacionada à pessoa logada
        $_SESSION['bio'] = $bio;
    }


    else{
        echo"ERRO GIGANTESCO";
        header('location: ../../loginPage/login.php');
    }
    header('location: ../editprofile.php');
?>