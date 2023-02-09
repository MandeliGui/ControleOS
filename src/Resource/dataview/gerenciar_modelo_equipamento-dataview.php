<?php

require_once "_include_autoload.php";

use Src\Controller\ModeloEquipamentoCTRL;
use Src\VO\ModeloEquipamentoVO;

$ctrl = new ModeloEquipamentoCTRL;
#Cadastrar
if (isset($_POST['btn_gravar'])) {
    $vo = new ModeloEquipamentoVO;

    $vo->setNome($_POST['nome_modelo']);

    $ret = $ctrl->ModeloEquipamento($vo);

    if ($_POST['btn_gravar'] == 'ajx') {
        echo $ret;
    }
} 
#Alterar
else if (isset($_POST['btn_alterar'])) {
    $vo = new ModeloEquipamentoVO;
    $vo->setNome($_POST['nome_alt']);
    $vo->setId($_POST['id_alt']);
    $ret = $ctrl->AlterarModeloEquipamentoCTRL($vo);
    if($_POST['btn_alterar'] == 'ajx'){
        echo $ret;
    }
} 
#Excluir
else if (isset($_POST['btn_excluir'])) {
    $vo = new ModeloEquipamentoVO;
    $vo->setId($_POST['id_del']);
    $ret = $ctrl->ExcluirModeloEquipamentoCTRL($vo);
    
    if($_POST['btn_excluir'] == 'ajx'){
        echo $ret;
    }
} 
#Consultar
else if (isset($_POST['consultar_ajx']) && ($_POST['consultar_ajx'] == 'ajx')) {
    $tipos = $ctrl->ConsultarModeloEquipamentoCTRL($_POST['nome_filtro']); ?>
    <table class="table table-hover" id="Table_Result">
        <thead>
            <tr>
                <th>Nome do modelo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipos as $item) { ?>
                <tr>
                    <td><?= $item['nome'] ?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-xs" data-toggle='modal' data-target='#modal_modelo' onclick="CarregarModalAlterarModelo('<?= $item['id'] ?>','<?= $item['nome'] ?>')">Alterar</button>
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_excluir" onclick="ModalExcluir('<?= $item['id'] ?>' , '<?= $item['nome'] ?>')">Excluir</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>