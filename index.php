<?php
    include './Partida.php';
    session_start();

    $partida;
    
    if (!isset($_SESSION['partida'])) {
        if (! (isset($_GET['X']) && isset($_GET['Y'])) ){
            
            include './plt/index.plt.php';
        }
        else{
            $partida = new Partida($_GET['X'], $_GET['Y'], "red", "yellow");
            $_SESSION['partida']=serialize($partida);
            $partida->mostrarTablero();
        }
    }
     else {
        $gana=false;
        $partida=unserialize($_SESSION['partida']);
        if(isset($_GET['col'])){
            $gana=$partida->tirarFicha($_GET['col']);
            $_SESSION['partida']=serialize($partida);
        }
        $partida->mostrarTablero();
        if ($gana){
            //mostrar quién gana la partida
            $ganador="El jugador ".($partida->getTurno()+1)." gana la partida.Pulsa para jugar de nuevo";
            echo "<script type='text/javascript'>alert('$ganador');</script>";
            session_destroy();
        }
    }
    
    
?>