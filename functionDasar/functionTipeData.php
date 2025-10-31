<?php

// function tipe data int
function sumNumber(int $number1, int $number2) {
    $total = $number1 + $number2;
    echo "$number1 + $number2 = $total" . PHP_EOL;
}

sumNumber(10, 20);
sumNumber(100, 20);

sumNumber("100", 20); // kode berhasil karena berhasil mengkonversi string

sumNumber(true, false); // kode berhasil karena berhasil mengkonversi boolean

// sumNumber(2.5, 50); // tidak disarankan karena float bilangan pecahan sedangkan integer bilangan bulat

// sumNumber("seratus", 20); error karena tidak bisa mengkonversi otomatis string


// function tipe data string
function sayNamaKu(string $first_name, string $last_name) {
    echo "Nama : $first_name $last_name" . PHP_EOL;
}

sayNamaKu("Aufi", "Dhuha");
sayNamaKu("Aufi", 20);


// function parameter argument length / array
function sumAll(...$number){
    $total = 0;
    foreach ($number as $numbers) {
        $total += $numbers;
    }
    echo "Hasil : $total" . PHP_EOL;
}

sumAll(10, 20, 30);
sumAll(10, 20, 30, 40, 50);

$arrayNum = [10, 20, 30, 40, 50];
// sumAll($arrayNum); error karena tipe data array, sedangkan argument length akan merubah array menjadi kumpulan integer
sumAll(...$arrayNum);