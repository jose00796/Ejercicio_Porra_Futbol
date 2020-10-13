<?php

class persona
{
    protected $name;
    protected $saldo;

    public function __construct($name = null, $saldo = null)
    {
        $this->name = $name;
        $this->saldo = $saldo; 
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetSaldo()
    {
        return $this->saldo;
    }

    public function __toString()
    {
        echo "<p>Nombre : {$this->GetName()} Saldo : {$this->GetSaldo()}";
    }

    public function SetSaldo($money)
    {
        $this->saldo = $money;
    }
}
