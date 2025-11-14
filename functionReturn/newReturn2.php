<?php

function finalValue(int $value){
    
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 60) {
        return "B";
    } elseif ($value >= 40) {
        return "C";
    } elseif ($value >= 20) {
        return "D";
    } else {
        return "E";        
    }
    
#    echo "" . PHP_EOL; ketika ada kode return diatas maka kode dibawahnya tidak akan dieksekusi
}

$nilai1 = finalValue(90);
var_dump($nilai1);
echo $nilai1 . PHP_EOL;

$nilai2 = finalValue(40);
var_dump($nilai2) . PHP_EOL;
echo $nilai2;