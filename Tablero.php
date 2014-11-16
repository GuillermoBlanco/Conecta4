<?php


class Tablero {
    
    public $casillas = array();
    private $maxX;
    private $maxY;

    
    function __construct($n, $m) {
        $this->maxX = $n;
        $this->maxY = $m;
        for($i=0; $i<$n; $i++){
            $this->casillas[$i]=array();
        }
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
    
    function comprobarConect($x,$y){
        $acumulado=0;
        $contadorY=0;
        $contadorX=0;
        
        //Comprobación vertical
        foreach ($this->casillas[$x] as $value) {
            if($value->getColor()==$this->getFicha($x, $y)->getColor()) {
                $contadorY++;
                if ($contadorY==4) {$acumulado++; break;}
            }
            else $contadorY=0;
        }
        
        //Comprobación horizontal
        for ($i=0; $i<count($this->casillas);$i++) {
            if( isset($this->casillas[$i][$y]) && ($this->casillas[$i][$y]->getColor()==$this->getFicha($x, $y)->getColor()) ) {
                $contadorX++;
                if ($contadorX==4) {$acumulado++; break;}
            }
            else $contadorX=0;
        }
        
        return $acumulado>0;
    }
}

?>
