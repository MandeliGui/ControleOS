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
                            <h1>Mudar Senha</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Aqui voce poderá alterar sua senha</h3>
                    </div>
                    <div class="card-body">
                        <form action="mudar_senha.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Senha Atual</label>
                                        <input type="password" class="form-control" name="senha_atual" id="senha_atual">
                                    </div>
                                    <div class="form-group">
                                        <label>Nova Senha</label>
                                        <input type="text" class="form-control" name="senha_nova" id="senha_nova" placeholder="Digite Aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Repetir Senha</label>
                                        <input type="text" class="form-control" name="senha_rep" id="senha_rep" placeholder="Digite Aqui...">
                                    </div>
                                    <button class="btn btn-success" name="btn_gravar">Gravar</button>
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

    <!-- Permitir só numeros (passar pro arquivo js depois) -->

    <script>
        function onlynumber(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /^[0-9.,]+$/;
            //var regex = /^[0-9.]+$/;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
</body>

</html>