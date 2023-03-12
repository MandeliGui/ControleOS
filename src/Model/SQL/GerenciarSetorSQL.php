<?php

namespace Src\Model\SQL;

class GerenciarSetorSQL
{
    public static function INSERIR_NOVO_SETOR(): string
    {
        $sql = 'INSERT INTO tb_setor (nome) VALUE (?)';
        return $sql;
    }

    public static function CONSULTAR_SETOR($nome): string
    {
        $sql = 'SELECT id,
                       nome
                  FROM tb_setor';

        if (!empty($nome)) {
            $sql .= ' WHERE nome like ?';
        }
            
        $sql .= ' ORDER BY nome';

        return $sql;
    }

    public static function ALTERAR_SETOR(): string
    {
        $sql = 'UPDATE tb_setor
                SET nome = ?
                WHERE id = ?';
        return $sql;
    }

    public static function EXCLUIR_SETOR(): string
    {
        $sql = 'DELETE FROM tb_setor
                      WHERE id = ?';
        return $sql;
    }
}
