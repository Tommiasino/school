<?php
namespace SkolaVDF\Matematika\Telesa;

class kuzel implements ITeleso{
    public $r;
    public $v;
    public $cornerCount=1;
   

    public function __construct($r, $v){
        $this->r=$r;
        $this->v=$v; 
    }
    
    public function info() {
            echo "poloměr podstavy je ".$this->getR()."<br>výška kuželu je ".$this->v;
            echo "<br>povrch kuželu je ".$this->povrch()."<br>objem kuželu je ".$this->objem(); 
        
    }

    public function is3D() {
        return TRUE;
    }

    public function objem() {
        return ((M_PI*$this->getR()*$this->getR())*$this->getV())/3;
    }

    public function pocetVrcholu() {
        return $this->cornerCount;
    }

    public function povrch() {
        $s= sqrt($this->getR()*$this->getR()+$this->getV()*$this->getV());
       return M_PI*$this->getR()*$this->getR()+M_PI*$this->getR()*$s;
    }
    public function getR(){
        return $this->r;
        
    }
    public function getV(){
        return $this->v;
        
    }
}
