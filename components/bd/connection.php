<?php
    $servername = 'localhost';
    $username = 'danieljogadas';
    $password = 'boanoitepessoal';
    $bd = 'resumera_tmp';

    // Conectando ao banco de dados 'cadastros'
    $conn = new mysqli($servername, $username, $password, $bd);

    // Verificando a conexão e expondo o erro caso ocorra
    if($conn->connect_error){
        die('Erro ao tentar se conectar: ' . $conn->connect_error);
    }
?>