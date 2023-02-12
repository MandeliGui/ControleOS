<?php

namespace Src\Controller;

use Src\Model\EquipamentoDAO;
use Src\VO\EquipamentoVO;

class EquipamentoCTRL
{
    private $dao;

    public function __construct()
    {
        $this->dao = new EquipamentoDAO;
    }
    #Cadastrar
    public function EquipamentoCTRL(EquipamentoVO $vo): int
    {
        if (
            empty($vo->getIdTipoEquipamento()) ||
            empty($vo->getIdModeloEquipamento()) ||
            empty($vo->getIdentificacao()) ||
            empty($vo->getDescricao())
        ) {
            return 0;
        }

        $vo->setFuncaoErro(CADASTRAR_EQUIPAMENTO);
        return $this->dao->CadastrarEquipamentoDAO($vo);

    }
    #Consultar
    public function ConsultarEquipamentoCTRL(string $nome = '', string $tipo = '', string $modelo = ''):array{
        return $this->dao->ConsultarEquipamentoDAO($nome, $tipo, $modelo);
    }
    #Excluir
    public function ExcluirEquipamentoCTRL(EquipamentoVO $vo):int{
        $vo->setFuncaoErro(EXCLUIR_EQUIPAMENTO);
        return $this->dao->ExcluirEquipamentoDAO($vo);
    }
}
