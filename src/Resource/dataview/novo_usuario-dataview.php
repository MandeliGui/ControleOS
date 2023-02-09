<?php

require_once "_include_autoload.php";
use Src\VO\UsuarioVO;


if(isset($_POST['btn_gravar'])){
    $vo = new UsuarioVO;
    $vo->setTipo($_POST['tipo']);
    #Por que na tela tem setor e na VO não tem?
    $vo->setNome($_POST['nome']);
    #Sobrenome??????????
    $vo->setEmail($_POST['email']);
    
}