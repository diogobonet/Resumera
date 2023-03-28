<?php
require "../bd/connection.php";
$logged_email = $_SESSION['email'];

#Estrutura utilizado para mostrar cada postagem já feita no site.
function showPosts($post_name, $post_text, $post_user_image, $post_data, $post_id, $logged_email){
    echo "<ul class='posts'>";
    echo "<li class='post'>";
    echo "<div class='infoUser'>";
    echo "<div class='imgUserPost'><img class='imgUser' src='data:image;base64,".base64_encode($post_user_image)."' alt='Foto do usuário'></div>";
    echo "<div class='nameAndHour'>";
    echo "<strong>$post_name</strong>";
    echo "<p>$post_data</p>";
    echo "</div>";
    echo "</div>";
    echo "<p class='post_text'>$post_text</p>";

    echo "<div class='actionBtnPost'>";
    echo "<button onclick='curtir_postagem(" . "$logged_email" . "," . "$post_id" .")' type='button' class='filesPost like'><img src='assets/like1.svg' alt='Curtir'>Curtir</button>";
    echo "<button type='button' class='filesPost comment'><img src='assets/chat.svg' alt='Comentar'>Comentar</button>";
    echo "<button type='button' class='filesPost share'><img src='assets/share.svg' alt='Compartilhar'>Compartilhar</button>";
    echo "</div>";
    echo "</li>";
    echo "</ul>";
}

$sql = "SELECT postagem.id, resumo, nome, imagem, post_data FROM `postagem`, `cadastros` WHERE FK_email = email ORDER BY id DESC;";
$query = $conn->query($sql);

    if($query->num_rows > 0){
        while($result = $query->fetch_assoc()){
            showPosts($result['nome'], $result['resumo'], $result['imagem'], $result['post_data'], $result['id'], $logged_email);
        }
    }else{
        echo "<h1>Nenhum resumo postado até agora!</h1>";
    }



?>