<?php
require_once "_include_autoload.php";

use Src\Controller\AlocarEquipamentoCTRL;
use Src\VO\AlocarVO;

if(isset($_POST['btn_gravar'])){
    $vo = new AlocarVO;
    $ctrl = new AlocarEquipamentoCTRL;

    $vo->setIdEquipamento($_POST['equipamento']);
    $vo->setIdSetor($_POST['setor']);


    $ret = $ctrl->AlocarEquipamento($vo);

}