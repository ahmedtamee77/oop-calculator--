<?php 
class Car{
    private $model;
    private $speed;


    public function __construct($model , $speed){
        $this->model = $model; 
        $this->speed = $speed; 
    }
    //public function setmodel($model){
      //  $this->model = $model;
    //}

    public function getmodel(){
        return $this->model;
    }
    //public function setspeed($speed){
      //  $this->speed = $speed;
    //}

    public function getspeed(){
        return $this->speed;
    }
}