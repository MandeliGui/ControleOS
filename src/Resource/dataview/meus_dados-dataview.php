<?php

require_once "_include_autoload.php";
use Src\Controller\MeusDadosCTRL;
use Src\VO\UsuarioVO;


if(isset($_POST['btn_gravar'])){
    $vo = new UsuarioVO;
    $ctrl = new MeusDadosCTRL;
    $vo->setNome($_POST['nome']);
    $vo->setEmail($_POST['email']);
    $vo->setTelefone($_POST['telefone']);
    #ENDEREÇO????????
    $ret = $ctrl->MeusDados($vo);
}


