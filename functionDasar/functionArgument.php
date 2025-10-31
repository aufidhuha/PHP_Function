<?php

function sayHello($name){
    echo "Hello $name" . PHP_EOL;
}

function sayHelloPerson($name = "Anonymous"){
    echo "Hello $name" . PHP_EOL;
}

function sayName($first_name, $last_name){
    echo "Nama Depan : $first_name" . PHP_EOL;
    echo "Nama Belakang : $last_name" . PHP_EOL;
}

function sayHelloPersonName($first_name, $last_name = ""){
    echo "Hello $first_name $last_name" . PHP_EOL;
}

function tambah($angka1, $angka2){
    $total = $angka1 + $angka2;
    echo "$angka1 + $angka2 = $total " . PHP_EOL;
}

// sayHello
sayHello("Aufi");
sayHello("Dhuha");

// sayHelloPerson
sayHelloPerson();
sayHelloPerson("Dhuha");

// sayHelloPersonName
sayHelloPerson("Aufi");
sayHelloPerson("Dhuha");
sayHelloPerson("Aufi", "Dhuha");

// sayName
sayName("Aufi", "Dhuha");

// function Penjumlahan
tambah(10, 20);
tambah(5, 5);

tambah("5", 5); // kode akan tetap dijalankan karena string dikonversi ke integer

// tambah("i", 5);  : kode akan error karena tidak dapat mengkonversi karakter ke angka
