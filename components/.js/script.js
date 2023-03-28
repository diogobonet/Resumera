function trocarDePagina(link){
    document.location.href = link;
}

function confirm_delete(){
    let resposta = confirm("Você deseja mesmo deletar sua conta?");
    
    if(resposta == true){
        trocarDePagina("../deletarPage/delete_exe.php");
    }
    else{
        return;    
    }
}

function logar(){
    var login = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
}

function sendForm(){
    let pesquisa = document.getElementById("pesquisar");

    if (pesquisa.value == '') {
        alert('Por favor, digite algo na barra de pesquisa.');
        pesquisa.focus();
        return;
    }
    else {
        let form = document.getElementById("form_search");
        form.submit();
        return;
    }
}