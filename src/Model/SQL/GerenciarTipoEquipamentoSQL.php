<?php

namespace Src\Model\SQL;


class GerenciarTipoEquipamentoSQL
{
    public static function INSERIR_TIPO_EQUIPAMENTO(): string
    {
        $sql = 'INSERT INTO tb_tipo_equipamento (nome) VALUE (?)';
        return $sql;
    }

    public static function CONSULTAR_TIPO_EQUIPAMENTO($nome): string
    {
        $sql = 'SELECT id, nome
                  FROM tb_tipo_equipamento';
        if (!empty($nome)) {
            $sql .= ' WHERE nome like ?';
        }
        $sql .= " ORDER BY nome";
        return $sql;
    }

    public static function ALTERAR_TIPO_EQUIPAMENTO(): string
    {
        $sql = 'UPDATE tb_tipo_equipamento
                SET nome = ?
                WHERE id = ?';
        return $sql;
    }

    public static function DELETAR_TIPO_EQUIPAMENTO(): string
    {
        $sql = 'DELETE FROM tb_tipo_equipamento
                      WHERE id = ?';
        return $sql;
    }
}
