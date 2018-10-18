<?php

class Ctverec
{
    public $delkaStrany;
    
    public function __construct ($delkaStrany)
    {
        $this->delkaStrany = $delkaStrany;
    }

    public function spocitejObsah()
    {
        return $this->delkaStrany * $this->delkaStrany;
    }

}   

$objektCtverec = new Ctverec(6);
echo ('Obsah ctverce o delce strany ' . $objektCtverec->delkaStrany . ' je ' . $objektCtverec->spocitejObsah());