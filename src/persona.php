<?php

class persona
{
    protected $name;
    protected $money;
    const SAVE = 1000;
    protected $key = true;

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

    public function SetMoney()
    {
        $this->money = $this->money - static::SAVE;
    }

    public function Deposit(pote $container)
    {
        $this->SetMoney();
        $container->riales = $container->riales + static::SAVE;
    }

    public function Bet()
    {
        
    }
}
