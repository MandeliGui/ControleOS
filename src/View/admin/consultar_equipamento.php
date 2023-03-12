<?php
#Sai da pagina 3 niveis e adiciona o caminho
require_once dirname(__DIR__, 2) . "/Resource/dataview/gerenciar_equipamento-dataview.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include_once PATH_URL . 'Template/_includes/_head.php'
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php
        include_once PATH_URL . '/Template/_includes/_topo.php';
        include_once PATH_URL . '/Template/_includes/_menu.php';
        ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Consultar Equipamentos</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Voce realizará consultas de equipamentos nessa pagina</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Tipo</label>
                                <select class="form-control select2 obg" style="width: 100%;" onchange="ConsultarEquipamento()" name="filtro_tipo" id="filtro_tipo">
                                    <option value="">- SEM FILTRO - </option>
                                    <?php foreach ($tipos as $item) { ?>
                                        <option value="<?= $item['id'] ?>">
                                            <?= $item['nome'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Modelo</label>
                                <select class="form-control select2 obg" style="width: 100%;" onchange="ConsultarEquipamento()" name="filtro_modelo" id="filtro_modelo">
                                    <option value="">- SEM FILTRO - </option>
                                    <?php foreach ($modelos as $item) { ?>
                                        <option value="<?= $item['id'] ?>">
                                            <?= $item['nome'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Equipmentos cadastrados</h3>
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" onkeyup="ConsultarEquipamento()" name="nome_filtro" id="nome_filtro" class="form-control float-right" placeholder="Identificação" value="<?= $_GET['ident'] ?? ''?>">

                                                <div class="input-group-append">
                                                    <button type="button" onclick="ConsultarModeloEquipamento()" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover" id="Table_Result">

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <?php
                            include_once 'modals/_modal_excluir.php';
                            ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php
        include_once PATH_URL . 'Template/_includes/_footer.php'
        ?>
    </div>
    <!-- ./wrapper -->

    <?php
    include_once PATH_URL . 'Template/_includes/_scripts.php';
    include_once PATH_URL . 'Template/_includes/_msg.php';
    ?>
    <script src="../../Resource/ajax/equipamento-ajx.js"></script>
    <script>
        ConsultarEquipamento()
    </script>
</body>

</html>