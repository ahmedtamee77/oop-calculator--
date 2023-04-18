<?php 
spl_autoload_register('myautoload');

function myautoload($classname){
    $url = $_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
    if(strrpos($url , 'includes')!==false){
        $path="../classes/";
    }
    else {
        $path="classes/";
    }
    $ext =".class.php";
    $fullpath = $path.$classname.$ext; 
    include $fullpath;
    if(!file_exists($fullpath)){
        return false;
    }
}
