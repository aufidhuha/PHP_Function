<?php

#note : untuk function dengan parameter, harus disesuaikan isinya dengan jumlah parameternya

function sum2(int $value1, int $value2) {
    $total = $value1 + $value2;
    return $total;
}

function sum3(int $value1, int $value2, int $value3) {
    $total = $value1 + $value2 + $value3;
    return $total;
}

$try1 = sum2(100, 100);
var_dump($try1);
echo $try1 . PHP_EOL;
echo sum2(200, 200) . PHP_EOL;

$try2 = sum3(100, 100, 100);
var_dump($try2);
echo $try2 . PHP_EOL;
echo sum3(200, 200, 200) . PHP_EOL;
