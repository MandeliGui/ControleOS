// "Escolhe" qual modelo de mensagem vai ser usado e a mensagem que sera enviada, no caso vai ser substituida pelo resultado da função RetornarMsg()

function MensagemErroExcluir(){
    toastr.error(RetornarMsg(-2));
}

function MensagemErro(){
    toastr.error(RetornarMsg(-1));
}

function MensagemCampoObrigatorio(){
    toastr.warning(RetornarMsg(0));
}

function MensagemSucesso(){
    toastr.success(RetornarMsg(1));
}