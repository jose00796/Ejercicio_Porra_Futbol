<?php

class ejecutable
{
    public function GetPlayers()
    {
        $lista = array();

        $player = new persona('Jose', 5000);
        array_push($lista, $player);

        $player = new persona('Migdaly', 5000);
        array_push($lista, $player);

        $player = new persona('Franmy', 5000);
        array_push($lista, $player);

        $player = new persona('Ibelise', 5000);
        array_push($lista, $player);

        $player = new persona('Eiker', 5000);
        array_push($lista, $player);

        return $lista;
    }
}
