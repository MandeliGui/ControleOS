<?php
require_once "_include_autoload.php";

use Src\Controller\TipoEquipamentoCTRL;
use Src\VO\TipoEquipamentoVO;

$ctrl = new TipoEquipamentoCTRL;
#Cadastrar
if (isset($_POST['btn_cadastrar'])) {
    #Cria o objeto da tela
    $vo = new TipoEquipamentoVO;
    #Seta o valor 
    $vo->setNome($_POST['nome_tipo']);
    $ret = $ctrl->CadastrarTipoEquipamentoCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx') {
        echo $ret;
    }
}
#Alterar 
else if (isset($_POST['btn_alterar'])) {
    $vo = new TipoEquipamentoVO();
    $vo->setNome($_POST['nome_alt']);
    $vo->setId($_POST['id_alt']);
    $ret = $ctrl->AlterarTipoEquipamentoCTRL($vo);
    if($_POST['btn_alterar'] == 'ajx'){
        echo $ret;
    }
} 
#Excluir
else if (isset($_POST['btn_excluir'])) {
    $vo = new TipoEquipamentoVO();
    $vo->setId($_POST['id_del']);
    $ret = $ctrl->DeletarTipoEquipamentoCTRL($vo);
    if($_POST['btn_excluir'] == 'ajx'){
        echo $ret;
    }
} 
#Consultar
else if (isset($_POST['consultar_ajx']) && ($_POST['consultar_ajx'] == 'ajx')) {
    $tipos = $ctrl->ConsultarTipoEquipamentoCTRL($_POST['nome_filtro']); ?>

    <table class="table table-hover" id="Table_Result">
        <thead>
            <tr>
                <th>Ação</th>
                <th>Tipo de Equipamento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipos as $item) { ?>
                <tr>
                    <td>
                        <button type="button" class="btn btn-warning btn-xs" data-toggle='modal' data-target='#modal_tipo' onclick="CarregarModalAlterarTipoEquipamento('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Alterar</button>
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_excluir" onclick="ModalExcluir('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Excluir</button>
                    </td>
                    <td><?= $item['nome'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>