<?php

class GeometrickyUtvar
{
    private $pocetStran;
    
    public function __construct ($pocetStran)
    {
        $this->pocetStran = $pocetStran;
    }
    
    public function ziskejPocetStran()
    {
        return $this->pocetStran;
    }  
}


class Ctverec extends GeometrickyUtvar
{
    private $delkaStrany;
    
    public function __construct($delkaStrany)
      {
        $this->delkaStrany = $delkaStrany;
        parent::__construct(4);
      }
    
    public function ziskejObvod()
        {
            return $this->delkaStrany * $this->ziskejPocetStran();
        }
}  
  
class Trojuhelnik extends GeometrickyUtvar
{
    private $delkaStrany1;
    private $delkaStrany2;
    private $delkaStrany3;
    
    public function __construct($delkaStrany1, $delkaStrany2, $delkaStrany3)
      {
        $this->delkaStrany1 = $delkaStrany1;
        $this->delkaStrany2 = $delkaStrany2;
        $this->delkaStrany3 = $delkaStrany3;
        parent::__construct(3);
      }

    public function ziskejObvod()
        {
            return $this->delkaStrany1 + $this->delkaStrany2 + $this->delkaStrany3;
        }
}

echo '<h3>Ctverec</h3>';
$ctverec = new Ctverec(3);
echo 'Pocet stran: ' . $ctverec->ziskejPocetStran() . '<br>';
echo 'Obvod: ' . $ctverec->ziskejObvod() . '<br><br>';

echo '<h3>Trojuhelnik</h3>';
$trojuhelnik = new Trojuhelnik(2, 4, 5);
echo 'Pocet stran: ' . $trojuhelnik->ziskejPocetStran() . '<br>';
echo 'Obvod: ' . $trojuhelnik->ziskejObvod() . '<br>';
