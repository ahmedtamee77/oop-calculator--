<?php

spl_autoload_register('myautoload');
function myautoload($classname){
    $path="classes/";
    $ext=".class.php";
    $fullpath= $path.$classname.$ext;
    include $fullpath;

    if(!file_exists($fullpath)){
        return false;
    }
}


