<?php

class ejecutable 
{
    public function GetPlayers()
    {
        $lista = array();

        $jugador = new juego('Jose', 1000);
        array_push($lista, $jugador);

        $jugador = new juego('Eiker', 1000);
        array_push($lista, $jugador);

        $jugador = new juego('Pedro', 1000);
        array_push($lista, $jugador);

        $jugador = new juego('David', 1000);
        array_push($lista, $jugador);

        $jugador = new juego('Victor', 1000);
        array_push($lista, $jugador);

        return $lista; 
    }
}
