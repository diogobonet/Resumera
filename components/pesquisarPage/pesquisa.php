<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="midia/R.png" type="image/x-icon">
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <link rel="stylesheet" href="../home/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href=".../midia/!.png" type="image/x-icon">
</head>
<body>
    <?php require "../navHeader/header.php" ?>

    <main>
        <div>
            <?php
                require "../bd/connection.php";

                function mostrarUsuarios($nome, $bio, $imagem){  //template para printar as linhas da table
                    echo"<section class='main'>";
                    echo"<div class='result'>";
                    echo"<div class='content'>";
                    echo"<div class='flex-img'>";
                    echo"<div class='div-img'><img class='img' src='data:image;base64,".base64_encode($imagem)."' alt= 'Foto do usuário'></div>";
                    echo"<h1 class='name-label'>$nome</h1>";
                    echo("</div>");
                    echo("<h2 class='bio-label'>$bio</h2>");
                    echo("</div>");
                    echo("</div>");
                    echo("</section>");
                }

                $search = $_GET['pesquisar'];
                // Title da Pagína
                echo("<title> $search | Resultados no Resumera</title>");
                   

                $sql = "SELECT nome, bio, imagem FROM cadastros WHERE nome LIKE '$search%'"; //seleciona apenas os usuários que estão de acordo com o nome digitado na barra de p
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    echo "<h1 class='headingPage'>Resultados obtidos</h1>";
                    while($row = $result->fetch_assoc()){
                        mostrarUsuarios($row['nome'], $row['bio'], $row['imagem']);
                    }
                }
                else{
                    echo "Nenhum usuário encontrado.";
                }

                $conn->close();
            ?>
        </div>

        
    </main>
</body>
</html>