<?php
    require "bd/connection.php";

    $sql = "SELECT nome, senha FROM cadastros";

    $resultado = $conn->query($sql);
    echo "<h1 style='color:red'>" . print_r($resultado) . "</h1>";

    $resultadoFetch = $resultado->fetch_assoc();
    echo "<h1 style='color:blue'>" . print_r($resultadoFetch) . "</h1>";

    if($resultado->num_rows > 0){
        while($lista = $resultado->fetch_assoc()){
            echo "Nome: " . $lista['nome'] . " Senha: " . $lista['senha'];
        }
    }
    else{
        echo "Nenhum usuário cadastrado.";
    }
?>