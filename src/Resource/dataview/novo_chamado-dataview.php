<?php

require_once "_include_autoload.php";
use Src\VO\ChamadoVO;
use Src\Controller\NovoChamadoCTRL;



if(isset($_POST['btn_gravar'])){
    $vo = new ChamadoVO;
    $ctrl = new NovoChamadoCTRL;
    $vo->setIdEquipamento($_POST['equipamento']);
    $vo->setProblema($_POST['problema']);

    
    $ret = $ctrl->NovoChamado($vo);

}