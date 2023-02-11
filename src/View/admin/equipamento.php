<?php
require_once dirname(__DIR__, 2) . "/Resource/dataview/gerenciar_equipamento-dataview.php";
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    include_once PATH_URL . 'Template/_includes/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        include_once PATH_URL . 'Template/_includes/_topo.php';
        include_once PATH_URL . 'Template/_includes/_menu.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> <?= $acao ?> Equipamento </h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastre os novos equipamentos nessa página</h3>
                    </div>
                    <div class="card-body">
                        <form id="form_cad" action="equipamento.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tipo</label>
                                        <select class="form-control select2 obg" style="width: 100%;" name="tipo" id="tipo">
                                            <option value="">Selecione</option>
                                            <?php foreach ($tipos as $item) { ?>
                                                <option value="<?= $item['id'] ?>">
                                                    <?= $item['nome'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <select class="form-control select2 obg" style="width: 100%;" name="modelo" id="modelo">
                                            <option value="">Selecione</option>
                                            <?php foreach ($modelos as $item) { ?>
                                                <option value="<?= $item['id'] ?>">
                                                    <?= $item['nome'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Identificação</label>
                                        <input type="text" class="form-control obg" name="identificacao" id="identificacao" placeholder="Digite Aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea style="resize: none;" class="form-control obg" name="descricao_equipamento" id="descricao_equipamento" cols="30" rows="5" placeholder="Digite Aqui..."></textarea>
                                    </div>

                                    <button class="btn btn-success" name="btn_gravar" onclick="return CadastrarEquipamento('form_cad')"><?= $acao ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <?php
        include_once PATH_URL . 'Template/_includes/_footer.php';
        ?>
    </div>
    <!-- ./wrapper -->

    <?php
    include_once PATH_URL . 'Template/_includes/_scripts.php';
    include_once PATH_URL . 'Template/_includes/_msg.php';
    ?>

<script src="../../Resource/ajax/equipamento-ajx.js"></script>
</body>

</html>