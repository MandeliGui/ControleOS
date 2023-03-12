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
    #Alterar
    public function AlterarEquipamentoCTRL(EquipamentoVO $vo)
    {
        if (
            empty($vo->getIdTipoEquipamento()) ||
            empty($vo->getIdModeloEquipamento()) ||
            empty($vo->getIdentificacao()) ||
            empty($vo->getDescricao())
        ) {
            return 0;
        }

        $vo->setFuncaoErro(ALTERAR_EQUIPAMENTO);
        return $this->dao->AlterarEquipamentoDAO($vo);
    }
    #Consultar
    public function ConsultarEquipamentoCTRL(string $nome = '', string $tipo = '', string $modelo = ''): array
    {
        return $this->dao->ConsultarEquipamentoDAO($nome, $tipo, $modelo);
    }
    #Detalhar
    public function DetalharEquipamentoCTRL(int $id): array | bool
    {
        return $this->dao->DetalharEquipamentoDAO($id);
    }
    #Excluir
    public function ExcluirEquipamentoCTRL(EquipamentoVO $vo): int
    {
        $vo->setFuncaoErro(EXCLUIR_EQUIPAMENTO);
        return $this->dao->ExcluirEquipamentoDAO($vo);
    }
}
