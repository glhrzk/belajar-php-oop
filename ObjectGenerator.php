<?php

// ini menggunakan cara manual sangat ribet
function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (getGenap(100) as $values) {
    echo "Genap : $values" . PHP_EOL;
}

// ini menggunakan generator alies yield, lebih simple tapi masih gak konek cara kerjanya buat apa

function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $values) {
    echo "Ganjil : $values" . PHP_EOL;
}
