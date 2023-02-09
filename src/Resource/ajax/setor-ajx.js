function CadastrarSetor(id_form) {
    let nome_campo = $("#nome").val();
    if (NotificarCampos(id_form)) {
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_setor-dataview"),
            data: {
                nome: nome_campo,
                btn_cadastrar: "ajx"
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarSetor();
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function AlterarSetor(id_form) {
    let nome_campo = $("#nome_alt").val();
    let id_campo = $("#id_alt").val();
    if (NotificarCampos(id_form)) {
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_setor-dataview"),
            data: {
                nome_alt: nome_campo,
                id_alt: id_campo,
                btn_alterar: "ajx"
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarSetor();
                    ESCONDER_MODAL("modal_setor ")
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarSetor() {
    let nome_filtro = $("#nome_filtro").val();
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_setor-dataview"),
        data: {
            consulta_ajx: "ajx",
            nome_filtro: nome_filtro
        }, success: function (retorno) {
            $("#Table_Result").html(retorno);
        }
    })
}

function Excluir(){
    let id_tela = $('#id_del').val();
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_setor-dataview"),
        data: {
            id_del: id_tela,
            btn_excluir: 'ajx'
        }, success: function(retorno){
            if(retorno == 1){
                MensagemSucesso();
                ConsultarSetor();
                ESCONDER_MODAL("modal_excluir");
            }else{
                MensagemErro();
            }
        }
    })
    return false;
}