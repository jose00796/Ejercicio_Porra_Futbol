<?php

class juego
{
    protected $name;
    protected $saldo;
    protected $azar;
    protected $result = false;
    protected $teamA;
    protected $teamB;

    public function __construct($name, $saldo)
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

    public function SetSaldo($value)
    {
        $this->saldo = $value;
    }

    public function Partido()
    {
        $this->teamA = rand(0,2);
        $this->teamB = rand(0,2);
        echo " //PARTIDO {$this->teamA} -- {$this->teamB} <hr>";
    }
    
    public function Apuesta()
    {
        $this->azar = rand(0,1);
        
            if ($this->azar == 1) {
                echo "<p>{$this->GetName()} Acerto el Resultado";
                return $this->result = true;
            }
            else{
                echo "<p>{$this->GetName()} Fallo el Resultado";
                return $this->result = false;
            }
    }

    public function Bote()
    {
       $this->Apuesta();

            if ($this->result == true) {
                echo "<p>{$this->GetName()} FUNCIONA GUAPO";
            }
            else{
                echo "<p>{$this->GetName()} ESTA MIERDA NO SIRVE";
            }
    }
}
