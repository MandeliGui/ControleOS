<?php
#Sai da pagina 2 niveis e adiciona o caminho
require_once dirname(__DIR__, 2) . '/Resource/dataview/gerenciar_modelo_equipamento-dataview.php';
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
                            <h1>Gerenciar modelo de equipamento</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Voce realizará o gerenciamento de modelos de equipamento nessa pagina</h3>
                    </div>
                    <div class="card-body">
                        <form id="form_cad" action="gerenciar_modelo_equipamento.php" method="post">
                            <div class="form-group">
                                <label for="">Nome do modelo</label>

                                <input type="text" class="form-control obg" name="nome_modelo" id="nome_modelo" placeholder="digite aqui...">
                            </div>
                            <button class="btn btn-success" name="btn_gravar" onclick="return CadastrarModeloEquipamento('form_cad')">Gravar</button>

                        </form>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Modelos cadastrados</h3>
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" onkeyup="ConsultarModeloEquipamento()" name="nome_filtro" id="nome_filtro" class="form-control float-right" placeholder="Filtrar">

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
                                    <form action="gerenciar_modelo_equipamento.php" method="post" id="form_alt">
                                        <?php
                                        include_once 'modals/_tipo_modelo_equipamento.php';
                                        include_once 'modals/_modal_excluir.php';
                                        ?>
                                    </form>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
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
        include_once PATH_URL . 'Template/_includes/_footer.php';
        ?>
    </div>
    <!-- ./wrapper -->


    <?php
    include_once PATH_URL . 'Template/_includes/_scripts.php';
    include_once PATH_URL . 'Template/_includes/_msg.php';
    ?>

    <script src="../../Resource/ajax/modelo_equipamento-ajx.js"></script>
    <script>
        ConsultarModeloEquipamento()
    </script>
</body>

</html>