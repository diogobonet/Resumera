<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="midia/R.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <title>Login | Resumera</title>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <div id="div-esquerda">
                    <form action="exe/login_exe.php" method="post">
                        <label for="">E-mail</label>
                        <input class="form_input" type="email" name="input_email" id="email" placeholder="Digite seu E-mail...">
                        <label for="">Senha</label>
                        <input class="form_input" type="password" name="input_senha" id="senha" placeholder="Digite sua senha...">
                        <input id="input-prosseguir" type="submit" value="Logar">
                    </form>
                    <?php
                        if (isset($_GET['erro'])){
                            if($_GET['erro'] == 1){
                                echo "<p style='color:red';>Conta não encontrada.</p>";
                            }
                            else if($_GET['erro'] == 2){
                                echo "<p style='color:red';>Favor preencher todos os campos.</p>";
                            }
                        }
                    ?>
                    <br>
                    <p>Ainda não possui uma conta no <strong>Resumera</strong>?<br> <a href="../signInPage/cadastro.php">Criar uma conta</a></p>
                </div>
                <div id="div-direita">
                    <img id="img-logo" src="midia/ResumeraLogo3 (1).gif">
                </div>
                        
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>