<?php

namespace Src\Controller;

use Src\_Public\Util;
use Src\Model\TipoEquipamentoDAO;
use Src\VO\TipoEquipamentoVO;

class TipoEquipamentoCTRL
{
    private $dao;

    public function __construct()
    {
        $this->dao = new TipoEquipamentoDAO;
    }

    public function CadastrarTipoEquipamentoCTRL(TipoEquipamentoVO $vo): int
    {
        if (empty($vo->getNome())) {
            return 0;
        }

        #setar as propriedades do LogErro
        $vo->setFuncaoErro(CADASTRAR_TIPO);

        return $this->dao->CadastrarTipoEquipamentoDAO($vo);
    }

    public function ConsultarTipoEquipamentoCTRL(string $nome = ''): array
    {
        return $this->dao->ConsultarTipoEquipamentoDAO($nome);
    }

    public function AlterarTipoEquipamentoCTRL(TipoEquipamentoVO $vo): int
    {
        if (empty($vo->getNome())) {
            return 0;
        }

        $vo->setFuncaoErro(ALTERAR_TIPO);
        return $this->dao->AlterarTipoEquipamentoDAO($vo);
    }

    public function DeletarTipoEquipamentoCTRL(TipoEquipamentoVO $vo):int{
        $vo->setFuncaoErro(EXCLUIR_TIPO);
        return $this->dao->DeletarTipoEquipamentoDAO($vo);
    }
}
