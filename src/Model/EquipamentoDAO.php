<?php
namespace Src\Model;

use Exception;
use Src\Model\SQL\EquipamentoSQL;
use Src\VO\EquipamentoVO;

class EquipamentoDAO extends Conexao{

    private $conexao;
    public function __construct()
    {
        $this->conexao = parent::retornaConexao();
    }
    #Cadastrar
    public function CadastrarEquipamentoDAO(EquipamentoVO $vo):int{
        $sql = $this->conexao->prepare(EquipamentoSQL::INSERIR_EQUIPAMENTO());
        $i = 1;
        $sql->bindValue($i++, $vo->getIdentificacao());
        $sql->bindValue($i++, $vo->getDescricao());
        $sql->bindValue($i++, $vo->getIdModeloEquipamento());
        $sql->bindValue($i++, $vo->getIdTipoEquipamento());
        try{
            $sql->execute();
            return 1;
        }catch(Exception $ex){
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }
    #Consultar
    public function ConsultarEquipamentoDAO(string $nome = ''):array{
        $sql = $this->conexao->prepare(EquipamentoSQL::CONSULTAR_EQUIPAMENTO($nome));
        if(!empty($nome)){
            $sql->bindValue(1, "%" . $nome . "%");
        }
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    
    }
    #Excluir
    public function ExcluirEquipamentoDAO(EquipamentoVO $vo):int{
        $sql = $this->conexao->prepare(EquipamentoSQL::EXCLUIR_EQUIPAMENTO());
        $sql->bindValue(1, $vo->getId());
        try{
            $sql->execute();
            return 1;
        }catch(Exception $ex){
            $vo->setMsgErro($ex->getMessage());
            parent::GravarErroLog($vo);
            return -1;
        }
    }

}