<?php
//dirname - Sai da pagina 2 niveis e adiciona o caminho
//Dataview - é o arquivo onde vai ficar os códigos (imagine como se fosse aqueles códigos no inicio da tela)
require_once dirname(__DIR__, 2) . '/Resource/dataview/gerenciar_setor-dataview.php';
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
                            <h1>Setores</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gerencie os setores nessa pagina</h3>
                    </div>
                    <div class="card-body">
                        <form id="form_cad" action="gerenciar_setor.php" method="post">
                            <div class="form-group">
                                <label for="">Novo Setor</label>
                                <input type="text" class="form-control obg" name="nome" id="nome" placeholder="digite aqui...">
                            </div>
                            <button class="btn btn-success" name="btn_cadastrar" onclick="return CadastrarSetor('form_cad')">Cadastrar</button>

                        </form>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tipos de equipmentos cadastrados</h3>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" onkeyup="ConsultarSetor()" name="nome_filtro" id="nome_filtro" class="form-control float-right" placeholder="Filtrar">
                                                <div class="input-group-append">
                                                    <button type="button" onclick="ConsultarSetor()" class="btn btn-default"><i class="fas fa-search"></i></button>
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
                                    <form action="gerenciar_setor.php" method="post" id="form_alt">
                                        <?php
                                        include_once 'modals/_setor_alterar.php';
                                        include_once 'modals/_modal_excluir.php';
                                        ?>
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <div id="divLoad"></div>
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
    <script src="../../Resource/ajax/setor-ajx.js"></script>
    <script>
        ConsultarSetor()
    </script>



</body>

</html>