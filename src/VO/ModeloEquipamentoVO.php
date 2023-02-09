<?php 

namespace Src\VO;

use Src\_Public\Util;
use Src\Model\Conexao;

class ModeloEquipamentoVO extends LogErroVo{
    private $id;
    private $nome;

    //GET SET ID
    public function setId($p_id):void
    {
        $this->id = $p_id;
    }
    public function getId():int
    {
        return $this->id;
    }

    //GET SET NOME
    public function setNome($p_nome):void
    {
        $this->nome = Util::TratarDadosGeral($p_nome);
    }
    public function getNome():string
    {
        return $this->nome;
    }
}