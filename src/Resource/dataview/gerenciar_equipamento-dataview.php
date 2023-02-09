<?php
require_once "_include_autoload.php";

use Src\VO\EquipamentoVO;
use Src\Controller\EquipamentoCTRL;
use Src\Controller\ModeloEquipamentoCTRL;
use Src\Controller\TipoEquipamentoCTRL;
use Src\VO\TipoEquipamentoVO;

$tipo = new TipoEquipamentoCTRL;
$modelo = new ModeloEquipamentoCTRL;
$ctrl = new EquipamentoCTRL;

$tipos = $tipo->ConsultarTipoEquipamentoCTRL();
$modelos = $modelo->ConsultarModeloEquipamentoCTRL();
#Cadastrar
if (isset($_POST['btn_gravar'])) {
    $vo = new EquipamentoVO;

    $vo->setIdTipoEquipamento($_POST['tipo']);
    $vo->setIdModeloEquipamento($_POST['modelo']);
    $vo->setIdentificacao($_POST['id_equipamento']);
    $vo->setDescricao($_POST['descricao_equipamento']);



    $ret = $ctrl->EquipamentoCTRL($vo);

    if ($_POST['btn_gravar'] == 'ajx') {
        echo $ret;
    }
} 
#Excluir
else if (isset($_POST['btn_excluir'])) {
    $vo = new EquipamentoVO;
    $vo->setId($_POST['id_del']);

    $ret = $ctrl->ExcluirEquipamentoCTRL($vo);

    if ($_POST['btn_excluir']) {
        echo $ret;
    }
} 
#Consultar
else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {
    $equipamentos = $ctrl->ConsultarEquipamentoCTRL($_POST['busca_tipo']); ?>
    <table class="table table-hover" id="Table_Result">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Identificação</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipamentos as $item) { ?>
                <tr>
                    <td><?= $item['tipo'] ?></td>
                    <td><?= $item['modelo'] ?></td>
                    <td><?= $item['identificacao'] ?></td>
                    <td><?= $item['descricao'] ?></td>
                    <td>
                        <button href="#" type="button" data-toggle="modal" data-target="" class="btn btn-warning btn-xs">Alterar</button>
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_excluir" onclick="ModalExcluir('<?= $item['id'] ?>' , '<?= '<br> Tipo: ' . $item['tipo'] . ' <br> Modelo: ' . $item['modelo'] . ' <br> Identificação: ' . $item['identificacao'] ?> ')">Excluir</button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>


<?php }
