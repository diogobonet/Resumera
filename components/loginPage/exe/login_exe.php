<?php
    require "../../bd/connection.php";

    if( isset($_POST['input_email']) && isset($_POST['input_senha']) && $_POST['input_email'] != '' && $_POST['input_senha'] != '' ){
        
        $email = $_POST['input_email'];
        $senha = $_POST['input_senha'];

        $sql = "SELECT email, senha FROM cadastros WHERE email = '$email'";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        print_r($row);

        if($row['email'] == $email && $row['senha'] == $senha){

            $sql = "SELECT nome, email, senha, imagem, profissao, bio FROM cadastros WHERE email = '$email'";
            
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
            session_start();

            $_SESSION['nome'] = $row['nome'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['imagem'] = $row['imagem'];
            $_SESSION['profissao'] = $row['profissao'];
            $_SESSION['bio'] = $row['bio'];
            $_SESSION['logado'] = true;

            header('location: ../../home/index.php');
        }
        else{
            header('location: ../login.php?erro=1');
        }
    }
    else{
        header('location: ../login.php?erro=2');
    }
?>