<?php
require_once dirname(__DIR__, 2) . "/Resource/dataview/novo_chamado-dataview.php";
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
                            <h1>Novo Chamado</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Realize abertura de chamados nessa página</h3>
                    </div>
                    <div class="card-body">
                        <form id="form_cad" action="novo_chamado.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Escolha o Equipamento</label>
                                        <select class="form-control select2 obg" style="width: 100%;" name="equipamento" id="equipamento">
                                            <option value="">Selecione</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Descreva o problema</label>
                                        <textarea style="resize: none;" class="form-control obg" name="problema" id="problema" cols="30" rows="3" placeholder="Digite Aqui..."></textarea>
                                    </div>
                                    
                                    <button class="btn btn-success" name="btn_gravar" onclick="return NotificarCampos('form_cad')">Gravar</button>
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
</body>

</html>