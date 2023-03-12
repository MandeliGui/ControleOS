function CadastrarEquipamento(id_form) {
    let tipo = $("#tipo").val();
    let modelo = $("#modelo").val();
    let identificacao = $("#identificacao").val();
    let descricao = $("#descricao_equipamento").val();

    if (NotificarCampos(id_form)) {
        CarregarTela();
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_equipamento-dataview"),
            data: {
                tipo: tipo,
                modelo: modelo,
                identificacao: identificacao,
                descricao_equipamento: descricao,
                btn_gravar: "ajx"
            }, success: function (retorno) {
                EncerrarTela();
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function AlterarEquipamento(id_form) {
    let tipo = $("#tipo").val();
    let modelo = $("#modelo").val();
    let identificacao = $("#identificacao").val();
    let descricao = $("#descricao_equipamento").val();
    let id_alt = $("#id_alt").val();

    if (NotificarCampos(id_form)) {
        CarregarTela()
        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_equipamento-dataview"),
            data: {
                tipo: tipo,
                modelo: modelo,
                identificacao: identificacao,
                descricao_equipamento: descricao,
                id_alt: id_alt,
                btn_alterar: "ajx"
            }, success: function (retorno) {
                EncerrarTela();
                if (retorno == 1) {
                    MensagemSucesso();
                    setTimeout(function () { location = 'consultar_equipamento.php?ident=' + identificacao }, 1000)

                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarEquipamento() {
    let filtro = $("#nome_filtro").val();
    let tipo = $("#filtro_tipo").val();
    let modelo = $("#filtro_modelo").val();
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_equipamento-dataview"),
        data: {
            consultar_ajx: "ajx",
            nome_filtro: filtro,
            filtro_tipo: tipo,
            filtro_modelo: modelo
        }, success: function (retorno) {
            $("#Table_Result").html(retorno);
        }
    })
}

function Excluir() {
    let id_del = $("#id_del").val();
    $.ajax({

        type: "post",
        url: BASE_URL("gerenciar_equipamento-dataview"),
        data: {
            id_del: id_del,
            btn_excluir: 'ajx'
        }, success: function (retorno) {
            if (retorno == 1) {
                MensagemSucesso();
                ESCONDER_MODAL("modal_excluir");
                ConsultarEquipamento();
            } else if (retorno == -1) {
                MensagemErro();
            }

        }
    })
    return false;
}
