<?php

class juego extends persona
{
    protected $re1;
    protected $re2;
    protected $prueba;
    protected $teamA;
    protected $teamB;
    protected $result = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function Partido()
    {
        $this->teamA = rand(0,2);
        $this->teamB = rand(0,2);
        echo " <hr>//PARTIDO {$this->teamA} -- {$this->teamB}";
    }
    
    public function Apuesta()
    {
        $this->re1 = rand(0,2);
        $this->re2 = rand(0,2);
        echo " //APUESTA {$this->re1} -- {$this->re2} ";
    }

    public function Comprobar()
    {       
        if ($this->teamA == $this->re1 AND $this->teamB == $this->re2) {
                
            return $this->result = true;

        }else{

            return $this->result = false;
        }
    }

    public function Depositar($money)
    {
        echo "{$this->GetSaldo()} ";
    }

    public function Bote()
    {   
        /*$this->Comprobar();

        if ($this->result == true) {
            echo "<p> FUNCIONA GUAPO";
        }else{
            echo "<p> ESTA MIERDA NO SIRVE";
        }*/
    }
}
