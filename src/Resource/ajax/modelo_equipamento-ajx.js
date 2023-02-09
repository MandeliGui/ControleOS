function CadastrarModeloEquipamento(id_form) {
    if (NotificarCampos(id_form)) {
        let nome_campo = $("#nome_modelo").val();
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
            data: {
                nome_modelo: nome_campo,
                btn_gravar: "ajx"
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form)
                    ConsultarModeloEquipamento();
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function AlterarModeloEquipamento(id_form) {
    if (NotificarCampos(id_form)) {
        let nome_campo = $("#nome_alt").val();
        let id_campo = $("#id_alt").val();
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
            data: {
                nome_alt: nome_campo,
                id_alt: id_campo,
                btn_alterar: "ajx"
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarModeloEquipamento();
                    ESCONDER_MODAL("modal_modelo");
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarModeloEquipamento(){
    let nome_filtro = $("#nome_filtro").val();
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
        data: {
            consultar_ajx: "ajx",
            nome_filtro: nome_filtro
        },success: function(retorno){
            $("#Table_Result").html(retorno)
        }
    })
}

function Excluir(){
    let id_tela = $('#id_del').val();
    $.ajax({

        type: "post",
        url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
        data: {
            id_del: id_tela,
            btn_excluir: 'ajx'
        }, success: function(retorno){
            if(retorno == 1){
                MensagemSucesso();
                ESCONDER_MODAL("modal_excluir");
                ConsultarModeloEquipamento();
            }else{
                MensagemErro();
            }
            
        }
    })
    return false;
}