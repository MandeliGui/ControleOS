<?php

namespace Src\Controller;

use Src\Model\GerenciarSetorDAO;
use Src\VO\SetorVO;


class GerenciarSetorCTRL
{

    private $dao;

    public function __construct()
    {
        $this->dao = new GerenciarSetorDAO;
    }

    public function GerenciarSetorCTRL(SetorVO $vo): int
    {
        if (empty($vo->getNome())) {
            return 0;
        }
        $vo->setFuncaoErro(CADASTRAR_SETOR);
        return $this->dao->CadastrarSetorDAO($vo);
    }

    public function ConsultarSetorCTRL(string $nome = ''): array
    {
        return $this->dao->ConsultarSetorDAO($nome);
    }

    public function AlterarSetorCTRL(SetorVO $vo): int
    {
        if (empty($vo->getNome())) {
            return 0;
        }
        $vo->setFuncaoErro(ALTERAR_SETOR);
        return $this->dao->AlterarSetorDAO($vo);
    }

    public function ExcluirSetorCTRL(SetorVO $vo):int{
        $vo->setFuncaoErro(EXCLUIR_SETOR);
        return $this->dao->ExcluirSetorDAO($vo);
    }
}
