//Basicamente esse arquivo só define a mensagem que será exibida no aviso.

function RetornarMsg(ret){
    let msg ='';

    switch(ret){
        case -2:
            msg = 'Impossivel excluir registro, pois item ja esta em uso';
            break;
        case -1:
            msg = 'Ocorreu um erro na operação';
            break;
        case 0:
            msg = 'Preenha todo(s) o(s) campo(s) obrigatório(s)';
            break;
        case 1:
            msg = 'Ação Realizada com sucesso';
            break;
    }
    return msg;
}