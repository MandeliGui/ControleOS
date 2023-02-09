<?php

namespace Src\Model;

use PDO;
use PDOException;

// Configurações do site
define('HOST', 'localhost'); //IP
define('USER', 'root'); //usuario
define('PASS', null); //Senha
define('DB', 'db_controleos'); //Banco
/**
 * Conexao.class TIPO [Conexão]
 * Descricao: Estabelece conexões com o banco usando SingleTon
 * @copyright (c) year, Wladimir M. Barros
 */

class Conexao
{

    /** @var PDO */
    private static $Connect;

    private static function Conectar()
    {
        try {

            //Verifica se a conexão não existe
            if (self::$Connect == null) :

                $dsn = 'mysql:host=' . HOST . ';dbname=' . DB;
                self::$Connect = new PDO($dsn, USER, PASS, null);
            endif;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        //Seta os atributos para que seja retornado as excessões do banco
        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return  self::$Connect;
    }

    public static function retornaConexao()
    {
        return  self::Conectar();
    }

    public static function GravarErroLog($vo)
    {
        $arquivo = PATH_URL . 'Model/Log/log_erro.txt';

        if (!file_exists($arquivo)) {
            $arquivo = fopen($arquivo, "w");
        } else {
            $arquivo = fopen($arquivo, "a+");
        }

        $msg = '--------------------------------------' . PHP_EOL;
        $msg .= 'Data do erro: ' . $vo->getDataAtual() . PHP_EOL;
        $msg .= 'Hora do erro: ' . $vo->getHoraAtual() . PHP_EOL;
        $msg .= 'Função do erro: ' . $vo->getFuncaoErro() . PHP_EOL;
        $msg .= 'Codigo do logado: ' . $vo->getCodigoLogado() . PHP_EOL;
        $msg .= 'Mensagem do erro: ' . $vo->getMsgErro() . PHP_EOL;

        fwrite($arquivo, $msg);
        fclose($arquivo);
    }
}
