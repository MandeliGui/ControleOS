function CadastrarTipoEquipamento(id_form) {
    
    if (NotificarCampos(id_form)) {
        let palavra_campo = $("#nome_tipo").val();
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
            data: {
                nome_tipo: palavra_campo,
                btn_cadastrar: 'ajx'
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarTipoEquipamento();
                } 
                else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function AlterarTipoEquipamento(id_form) {
    
    if (NotificarCampos(id_form)) {
        let palavra_campo = $("#nome_alt").val();
        let id_campo = $("#id_alt").val();
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
            data: {
                nome_alt: palavra_campo,
                id_alt: id_campo,
                btn_alterar: 'ajx'
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form)
                    ConsultarTipoEquipamento();
                    ESCONDER_MODAL("modal_tipo");
                } 
                else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarTipoEquipamento(){
    let nome_pesquisar = $("#nome_filtro").val();
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
        data: { 
            consultar_ajx: "ajx",
            nome_filtro: nome_pesquisar
        },success: function(retorno){
            $("#Table_Result").html(retorno);
        }
    })
}

function Excluir(){
    let id_tela = $('#id_del').val();
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
        data: {
            id_del: id_tela,
            btn_excluir: 'ajx'
        }, success: function(retorno){
            if(retorno == 1){
                MensagemSucesso();
                ConsultarTipoEquipamento();
                ESCONDER_MODAL("modal_excluir");
            }else{
                MensagemErro();
            }
        }
    })
    return false;
}


