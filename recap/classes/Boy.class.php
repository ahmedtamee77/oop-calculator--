<?php 
class Boy extends Person{

    private $hadmiliatryservices;
    public function __construct($name , $age  ,$mail ,  $hadmiliatryservices){
        parent:: __construct($name , $age , $mail);
        $this->hadmiliatryservices = $hadmiliatryservices;
    }
    public function setmiltryservice($hadmiliatryservices){
        $this->hadmiliatryservices = $hadmiliatryservices;
    }
    public function getmiltryservice(){
        return $this->hadmiliatryservices;
    }

    public function walk(){
      parent::walk(); /// here he took the suber method and echo it 
        echo "<br>";
        echo "as a boy "; /// then he echo the Boy class method and echo it 
        // if we remove parent keyword and use we can manipulate as we wish in walk function in boy class only .
    }
}