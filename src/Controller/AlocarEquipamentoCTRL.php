<?php

namespace Src\Controller;

use Src\VO\AlocarVO;

class AlocarEquipamentoCTRL
{


    public function AlocarEquipamento(AlocarVO $vo): int
    {
        if (
            empty($vo->getIdEquipamento()) ||
            empty($vo->getIdSetor())
        ) {
            return 0;
        }
    }
}
