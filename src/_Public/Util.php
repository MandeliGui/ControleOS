<?php

namespace Src\_Public;

class Util
{
    public static function MostrarArray($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';

    }

    public static function CodigoLogado()
    {
        return 1;
    }

    private static function SetarFusoHorario()
    {
        date_default_timezone_set('America/Sao_Paulo');
    }

    public static function DataAtual()
    {

        self::SetarFusoHorario();
        return date('Y-m-d');
    }

    public static function DataAtualBR()
    {

        self::SetarFusoHorario();
        return date('d/m/Y');
    }

    public static function HoraAtual()
    {
        self::SetarFusoHorario();
        return date('H:i');
    }

    public static function DataHoraAtual()
    {
        self::SetarFusoHorario();
        return date('Y-m-d H:i');
    }

    //limpar mascaras
    public static function TirarCaracteresEspeciais($palavra)
    {
        $especiais = array(".", ",", ";", "!", "@", "#", "%", "¨", "*", "(", ")", "+", "-", "=", "§", "$", "|", "\\", ":", "/", "<", ">", "?", "{", "}", "[", "]", "&", "'", '"', "´", "`", "?", '“', '”', '$', "'", "'");
        $palavra = str_replace($especiais, "", trim($palavra));
        return $palavra;
    }
    //Email
    public static function RemoverTags($palavra)
    {
        $palavra = strip_tags($palavra);
        return $palavra;
    }
    //Nomes em geral
    public static function TratarDadosGeral($palavra)
    {
        $especiais = array(".", ",", ";", "!", "@", "#", "%", "¨", "*", "(", ")", "+", "-", "=", "§", "$", "|", "\\", ":", "/", "<", ">", "?", "{", "}", "[", "]", "&", "'", '"', "´", "`", "?", '“', '”', '$', "'", "'");
        $palavra = strip_tags($palavra);
        $palavra = str_replace($especiais, "", trim($palavra));
        return $palavra;
    }
}
