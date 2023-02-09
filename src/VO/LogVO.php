<?php

namespace Src\VO;

use DateTime;
use Src\_Public\Util;

class LogVo{
    private $id;
    private $ip;
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

    //GET E SET DATA (DATETIME)
    public function getData() : string
    {
        return Util::DataHoraAtual();
    }

    //GET E SET IP
    public function setIp($p_ip) : void
    {
        $this->ip = Util::TirarCaracteresEspeciais($p_ip);
    }
    public function getIp() : string
    {
        return $this->ip;
    }

    //GET E SET ID USUARIO
    public function setIdUsuario($p_id_usuario) : void
    {
        $this->id_usuario = $p_id_usuario;
    }
    public function getIdUsusario() : int
    {
        return $this->id_usuario;
    }
}