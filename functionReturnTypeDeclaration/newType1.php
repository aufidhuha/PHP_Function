<?php

// return dengan deklarasi tipe data akan membuat data lebih terjaga dan tidak membingungkan
# agar tidak ada kerancuan tipe data

function sum2(int $value1, int $value2): int {
    $total = $value1 + $value2;
    return $total;
}

function finalValue(int $value): string {
    
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
}

$try1 = sum2(100, 100);
var_dump($try1);
echo $try1 . PHP_EOL;
echo sum2(200, 200) . PHP_EOL;

$nilai1 = finalValue(90);
var_dump($nilai1);
echo $nilai1 . PHP_EOL;


//function try1(int $value1, int $value2){
//    $total = $value1 + $value2;
//    return [];
//}
//
//var_dump(try1(20, 20));       
//
//kode akan tetap dieksekusi dengan nilai kosong 
//ini tidak sesuai dengan function dengan hasil yang kita mau


//function try2(int $value1, int $value2): int{
//    $total = $value1 + $value2;
//    return [];
//}
//
//var_dump(try2(20, 20));
//kode tidak akan dieksekusi karena pengembaliannya salah, maka akan error
//dengan funtion deklarasi tipe data, kita bisa mengurangi error atau hasil yang tidak kita mau

