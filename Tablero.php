<?php


class Tablero {
    
    private $casillas = array(array());
    private $maxX;
    private $maxY;

    
    function __construct($n, $m) {
        $this->maxX = $n;
        $this->maxY = $m;
    }

    public function getFicha($x,$y) {
        return $this->casillas[$x][$y];
    }

    public function getMaxX() {
        return $this->maxX;
    }

    public function getMaxY() {
        return $this->maxY;
    }

    public function setMaxX($maxX) {
        $this->maxX = $maxX;
    }

    public function setMaxY($maxY) {
        $this->maxY = $maxY;
    }
    
    function comprobarConect($x,$y){
        $acumulado=0;
        $contador=0;
        
        //compruebo vertical
        foreach ($this->casillas[$x] as $value) {
            if($value->getColor()==$this->getFicha($x, $y)->getColor()) {
                $contador++;
                if ($contador==4) {$acumulado++; break;}
            }
            else $contador=0;
        }
    }
}

?>
