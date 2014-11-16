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
        $partida=unserialize($_SESSION['partida']);
        if(isset($_GET['col'])){
            $partida->tirarFicha($_GET['col']);
            $_SESSION['partida']=serialize($partida);
        }
        $partida->mostrarTablero();
    }
    
    
?>