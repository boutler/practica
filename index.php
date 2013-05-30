<?php

/*
 * Funcio per fer una suma
 */

if (isset($_GET['a']) && isset($_GET['b'])){
 
    echo suma($_GET['a'],$_GET['b']);
    
    function suma($a,$b)  {  
        $c=$a+$b;   
            return $c;
    }   
}   

?>
