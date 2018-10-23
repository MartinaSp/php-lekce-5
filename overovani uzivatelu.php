<?php

class Uzivatel
{
    private $jmeno;
    private $heslo;
    
    public function __construct ($jmeno, $heslo)
    {
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
    }
    
    public function overeni()
    {
        if ($this->jmeno === $jmeno && $this->heslo === $heslo) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function ziskejJmeno()
    {
        return $this->jmeno;
    }
}


class Prihlasovani extends Uzivatel
{
    private $prihlaseniUzivatele = array();
    
    public function __construct ($prihlaseniUzivatele, $jmeno, $heslo)
    {
        $this->prihlaseniUzivatele[] = [$prihlaseniUzivatele];
        parent::__construct($jmeno);
        parent::__construct($heslo);
    }
    
    public function prihlas($uzivatel, $jmeno, $heslo)
    {
        $uzivatel = new Uzivatel ($jmeno, $heslo);
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
    }
    
    public function zobrazPrihlaseneUzivatele()
    {
        return $this->prihlaseniUzivatele;
    }
}

$uzivatel = new Uzivatel ('jozef', 'jozef1234');
$prihlasovani = new Prihlasovani;

echo 'Seznam přihlášených: ' . zobrazPrihlaseneUzivatele() . '<br>';

