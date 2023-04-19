<?php 
include_once("includes/myautoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//$car = new Car("jeep" , 200); /// default constuctor made my oop 
//$car->setmodel("BMW");
//echo $car->getmodel();
//echo "<br>";
//$car->setspeed(200);
 //echo $car->getspeed();

// $boy = new Boy();
 //$boy->setname("ahmed");
 //echo $boy->getname();
// $girl = new Girl();
 //$girl->setage(20);
 //echo "<br>";
 //echo $girl->getage();
 //echo "<br>";
 //echo $boy->walk();
 //echo "<br>";
 //echo $girl->walk();
 $boy = new Boy("ahmed" , 20 , "ghawd706@icloud.com" , "false");
 echo $boy->getname();
 echo "<br>";
 echo $boy->getage();
 echo "<br>";
 echo $boy->getmail();
 echo "<br>";
  echo $boy->getmiltryservice();
//notes 
//$car is not the object , this is a reference for the object in the memory 
// when you echo the attributes without value you will get the default value 
/// if string ->null , int -> 0 , bool false 

/// constructor 
//// 
?>
    
</body>
</html>