<?php

namespace Src\Model\SQL;

class EquipamentoSQL
{

    public static function INSERIR_EQUIPAMENTO(): string
    {
        $sql = 'INSERT INTO tb_equipamento 
                            (identificacao,
                            descricao,
                            modelo_equipamento_id,
                            tipo_equipamento_id) 
                            VALUES (?, ?, ?, ?)';
        return $sql;
    }
    
    public static function ALTERAR_EQUIPAMENTO(): string
    {
        $sql = 'UPDATE tb_equipamento 
                    SET identificacao = ?,
                        descricao = ?,
                        modelo_equipamento_id = ?,
                        tipo_equipamento_id = ?
                        WHERE id = ?';
        return $sql;
    }

    public static function CONSULTAR_EQUIPAMENTO($nome): string
    {
        $sql = 'SELECT eq.id as id, 
                       tp.nome as tipo, 
                       mo.nome as modelo, 
                       eq.identificacao, 
                       eq.descricao
                  FROM tb_equipamento as eq
                  INNER JOIN tb_tipo_equipamento as tp
                  ON eq.tipo_equipamento_id = tp.id
                  INNER JOIN tb_modelo_equipamento as mo
                  ON eq.modelo_equipamento_id = mo.id';
        if (!empty($nome)) {
            $sql .= " WHERE tp.nome like ?";
        }
        $sql .= " ORDER BY eq.id desc";

        return $sql;
    }


    public static function EXCLUIR_EQUIPAMENTO(): string
    {
        $sql = 'DELETE FROM tb_equipamento
                        WHERE id = ?';

        return $sql;
    }
}
