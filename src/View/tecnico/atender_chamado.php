<?php
require_once dirname(__DIR__, 3) . "/vendor/autoload.php";
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
                            <h1>Atender Chamados</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Realize seus atendimentos aqui</h3>
                    </div>
                    <div class="card-body">
                        <form action="atender_chamado.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Data</label>
                                            <input type="date" disabled class="form-control" name="data" id="data" placeholder="Digite Aqui...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Funcioanario</label>
                                            <input type="text" disabled class="form-control" name="funcioanario" id="funcioanario" placeholder="Digite Aqui...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Setor</label>
                                            <input type="text" disabled class="form-control" name="setor" id="setor" placeholder="Digite Aqui...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Equipamento</label>
                                            <input type="text" disabled class="form-control" name="equipamento" id="equipamento" placeholder="Digite Aqui...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição do problema</label>
                                        <textarea style="resize: none;" disabled class="form-control" name="problema" id="problema" cols="30" rows="3" placeholder="Digite Aqui..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Laudo</label>
                                        <textarea style="resize: none;" class="form-control" name="Laudo" id="Laudo" cols="30" rows="3" placeholder="Digite Aqui..."></textarea>
                                    </div>

                                    <button class="btn btn-success" name="btn_finalizar">Finalizar</button>
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
    ?>
</body>

</html>