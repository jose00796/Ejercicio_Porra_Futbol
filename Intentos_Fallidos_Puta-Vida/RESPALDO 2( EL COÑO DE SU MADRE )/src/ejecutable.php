<?php

class ejecutable 
{
    public function GetPlayers()
    {
        $lista = array();

        $jugador = new persona('Jose', 1000);
        array_push($lista, $jugador);

        $jugador = new persona('Eiker', 1000);
        array_push($lista, $jugador);

        $jugador = new persona('Pedro', 1000);
        array_push($lista, $jugador);

        $jugador = new persona('David', 1000);
        array_push($lista, $jugador);

        $jugador = new persona('Victor', 1000);
        array_push($lista, $jugador);

        return $lista; 
    }
}
