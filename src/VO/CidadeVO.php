<?php 

namespace Src\VO;

use Src\_Public\Util;

class CidadeVO{
    private $id;
    private $nome;
    private $id_estado;


    //GET E SET ID
    public function setId($p_id):void
    {
        $this->id= $p_id;
    }
    public function getId():int
    {
        return $this->id;
    }

    //GET E SET NOME
    public function setNome($p_nome):void
    {
        $this->nome= Util::TratarDadosGeral($p_nome);
    }
    public function getNome():string
    {
        return $this->nome;
    }

    //GET E SET ID ESTADO
    public function setIdEstado($p_id_estado):void
    {
        $this->id_estado=$p_id_estado;
    }
    public function getIdEstado():int{
        return $this->id_estado;
    }
}