<?php
    require "../../bd/connection.php";

    $email_logado = $_GET['email_logado'];
    $id_post = $_GET['id_post'];

    $sql = "INSERT INTO curtidas(email_curtiu, FK_id_post, curtiu) VALUES ('$email_logado', '$id_post', '1')";
    $conn->query($sql);
?>