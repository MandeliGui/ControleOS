<?php

namespace Src\VO;

use Src\_Public\Util;

class ChamadoVO
{

    private $id;
    private $problema;
    private $laudo;
    private $id_funcionario;
    private $id_alocar;
    private $tecnico_atendimento;
    private $tecnico_encerramento;

    //GET SET ID
    public function setId($p_id): void
    {
        $this->id = $p_id;
    }
    public function getId(): int
    {
        return $this->id;
    }

    //GET SET PROBLEMA
    public function setProblema($p_problema): void
    {
        $this->problema = Util::RemoverTags($p_problema);
    }
    public function getProblema(): string
    {
        return $this->problema;
    }

    //GET SET DATA ABERTURA
    public function getDataAbertura(): string
    {
        return Util::DataAtual();
    }

    //GET SET HORA ABERTURA
    public function getHoraAbertura(): string
    {
        return Util::HoraAtual();
    }

    //GET SET DATA ATENDIMENTO
    public function getDataAtendimento(): string
    {
        return Util::DataAtual();
    }

    //GET SET HORA ATENDIMENTO
    public function getHoraAtendimento(): string
    {
        return Util::HoraAtual();
    }

    //GET SET DATA ENCERRAMENTO
    public function getDataEncerramento(): string
    {
        return Util::DataAtual();
    }

    //GET SET HORA ENCERRAMENTO
    public function getHoraEncerramento(): string
    {
        return Util::HoraAtual();
    }

    //GET SET LAUDO
    public function setLaudo($p_laudo): void
    {
        $this->laudo = util::RemoverTags($p_laudo);
    }
    public function getLaudo(): string
    {
        return $this->laudo;
    }

    //GET SET ID FUNCIONARIO
    public function setIdFuncionario($p_id_funcionario): void
    {
        $this->id_funcionario = $p_id_funcionario;
    }
    public function getIdFuncionario(): int
    {
        return $this->id_funcionario;
    }

    //GET SET ID EQUIPAMENTO
    public function setIdEquipamento($p_id_alocar): void
    {
        $this->id_alocar = $p_id_alocar;
    }
    public function getIdEquipamento(): int
    {
        return $this->id_alocar;
    }

    //GET SET TECNICO ATENDIMENTO
    public function setTecnicoAtendimento($p_tecnico_atendimento): void
    {
        $this->tecnico_atendimento = $p_tecnico_atendimento;
    }
    public function getTecnicoAtendimento(): int
    {
        return $this->tecnico_atendimento;
    }

    //GET SET TECNICO ENCERRAMENTO
    public function setTecnicoEncerramento($p_tecnico_encerramento): void
    {
        $this->tecnico_encerramento = $p_tecnico_encerramento;
    }
    public function getTecnicoEncerramento(): int
    {
        return $this->tecnico_encerramento;
    }
}
