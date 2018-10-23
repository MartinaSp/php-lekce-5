<?php

interface TrojrozmernyObrazec
{
    public function ziskejObjem();
    public function ziskejPovrch();
}


class Kvadr implements TrojrozmernyObrazec
{
    private $a;
    private $b;
    private $c;
    
    public function __construct ($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    public function ziskejObjem()
    {
        return $this->a * $this->b * $this->c;
    }
    
    public function ziskejPovrch()
    {
        return ($this->a * $this->b)*2 + ($this->b * $this->c)*2 + ($this->a * $this->c)*2;
    }  
}

class Krychle implements TrojrozmernyObrazec
{
    private $a;
    
    public function __construct ($a)
    {
        $this->a = $a;
    }
    
    public function ziskejObjem()
    {
        return $this->a * $this->a * $this->a;
    }
    
    public function ziskejPovrch()
    {
        return ($this->a * $this->a)*6;
    }  
}

class Koule implements TrojrozmernyObrazec
{
    private $r;
    
    public function __construct ($r)
    {
        $this->r = $r;
    }
    
    public function ziskejObjem()
    {
        return ((4/3) * pi() * $this->r * $this->r * $this->r);
    }
    
    public function ziskejPovrch()
    {
        return (4 * pi() * $this->r * $this->r);
    }  
}

class Jehlan implements TrojrozmernyObrazec
{
    private $a;
    private $v;
 // private $c;
    
    public function __construct ($a, $v)
    {
        $this->a = $a;
        $this->v = $v;
 //     $this->c = $c;
    }
    
    public function ziskejObjem()
    {
        return ($this->a * $this->a * $this->v * (1/3));
    }
    
    public function ziskejPovrch()
    {
        return ($this->a * $this->a + 2*($this->a * (sqrt ($this->v * $this->v + $this->a * $this->a/4))));
    }  
}


function vypisDetail(TrojrozmernyObrazec $utvar)
{
    echo get_class($utvar) . ' ma objem: ' . $utvar->ziskejObjem() . '<br>';
    echo get_class($utvar) . ' ma povrch: ' . $utvar->ziskejPovrch() . '<br>'; 
}


$kvadr = new Kvadr (2,3,7);
vypisDetail ($kvadr);

$krychle = new Krychle(5);
vypisDetail ($krychle);

$koule = new Koule(6);
vypisDetail ($koule);

$jehlan = new Jehlan(3,4);
vypisDetail ($jehlan);



