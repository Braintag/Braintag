function validarSenha(){
    const senha = document.getElementById("senha").value;
    const confirma = document.getElementById("confirmar-senha").value;
    const mensagemErro = document.getElementById("erro-senha");

    if(senha == confirma) {
        return true;
    }

    else {
        mensagemErro.style.visibility = "visible"
        return false;
    }
}