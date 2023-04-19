<?php 
class Person{
    private $name;
    private $age;
    private $mail;

    public function __construct($name , $age , $mail){
        $this->name = $name;
        $this->age = $age;
        $this->mail = $mail;
    }

    public function setname($name){
        $this->name = $name;
    }
    public function getname(){
        return $this->name;
    }
    public function setage($age){
        $this->age = $age;
    }
    public function getage(){
        return $this->age;
    }
    
    public function setmail($mail){
        $this->mail = $mail;
    }
    public function getmail(){
        return $this->mail;
    }


    public function walk(){
        echo "im a human who can walk 2 k everyday";
    }
}