<?php

class persona
{
    protected $name;
    protected $money;

    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function Getname()
    {
        return $this->name;
    }

    public function GetMoney()
    {
        return $this->money;
    }

    public function Apostar()
    {

    }

    public function Depositar()
    {
        
    }
}
