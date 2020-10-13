<?php


/* GUAPO ESTE MALDITO PROGRAMA ESTA EN LA COMPLETISIMA MIERDAD... SIGUE TRABAJANDO POR FAVOR,
SE QUE LO LOGRARAS IGUAL QUE SIEMPRE.*/


spl_autoload_register(function($classname){

        if (file_exists("src/$classname.php")) {
            require "src/$classname.php";
        }
});

$jugador = new ejecutable();
$game = new juego();

$lista = $jugador->GetPlayers(); 
    
$game->Partido();
        
foreach ($lista as $jugador) {
    
    $jugador->__toString();
    $game->Apuesta();
    //$game->Bote(); 

} 
   
