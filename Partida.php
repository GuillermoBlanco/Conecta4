<?php

/**
 * Description of Partida
 *
 * @author Guillermo
 */
include './Tablero.php';
include './Ficha.php';

            
class Partida {
    
    private $tablero;
    private $ficha=array();
    private $turno=0;
    private $ronda=1;
    
    function __construct($x,$y, $color1, $color2) {
        $this->tablero = new Tablero($x, $y);
        $this->ficha[0] = new Ficha($color1);
        $this->ficha[1] = new Ficha($color2);
    }


    function tirarFicha($col){
        
        if ( $this->tablero->getMaxY()>count($this->tablero->casillas[$col]) ){
            array_push($this->tablero->casillas[$col], $this->ficha[$this->turno]);
//            console.log(print_r($this->tablero->casillas));
            $this->ronda++;
            
            if(! $this->tablero->comprobarConect($col, count($this->tablero->casillas[$col])-1)){
                if ($this->turno==0 ? $this->turno=1 : $this->turno=0);
                return false;
            }
            else {
                return true;
            }

        } else {
            $mensaje="La columna ".$col." está llena";
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
            return false;
        }
    }
    
    function mostrarTablero(){
        include './plt/tablero.plt.php';
    }
    
    public function getTurno() {
        return $this->turno;
    }

}

?>
