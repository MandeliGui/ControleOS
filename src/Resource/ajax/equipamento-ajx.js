function CadastrarEquipamento(id_form){
    let tipo = $("#tipo").val();
    let modelo = $("#modelo").val();
    let identificacao = $("#id_equipamento").val();
    let descricao = $("#descricao_equipamento").val();

    if(NotificarCampos(id_form)){
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_equipamento-dataview"),
            data: {
                tipo: tipo,
                modelo: modelo,
                id_equipamento: identificacao,
                descricao_equipamento: descricao,
                btn_gravar: "ajx"
            }, success: function(retorno){
                if(retorno == 1){
                    MensagemSucesso();
                    LimparCampos(id_form);
                }else if(retorno == -1){
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarEquipamento(){
    let filtro = $("#busca_tipo").val();
    $.ajax({
        type:"post",
        url: BASE_URL("gerenciar_equipamento-dataview"),
        data: {
            consultar_ajx: "ajx",
            busca_tipo: filtro
        },success: function(retorno){
            $("#Table_Result").html(retorno);
        }
    })
}

function Excluir(){
    let id_del = $("#id_del").val();
    $.ajax({
        
        type: "post",
        url: BASE_URL("gerenciar_equipamento-dataview"),
        data: {
            id_del: id_del,
            btn_excluir: 'ajx'
        }, success: function(retorno){
            if(retorno == 1){
                MensagemSucesso();
                ESCONDER_MODAL("modal_excluir");
                ConsultarEquipamento();
            }else if(retorno == -1){
                MensagemErro();
            }
            
        }
    })
    return false;
}
