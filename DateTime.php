<?php

$dateTime = new DateTime();
$dateTime->setDate(2000, 10, 23);
$dateTime->setTime(10, 10, 10, 0);

// ditambah 1 tahun
$dateTime->add(new DateInterval("P1Y"));

// membuat object bulan menambah
$minusOneMonth = new DateInterval("P1M");

// membalikannya menjadi intervert alias mengurang.
$minusOneMonth->invert = true;

//dikurang 1 bulan
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Tokyo"));
var_dump($now);


// format dateTime. kita bisa menggunakan function format(), untuk memparsing dari jam ke waktu
$jamTokyo = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini di Tokyo Jepang $jamTokyo" . PHP_EOL;


// parse dateTune, kemampuan menjadikan string sebagai format jam.
// kita bisa menggunakan static function createFormFormat() dari class DateTIme
$inputTanggal = " ";
$date = DateTime::createFromFormat("Y-m-d H:i:s", $inputTanggal, new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}
