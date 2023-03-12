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

    #Alterar
    public function AlterarEquipamentoDAO(EquipamentoVO $vo):int{
        $sql = $this->conexao->prepare(EquipamentoSQL::ALTERAR_EQUIPAMENTO());
        $i = 1;
        $sql->bindValue($i++, $vo->getIdentificacao());
        $sql->bindValue($i++, $vo->getDescricao());
        $sql->bindValue($i++, $vo->getIdModeloEquipamento());
        $sql->bindValue($i++, $vo->getIdTipoEquipamento());
        $sql->bindValue($i++, $vo->getId());
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
    public function ConsultarEquipamentoDAO(string $nome = '', string $tipo = '', string $modelo = ''):array{
        $sql = $this->conexao->prepare(EquipamentoSQL::CONSULTAR_EQUIPAMENTO($nome, $tipo, $modelo));
        $i = 1;
        if(!empty($tipo)){
            $sql->bindValue($i++, $tipo);
            if(!empty($modelo)){
               $sql->bindValue($i++, $modelo);
            }
            if(!empty($nome)){
                $sql->bindValue($i++, "%" . $nome . "%");
            }
        }
        else if(!empty($modelo)){
            $sql->bindValue($i++, $modelo); 
        
            if(!empty($tipo)){
                $sql->bindValue($i++, $tipo);
            }
            if(!empty($nome)){
                $sql->bindValue($i++, "%" . $nome . "%");
            }
        }
        if(!empty($nome) && (empty($tipo) && empty($modelo))){
            $sql->bindValue($i++, "%" . $nome . "%");
        }
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    
    }

    public function DetalharEquipamentoDAO(int $id): array | bool{
        $sql = $this->conexao->prepare(EquipamentoSQL::DETALHAR_EQUIPAMENTO());
        $sql->bindValue(1, $id);
        $sql->execute();
        #quando traz somente uma linha do bd usar fetch ao inves de fetchAll
        return $sql->fetch(\PDO::FETCH_ASSOC);
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