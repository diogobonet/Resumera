<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <title>Usuários</title>
</head>
<body>
    <?php require "../navHeader/header.php"; ?>
    <main>
        <section class="section-principal">
            <div class="content-principal">
                <table>
                    <tr>
                        <td><b>Número</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Email</b></td>
                    </tr>
                    <?php  //vai criar as outras linhas da tabela automaticamente
                        require "../bd/connection.php";
            
                        function mostrarUsuarios($nome, $email, $n){  //template para printar as linhas da table
                            echo "<tr>";
                                echo "<td>" . $n. "</td>";
                                echo "<td>" . $nome. "</td>";
                                echo "<td>" . $email. "</td>";
                            echo "</tr>";
                        }
            
                        $sql = "SELECT email, nome FROM cadastros";
                        $result = $conn->query($sql);
            
                        if($result->num_rows > 0){
                            $i = 1;
                            while($row = $result->fetch_assoc()){
                                mostrarUsuarios($row['nome'], $row['email'], $i);
                                $i += 1;
                            }
                        }
                        else{
                            echo "Nenhum usuário cadastrado.";
                        }
            
                        $conn->close();
                    ?>
                </table>
            </div>
        </section>
    </main>
</body>
</html>