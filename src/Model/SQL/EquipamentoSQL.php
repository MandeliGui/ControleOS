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

    public static function CONSULTAR_EQUIPAMENTO($nome): string
    {
        $sql = 'SELECT tb_equipamento.id as id, tb_tipo_equipamento.nome as tipo, tb_modelo_equipamento.nome as modelo, identificacao, descricao
                  FROM tb_equipamento
                  INNER JOIN tb_tipo_equipamento
                  ON tb_equipamento.tipo_equipamento_id = tb_tipo_equipamento.id
                  INNER JOIN tb_modelo_equipamento
                  ON tb_equipamento.modelo_equipamento_id = tb_modelo_equipamento.id
                  ';
        if (!empty($nome)) {
            $sql .= " WHERE tb_tipo_equipamento.nome like ?";
        }
        $sql .= " ORDER BY tb_equipamento.id desc";
        return $sql;
    }

    public static function EXCLUIR_EQUIPAMENTO(): string
    {
        $sql = 'DELETE FROM tb_equipamento
                        WHERE id = ?';
        return $sql;
    }
}
