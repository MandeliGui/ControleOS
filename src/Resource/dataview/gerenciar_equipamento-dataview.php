<?php
require_once "_include_autoload.php";

use Src\_Public\Util;
use Src\VO\EquipamentoVO;
use Src\Controller\EquipamentoCTRL;
use Src\Controller\ModeloEquipamentoCTRL;
use Src\Controller\TipoEquipamentoCTRL;


$ctrl = new EquipamentoCTRL;
$tipos = (new TipoEquipamentoCTRL)->ConsultarTipoEquipamentoCTRL();
$modelos = (new ModeloEquipamentoCTRL)->ConsultarModeloEquipamentoCTRL();

$acao = 'Cadastrar';
$botao = 'gravar';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $acao = 'Alterar';
    $botao = 'alterar';


    $dados = $ctrl->DetalharEquipamentoCTRL($_GET['id']);
    if (empty($dados)) {
        Util::ChamarPagina('consultar_equipamento');
    }
}
#Cadastrar
if (isset($_POST['btn_gravar'])) {
    $vo = new EquipamentoVO;

    $vo->setIdTipoEquipamento($_POST['tipo']);
    $vo->setIdModeloEquipamento($_POST['modelo']);
    $vo->setIdentificacao($_POST['identificacao']);
    $vo->setDescricao($_POST['descricao_equipamento']);



    $ret = $ctrl->EquipamentoCTRL($vo);

    if ($_POST['btn_gravar'] == 'ajx') {
        echo $ret;
    }
}
#Alterar
else if (isset($_POST['btn_alterar'])) {
    $vo = new EquipamentoVO;

    $vo->setIdTipoEquipamento($_POST['tipo']);
    $vo->setIdModeloEquipamento($_POST['modelo']);
    $vo->setIdentificacao($_POST['identificacao']);
    $vo->setDescricao($_POST['descricao_equipamento']);
    $vo->setId($_POST['id_alt']);


    $ret = $ctrl->AlterarEquipamentoCTRL($vo);

    
    if ($_POST['btn_alterar'] == 'ajx') {
        echo $ret;
    }
    
}
#Excluir
else if (isset($_POST['btn_excluir'])) {
    $vo = new EquipamentoVO;
    $vo->setId($_POST['id_del']);

    $ret = $ctrl->ExcluirEquipamentoCTRL($vo);

    if ($_POST['btn_excluir'] == 'ajx') {
        echo $ret;
    }
}
#Consultar
else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {
    $equipamentos = $ctrl->ConsultarEquipamentoCTRL($_POST['nome_filtro'], $_POST['filtro_tipo'], $_POST['filtro_modelo']);
?>
    <table class="table table-hover" id="Table_Result">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Identifica????o</th>
                <th>Descri????o</th>
                <th>A????o</th>
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
                        <a href="equipamento.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-xs" onclick="PegarIdAlterarEquipamento(<?= $item['id'] ?>">Alterar</a>
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_excluir" onclick="ModalExcluir('<?= $item['id'] ?>' , '<?= '<br> Tipo: ' . $item['tipo'] . ' <br> Modelo: ' . $item['modelo'] . ' <br> Identifica????o: ' . $item['identificacao'] ?> ')">Excluir</button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>


<?php }
