<?php
#PEDIR PRA CORRIGIR
#require_once dirname(__DIR__, 2) . "/Resource/dataview/novo_usuario-dataview.php";
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
                            <h1>Novo Usuario</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastre os novos usuarios nessa página</h3>
                    </div>
                    <div class="card-body">
                        <form action="novo_usuario.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tipo</label>
                                        <select class="form-control select2" style="width: 100%;" name="tipo" id="tipo">
                                            <option value="0">Selecione</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Setor</label>
                                        <select class="form-control select2" style="width: 100%;" name="setor" id="setor">
                                            <option value="0">Selecione</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite Aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Sobrenome</label>
                                        <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Digite Aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Digite Aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" onkeypress="return onlynumber()" class="form-control" name="telefone" id="telefone" placeholder="Digite Aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite Aqui...">
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
    include_once PATH_URL . 'Template/_includes/_msg.php';
    ?>
    
</body>

</html>