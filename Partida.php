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
    
    function __construct($x,$y, $color1, $color2) {
        $this->tablero = new Tablero($x, $y);
        $this->ficha[0] = new Ficha($color1);
        $this->ficha[1] = new Ficha($color2);
    }


    function tirarFicha($col){
        if ( $this->tablero->getMaxY()>count($this->tablero->getCasillas()[$col]) ){
            array_push($this->tablero->getCasillas()[$col], $this->ficha[$this->turno]);
            if ($this->turno==0 ? $this->turno=1 : $this->turno=0);
        } else {
            $mensaje="La columna ".$col." está llena";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    
    
}

?>
