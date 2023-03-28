var input_nome = document.getElementById("input-nome");
var input_senha = document.getElementById("input-senha");
var input_confirm = document.getElementById("input-confirmar");
var input_email = document.getElementById("input-email");
var input_telefone = document.getElementById("input-telefone");

var form = document.getElementById("form-register");
var form2 = document.getElementById("form-register2");







function register_first_part() {

    const reName = /^[\w\W]{1,150}$/;
    const reEmail = /^[\w0-9\..]{1,}@[\w0-9]+\..{1,}$/;
    const rePassword = /^.{6,}$/;

    function isName(name){
        return (reName.test(name))
    }

    function isEmail(email){
        return (reEmail.test(email))
    }

    function isPValid(password){
        return (rePassword.test(password))
    }


   if(input_nome.value == ""){
    input_nome.focus()
   }
   else if(input_email.value == ""){
    input_email.focus()
   }

   else if(input_senha.value == ""){
    input_senha.focus()
   }

   else if(input_confirm.value == ""){
    input_confirm.focus()
   }

   else if(isName(input_nome.value) == false){
    alert("Nome inválido! Apenas de 1 a 150 LETRAS \n será aceito!")
    input_nome.value = "";
    input_nome.focus();
   }   

   else if(isEmail(input_email.value) == false){
    alert("E-mail inválido!")
    input_email.value = "";
    input_email.focus();
   }

   else if(isPValid(input_senha.value) == false){
    alert("Senha inválida!");
    input_senha.value = "";
    input_confirm.value = "";
   }

   else if(isName(input_nome.value) == true && isEmail(input_email.value) == true && isPValid(input_senha.value) == true && input_senha.value != input_confirm.value){
    alert("Senhas nao coincidem! Tente novamente...");
    input_confirm.value = "";
   }

   else if(isName(input_nome.value) == true && isEmail(input_email.value) == true && isPValid(input_senha.value) == true && input_senha.value == input_confirm.value){
    form.submit();
   }
}

function register_second_part(){
    const reTelefone = /^\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}$/;
    
    function isTelefone(telefone){
        return (reTelefone.test(telefone))
    }
    //Temporariamente sem validação (uso de RegeX)
    if(isTelefone(input_telefone.value) == true){
        form2.submit();
    }
    else{
        alert("O telefone deve estar no formato: \n (XX)XXXXX-XXXX");
        input_telefone.value = "";
    }
}

function trocar_logo(){
    let img = document.getElementById("logo_img");

    img.src = "midia/ResumeraLogoPNG.png";
}