<?php

namespace Src\Vo;
use Src\VO\UsuarioVO;

class FuncionarioVo{
    private $id_setor;

    //GET E SET ID SETOR
    public function setIdSetor($p_id) : void
    {
        $this->id_setor = $p_id;
    }
    public function getIdSetor() : int
    {
        return $this->id_setor;
    }
}