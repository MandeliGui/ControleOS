<?php

namespace Src\Model;

use Exception;
use Src\Model\SQL\GerenciarSetorSQL;
use Src\VO\SetorVO;

class GerenciarSetorDAO extends Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornaConexao();
    }

    public function CadastrarSetorDAO(SetorVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarSetorSQL::INSERIR_NOVO_SETOR());
        $sql->bindValue(1, $vo->getNome());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

    public function ConsultarSetorDAO(string $nome = ''): array
    {
        $sql = $this->conexao->prepare(GerenciarSetorSQL::CONSULTAR_SETOR($nome));
        if (!empty($nome)) {
            $sql->bindValue(1, "%" . $nome . "%");
        }
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function AlterarSetorDAO(SetorVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarSetorSQL::ALTERAR_SETOR());
        $i = 1;
        $sql->bindValue($i++, $vo->getNome());
        $sql->bindValue($i++, $vo->getId());
        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

    public function ExcluirSetorDAO(SetorVO $vo): int
    {
        $sql = $this->conexao->prepare(GerenciarSetorSQL::EXCLUIR_SETOR());
        $sql->bindValue(1, $vo->getId());
        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }
}
