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
                        <form action="consultar_equipamento.php" method="post">
                            <div class="form-group">
                                <label for="">Pesquisar por Tipo</label>
                                <input type="text" class="form-control" onkeyup="ConsultarEquipamento()" name="busca_tipo" id="busca_tipo" placeholder="digite aqui...">
                            </div>
                            <button type="button" onclick="ConsultarEquipamento()" class="btn btn-success" name="btn_buscar">Buscar</button>
                        </form>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Equipmentos cadastrados</h3>


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
    <script>ConsultarEquipamento()</script>
</body>

</html>