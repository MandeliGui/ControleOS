<?php
namespace Src\VO;
use Src\_Public\Util;

class LogErroVo{
private $codLogado;
private $msgErro;
private $funcaoErro;

// public function setCodigoLogado(int $id): void{
//     $this->codLogado = $id;
// }

public function getCodigoLogado() :int{
    return Util::CodigoLogado();
}

public function setMsgErro(string $msg) : void{
    $this->msgErro = $msg;
}

public function getMsgErro() : string{
    return $this->msgErro;
}

public function setFuncaoErro(string $f) : void{
    $this->funcaoErro = $f;
}

public function getFuncaoErro() : string {
    return $this->funcaoErro;
}

public function getDataAtual(){
    return Util::DataAtualBR();
}

public function getHoraAtual(){
    return Util::HoraAtual();
}




}