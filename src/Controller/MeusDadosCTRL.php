<?php

namespace Src\Controller;

use Src\VO\UsuarioVO;

class MeusDadosCTRL
{
    public function MeusDados(UsuarioVO $vo): int
    {
        if (
            empty($vo->getNome()) ||
            empty($vo->getEmail()) ||
            empty($vo->getTelefone())
            #Endereço?
        ) {
            return 0;
        }
    }
}
