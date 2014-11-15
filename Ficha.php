<?php

/**
 * Description of Ficha
 *
 * @author Guillermo
 */
class Ficha {
    
    private $color;
    
    function __construct($color) {
        $this->color=$color;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

}

?>
