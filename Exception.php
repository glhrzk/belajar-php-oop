<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "glh";
$loginRequest->password = "";


// catch sifatnya seperti if else, jika exception 1 tidak ketangkap kita bisa menangkapnya di catch lain.
// jika pesan error yang di handle sama maka bisa kita gabungkan menggunakan or atau tanda pipa (|)
// dalam try catch juga bisa menggunakan keyword finally, finaly sifatnya acuh tertangkap atau tidak dia akan dijalankan, biasanya cocok untuk menutup koneksi pada database, agar tidak terjadi memory/koneksi leak
// di dalam class exception pun ada function yng bernama getTrace, function ini bisa menampilkan dengan detail error terjadi dimana, dengan bentuk array

try {
    validateLoginRequest($loginRequest);
    echo "valid" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
    // bisa juga dijadikan string
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Akan tetap di eksekusi tanpa melihat keadaan" . PHP_EOL;
}
