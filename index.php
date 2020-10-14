<?php


/* GUAPO ESTE MALDITO PROGRAMA ESTA EN LA COMPLETISIMA MIERDA... SIGUE TRABAJANDO POR FAVOR,
SE QUE LO LOGRARAS IGUAL QUE SIEMPRE.*/

/* 13/10/2020 AHORA SI VAMOS A HACER ESTA MIERDA BIEN NOJODA QUE LADILLA... */

require_once "helpers.php";
spl_autoload_register(function($classname){
        if (file_exists("src/$classname.php")) {
            require "src/$classname.php";
        }
});

$player = new ejecutable();
$lista = $player->GetPlayers();
$container = new pote();

foreach ($lista as $player) {
     Show("{$player->GetName()}");
    $player->SetMoney();
    $player->Deposit($container);   
}
