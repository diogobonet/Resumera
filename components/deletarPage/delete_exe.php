<?php
    require "../bd/connection.php";

    session_start();
    $email = $_SESSION['email'];  //puxa o email da pessoa logada

    $sql = "DELETE FROM cadastros WHERE email = '$email'";  //exlui os dados da pessoa logada
    
    if($conn->query($sql) === true){
        header ("Location: ../landingPage/index.html");
        
    }
    else{
        header ("Location: ../editProfilePage/editprofile.php?erro=1");
        
    }
?>