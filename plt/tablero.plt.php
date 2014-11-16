<!DOCTYPE html>
<html>
    <head>
         <title>Conecta 4</title>
             <meta http-equiv='Content-Type' content='text/html'; charset='UTF-8'>
             <link rel='stylesheet' href='css/style.css'>
    </head>

    <body>
         <div id='cabecera'></div>
         <div id='tablero' style='height:<?php echo $this->tablero->getMaxY()*100; ?>px; width:<?php echo $this->tablero->getMaxX()*100; ?>px'>
             <?php for ($i=0; $i<$this->tablero->getMaxX();$i++) {
                    echo "<div id='col".$i."' class='col' style='height:".($this->tablero->getMaxY()*100)."px'>"
                            . "<a href='index.php?col=".$i."'>"; 
                    foreach ($this->tablero->casillas[$i] as $value) {
                        $value->mostrarFicha();
                    }
                    echo "</a></div>";
                }
            ?>  	
         </div>
    </body>
</html>

