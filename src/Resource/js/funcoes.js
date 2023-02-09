function BASE_URL(nome_arquivo) {
    return "../../Resource/dataview/" + nome_arquivo + ".php";
}

function BASE_URL_GET(nome_arquivo) {
    return "../../Resource/dataview/" + nome_arquivo;
}

function ESCONDER_MODAL(id_modal){
    $("#" + id_modal).modal("hide");
}

function LimparCampos(id_form) {
    $("#" + id_form + " input, #" + id_form + " select, #" + id_form + " textarea").each(function () {

        $(this).removeClass("is-valid");
        $(this).val("");
    })
}

function NotificarCampos(id_form) {
    let ret = true;




    $("#" + id_form + " input, #" + id_form + " select, #" + id_form + " textarea").each(function () {
        if ($(this).hasClass("obg")) {


            if ($(this).val().trim() == "") {
                ret = false;
                $(this).addClass("is-invalid");
            } else {
                $(this).addClass("is-valid").removeClass("is-invalid");
            }


        }

    })


    if (!ret) {
        MensagemCampoObrigatorio();
    }
    return ret;

}

