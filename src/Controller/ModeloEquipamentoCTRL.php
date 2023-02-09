<?php

namespace Src\Controller;

use Src\Model\ModeloEquipamentoDAO;
use Src\VO\ModeloEquipamentoVO;
use Src\_Public\Util;

class ModeloEquipamentoCTRL
{
    private $dao;

    public function __construct()
    {
        $this->dao = new ModeloEquipamentoDAO;
    }

    public function ModeloEquipamento(ModeloEquipamentoVO $vo): int
    {
        if (empty($vo->getNome())) {
            return 0;
        }
        $vo->setFuncaoErro(CADASTRAR_MODELO);

        return $this->dao->CadastrarModeloEquipamentoDAO($vo);
    }

    public function ConsultarModeloEquipamentoCTRL(string $nome = ''): array
    {
        return $this->dao->ConsultaModeloEquipamentoDAO($nome);
    }

    public function AlterarModeloEquipamentoCTRL(ModeloEquipamentoVO $vo): int
    {
        if (empty($vo->getNome())) {
            return 0;
        }
        $vo->setFuncaoErro(ALTERAR_MODELO);
        return $this->dao->AlterarModeloEquipamentoDAO($vo);
    }

    public function ExcluirModeloEquipamentoCTRL(ModeloEquipamentoVO $vo): int
    {
        $vo->setFuncaoErro(EXCLUIR_MODELO);
        return $this->dao->ExcluirModeloEquipamentoDAO($vo);
    }
}
