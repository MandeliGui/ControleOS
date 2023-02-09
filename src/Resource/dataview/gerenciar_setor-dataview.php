<?php
require_once '_include_autoload.php';

use Src\VO\SetorVO;
use Src\Controller\GerenciarSetorCTRL;


$ctrl = new GerenciarSetorCTRL;

#Cadastrar
if (isset($_POST['btn_cadastrar'])) {
    $vo = new SetorVO;

    $vo->setNome($_POST['nome']);

    $ret = $ctrl->GerenciarSetorCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx') {
        echo $ret;
    }
}
#Alterar
else if (isset($_POST['btn_alterar'])) {
    $vo = new SetorVO;
    $vo->setNome($_POST['nome_alt']);
    $vo->setId($_POST['id_alt']);
    $ret = $ctrl->AlterarSetorCTRL($vo);
    if($_POST['btn_alterar'] == 'ajx'){
        echo $ret;
    }
}
#Excluir
else if (isset($_POST['btn_excluir'])) {
    $vo = new SetorVO;
    $vo->setId($_POST['id_del']);
    $ret = $ctrl->ExcluirSetorCTRL($vo);
    if($_POST['btn_excluir'] == "ajx"){
        echo $ret;
    }
}
#Consultar
else if (isset($_POST['consulta_ajx']) && ($_POST['consulta_ajx'] == 'ajx')) {
    $tipos = $ctrl->ConsultarSetorCTRL($_POST['nome_filtro']); ?>
    <table class="table table-hover" id="Table_Result">
        <thead>
            <tr>
                <th>Ação</th>
                <th>Setor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipos as $item) { ?>
                <tr>
                    <td><button type="button" class="btn btn-warning btn-xs" data-toggle='modal' data-target='#modal_setor' onclick="CarregarModalAlterarSetor('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Alterar</button>
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_excluir" onclick="ModalExcluir('<?= $item['id'] ?>' , '<?= $item['nome'] ?>')">Excluir</button>
                    </td>
                    <td><?= $item['nome'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>