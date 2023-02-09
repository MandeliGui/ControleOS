<?php 

namespace Src\VO;
use Src\_Public\Util;

class AlocarVO{
    private $id;
    private $situacao;
    private $id_setor;
    private $id_equipamento;

    //GET E SET ID
    public function setID($p_id):void
    {
        $this->id = $p_id;
    }
    public function getId():int
    {
        return $this->id;
    }

    //GET E SET DATA ALOCAMENTO
    public function getDataAlocar():string
    {
        return Util::DataHoraAtual();
    }
    
    //GET E SET DATA REMOÇÃO
    public function getDataRemover():string
    {
        return Util::DataHoraAtual();
    }

    //GET E SET SITUAÇÃO 
    public function setSituacao($p_situacao):void
    {
        $this->situacao = $p_situacao;
    }
    public function getSituacao():int
    {
        return $this->situacao;
    }

    //GET E SET ID SETOR
    public function setIdSetor($p_id_setor) : void
    {
        $this->id_setor = $p_id_setor;
    }
    public function getIdSetor() : int
    {
        return $this->id_setor;
    }

    //GET E SET ID EQUIPAMENTO
    public function setIdEquipamento($p_id_equipamento) : void
    {
        $this->id_equipamento = $p_id_equipamento;
    }
    public function getIdEquipamento() : int
    {
        return $this->id_equipamento;
    }

}