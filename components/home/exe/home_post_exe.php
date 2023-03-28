<?php
    require "../../bd/connection.php";
    //startando sessão para pegar os dados da conta logada.
    session_start();

    //caso tenha feito um post e estiver logado, será mandado ao banco de dados.
    if(isset($_POST['textarea']) && $_SESSION['logado'] == true){
        //para não dar problema ao colocar no comando SQL, transformei primeiro em uma variável.
        $resumo = $_POST['textarea'];
        $email = $_SESSION['email'];

        $sql = "INSERT INTO postagem (resumo, FK_email) VALUES ('$resumo', '$email')";

        //mandando o comando para o banco de dados salvar
        $conn->query($sql);

        //voltando para a página de postagens
        header("location: ../index.php");
    }
?>