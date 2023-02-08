<?php

// destructor digunakan untuk menutup/menghancurkan sebuah object agar tidak terjadi memory leak
// biasanya digunakan untuk menutup koneksi ke mysql/menutup aksi menulis file

require_once "data/Person.php";

$lyh = new Person("lyh", "rajeg");

echo "Program selesai" . PHP_EOL;

var_dump($lyh);
