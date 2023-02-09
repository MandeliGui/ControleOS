<?php

namespace Src\VO;
use Src\_Public\Util;

class EnderecoVo{
    private $id;
    private $rua;
    private $bairro;
    private $cep;
    private $complemento;
    private $id_cidade;
    private $id_usuario;
    
    
    //GET E SET ID
    public function setId($p_id) : void
    {
        $this->id = $p_id;
    }
    public function getId() : int
    {
        return $this->id;
    }

    //GET E SET RUA
    public function setRua($p_rua) : void
    {
        $this->rua = Util::RemoverTags($p_rua);
    }
    public function getRua():string
    {
        return $this->rua;
    }

    //GET E SET BAIRRO
    public function setBairro($p_bairro) : void
    {
        $this->bairro = Util::RemoverTags($p_bairro);
    }
    public function getBairro():string
    {
        return $this->bairro;
    }
    
    //GET E SET CEP
    public function setCep($p_cep) : void
    {
        $this->cep = Util::TirarCaracteresEspeciais($p_cep);
    }
    public function getCep():string
    {
        return $this->cep;
    }
    
    //GET E SET COMPLEMENTO
    public function setComplemento($p_complemento) : void
    {
        $this->complemento = Util::RemoverTags($p_complemento);
    }
    public function getComplemento():string
    {
        return $this->complemento;
    }

    //GET E SET ID CIDADE
    public function setIdCidade($p_id_cidade) : void
    {
        $this->id_cidade = $p_id_cidade;
    }
    public function getIdCidade() : int
    {
        return $this->id_cidade;
    }

    //GET E SET ID USUARIO
    public function setIdUsuario($p_id_usuario) : void
    {
        $this->id_usuario = $p_id_usuario;
    }
    public function getIdUsuario() : int
    {
        return $this->id_usuario;
    }

}
