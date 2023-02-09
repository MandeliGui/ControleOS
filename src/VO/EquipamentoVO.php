<?php 

namespace Src\VO;

use Src\_Public\Util;

class EquipamentoVO extends LogErroVo{
    private $id;
    private $identificacao;
    private $descricao;
    private $id_modelo_equipamento;
    private $id_tipo_equipamento;

    //GET SET ID
    public function setId($p_id):void
    {
        $this->id = $p_id;
    }
    public function getId():int
    {
        return $this->id;
    }

    //GET SET IDENTIFICAÇÃO
    public function setIdentificacao($p_identificacao):void
    {
        $this->identificacao = Util::RemoverTags($p_identificacao);
    }
    public function getIdentificacao():string
    {
        return $this->identificacao;
    }

    //GET SET DESCRIÇÃO
    public function setDescricao($p_descricao):void
    {
        $this->descricao = Util::RemoverTags($p_descricao);
    }
    public function getDescricao():string
    {
        return $this->descricao;
    }

    //GET SET ID MODELO EQUIPAMENTO
    public function setIdModeloEquipamento($p_id_modelo_equipamento):void
    {
        $this->id_modelo_equipamento = $p_id_modelo_equipamento;
    }
    public function getIdModeloEquipamento():int
    {
        return $this->id_modelo_equipamento;
    }

    //GET SET ID TIPO EQUIPAMENTO;
    public function setIdTipoEquipamento($p_id_tipo_equipamento):void
    {
        $this->id_tipo_equipamento = $p_id_tipo_equipamento;
    }
    public function getIdTipoEquipamento():int
    {
        return $this->id_tipo_equipamento;
    }
}