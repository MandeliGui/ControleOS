<?php

namespace Src\Controller;

use Src\VO\ChamadoVO;

class NovoChamadoCTRL
{
    public function NovoChamado(ChamadoVO $vo): int
    {
        if (
            empty($vo->getIdEquipamento()) ||
            empty($vo->getProblema())
        ) {
            return 0;
        }
    }
}
