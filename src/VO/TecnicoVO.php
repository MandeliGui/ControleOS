<?php

namespace Src\VO;

use Src\_Public\Util;
use Src\VO\UsuarioVO;

class TecnicoVO
{

    private $nome_empresa;

    //GET E SET NOME DA EMPRESA
    public function setNomeEmpresa($p_nome): void
    {
        $this->nome_empresa = Util::RemoverTags($p_nome);
    }
    public function getNomeEmpresa(): string
    {
        return $this->nome_empresa;
    }
}
