<?php
#Sai da pagina 3 niveis e adiciona o caminho
require_once dirname(__DIR__, 3) . '/vendor/autoload.php';
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
                            <h1>Consultar Chamados</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Voce realizará consultas dos chamados nessa pagina</h3>
                    </div>
                    <div class="card-body">
                        <form action="consultar_chamado.php" method="post">
                            <div class="form-group">
                                <label for="">Escolha a Situação</label>
                                <select class="form-control select2" style="width: 100%;" name="situacao" id="situacao">
                                    <option value="0">Selecione</option>
                                </select>
                            </div>
                            <button class="btn btn-success" name="btn_buscar">Buscar</button>
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
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Data Abertura</th>
                                                    <th>Funcionário</th>
                                                    <th>Equipamento</th>
                                                    <th>Problema</th>
                                                    <th>Data Atendimento</th>
                                                    <th>Técnico</th>
                                                    <th>Data Encerramento</th>
                                                    <th>Laudo</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>(Abertura)</td>
                                                    <td>(Funcionario)</td>
                                                    <td>(Equipamento)</td>
                                                    <td>(Problema)</td>
                                                    <td>(Atendimento)</td>
                                                    <td>(Tecnico)</td>
                                                    <td>(Encerramento)</td>
                                                    <td>(Laudo)</td>
                                                    <td><a href="#" type="button" class="btn btn-success btn-xs">Ver Mais</a>
                                                        <a href="#" type="button" class="btn btn-warning btn-xs">Atender</a>
                                                        <a href="#" class="btn-xs">Finalizar</a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
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
        include_once PATH_URL . 'Template/_includes/_footer.php'
        ?>
    </div>
    <!-- ./wrapper -->

    <?php
    include_once PATH_URL . 'Template/_includes/_scripts.php'
    ?>
</body>

</html>