<?php
    $sampleArray = array(1,2,3,4,5);
    $sumFunction = function($a,$b){
        return $a+$b;
    }; 

    $newArray = array_reduce($sampleArray, $sumFunction);
    print_r($newArray);
?>