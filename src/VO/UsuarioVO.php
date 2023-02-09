<?php

namespace Src\VO;

use Src\_Public\Util;

class UsuarioVO
{



    private $id;
    private $tipo;
    private $nome;
    private $email;
    private $tel;
    private $senha;
    private $status;


    //GET E SET ID
    public function setId($p_id): void
    {
        $this->id = $p_id;
    }
    public function getId(): int
    {
        return $this->id;
    }

    //GET E SET TIPO
    public function setTipo($p_tipo): void
    {
        $this->tipo = $p_tipo;
    }
    public function getTipo(): int
    {
        return $this->tipo;
    }

    //GET E SET NOME
    public function setNome($p_nome): void
    {
        $this->nome = Util::TratarDadosGeral($p_nome);
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    //GET E SET EMAIL
    public function setEmail($p_email): void
    {
        $this->email = Util::RemoverTags($p_email);
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    //GET E SET TELEFONE
    public function setTelefone($p_tel): void
    {
        $this->tel = Util::TirarCaracteresEspeciais($p_tel);
    }
    public function getTelefone(): string
    {
        return $this->tel;
    }

    //GET E SET SENHA
    public function setSenha($p_senha): void
    {
        $this->senha = Util::RemoverTags($p_senha);
    }
    public function getSenha(): string
    {
        return $this->senha;
    }

    //GET E SET STATUS
    public function setStatus($p_status): void
    {
        $this->status = $p_status;
    }
    public function getStatus(): int
    {
        return $this->status;
    }
}
